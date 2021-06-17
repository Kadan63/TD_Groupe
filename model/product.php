<?php
    class Produit{

        public function __construct(){

        }
        public function listProduct(){
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $bddname = 'shoptoncafe2.0';
    
            echo 'BDD Connectée.';
    
            try{
                $dbc = new PDO("mysql:host=$servername;dbname=$bddname", $username, $password);
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
    }
?>