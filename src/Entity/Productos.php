<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

//Fecha u otro
use Doctrine\DBAL\Types\Types;

//Validador
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity; //Para indicar que solo una entidad es única no puede existir dos entidades con una misma condición,
                                                                //Controlar los duplicados

#[ORM\Entity(repositoryClass: ProductosRepository::class)]

#[UniqueEntity(fields: ['nombre'], message: 'Este nombre ya está en uso')]

class Productos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'El nombre no puede estar vacío')]  //No permitir nulo
    #[Assert\Length(max: 50, maxMessage: 'El nombre no puede tener más de {{ limit }} caracteres')] //Limitar el número de caracteres
    private ?string $nombre = null;

    // #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
      //Validar SELECT
    #[ORM\ManyToOne(inversedBy: 'producto')]
    #[Assert\NotBlank(message: 'La categoría no puede estar vacía')]
    private ?Categorias $categoria = null;

    #[ORM\Column(length: 255)]
    //Validar campos
    #[Assert\NotBlank(message: 'La descripción no puede estar vacío')]  //No permitir nulo
    #[Assert\Length(max: 150, maxMessage: 'La descripción no puede tener más de {{ limit }} caracteres')] //Limitar el número de caracteres
    private ?string $descripcion = null;

    #[ORM\Column]
    //Validar campos
    #[Assert\NotBlank(message: 'El peso no puede estar vacío')]  //No permitir nulo
    #[Assert\Positive(message: 'El peso debe ser un número positivo')]  //Positive -> Números solo positivos
    private ?int $peso = null;

    #[ORM\Column]
    //Validar campos
    #[Assert\NotBlank(message: 'El stock no puede estar vacío')]  //No permitir nulo
    #[Assert\Positive(message: 'El stock debe ser un número positivo')]  //Positive -> Números solo positivos
    private ?int $stock = null;

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

    public function getCategoria(): ?Categorias
    {
        return $this->categoria;
    }

    public function setCategoria(?Categorias $categoria): static
    {
        $this->categoria = $categoria;

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

    public function getPeso(): ?int
    {
        return $this->peso;
    }

    public function setPeso(int $peso): static
    {
        $this->peso = $peso;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function __toString(): string
{
    return $this->nombre;
}
}
