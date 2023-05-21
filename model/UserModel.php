<?php
class UserModel extends Model {
  public function getUsers($pseudo) {

    $req = $this->getDb()->prepare("SELECT `pseudo`, `password` FROM `users` WHERE `pseudo` = :`pseudo`");
    $req->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
    $userData = $req->fetch(PDO::FETCH_ASSOC);
   
    $req->closeCursor();

    if ($userData) {
        return new User([
            'username' => $userData['username']
        ]);
    }

    return null;
}
  }


