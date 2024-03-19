<?php

namespace App\Entity;

use App\Repository\PedidosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

//Validador
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PedidosRepository::class)]
class Pedidos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    //Validar campos
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: 'El campo no puede estar vacío')]  
    #[Assert\Type(type: 'DateTimeInterface', message: 'La fecha de estreno debe ser una fecha válida')]  
    private ?\DateTimeInterface $fecha = null;

    #[ORM\Column(length: 50)]
    //Validar campos
    #[Assert\NotBlank(message: 'El campo no puede estar vacío')]  
    private ?string $enviado = null;

    #[ORM\ManyToOne(inversedBy: 'pedidos')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message: 'El restaurante no puede estar vacío')]
    private ?Restaurantes $restaurante = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getEnviado(): ?string
    {
        return $this->enviado;
    }

    public function setEnviado(string $enviado): static
    {
        $this->enviado = $enviado;

        return $this;
    }

    public function getRestaurante(): ?Restaurantes
    {
        return $this->restaurante;
    }

    public function setRestaurante(?Restaurantes $restaurante): static
    {
        $this->restaurante = $restaurante;

        return $this;
    }

    public function __toString()
    {
        return $this->id; // o el campo que desees mostrar
    }
}
