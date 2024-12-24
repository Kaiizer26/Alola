<?php

namespace App\Models;

use App\Utils\Database;
use PDO; // on utilise la classe PDO dont le namespace a été défini

class Product extends CoreModel
{
    private $name;
    private $description;
    private $picture;
    private $price; // ordre d'affichage des catégories dans la page accueil
    private $rate;
    private $status;
    private $brand_id;
    private $category_id;
    private $type_id;

    /**
     * Récupère toutes les catégories (table category) depuis la bdd
     * Retourne une liste d'objet (instances de la classe Category => le model ou on est)
     */
    public function findAll()
    {
        $sql = "SELECT * FROM product";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $products;
    }

    public function findByCategory($category_id)
    {
        // Ici on créer la requete SQL qui va récupérer tous les products en fonctiond el'id de la category qu'on veut
        // Selectionne TOUS les product OU category_id = $id_category
        $sql = "SELECT * FROM product WHERE category_id = $category_id";

        // Ici $pdo est un objet de la classe Databse (Utils/Database.php)
        // $pdo va me permettre d'executer mes requetes sql
        $pdo = Database::getPDO();

        // ici j'execute ma requete sql ($sql) et je stock le resultat de cette requete dans $pdoStatement
        $pdoStatement = $pdo->query($sql);

        // Pour l'instant $pdoStatement n'est pas une liste d'objets Product, pour transformer $pdoStatement en liste d'objet Product (model Product) => fetchAll
        //fetchAll prend 2 param
        // 1er = En quoi on veut convertir le resultat => ici en objets
        // 2eme = Objets de quelle classe ? => La classe Product (le model ou on est actuellement)
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

        // On retourne le tableau d'objets Products
        return $products;
    }

    public function findByType($type_id)
    {
        // Ici on créer la requete SQL qui va récupérer tous les products en fonctiond el'id de la category qu'on veut
        // Selectionne TOUS les product OU category_id = $id_category
        $sql = "SELECT * FROM product WHERE type_id = $type_id";

        // Ici $pdo est un objet de la classe Databse (Utils/Database.php)
        // $pdo va me permettre d'executer mes requetes sql
        $pdo = Database::getPDO();

        // ici j'execute ma requete sql ($sql) et je stock le resultat de cette requete dans $pdoStatement
        $pdoStatement = $pdo->query($sql);

        // Pour l'instant $pdoStatement n'est pas une liste d'objets Product, pour transformer $pdoStatement en liste d'objet Product (model Product) => fetchAll
        //fetchAll prend 2 param
        // 1er = En quoi on veut convertir le resultat => ici en objets
        // 2eme = Objets de quelle classe ? => La classe Product (le model ou on est actuellement)
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

        // On retourne le tableau d'objets Products
        return $products;
    }

    public function findByBrand($brand_id)
    {
        // Ici on créer la requete SQL qui va récupérer tous les products en fonctiond el'id de la category qu'on veut
        // Selectionne TOUS les product OU category_id = $id_category
        $sql = "SELECT * FROM product WHERE brand_id = $brand_id";

        // Ici $pdo est un objet de la classe Databse (Utils/Database.php)
        // $pdo va me permettre d'executer mes requetes sql
        $pdo = Database::getPDO();

        // ici j'execute ma requete sql ($sql) et je stock le resultat de cette requete dans $pdoStatement
        $pdoStatement = $pdo->query($sql);

        // Pour l'instant $pdoStatement n'est pas une liste d'objets Product, pour transformer $pdoStatement en liste d'objet Product (model Product) => fetchAll
        //fetchAll prend 2 param
        // 1er = En quoi on veut convertir le resultat => ici en objets
        // 2eme = Objets de quelle classe ? => La classe Product (le model ou on est actuellement)
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

        // On retourne le tableau d'objets Products
        return $products;
    }
    /**
     * Récupère une seul categorie en fonction de son id
     * Retourne un objet (une instance de la classe Category => le model ou on est)
     */
    public function find($id)
    {
        // Ici on créer la requete SQL qui va récupérer le product en fonction de son id
        $sql = "SELECT * FROM product WHERE id = ".$id;

        // Ici $pdo est un objet de la classe Databse (Utils/Database.php)
        // $pdo va me permettre d'executer mes requetes sql
        $pdo = Database::getPDO();

        // ici j'execute ma requete sql ($sql) et je stock le resultat de cette requete dans $pdoStatement
        $pdoStatement = $pdo->query($sql);

        // Je veux récuperer UN objet Product, PDO le fait pour moi => fetchObject (fetch qu'une seule fois + converti en objet de la classe 'Product' donc le model Product)
        $product = $pdoStatement->fetchObject(Product::class);

        return $product;
    }


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of name
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get Picture
     *
     * @return void
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
    * Set the value of picture
    *
    * @return self
    */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
    * Get the value of price
    */ 
    public function getPrice()
    {
        return $this->price;
    }

      /**
    * Set the value of price
    *
    * @return self
    */ 
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getRate()
    {
        return $this->rate;
    }
    /**
    * Get the value of status
    */ 
    public function getStatus()
    {
        return $this->status;
    }

      /**
    * Set the value of status
    *
    * @return self
    */ 
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
    * Get the value of brand id
    */ 
    public function getBrand_id()
    {
        return $this->brand_id;
    }

      /**
    * Set the value of brand id
    *
    * @return self
    */ 
    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    /**
    * Get the value of category id
    */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

      /**
    * Set the value of category id
    *
    * @return self
    */ 
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
    * Get the value of type id
    */ 
    public function getType_id()
    {
        return $this->type_id;
    }

      /**
    * Set the value of type id
    *
    * @return self
    */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;
    }
}
