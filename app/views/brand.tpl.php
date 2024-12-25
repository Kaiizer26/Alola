<main class="explore-main">
        <section class="texte">
            <h3>Tous les produits de la marque: <?php $brand = $viewData['brand']?><?= $brand->getName()?></h3>
        </section>

        <section class="produits">
            <!-- Un produit -->
            <?php foreach ($viewData['products'] as $product) : ?>
            <article class="produit">
                <section>
                    <img src="<?= $baseRoute . '/' . $product->getPicture() ?>" alt="produit">
                </section>
                <section class="titre">
                    <article>
                        <h3><?=$product->getName() ?></h3>
                        <h3><?=$product->getPrice() ?></h3>
                    </article>
                    
                    <a href="/catalogue/produit/<?= $product->getId()?>">Voir le produit</a>
                    <a href="/add-to-cart/<?= $product->getId() ?>">Ajouter au panier</a>
                </section>
            </article>
            <?php endforeach ?>
        </section>
    </main>
