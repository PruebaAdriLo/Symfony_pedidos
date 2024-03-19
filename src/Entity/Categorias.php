<?php

namespace App\Entity;

use App\Repository\CategoriasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

//Validador
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity; //Para indicar que solo una entidad es única no puede existir dos entidades con una misma condición,
                                                                //Controlar los duplicados

#[ORM\Entity(repositoryClass: CategoriasRepository::class)]
//Validador
#[UniqueEntity(fields: ['nombre'], message: 'Este nombre ya está en uso')]
class Categorias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'El nombre no puede estar vacío')]  //No permitir nulo
    #[Assert\Length(max: 50, maxMessage: 'El nombre no puede tener más de {{ limit }} caracteres')] //Limitar el número de caracteres
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'La descripción no puede estar vacía')]  
    #[Assert\Length(max: 120, maxMessage: 'La descripción no puede tener más de {{ limit }} caracteres')]
    private ?string $descripcion = null;

    #[ORM\OneToMany(targetEntity: Productos::class, mappedBy: 'categorias')]
    #[ORM\ManyToOne(inversedBy: 'categoria')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message: 'El producto no puede estar vacío')] 
    private Collection $productos;

    public function __construct()
    {
        $this->productos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return Collection<int, Productos>
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Productos $producto): static
    {
        if (!$this->productos->contains($producto)) {
            $this->productos->add($producto);
            $producto->setCategorias($this);
        }

        return $this;
    }

    public function removeProducto(Productos $producto): static
    {
        if ($this->productos->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getCategorias() === $this) {
                $producto->setCategorias(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->nombre;
    }

}
