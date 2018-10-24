<div tabindex="-1" class="site-content" id="content">
    <div class="container">

        <nav class="woocommerce-breadcrumb"></nav>
        <div class="content-area" id="primary">
            <main class="site-main" id="main">
                <article class="post-2917 page type-page status-publish hentry" id="post-2917">
                    <header class="entry-header">
                        <div class="entry-title botcizgi"><span>Ürünlerimi Karşılaştır</span></div>
                    </header><!-- .entry-header -->
                    <div itemprop="mainContentOfPage" class="entry-content">
                        <div class="table-responsive">
                            <table class="table table-compare compare-list">
                                <thead>
                                    <tr>
                                        <th>Ürünler</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($model as $key => $value) : ?>
                                <tr id="<?=$value->code;?>">
                                    <td>
                                        <a class="product" href="<?=Yii::app()->createUrl("urun/view",array("id" =>Func::buildId($value->code,$value->product_name)))?>">
                                            <div class="product-image">
                                                <div class="">
                                                    <img width="250" height="232" alt="1" class="wp-post-image" src="<?=$value->product_imageS?>">
                                                </div>
                                            </div>
                                        </a><!-- /.product -->
                                    </td>

                                    <td>
                                        <div style="margin-top: 40px;" class="product-info">
                                            <h3 class="product-title"><?=$value->product_name?></h3>

                                        </div>
                                        <hr>
                                        <div class="product-price price"><span class="electro-price"><span class="amount"><?=number_format($value->product_price,2)?>&nbsp;<?=Params::getParams_("currency",$value->currency)?></span></span></div>
                                        <hr>
                                        <button class="button" onclick="addofferlist(<?=$value->code;?>)">Teklif Sepetine Ekle</button>
                                        <hr>
                                        <a onclick="deletecompareitem(<?=$value->code;?>)" title="Karşılaştırma Listesinden Kaldır" class="remove-icon"><i class="fa fa-times"></i></a>

                                    </td>

                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->

                    </div><!-- .entry-content -->
                </article><!-- #post-## -->
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .col-full -->
</div>