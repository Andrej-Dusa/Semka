<?php

namespace App\Controllers;

use App\Core\AControllerBase;
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
            $post->save();
            return $this->redirect("?c=shoes");
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
            return $this->redirect("?c=shoes");
        }
        return $this->html($post);
    }

    public function index(): Response
    {
        $posts = Shoes::getAll();
        return $this->html($posts);
    }
}