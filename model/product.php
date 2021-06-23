<?php
class Produit{

    public function __construct(){

    }
    /**
     * ConnexionBDD Classique
     * @return [type] [description]
     */
    private function connexionBDD()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $bddname = 'shoptoncafe2.0';


        try{
            $dbc = new PDO("mysql:host=$servername;dbname=$bddname;charset=utf8", $username, $password);
            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbc;
        }
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            echo "Erreur code : ". $e->getCode();
        }
    }
    /**
     * Requete SELECT ALL en utilisant prepare()
     * @return [type] [description]
     */
    public function listProduct(){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('SELECT * FROM product');
        $req->execute();
        $products = $req->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    /**
     * Requete pour recup un produit en utilisant prepare()
     * Et bindParam()
     * En gros les données variables dans la requetes ici l'id que l'on recherche vont etre ecrire par :nom dans la requete préparé
     * Ensuite on va faire la fonction PHP bindParam() en lui indiquant la schema choisi ici :id et lui donnant la variable qui contiendra la valeur que l'on veut utiliser ici on la passe en parametre $ideaOn execute et fetch all puisque c'est un SELECT
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function detailProduct($id){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('SELECT * FROM product WHERE idProduct = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $product = $req->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }

    /**
     * Requete permettant de modifier un produit en base en utilisant prepare et bindParam
     * Même principe qu'expliquer au dessus mais avec plus de données variables ici :title, :description, :price, :idProduct
     * Donc on prepare la requet en ecrivant les schema type
     * Puis on leur attribu les valeurs avec la fonction bindParam en récupérant les variables en parametres
     * @param  [type] $idProduct   [description]
     * @param  [type] $title       [description]
     * @param  [type] $description [description]
     * @param  [type] $price       [description]
     * @return [type]              [description]
     */
    public function modifyProduct($idProduct, $title, $description, $price){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('UPDATE product SET title = :title, description = :description, price = :price WHERE idProduct = :idProduct');
        $req->bindParam(':title', $title);
        $req->bindParam(':description', $description);
        $req->bindParam(':price', $price);
        $req->bindParam(':idProduct', $idProduct);
        $req->execute();
    }

    /**
     * Requete pour Ajouter un produit en $bdd
     * Exactement même principe qu'au dessus
     * @param [type] $idCategory  [description]
     * @param [type] $title       [description]
     * @param [type] $description [description]
     * @param [type] $price       [description]
     */
    public function addProduct($idCategory, $title, $description, $price){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('INSERT INTO product (idCategory, title, description, price) VALUES (:idCategory, :title, :description, :price)');
        $req->bindParam(':idCategory', $idCategory);
        $req->bindParam(':title', $title);
        $req->bindParam(':description', $description);
        $req->bindParam(':price', $price);
        $req->execute();
    }

    /**
     * Requete pour supprimer un produit en BDD
     * Cette fois un seul bindParam juste pour le WHERE
     * Mais toujours le même fonctionnement
     * @param  [type] $idProduct [description]
     * @return [type]            [description]
     */
    public function deleteProduct($idProduct){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('DELETE FROM product WHERE idProduct = :idProduct');
        $req->bindParam(':idProduct', $idProduct);
        $req->execute();
    }
}
?>
