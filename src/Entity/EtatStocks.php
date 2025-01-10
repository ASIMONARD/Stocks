<?php

namespace App\Entity;

use App\Repository\EtatStocksRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtatStocksRepository::class)]
class EtatStocks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 500)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantityEntered = null;

    #[ORM\Column(nullable: true)]
    private ?float $upEntered = null;

    #[ORM\Column(nullable: true)]
    private ?float $amountEntered = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantityOutput = null;

    #[ORM\Column(nullable: true)]
    private ?float $upOutput = null;

    #[ORM\Column(nullable: true)]
    private ?float $amountOutput = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantityStocks = null;

    #[ORM\Column(nullable: true)]
    private ?float $upStocks = null;

    #[ORM\Column(nullable: true)]
    private ?float $amountStocks = null;

    #[ORM\Column]
    private ?bool $methodPeps = null;

    #[ORM\Column]
    private ?bool $methodCump = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getdescription(): ?string
    {
        return $this->description;
    }

    public function setdescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantityEntered(): ?int
    {
        return $this->quantityEntered;
    }

    public function setQuantityEntered(int $quantityEntered): static
    {
        $this->quantityEntered = $quantityEntered;

        return $this;
    }

    public function getUpEntered(): ?float
    {
        return $this->upEntered;
    }

    public function setUpEntered(float $upEntered): static
    {
        $this->upEntered = $upEntered;

        return $this;
    }

    public function getAmountEntered(): ?float
    {
        return $this->amountEntered;
    }

    public function setAmountEntered(): static
    {
        $this->amountEntered = $this->quantityEntered * $this->upEntered;
        return $this;
    }

    public function getQuantityOutput(): ?int
    {
        return $this->quantityOutput;
    }

    public function setQuantityOutput(int $quantityOutput): static
    {
        $this->quantityOutput = $quantityOutput;

        return $this;
    }

    public function getUpOutput(): ?float
    {
        return $this->upOutput;
    }

    public function setUpOutput(float $upOutput): static
    {
        $this->upOutput = $upOutput;

        return $this;
    }

    public function getAmountOutput(): ?float
    {
        return $this->amountOutput;
    }

    public function setAmountOutput(): static
    {
        $this->amountOutput = $this->quantityOutput * $this->upOutput;

        return $this;
    }

    public function getQuantityStocks(): ?int
    {
        return $this->quantityStocks;
    }

    public function setQuantityStocks(int $quantityStocks): static
    {
        $this->quantityStocks = $quantityStocks;

        return $this;
    }

    public function getUpStocks(): ?float
    {
        return $this->upStocks;
    }

    public function setUpStocks(float $upStocks): static
    {
        $this->upStocks = $upStocks;

        return $this;
    }

    public function getAmountStocks(): ?float
    {
        return $this->amountStocks;
    }

    public function setAmountStocks(): static
    {
        $this->amountStocks = $this->quantityStocks * $this->upStocks;

        return $this;
    }

    public function isMethodPepps(): ?bool
    {
        return $this->methodPeps;
    }

    public function setMethodPepps(bool $methodPeps): static
    {
        $this->methodPeps = $methodPeps;

        return $this;
    }

    public function isMethodCump(): ?bool
    {
        return $this->methodCump;
    }

    public function setMethodCump(bool $methodCump): static
    {
        $this->methodCump = $methodCump;

        return $this;
    }
}
