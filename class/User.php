<?php
class User
{
    private $userId;
    private $pseudo;
    private $eMail;
    private $password;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    private function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

              /*****getter******/

public function getUserId()
    { 
        return $this->userId;
    }


public function getPseudo()
    {

        return $this->pseudo;
    }

 public function getEmail()
    {
        
        return $this->eMail;
    }

public function getPassword(){
        
        return $this->password;
    }

            /*********setter***** */

 public function setUserId($userId) 
    {
     $this->userId = $userId;
     return $this;
            
    }

public function setPseudoId($pseudo) 
    {
      $this->pseudo = $pseudo;
        return $this;
                
    }  

public function setEmail($eMail) 
    {
          $this->pseudo = $eMail;
            return $this;
                    
    } 
    
public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}









