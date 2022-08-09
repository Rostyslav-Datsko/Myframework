<?php
use wfm\View;
/** @var $this View*/
/** @var $product View*/
?>
<?php
/** @var $products array */
?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-2">
            <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Ноутбуки</a></li>
            <li class="breadcrumb-item active" aria-current="page">MacBook</li>
        </ol>
    </nav>
</div>


<div class="container py-3">
    <div class="row">

        <div class="col-md-4 order-md-2">

            <h1><?= $product['title']?>
            <ul class="list-unstyled">
                <?php if ($product['status'] == 1): ?>
                    <li><i class="fas fa-check text-success"></i> <?php __('tpl_is_available'); ?></li>
                <?php else: ?>
                    <li><i class="fas fa-shipping-fast text-danger"></i> <?php __('tpl_isn`t_available'); ?></li>
                <?php endif; ?>
                <li><i class="fas fa-hand-holding-usd"></i> <span class="product-price">
                        <?php if ($product['old_price']): ?>
                            <small>$<?= $product['old_price']?></small>
                        <?php endif; ?>
                            $<?= $product['price'] ?> </li>
            </ul>

            <div id="product">
                <div class="input-group mb-3">
                    <input id="input-quantity" type="text" class="form-control" name="quantity" value="1">
                    <button class="btn btn-danger add-to-cart" type="button" data-id="<?= $product['id'] ?>"><?php __('product_view-buy'); ?></button>
                </div>
            </div>

        </div>

        <div class="col-md-8 order-md-1">

            <ul class="thumbnails list-unstyled clearfix">
                <li class="thumb-main text-center"><a class="thumbnail" href="<?= PATH . $product['img'] ?>" data-effect="mfp-zoom-in"><img src="<?= PATH . $product['img'] ?>" alt=""></a></li>

                <?php if (!empty($gallery)): ?>
                    <?php foreach ($gallery as $item): ?>
                        <li class="thumb-additional"><a class="thumbnail" href="<?= $item['img'] ?>" data-effect="mfp-zoom-in"><img src="<?= $item['img'] ?>" alt=""></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
                </ul>

            <p><?= $product['content'] ?></p>

        </div>

    </div>
</div>