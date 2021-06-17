<?php
    class Produit{

        public function __construct(){

        }
        public function listProduct(){
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $bddname = 'shoptoncafe2.0';


            try{
                $dbc = new PDO("mysql:host=$servername;dbname=$bddname;charset=utf8", $username, $password);
                $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = 'SELECT * FROM product';
                $result = $dbc->query($sql);
                $products=$result->fetchAll(PDO::FETCH_OBJ);
                $result->closeCursor();
                return $products;
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
                echo "Erreur code : ". $e->getCode();
            }
        }
        public function detailProduct($id){

            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $bddname = 'shoptoncafe2.0';

            try{
                $dbc = new PDO("mysql:host=$servername;dbname=$bddname;charset=utf8", $username, $password);
                $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM product WHERE idProduct=$id";
                $result = $dbc->query($sql);
                $products=$result->fetch(PDO::FETCH_OBJ);
                $result->closeCursor();
                return $products;
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
                echo "Erreur code : ". $e->getCode();
            }
        }
        public function modifyProduct(){
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $bddname = 'shoptoncafe2.0';

            try{
                $dbc = new PDO("mysql:host=$servername;dbname=$bddname;charset=utf8", $username, $password);
                $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE `product` SET `idProduct`='{$_POST['idProduct']}', `title`='{$_POST['nom']}',`description`='{$_POST['description']}',`price`='{$_POST['prix']}',`pictureFront`='',`pictureBack`='' WHERE 'idProduct'={$_POST['idProduct']}";
                $dbc->exec($sql);
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
                echo "Erreur code : ". $e->getCode();
            }
        }
    }
?>
