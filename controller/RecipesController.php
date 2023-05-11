<?php 
class RecipesController extends Controller{
    
    public function homePage()
    {
        
        $Controller = new RecipesController();
        // création instance du Controller
        $datas = $Controller->getLastTenRecipes();
        // j appelle la methode  getlast
     
        echo self::getTwig()->render('homePage.html.twig',['recipes'=> $datas]);
    }



    public function getOne($id)
    {
        $Controller = new RecipesController();
        // création instance du Controller
        $datas = $Controller->getOneRecipe($id);
        // j appelle la methode  getlast
    
        echo self::getTwig()->render('oneRecipes.html.twig',['recipe'=> $datas]);
    }
}

