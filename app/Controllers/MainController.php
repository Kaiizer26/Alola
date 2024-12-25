<?php
namespace App\Controllers;
session_start();

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;

class MainController extends CoreController
{

    public function test()
    {
        $brandModel = new Brand(); // peut modifier Brand avec les autres nom de model pour tester
        $list = $brandModel->findAll();
        $elem = $brandModel->find(7);
        dump($list);
        dump($elem);
    }
    /**
     * Affiche la page d'accueil du site
     */
    public function home()
    {
        // Ci dessous je créer une instance du model Category
        $categoryModel = new Category();
        // Ensuite j'execute la fonction findAllForHomePage() du model Category
        $categories = $categoryModel->findAllForHomePage();
        // dump($categories);
        $this->show('home', [
            'categories' => $categories
        ]);
    }

    /**
     * Show legal mentions page
     */
    public function legalMentions()
    {
        // Affiche la vue dans le dossier views
        $this->show('mentions');
    }

    public function register()
    {
        // Affiche la vue dans le dossier views
        $this->show('register');
    }
    public function login()
    {
        // Affiche la vue dans le dossier views
        $this->show('login');
    }

    public function explore()
    {
        // Affiche la vue dans le dossier views
        $this->show('explore');
    }
    
    public function order()
    {
        // On récupère le panier de la session
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        // Calcul du total
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $this->show('order', [
            'cart' => $cart,
            'total' => $total
        ]);
    }

    
    public function productList(){
        $productModel = new Product();
        $products = $productModel->findAll();
        $this->show('product_list', [
            'products' => $products
        ]); 
    }
    public function categoryList(){
        $categoryModel = new Category();
        $categories = $categoryModel->findAll();
        $this->show('category_list', [
            'categories' => $categories
        ]); 
    }
    public function brandList(){
        $brandModel = new Brand();
        $brands = $brandModel->findAll();
        $this->show('brand_list', [
            'brands' => $brands
        ]); 
    }
    public function typeList(){
        $typeModel = new Type();
        $types = $typeModel->findAll();
        $this->show('type_list', [
            'types' => $types
        ]); 
    }
    
    public function addToCart($params)
{
    // Récupère l'ID du produit depuis les paramètres
    $productId = $params['id'];

    // On récupère le produit depuis le modèle Product
    $productModel = new Product();
    $product = $productModel->find($productId);

    // Si le produit existe
    if ($product) {
        // Si le panier n'existe pas encore, on le crée
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Ajoute ou met à jour le produit dans le panier
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity'] += 1; 
        } else {
            $_SESSION['cart'][$productId] = [
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'quantity' => 1,
                'picture' => $product->getPicture()
            ];
        }
    }

    // Redirection vers la page du panier
    header("Location: /order");
    exit();
}

    public function clearCart()
    {
        unset($_SESSION['cart']);

        // Redirection vers la page du panier
        header("Location: /order");
        exit();
    }


}