<?php

namespace App\Models;

use App\Core\Model;

class Review extends \App\Core\Model
{
    public int $id;
    public int $rating;
    public string $comment;
    public int $id_user;
    public string $id_shoe;

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
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * @param int $id_user
     */
    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return string
     */
    public function getIdShoe(): string
    {
        return $this->id_shoe;
    }

    /**
     * @param string $id_shoe
     */
    public function setIdShoe(string $id_shoe): void
    {
        $this->id_shoe = $id_shoe;
    }


}