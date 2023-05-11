<?php
class Favorites 
{
    private $favoritesId;
    private $userId;
    private $recipeId;


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
   
    /****GETTER***********/
    public function getFavoritesId(){

        return $this->favoritesId;
    }

    public function getUserId(){
        return $this->userId;
    }
    public function getrecipesId(){
        return $this->recipeId;
    }

    /**SETTER***/
 
    public function setfavoritesId($favoritesId){  
    {
        $this->favoritesId = $favoritesId;
         return $this;

    }
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
    public function setRecipeId($recipeId){
        $this->recipeId = $recipeId;
        return $this;
    }

}