<?php

namespace App\Controllers;

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
        // Affiche la vue dans le dossier views
        $this->show('order');
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
    
}