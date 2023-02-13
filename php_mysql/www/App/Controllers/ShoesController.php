<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\JsonResponse;
use App\Core\Responses\Response;
use App\Models\Shoes;

class ShoesController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["title"])) {
            $post = new Shoes();
            $post->setTitle($data["title"]);
            $post->setImageRef($data["image_ref"]);
            $post->setPrice($data["price"]);
            $post->setDescription($data["description"]);
            $post->setSale($data["sale"]);

            $title = $data["title"];
            $image_ref = $data["image_ref"];
            $price = $data["price"];
            $description = $data["description"];
            $sale = $data['sale'];

            if (empty($title)) {
                $titleErr = "Title can't be empty!";
                echo "<br><div class='center text-danger'>$titleErr</div>";
            } else if (strlen($title) > 100) {
                $titleErr = "Title can't be longer then 100 characters!";
                echo "<br><div class='center text-danger'>$titleErr</div>";
            } else if (empty($image_ref)) {
                $image_refErr = "Image reference can't be empty!";
                echo "<br><div class='center text-danger'>$image_refErr</div>";
            } else if (strlen($image_ref) > 300) {
                $image_refErr = "Image reference can't be longer then 300 characters!";
                echo "<br><div class='center text-danger'>$image_refErr</div>";
            } else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$image_ref)) {
                $image_refErr = "Image reference is not valid!";
                echo "<br><div class='center text-danger'>$image_refErr</div>";
            } else if (is_nan($price)) {
                $priceErr = "Price must be a number!";
                echo "<br><div class='center text-danger'>$priceErr</div>";
            } else if ($price < 0) {
                $priceErr = "Price can't be lower then 0!";
                echo "<br><div class='center text-danger'>$priceErr</div>";
            } else if (empty($description)) {
                $descriptionErr = "Description can't be empty!";
                echo "<br><div class='center text-danger'>$descriptionErr</div>";
            }else if (is_nan($sale)) {
                $priceErr = "Sale must be a number!";
                echo "<br><div class='center text-danger'>$priceErr</div>";
            } else if ($sale < 0 || $sale > 100) {
                $priceErr = "Sale must be between 0-100!";
                echo "<br><div class='center text-danger'>$priceErr</div>";
            } else {
                $post->save();
                return $this->redirect("?c=shoes");
            }
        }
        return $this->html();
    }

    public function delete(): Response{
        $id = $this->request()->getValue("id");
        $post = Shoes::getOne($id);
        if ($post != null) {
            $post->delete();
        }
        return $this->redirect("?c=shoes");
    }

    public function edit(): Response{
        $id = $this->request()->getValue("id");
        $post = Shoes::getOne($id);
        if ($post != null) {
            return $this->html($post, 'edit');
        }
        return $this->html($post);
    }

    public function index(): Response
    {
        $posts = Shoes::getAll();
        return $this->html($posts);
    }

    public function all(): JsonResponse
    {
        $substr = $this->request()->getValue("substr");
        $posts = Shoes::getAll();
        $data = array();
        foreach ($posts as $items) {
            if (str_contains(strtolower($items->getTitle()), strtolower($substr)) ){
                array_push($data, $items);
            }
        }
        return $this->json($data);
    }

    public function detail(): Response
    {
        $shoeId = $this->request()->getValue("shoeId");
        $posts = Shoes::getOne($shoeId);
        return $this->html($posts);
    }

    public function save(): Response
    {
        $id = $this->request()->getValue("id");
        $data = $this->request()->getPost();
        $post = Shoes::getOne($id);
        if (isset($data["title"])) {
            $post->setTitle($data["title"]);
            $post->setImageRef($data["image_ref"]);
            $post->setPrice($data["price"]);
            $post->setDescription($data["description"]);

            $title = $data["title"];
            $image_ref = $data["image_ref"];
            $price = $data["price"];
            $description = $data["description"];

            if (empty($title)) {
                $titleErr = "Title can't be empty!";
                echo "<br><div class='center text-danger'>$titleErr</div>";
            } else if (strlen($title) > 100) {
                $titleErr = "Title can't be longer then 100 characters!";
                echo "<br><div class='center text-danger'>$titleErr</div>";
            } else if (empty($image_ref)) {
                $image_refErr = "Image reference can't be empty!";
                echo "<br><div class='center text-danger'>$image_refErr</div>";
            } else if (strlen($image_ref) > 300) {
                $image_refErr = "Image reference can't be longer then 300 characters!";
                echo "<br><div class='center text-danger'>$image_refErr</div>";
            } else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$image_ref)) {
                $image_refErr = "Image reference is not valid!";
                echo "<br><div class='center text-danger'>$image_refErr</div>";
            } else if (is_nan($price)) {
                $priceErr = "Price must be a number!";
                echo "<br><div class='center text-danger'>$priceErr</div>";
            } else if ($price < 0) {
                $priceErr = "Price can't be lower then 0!";
                echo "<br><div class='center text-danger'>$priceErr</div>";
            } else if (empty($description)) {
                $descriptionErr = "Description can't be empty!";
                echo "<br><div class='center text-danger'>$descriptionErr</div>";
            } else {
                $post->save();
                return $this->redirect("?c=shoes");
            }
        }
        return $this->html($post, 'edit');
    }
}