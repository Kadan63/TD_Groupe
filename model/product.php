<?php
class Produit{

    public function __construct(){

    }

    private function requeteBDD($sql)
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $bddname = 'shoptoncafe2.0';


        try{
            $dbc = new PDO("mysql:host=$servername;dbname=$bddname;charset=utf8", $username, $password);
            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (preg_match('/^SELECT/', $sql)) {
                $result = $dbc->query($sql);
                $products=$result->fetchAll(PDO::FETCH_OBJ);
                $result->closeCursor();
                return $products;
            }else {
                $dbc->exec($sql);
            }
        }
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            echo "Erreur code : ". $e->getCode();
        }
    }

    public function listProduct(){
        return $this->requeteBDD('SELECT * FROM product');
    }

    public function detailProduct($id){
        return $this->requeteBDD("SELECT * FROM product WHERE idProduct=$id");
    }

    public function modifyProduct($idProduct, $title, $description, $price){
        return $this->requeteBDD("UPDATE `product` SET `title`='$title',`description`='$description',`price`='$price' WHERE `idProduct`='$idProduct'");
    }

    public function addProduct($idCategory, $title, $description, $price){
        return $this->requeteBDD("INSERT INTO `product`(`idCategory`, `title`, `description`, `price`) VALUES ('$idCategory', '$title', '$description', '$price')");
    }

    public function deleteProduct($idProduct){
        return $this->requeteBDD("DELETE FROM `product` WHERE `idProduct`='$idProduct'");
    }
}
?>
