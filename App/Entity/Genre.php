<?php

namespace App\Entity;


class Genre extends Entity {
    protected ?int $id = null;
    protected ?string $name = "";

    /**
     * Get & Set the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get & Set the value of name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
