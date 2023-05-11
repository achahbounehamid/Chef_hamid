<?php
class Category
{
    private $categoryId;
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

    public function getCategoryId(){

        return $this->categoryId;
    }

    public function getTitle(){
       
        return $this->title;
    } 
    public function getSlug(){
       
        return $this->slug;
    } 


    /**SETTER***/

    public function setCategoryId($categoryId){  
    {
        $this->categoryId = $categoryId;
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