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
                        <li><a href="" class="categorie">Catégories</a>
                            <ul class="menu menu-categorie">
                                <li><a href="">Ballons</a></li>
                                <li><a href="">Chaussures</a></li>
                                <li><a href="">Vêtements</a></li>                            
                                <li><a href="">Protections</a></li>                            
                                <li><a href="">Accessoires</a></li>                            
                                <li><a href="">Sacs</a></li>                            
                                <li><a href="">Equipement</a></li>                         
                            </ul>
                        </li>
                        <li><a href="" class="marque">Marques</a>
                            <ul class="menu menu-marque">
                                <li><a href="">Mikasa</a></li>
                                <li><a href="">Molten</a></li>
                                <li><a href="">Asics</a></li>                            
                                <li><a href="">Mizuno</a></li>                            
                                <li><a href="">Adidas</a></li>                            
                                <li><a href="">Nike</a></li>                            
                            </ul> 
                        </li>
                        <li><a href="" class="type">Type</a>
                            <ul class="menu menu-type">
                                
                                <li><a href="">Compétition</a></li>
                                <li><a href="">Entraînement</a></li>
                                <li><a href="">Loisir</a></li>                            
                                <li><a href="">Indoor</a></li>
                                <li><a href="">Outdoor</a></li>                            
                                <li><a href="">Hommes</a></li>
                                <li><a href="">Femmes</a></li>                            
                                <li><a href="">Enfants</a></li>                            
                                 
                            </ul>
                        </li>                        
                    </ul>
                </article>
                <article class="right-side redirection">
                    <section>
                        <a href="/login" class="account" id="login">Mon compte</a>
                        <a href="/explore" class="account" id="register">Explorer</a>
                    </section>
                    <a href="/order">
                    <svg fill="#ffffff" height="150px" width="150px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.1 483.1" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M434.55,418.7l-27.8-313.3c-0.5-6.2-5.7-10.9-12-10.9h-58.6c-0.1-52.1-42.5-94.5-94.6-94.5s-94.5,42.4-94.6,94.5h-58.6 c-6.2,0-11.4,4.7-12,10.9l-27.8,313.3c0,0.4,0,0.7,0,1.1c0,34.9,32.1,63.3,71.5,63.3h243c39.4,0,71.5-28.4,71.5-63.3 C434.55,419.4,434.55,419.1,434.55,418.7z M241.55,24c38.9,0,70.5,31.6,70.6,70.5h-141.2C171.05,55.6,202.65,24,241.55,24z M363.05,459h-243c-26,0-47.2-17.3-47.5-38.8l26.8-301.7h47.6v42.1c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h141.2v42.1 c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h47.6l26.8,301.8C410.25,441.7,389.05,459,363.05,459z"></path> </g> </g></svg>
                    </a>
                </article>
            </nav>
        </header>

        <div class="svg-bg">
            <!--
        <svg
      width="1000"
      height="2000"
      viewBox="0 0 1000 2000"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
      class="squiggle"
    >
      <path
        d="M-24.5 101C285 315 5.86278 448.291 144.223 631.238C239.404 757.091 559.515 782.846 608.808 617.456C658.101 452.067 497.627 367.073 406.298 426.797C314.968 486.521 263.347 612.858 322.909 865.537C384.086 1125.06 79.3992 1007.94 100 1261.99C144.222 1807.35 819 1325 513 1142.5C152.717 927.625 -45 1916.5 1191.5 1852"
        stroke="#CD3C2F"
        stroke-width="30"
        stroke-linejoin="round"
        stroke-linecap="round"
      />
    </svg> -->
            <!--<img src="assets/images/bg/line-bg.svg" alt="">-->
        </div>

        
