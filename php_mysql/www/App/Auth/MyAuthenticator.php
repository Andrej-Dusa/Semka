<?php

namespace App\Auth;

use App\Models\User;
use App\Core\IAuthenticator;

/**
 * Class MyAuthenticator
 * Basic implementation of user authentication
 * @package App\Auth
 */
class MyAuthenticator implements IAuthenticator
{
    /**
     * DummyAuthenticator constructor
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * Verify, if the user is in DB and has his password is correct
     * @param $email
     * @param $password
     * @return bool
     * @throws \Exception
     */
    function login($email, $password): bool
    {
        $currentUser = User::getAll("email = ?", [$email]);
        if (count($currentUser) == 1) {
            $currentUser = $currentUser[0];
            if (password_verify($password, $currentUser->getPassword())) {
                $_SESSION['user'] = $currentUser;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

    /**
     * Logout the user
     */
    function logout() : void
    {
        if (isset($_SESSION["user"])) {
            unset($_SESSION["user"]);
            session_destroy();
        }
    }

    /**
     * Get the name of the logged-in user
     * @return string
     */
    function getLoggedUserName(): string
    {
        return $_SESSION['user']->getName() ?? throw new \Exception("User not logged in");
    }

    /**
     * Get the context of the logged-in user
     * @return string
     */
    function getLoggedUserContext(): mixed
    {
        return null;
    }

    /**
     * Return if the user is authenticated or not
     * @return bool
     */
    function isLogged(): bool
    {
        return isset($_SESSION['user']) && $_SESSION['user'] != null;
    }

    /**
     * Return the id of the logged-in user
     * @return mixed
     */
    function getLoggedUserId(): mixed
    {
        return $_SESSION['user'];
    }
}