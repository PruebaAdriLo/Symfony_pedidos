<?php

namespace App\Entity;

use App\Repository\RestaurantesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

//Fecha u otro
use Doctrine\DBAL\Types\Types;

//Validador
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity; //Controlar los duplicados condición,

#[ORM\Entity(repositoryClass: RestaurantesRepository::class)]

//Validador - Controlar los duplicados
#[UniqueEntity(fields: ['Correo'], message: 'Este correo ya está en uso')]

class Restaurantes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
     //Validar campos
    #[Assert\NotBlank(message: 'El correo no puede estar vacío')]
    #[Assert\Length(max: 150, maxMessage: 'El correo no puede tener más de {{ limit }} caracteres')]
    private ?string $Correo = null;

    #[ORM\Column(length: 255)]
     //Validar campos
    #[Assert\NotBlank(message: 'La clave no puede estar vacía')]
    #[Assert\Length(max: 100, maxMessage: 'La clave no puede tener más de {{ limit }} caracteres')]
    private ?string $clave = null;

    #[ORM\Column(length: 50)]
     //Validar campos
    #[Assert\NotBlank(message: 'El país no puede estar vacío')]
    #[Assert\Length(max: 50, maxMessage: 'El país no puede tener más de {{ limit }} caracteres')]
    private ?string $pais = null;

    #[ORM\Column]
     //Validar campos
    #[Assert\NotBlank(message: 'El código postal no puede estar vacío')]
    #[Assert\Positive(message: 'El código postal debe ser un número positivo')]  
    private ?int $cp = null;

    #[ORM\Column(length: 50)]
     //Validar campos
    #[Assert\NotBlank(message: 'La ciudad no puede estar vacía')]
    #[Assert\Length(max: 50, maxMessage: 'La ciudad no puede tener más de {{ limit }} caracteres')]
    private ?string $ciudad = null;

    #[ORM\Column(length: 255)]
     //Validar campos
    #[Assert\NotBlank(message: 'La dirección no puede estar vacía')]
    #[Assert\Length(max: 150, maxMessage: 'La dirección no puede tener más de {{ limit }} caracteres')]
    private ?string $direccion = null;

    #[ORM\Column]
     //Validar campos
    #[Assert\NotBlank(message: 'El rol no puede estar vacío')]
    #[Assert\PositiveOrZero(message: 'El rol debe ser un número positivo o cero')]   
    private ?int $rol = null;

    #[ORM\OneToMany(targetEntity: Pedidos::class, mappedBy: 'restaurante')]
    private Collection $pedidos;

    public function __construct()
    {
        $this->pedidos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCorreo(): ?string
    {
        return $this->Correo;
    }

    public function setCorreo(string $Correo): static
    {
        $this->Correo = $Correo;

        return $this;
    }

    public function getClave(): ?string
    {
        return $this->clave;
    }

    public function setClave(string $clave): static
    {
        $this->clave = $clave;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): static
    {
        $this->pais = $pais;

        return $this;
    }

    public function getCp(): ?int
    {
        return $this->cp;
    }

    public function setCp(int $cp): static
    {
        $this->cp = $cp;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): static
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getRol(): ?int
    {
        return $this->rol;
    }

    public function setRol(int $rol): static
    {
        $this->rol = $rol;

        return $this;
    }

    public function __toString(): string
    {
        return $this->Correo;
    }

    /**
     * @return Collection<int, Pedidos>
     */
    public function getPedidos(): Collection
    {
        return $this->pedidos;
    }

    public function addPedido(Pedidos $pedido): static
    {
        if (!$this->pedidos->contains($pedido)) {
            $this->pedidos->add($pedido);
            $pedido->setRestaurante($this);
        }

        return $this;
    }

    public function removePedido(Pedidos $pedido): static
    {
        if ($this->pedidos->removeElement($pedido)) {
            // set the owning side to null (unless already changed)
            if ($pedido->getRestaurante() === $this) {
                $pedido->setRestaurante(null);
            }
        }

        return $this;
    }

   
}
