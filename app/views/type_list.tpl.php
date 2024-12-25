<main class="explore-main">
        <section class="texte">
            <h3>Tous les types</h3>
        </section>

        <section class="produits">
            <!-- Un produit -->
            <?php foreach ($viewData['types'] as $type) : ?>
            <article class="produit">
                
                <section class="titre">
                    <article>
                        <h3><?=$type->getName() ?></h3>
                    </article>
                    
                    <a href="/catalogue/type/<?= $type->getId()?>">Voir cette catégorie</a>
                </section>
            </article>
            <?php endforeach ?>
        </section>
    </main>
