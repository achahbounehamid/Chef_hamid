<?php
class RecipesController extends Controller
{

    public function homePage()
    {
        global $router;
        $Controller = new RecipeModel();
        // création instance du Controller
        $datas = $Controller->getLastTenRecipes();
        // j appelle la methode  getlast

        $link = $router->generate('baseHome');
    
        echo self::getTwig()->render('homepage.html.twig',['recipes' => $datas, 'link' => $link]);
    }



    public function getOne($id)
    {
        $Controller = new RecipeModel();
        // création instance du Controller
        $datas = $Controller->getOneRecipe($id);
        // j appelle la methode  getlast

        echo self::getTwig()->render('recipe.html.twig', ['recipe' => $datas]);
    }
}
