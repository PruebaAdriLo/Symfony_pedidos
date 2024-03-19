<?php

namespace App\Entity;

use App\Repository\PedidosProductosRepository;
use Doctrine\ORM\Mapping as ORM;

//Fecha u otro
use Doctrine\DBAL\Types\Types;

//Validador
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PedidosProductosRepository::class)]

class PedidosProductos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
      //Validar SELECT
    // #[ORM\ManyToOne(inversedBy: 'Productos')]
    #[Assert\NotBlank(message: 'El producto no puede estar vacío')]
    private ?Productos $productos = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
      //Validar SELECT
    // #[ORM\ManyToOne(inversedBy: 'Pedidos')]
    #[Assert\NotBlank(message: 'El pedido no puede estar vacío')]
    private ?Pedidos $Pedido = null;

    #[ORM\Column]
    //Validar campos
    #[Assert\NotBlank(message: 'Las unidades no puede estar vacío')]
    #[Assert\Positive(message: 'Las unidades debe ser un número positivo')]    
    private ?int $unidades = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductos(): ?Productos
    {
        return $this->productos;
    }

    public function setProductos(?Productos $productos): static
    {
        $this->productos = $productos;

        return $this;
    }

    public function getPedido(): ?Pedidos
    {
        return $this->Pedido;
    }

    public function setPedido(?Pedidos $Pedido): static
    {
        $this->Pedido = $Pedido;

        return $this;
    }

    public function getUnidades(): ?int
    {
        return $this->unidades;
    }

    public function setUnidades(int $unidades): static
    {
        $this->unidades = $unidades;

        return $this;
    }
}
