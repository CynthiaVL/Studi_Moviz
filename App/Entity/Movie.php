<?php

namespace App\Entity;

use DateTime;

class Movie extends Entity {
    protected ?int $id = null;
    protected ?string $title = '';
    protected ?string $synopsis = '';
    protected DateTime $release_date;
    protected DateTime $duration;
    protected ?string $image_name = '';

    public function __construct()
    {
        // Initialiser les propriétés DateTime avec des objets DateTime valides
        $this->release_date = new DateTime();
        $this->duration = new DateTime();
    }

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
     * Get & Set the value of title
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get & Set the value of synopsis
     */
    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(?string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get & Set the value of release_date
     */
    public function getReleaseDate() : DateTime
    {
        return $this->release_date;
    }

    public function setReleaseDate(DateTime $release_date) :self
    {
        $this->release_date = $release_date;

        return $this;
    }

    /**
     * Get & Set the value of duration
     */
    public function getDuration() : DateTime
    {
        return $this->duration;
    }

    public function setDuration(DateTime $duration) :self
    {
        $this->duration = $duration;

        return $this;
    }
    

    /**
     * Get & Set the value of image_name
     */
    public function getImageName(): ?string
    {
        return $this->image_name;
    }

    public function setImageName(?string $image_name): self
    {
        $this->image_name = $image_name;

        return $this;
    }

    public function getImagePath(): string
    {
        if($this->getImageName()){
            return MOVIES_IMAGES_FOLDER.$this->getImageName();
        } else {
            return ASSETS_IMAGES_FOLDER."default-movie.png";
        }
    }
}
