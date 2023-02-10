<?php

namespace App\Models;

use App\Core\Model;

class Cart extends \App\Core\Model
{
    public int $id;
    public int $quantity;
    public int $id_shoe;
    public string $id_user;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getIdShoe(): int
    {
        return $this->id_shoe;
    }

    /**
     * @param int $id_shoe
     */
    public function setIdShoe(int $id_shoe): void
    {
        $this->id_shoe = $id_shoe;
    }

    /**
     * @return string
     */
    public function getIdUser(): string
    {
        return $this->id_user;
    }

    /**
     * @param string $id_user
     */
    public function setIdUser(string $id_user): void
    {
        $this->id_user = $id_user;
    }


}