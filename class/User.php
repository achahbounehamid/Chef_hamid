<?php
class User
{
    private $user_id;
    private $pseudo;
    private $email;
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

public function getUser_id()
    { 
        return $this->user_id;
    }


public function getPseudo()
    {

        return $this->pseudo;
    }

 public function getEmail()
    {
        
        return $this->email;
    }

public function getPassword(){
        
        return $this->password;
    }

            /*********setter***** */

 public function setUser_id($user_id) 
    {
     $this->user_id = $user_id;
            
    }

public function setPseudo($pseudo) 
    {
      $this->pseudo = $pseudo;
                
    }  

public function setEmail($email) 
    {
          $this->email = $email;
                    
    } 
    
public function setPassword($password)
    {
        $this->password = $password;
    }

}









