
    <?php
class RecipeModel extends Model {
   public function get(){
    $recipes = [];

    $req = $this->getDb()->query('SELECT * FROM `recipes` ORDER BY `id` DESC LIMIT 10');
    while ($recipe = $req->fetch((PDO::FETCH_ASSOC))){
        $recipes[] = new Recipes($recipe);
    }
    $req->closeCursor();
    return $recipes;
   }
   public function getPost(int $id){
    $req = $this->getDb()->prepare('SELECT * FROM `recipes` WHERE `id` = :id');
    $req->bindParam('id' ,$id, PDO::PARAM_INT);
    $req->execute();

    $recipe = $req->fetch(PDO::FETCH_ASSOC);

    $req->closeCursor();

    return new Recipes($recipe);
   }
}