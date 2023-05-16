<?php
class Category
{
    private $category_id;
    private $title;
    private $slug;


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

    public function getcategory_id(){

        return $this->category_id;
    }

    public function getTitle(){
       
        return $this->title;
    } 
    public function getSlug(){
       
        return $this->slug;
    } 


    /**SETTER***/

    public function setcategory_id($category_id){  
    {
        $this->category_id = $category_id;
        return $this;

    }
    }
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;

    }
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;

    }

}