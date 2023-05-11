<?php
class Recipes
{
    private $recipesId;
    private $title;
    private $date;
    private $duration;
    private $description;
    private $thumdnail;
    private $numberOfCovers;


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

    public function getRecipesId(){

        return $this->recipesId;
    }

    public function getTitle(){
       
        return $this->title;
    } 
    public function getdate(){
       
        return $this->date;
    } 
    public function getduration(){

        return $this->duration;
    }

    public function getdescription(){
       
        return $this->description;
    } 
    public function getthumdnail(){
       
        return $this->thumdnail;
    } 
    public function getNumberOfCovers(){
        return $this->numberOfCovers;
    }

        /**SETTER***/
       public function setRecipesId($recipesId){
         $this->recipesId = $recipesId;
         return $this;
        }
                
        public function setTitle($title){

            $this->title = $title;              
            return $this;
        } 
        public function settdate($date){
             $this->date = $date;
             return $this;
        } 
        public function setduration($duration){
                $this->duration =$duration;
                return $this;
        }
                
        public function setdescription($description){
                $this->description =$description;    
                return $this;
        } 
        public function setthumdnail($thumdnail){
                $this->thumdnail =$thumdnail;     
                return $this->thumdnail;
         } 
         public function setNumberOfCovers($NumberOfCovers){
                $this->numberOfCovers =$NumberOfCovers;      
                return $this->numberOfCovers;
    }
 }