<div id="content" class="site-content" tabindex="-1">
    <div class="container">

        <nav class="woocommerce-breadcrumb"></nav>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article class="page type-page status-publish hentry">
                    <header class="entry-header">
                        <div class="entry-title botcizgi"><span>Teklif Sepeti</span></div>
                    </header><!-- .entry-header -->

                    <form>

                        <table class="shop_table shop_table_responsive cart">
                            <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Ürün</th>
                                <th class="product-price">Birim Fiyatı</th>
                                <th class="product-price">Adet</th>
                            </tr>
                            </thead>
                            <tbody id="allbasket">
                            <?php
                            if(count($model) < 1) :
                            ?>
                            <tr >
                                <td colspan='6'>Sepetiniz Boş</td>
                            </tr>
                            <?php endif; ?>

                            <?php foreach ($model as $key => $value) : ?>
                            <tr id="<?=$value->code?>" class="cart_item">

                                <td class="product-remove">
                                    <a onclick="deleteofferitem(<?=$value->code?>)" class="remove" style="cursor: pointer">×</a>
                                </td>

                                <td class="product-thumbnail">
                                    <a href="<?=Yii::app()->createUrl("urun/view",array("id" =>Func::buildId($value->code,$value->product_name)))?>"><img width="180" height="180" src="<?=$value->product_imageS?>" alt=""></a>
                                </td>

                                <td data-title="Product" class="product-name">
                                    <a href="<?=Yii::app()->createUrl("urun/view",array("id" =>Func::buildId($value->code,$value->product_name)))?>"><?=$value->product_name?></a>
                                </td>

                                <td data-title="Price" class="product-price">
                                    <span class="amount"><?=number_format($value->product_price,2)?>&nbsp;<?=Params::getParams_("currency",$value->currency)?></span>

                                </td>

                                <td data-title="Quantity" class="product-quantity">
                                    <div class="quantity buttons_added"><input onclick="mins();" type="button" class="minus" value="-">
                                        <label>Quantity:</label>
                                        <input type="number" id="t_count" size="4" class="input-text qty text" title="Qty" value="<?=$value->count_number?>"  max="30" min="0" step="1">
                                        <input type="button" onclick="plus();" class="plus" value="+">
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                            <tr>
                                <td class="actions" colspan="6">
                                    <div class="soltemizle pull-left">
                                        <a onclick="clearOfferbasket()" class="button dored"><i class="fa fa-trash">&nbsp;&nbsp;</i>Tümünü Temizle</a>
                                    </div>

                                    <a class="button" href="<?=Yii::app()->createUrl('site/index');?>">Alışverişe Devam Et</a>

                                    <div class="wc-proceed-to-checkout">

                                        <a class="checkout-button button alt wc-forward" href="#">Teklifleri Gönder</a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>

                </article>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .container -->
</div><!-- #content -->