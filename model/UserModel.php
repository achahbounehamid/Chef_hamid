<?php
class UserModel extends Model
{
  public function getUser($pseudo)
  {

    $req = $this->getDb()->prepare("SELECT `pseudo`, `password` FROM `user` WHERE `pseudo` = :pseudo");
    $req->bindParam("pseudo", $pseudo, PDO::PARAM_STR);
    $req->execute();

    // $req->closeCursor();

    return $req->rowCount() === 1 ? new User($req->fetch(PDO::FETCH_ASSOC)) : false;
  }
  
  public function pageInscription(User $newUser)
  {
    $pseudo = $newUser->getPseudo();
    $password = $newUser->getPassword();
    $email = $newUser->getEmail();

    $req = $this->getDb()->prepare('INSERT INTO `user` ( `pseudo`, `password`, `email`) VALUES (:pseudo, :password, :email)');
    $req->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
    $req->bindValue(":password", $password, PDO::PARAM_STR);
    $req->bindValue(":email", $email, PDO::PARAM_STR);

    $req->execute();
  }
}
