<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Review;

class ReviewController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["rating"])) {
            $post = new Review();

            $id_shoe = $this->request()->getValue("shoeId");
            $id_user = $this->request()->getValue("userId");
            $rating = $data["rating"];
            $comment = $data["comment"];

            if (empty($rating)) {
                $ratingErr = "Rating can't be empty!";
                echo "<br><div class='center text-danger'>$ratingErr</div>";
            } else if (is_nan($rating)) {
                $ratingErr = "Rating must be a number!";
                echo "<br><div class='center text-danger'>$ratingErr</div>";
            } else if (-1 > $rating && $rating > 11) {
                $ratingErr = "Rating must be a number between 0-10!";
                echo "<br><div class='center text-danger'>$ratingErr</div>";
            } else {
                $post->setRating($data["rating"]);
                $post->setComment($data["comment"]);
                $post->setIdShoe($id_shoe);
                $post->setIdUser($id_user);
                $post->save();
                return $this->redirect("?c=shoes&a=detail&shoeId=" . $id_shoe);
            }
        }
        return $this->redirect("?c=shoes&a=detail&shoeId=" . $id_shoe);
    }

    public function delete(): Response{
        $id = $this->request()->getValue("id");
        $post = Review::getOne($id);
        if ($post != null) {
            $post->delete();
        }
        return $this->redirect("?c=shoes");
    }

    public function edit(): Response{
        $id = $this->request()->getValue("id");
        $post = Review::getOne($id);
        if ($post != null) {
            return $this->html($post, 'edit');
        }
        return $this->html($post);
    }

    public function index(): Response
    {
        $posts = Review::getAll();
        return $this->html($posts);
    }

}