<?php

class ConnexionController extends Controller

{
    public function userConnexion()
    {
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $pseudo = $_POST['pseudo'];
        //     $password = $_POST['password'];

        //     $model = new UserModel();
        //     $users = $model->getUsers($pseudo);

        //     if ($users && password_verify($password, $users->getPassword())) {
        //         // Start user session
        //         session_start();
        //         $_SESSION['pseudo'] = $pseudo;
        //         $_SESSION['loggedIn'] = true;

        //         global $router;
        //         header('Location:' . $router->generate('connexion'));
        //         exit();
        //     } else {
        //         global $router;

        //         $link = $router->generate('connexion');
        //         echo self::getTwig()->render('user.html.twig', ['link' => $link]);
        //     }
        // }
    }
}
