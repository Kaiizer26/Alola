<main class="explore-main">
        <section class="texte">
            <h3><?php $category = $viewData['category']?><?= $category->getName()?></h3>
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
                    
                    <a href="/catalogue/produit/<?= $product->getId()?>">Ajouter au panier</a>
                </section>
            </article>
            <?php endforeach ?>
        </section>
    </main>
