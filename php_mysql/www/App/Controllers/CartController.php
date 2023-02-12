<?php
namespace App\Controllers;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Cart;
use App\Models\User;
use App\Models\Shoes;
use App\Core\Responses\JsonResponse;

class CartController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($_GET['id_shoe'])) {
            $post = new Cart();
            $id_shoe = $this->request()->getValue("id_shoe");
            $id_user = $this->request()->getValue("id_user");
            $post->setIdShoe($id_shoe);
            $post->setIdUser($id_user);

            $post->save();

        }
        return $this->html();
    }

    public function delete(): Response{
        $id = $this->request()->getValue("id");
        $post = Cart::getOne($id);
        if ($post != null) {
            $post->delete();
        }
        return $this->redirect("?c=cart&a=load");
    }

    public function load(): JsonResponse
    {
        $id_user = $_SESSION['user']->getId();
        $posts = Cart::getAll("id_user = ?", [$id_user]);
        $data = array();
        foreach ($posts as $item) {
            array_push($data, Shoes::getOne($item->getIdShoe()));
        }
        return $this->json($data);
    }

    public function cart(): Response
    {
        return $this->html();
    }

    public function index(): Response
    {
        $posts = User::getAll();
        return $this->html($posts);
    }
}