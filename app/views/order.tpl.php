<?php $livraison = 4.30 ?>

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
                    <p><?= $total + 0?>€</p>
                </article>
                <article>
                    <p>Livraison</p>
                    <p><?= $livraison ?>€</p>
                </article>
                <article class="total">
                    <p class="total-text">Total</p>
                    <p><?= $total + $livraison ?>€</p>
                    <a href="/clear-cart" class="btn btn-danger">Vider le panier</a>
                </article>
                <button><a href="">Confirmer la commande</a></button>
            </section>
        </article>
    </section>
</?>
