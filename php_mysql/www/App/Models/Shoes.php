<?php

namespace App\Models;

use App\Core\Model;

class shoes extends \App\Core\Model
{
    public int $id;
    public string $title;
    public double $price;
    public string $image_ref;
    public string $description;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getImageRef(): string
    {
        return $this->image_ref;
    }

    /**
     * @param string $image_ref
     */
    public function setImageRef(string $image_ref): void
    {
        $this->image_ref = $image_ref;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}