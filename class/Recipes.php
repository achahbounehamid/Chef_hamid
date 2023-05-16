<?php
class Recipes
{
    private $recipes_id;
    private $title;
    private $date;
    private $duration;
    private $description;
    private $thumbnail;
    private $number_od_covers;
    private $user_id;


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

    public function getRecipes_id(){

        return $this->recipes_id;
    }

    public function getTitle(){
       
        return $this->title;
    } 

    public function getDate(){
       
        return $this->date;
    } 

    public function getDuration(){

        return $this->duration;
    }

    public function getDescription(){
       
        return $this->description;
    } 

    public function getThumbnail(){
       
        return $this->thumbnail;
    } 

    public function getnumber_od_covers(){
        return $this->number_od_covers;
    }

    public function getUser_id(){
        return $this->user_id;
    }

        /**SETTER***/

       public function setRecipes_id($recipesId){
         $this->recipes_id = $recipesId;
         return $this;
        }
                
        public function setTitle($title){

            $this->title = $title;              
            return $this;
        } 

        public function setDate($date){
             $this->date = $date;
             return $this;
        } 

        public function setDuration($duration){
                $this->duration =$duration;
                return $this;
        }
                
        public function setDescription($description){
                $this->description =$description;    
                return $this;
        } 

        public function setThumbnail($thumbnail){
                $this->thumbnail =$thumbnail;     
                return $this->thumbnail;
         } 

         public function setnumber_od_covers($number_od_covers){
                $this->number_od_covers =$number_od_covers;      
                return $this->number_od_covers;
    }

    public function setUser_id($user_id){
        $this->user_id =$user_id;      
        return $this->user_id;
}
 }