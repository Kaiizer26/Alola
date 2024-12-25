
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <?php $baseRoute = $_SERVER['BASE_URI']; ?>
        <!--<link rel="stylesheet" href="<?=$absoluteURL?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$absoluteURL?>/assets/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="<?=$absoluteURL?>/assets/css/styles.css">
        
        <title>E-commerce</title>
    </head>
    <body class="login register order explore">
    
        <header>
            <nav>
                <article>
                    <a href="/"><h1 class="logo">alola.</h1></a>
                </article>

                <article class="redirection center">
                    <ul class="first-ul">
                        <li><a href="/catalogue/categories" class="categorie">Catégories</a>
                            <ul class="menu menu-categorie">
                                <?php foreach ($viewData['categories'] as $category) : ?>
                                <li><a href="/catalogue/categorie/<?= $category->getId()?>"><?= $category->getName()?></a></li>        
                                <?php endforeach ?>             
                            </ul>
                        </li>
                        <li><a href="/catalogue/brands" class="marque">Marques</a>
                            <ul class="menu menu-marque">
                            <?php foreach ($viewData['brands'] as $brand) : ?>
                                <li><a href="/catalogue/marque/<?= $brand->getId()?>"><?= $brand->getName()?></a></li>        
                                <?php endforeach ?>                           
                            </ul> 
                        </li>
                        <li><a href="/catalogue/types" class="type">Type</a>
                            <ul class="menu menu-type">
                                
                            <?php foreach ($viewData['types'] as $type) : ?>
                                <li><a href="/catalogue/type/<?= $type->getId()?>"><?= $type->getName()?></a></li>        
                                <?php endforeach ?>                           
                                 
                            </ul>
                        </li>                        
                    </ul>
                </article>
                <article class="right-side redirection">
                    <section>
                        <a href="/login" class="account" id="login">Mon compte</a>
                        <a href="/catalogue/produits" class="account" id="register">Explorer</a>
                    </section>
                    <a href="/order">
                    <svg fill="#ffffff" height="150px" width="150px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.1 483.1" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M434.55,418.7l-27.8-313.3c-0.5-6.2-5.7-10.9-12-10.9h-58.6c-0.1-52.1-42.5-94.5-94.6-94.5s-94.5,42.4-94.6,94.5h-58.6 c-6.2,0-11.4,4.7-12,10.9l-27.8,313.3c0,0.4,0,0.7,0,1.1c0,34.9,32.1,63.3,71.5,63.3h243c39.4,0,71.5-28.4,71.5-63.3 C434.55,419.4,434.55,419.1,434.55,418.7z M241.55,24c38.9,0,70.5,31.6,70.6,70.5h-141.2C171.05,55.6,202.65,24,241.55,24z M363.05,459h-243c-26,0-47.2-17.3-47.5-38.8l26.8-301.7h47.6v42.1c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h141.2v42.1 c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h47.6l26.8,301.8C410.25,441.7,389.05,459,363.05,459z"></path> </g> </g></svg>
                    </a>
                </article>
            </nav>
        </header>



        
