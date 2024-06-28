<?php

class Bateau extends Vehicule {
    protected int $nb_cabine;

    /**
     * Get the value of nb_roue
     */
    public function getNbCabine(): int
    {
        return $this->nb_cabine;
    }

    /**
     * Set the value of nb_roue
     */
    public function setNbCabine(int $nb_cabine): self
    {
        $this->nb_cabine = $nb_cabine;

        return $this;
    }
}