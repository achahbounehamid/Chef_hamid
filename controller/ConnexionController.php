<?php

class ConnexionController extends Controller

{
    public function userConnexion()
    {
        global $router;

        $link = $router->generate('login');
        $link3 = $router->generate('userInscription');
        echo self::getTwig()->render('user.html.twig', ['link' => $link, 'link3' => $link3]);
    }
    public function loginConnexion()
    {
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];

        $model = new UserModel();

        $datas = $model->getUser($pseudo);
        // var_dump(password_hash('karim09', PASSWORD_DEFAULT));
        if ($datas && password_verify($password, $datas->getPassword())) {
            $_SESSION['id'] = $datas->getUser_id();
            // Connexion réussie, rediriger l'utilisateur vers une page appropriée
            global $router;
            $link1 = $router->generate('login'); //j'ai changer userConnect
            echo self::getTwig()->render('dashboard.html.twig', ['link1' => $link1]);
            // Redirection vers la page de tableau de bord
            exit();
            // Terminer l'exécution du script après la redirection
        } else {
            echo 'Identifiant ou mot de passe incorrect.';
        }
    }
    public function pageInscription()
    {
        if (!$_POST) {
            echo self::getTwig()->render('inscription.html.twig', []);
        } else {

            $pseudo = $_POST['pseudo'];
            $rawPass = $_POST['password'];
            $password = password_hash($rawPass, PASSWORD_DEFAULT);
            $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

            $newUser = new User([
                'pseudo' => $pseudo,
                'password' => $password,
                'email' => $email
            ]);


            $model = new UserModel();
            $result = $model->pageInscription($newUser);

            global $router;
            $link3 = $router->generate('userInscription');
            echo self::getTwig()->render('inscription.html.twig', ['link3' => $link3]);
        }
    }
    public function logout()
    {
        session_destroy();
        header('Location: ./');
        exit();
    }
}
