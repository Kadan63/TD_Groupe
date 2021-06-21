<?php
class Produit{

    public function __construct(){

    }

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

    public function listProduct(){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('SELECT * FROM product');
        $req->execute();
        $products = $req->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    public function detailProduct($id){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('SELECT * FROM product WHERE idProduct = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $product = $req->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }

    public function modifyProduct($idProduct, $title, $description, $price){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('UPDATE product SET title = :title, description = :description, price = :price WHERE idProduct = :idProduct');
        $req->bindParam(':title', $title);
        $req->bindParam(':description', $description);
        $req->bindParam(':price', $price);
        $req->bindParam(':idProduct', $idProduct);
        $req->execute();
    }

    public function addProduct($idCategory, $title, $description, $price){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('INSERT INTO product (idCategory, title, description, price) VALUES (:idCategory, :title, :description, :price)');
        $req->bindParam(':idCategory', $idCategory);
        $req->bindParam(':title', $title);
        $req->bindParam(':description', $description);
        $req->bindParam(':price', $price);
        $req->execute();
    }

    public function deleteProduct($idProduct){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('DELETE FROM product WHERE idProduct = :idProduct');
        $req->bindParam(':idProduct', $idProduct);
        $req->execute();
    }
}
?>
