<main class="explore-main">
        <section class="texte">
            <h3>Toutes les marques</h3>
        </section>

        <section class="produits">
            <!-- Un produit -->
            <?php foreach ($viewData['brands'] as $brand) : ?>
            <article class="produit">
                <section class="titre">
                    <article>
                        <h3><?=$brand->getName() ?></h3>
                    </article>
                    
                    <a href="/catalogue/marque/<?= $brand->getId()?>">Voir cette catégorie</a>
                </section>
            </article>
            <?php endforeach ?>
        </section>
    </main>
