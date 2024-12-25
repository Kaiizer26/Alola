<main class="explore-main">
        <section class="texte">
            <h3>Toutes les catégories</h3>
        </section>

        <section class="produits">
            <!-- Un produit -->
            <?php foreach ($viewData['categories'] as $category) : ?>
            <article class="produit">
                <section>
                    <img src="<?= $baseRoute . '/' . $category->getPicture() ?>" alt="produit">
                </section>
                <section class="titre">
                    <article>
                        <h3><?=$category->getName() ?></h3>
                        <h3><?=$category->getSubtitle() ?></h3>
                    </article>
                    
                    <a href="/catalogue/categorie/<?= $category->getId()?>">Voir cette catégorie</a>
                </section>
            </article>
            <?php endforeach ?>
        </section>
    </main>
