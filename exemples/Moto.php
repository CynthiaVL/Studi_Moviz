<?php

class Moto extends Vehicule {
    protected int $nb_roue;

    /**
     * Get the value of nb_roue
     */
    public function getNbRoue(): int
    {
        return $this->nb_roue;
    }

    /**
     * Set the value of nb_roue
     */
    public function setNbRoue(int $nb_roue): self
    {
        $this->nb_roue = $nb_roue;

        return $this;
    }
}