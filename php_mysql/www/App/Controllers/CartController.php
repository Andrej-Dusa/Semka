<?php
namespace App\Controllers;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Cart;
use App\Models\User;
use App\Models\Shoes;

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
        $post = User::getOne($id);
        if ($post != null) {
            $post->delete();
        }
        return $this->redirect("?c=auth&a=logout");
    }

    public function edit(): Response{
        $id = $this->request()->getValue("id");
        $post = User::getOne($id);
        if ($post != null) {
            return $this->html($post, 'edit');
        }
        return $this->html($post);
    }

    public function index(): Response
    {
        $posts = User::getAll();
        return $this->html($posts);
    }

    public function save(): Response
    {
        $id = $this->request()->getValue("id");
        $data = $this->request()->getPost();
        $post = User::getOne($id);
        if (isset($data["name"])) {
            $post->setName($data["name"]);
            $post->setSurname($data["surname"]);
            $post->setEmail($data["email"]);
            $post->setAdmin(0);

            $name = $data["name"];
            $surname = $data["surname"];
            $password1 = $data["password1"];
            $password2 = $data["password2"];
            $email = $data["email"];

            if (empty($name)) {
                $nameErr = "Name can't be empty!";
                echo "<br><div class='center text-danger'>$nameErr</div>";
            } else if (strlen($name) > 100) {
                $nameErr = "Name can't be longer then 100 characters!";
                echo "<br><div class='center text-danger'>$nameErr</div>";
            } else if (empty($surname)) {
                $surnameErr = "Surename can't be empty!";
                echo "<br><div class='center text-danger'>$surnameErr</div>";
            } else if (strlen($surname) > 100) {
                $surnameErr = "Surname can't be longer then 100 characters!";
                echo "<br><div class='center text-danger'>$surnameErr</div>";
            } else if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email)) {
                $emailErr = "Email is not valid!";
                echo "<br><div class='center text-danger'>$emailErr</div>";
            }else if (empty($email)) {
                $emailErr = "Email can't be empty!";
                echo "<br><div class='center text-danger'>$emailErr</div>";
            }else if ($password1 != $password2) {
                $passwrodErr = "Passwords must be matching!";
                echo "<br><div class='center text-danger'>$passwrodErr</div>";
            } else if (strlen($password1) < 0) {
                $passwrodErr = "Password must be longer then 0!";
                echo "<br><div class='center text-danger'>$passwrodErr</div>";
            } else {
                $isIn = false;
                $allUsers = User::getAll();
                foreach ($allUsers as $customer) {
                    if ($customer->getEmail() == $data["email"] && $customer->getId() != $_SESSION['user']->getId()) {
                        $emailErr = "Email is already being used!";
                        echo "<br><div class='center text-danger'>$emailErr</div>";
                        $isIn = true;
                    }
                }
                if ($isIn) {
                    return $this->html($post, 'edit');
                } else {
                    $password1 = password_hash($data["password1"], PASSWORD_BCRYPT);
                    $post->setPassword($password1);
                    $post->save();
                    return $this->redirect("?c=auth&a=login");
                }
            }
        }
        return $this->html($post, 'edit');
    }
}