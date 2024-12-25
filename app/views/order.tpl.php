<main class="order-main">
    <section class="texte">
        <h3>Récapitulatif de mon panier</h3>
    </section>

    <section class="recapitulatif">
        <article class="left box">
            <?php foreach ($_SESSION['cart'] as $productId => $product) : ?>
                <?php $total += ($product['price']) * $product['quantity']?>
                <section class="article-panier">
                    <img src="<?= $baseRoute . '/' . $product['picture'] ?>" alt="produit">
                    <section>
                        <h3><?= $product['name'] ?></h3>
                        <p><?= $product['quantity'] ?> x <?= ($product['price'])?>€</p>
                    </section>
                    <h3><?= ($product['price'] * $product['quantity'])?>€</h3>
                </section>
            <?php endforeach ?>
        </article>

        <article class="right box">
            <section>
                <article>
                    <p>Produits</p>
                    <p><?= $total ?>€</p>
                </article>
                <article>
                    <p>Livraison</p>
                    <p>4,30€</p>
                </article>
                <article class="total">
                    <p class="total-text">Total</p>
                    <p><?= $total + 4.30 ?>€</p>
                </article>
            </section>
        </article>
    </section>
</main>
