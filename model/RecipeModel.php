
    <?php
class RecipeModel extends Model {
   public function getLastTenRecipes(){
    $recipes = [];

    $req = $this->getDb()->query('SELECT * FROM `recipes` ORDER BY `recipes_id` DESC LIMIT 10');
    while ($recipe = $req->fetch((PDO::FETCH_ASSOC))){
        $recipes[] = new Recipes($recipe);
    }
    $req->closeCursor();
    return $recipes;
   }
   public function getOneRecipe(int $recipes_id){
    $req = $this->getDb()->prepare('SELECT * FROM `recipes` WHERE `recipes_id` = :id');
    $req->bindParam(':id' ,$recipes_id, PDO::PARAM_INT);
    $req->execute();

    $recipe = new Recipes($req->fetch(PDO::FETCH_ASSOC));
    

    $req->closeCursor();

    return $recipe;
   }
}