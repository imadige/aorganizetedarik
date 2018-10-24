
<link rel="stylesheet" href="<?=Yii::app()->baseUrl;?>/front/css/jquery.fancybox.css">
<script src="<?=Yii::app()->baseUrl;?>/front/js/jquery.elevatezoom.js"></script>
<script src="<?=Yii::app()->baseUrl;?>/front/js/jquery.fancybox.pack.js"></script>

    <div class="row setup-content" id="step-4">

    </div>

</div>


<div id="content" class="site-content" tabindex="-1">
    <div class="container">

        <div style="margin-top:40px"></div>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="product">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-product-wrapper">

                                <div class="product-images-wrapper">
                                    <?php if($modelProduct->salestype==2):?>
                                        <span class="onsale">İhale !</span>
                                    <?php endif?>
                                    <div class="images electro-gallery">
                                        <div style="padding: 50px 70px; border: 1px solid #ddd;cursor: pointer" class="thumbnails-single owl-carousel">
                                            <?php foreach($arrimages as $key=>$value):?>
                                                <img id="zoom_03"  src="<?=$value["imageXL"]?>" data-echo="<?=$value["imageXL"]?>" class="wp-post-image setsizeimg" alt="">
                                            <?php endforeach?>
                                        </div><!-- .thumbnails-single -->

                                        <div id="gallery_01" class="thumbnails-all columns-5 owl-carousel">
                                            <?php foreach($arrimages as $key=>$value):?>
                                                <a href="javascript:;"  style="padding: 10px" data-image="<?=$value["imageXL"]?>" data-zoom-image="<?=$value["imageXL"]?>">
                                                    <img id="zoom_03" style="width: 60px; height: 60px;" class="wp-post-image" src="<?=$value["imageS"]?>" />
                                                </a>
                                            <?php endforeach;?>
                                        </div><!-- .thumbnails-all -->
                                    </div><!-- .electro-gallery -->
                                </div><!-- /.product-images-wrapper -->

                                <div class="summary entry-summary give_height">

                                    <h1 itemprop="name" class="product_title entry-title"><?=$modelProduct->name?></h1>
                                    <h6 style="font-size: 12px;"><?=$modelProduct->subtitle?></h6>
                                    <hr>
                                    <div class="col-md-12">
                                        <div class="fiyat pull-lg-left">
                                            <?php if($modelProduct->price > 0) :  ?>
                                                <?=number_format($modelProduct->price,2)?>
                                                <span style="font-size: 16px"><?=Params::getParams_("currency",$modelProduct->currency)?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="woocommerce-product-rating pull-lg-right">
                                            <div class="star-rating" title="5 üzderinden toplam puanı <?=$modelProduct->totalpoint?>">
                                                    <span style="width:<?=Func::percentagepoints($modelProduct->totalpoint)?>%">
                                                        <strong itemprop="ratingValue" class="rating"><?=$modelProduct->totalpoint?></strong>
                                                        out of <span itemprop="bestRating">5</span>             üzerinden
                                                        <span itemprop="ratingCount" class="rating"><?=$modelProduct->totalpoint?></span>
                                                        puan aldı
                                                    </span>
                                            </div>

                                            <a href="#reviews" class="woocommerce-review-link">(<span itemprop="reviewCount" class="count"><?=$modelProduct->uservotecount?></span> Kişi Oyladı)</a><br>
                                        </div><!-- .woocommerce-product-rating -->
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <?php if(isset($modelSupplierscompany->name) && !empty($modelSupplierscompany->name)):?>

                                            <div class="seller">Satıcı: <a href="#"><?=$modelSupplierscompany->name?></a> | <a href="#">Satıcının Diğer Ürünleri</a> |
                                                Satıcının Genel Puanı <span style="background-color: #f28b00; color: white; padding: 4px; border-radius: 2px;"><?=!empty($modelSupplierscompany->totalpoint)?$modelSupplierscompany->totalpoint."/10":"-"?></span>
                                            </div>
                                        <?php endif?>

                                    </div>
                                    <div class="clearfix"></div>
                                    <?php if($modelProduct->salestype==2):?>
                                    <hr>
                                    <div  class="col-md-12">
                                        <div class="form-group timer_background">
                                            <label for="inputEmail3" class="control-label">İhale Bitimine Kalan Süre</label>
                                            <div class="col-sm-12">
                                                <div class="deal-countdown-timer center-block ">
                                                    <div id="deal-countdown1" class="countdown">
                                                        <span data-value="1" class="days"><span class="value ncolor" id="pro_day">1</span><b>GÜN</b></span>
                                                        <span class="hours"><span class="value ncolor" id="pro_hour">7</span><b>Saat</b></span>
                                                        <span class="minutes"><span class="value ncolor" id="pro_min">29</span><b>Dakika</b></span>
                                                        <span class="seconds"><span class="value ncolor" id="pro_sec">13</span><b>Saniye</b></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="clearfix"></div>

                                    <?php if(empty(Yii::app()->user->getState("supplier_id"))):?>
                                    <hr>
                                    <div class="col-md-12">
                                            <?php if($modelProduct->salestype==2):?>
                                            <div class="ihaleblok">
                                                <?php else:?>
                                                <div class="ihaleblok1">
                                                <?php endif?>
                                                <label class="text-center" for="inputEmail3">Adet</label>
                                                <div class="quantity">
                                                    <input style="width: 50%" type="number" id="count_number" name="quantity" value="1" min="1" title="Qty" class="input-text qty text"/>
                                                </div>
                                            </div>
                                            <?php if($modelProduct->salestype==2):?>

                                            <div class="ihaleblok">
                                                <label class="text-center" for="inputEmail3">Teklif ver</label>
                                                <div class="tdinput">
                                                    <input type="text">
                                                    <select class="select-input1" id="">
                                                        <option selected="selected" value="">00 Kr.</option>
                                                        <option value="">10 Kr.</option>
                                                        <option value="">20 Kr.</option>
                                                        <option value="">30 Kr.</option>
                                                        <option value="">40 Kr.</option>
                                                        <option value="">50 Kr.</option>
                                                        <option value="">60 Kr.</option>
                                                        <option value="">70 Kr.</option>
                                                        <option value="">80 Kr.</option>
                                                        <option value="">90 Kr.</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>

                                        <?php if($modelProduct->salestype==2):?>

                                        <button style="width: 100%;" type="submit" class="single_add_to_cart_button button">Teklif Ver
                                        </button>
                                        <?php else: ?>

                                             <button style="width: 100%;" onclick="addofferlist(<?=$modelProduct->code?>)" class="single_add_to_cart_button button">Teklif Sepetine Ekle
                                             </button>

                                        <?php endif; ?>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div><!-- /.single-product-wrapper -->
                    </div>
                </div>


                <div class="row">
                    <div style="margin-top: -100px;" class="col-lg-12">
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">

                                <li class="nav-item description_tab">
                                    <a href="#tab-description" class="active" data-toggle="tab">Ürün Açıklaması</a>
                                </li>

                                <?php if($modelProduct->salestype==2):?>
                                    <li class="nav-item specification_tab">
                                        <a href="#tab-specification" data-toggle="tab">Teklif Verenler Listesi</a>
                                    </li>
                                <?php endif;?>

                                <li class="nav-item reviews_tab">
                                    <a href="#tab-reviews" data-toggle="tab">Satıcının Aldığı Yorumlar</a>
                                </li>


                            </ul>

                            <div class="tab-content">


                                <div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
                                    <?=$modelProduct->text?>
                                </div>

                                <?php if($modelProduct->salestype==2):?>
                                    <div class="tab-pane panel entry-content wc-tab" id="tab-specification">
                                        asdadadasdasd
                                    </div><!-- /.panel -->
                                <?php endif;?>

                                <div class="tab-pane panel entry-content wc-tab" id="tab-reviews">
                                    <div id="reviews" class="electro-advanced-reviews">

                                        <div id="comments">

                                            <ol class="commentlist">
                                                <li itemprop="review" class="comment even thread-even depth-1">

                                                    <div id="comment-390" class="comment_container">

                                                      
                                                        <div class="comment-text">

                                                            <div class="star-rating" title="Rated 4 out of 5">
                                                                <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                            </div>


                                                            <p class="meta">
                                                                <strong>John Doe</strong> &ndash;
                                                                <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">March 3, 2016</time>:
                                                            </p>



                                                            <div itemprop="description" class="description">
                                                                <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.
                                                                </p>
                                                            </div>


                                                            <p class="meta">
                                                                <strong itemprop="author">John Doe</strong> &ndash; <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">March 3, 2016</time>
                                                            </p>


                                                        </div>
                                                    </div>
                                                </li><!-- #comment-## -->

                                                <li class="comment odd alt thread-odd thread-alt depth-1">

                                                    <div class="comment_container">

                                                       
                                                        <div class="comment-text">

                                                            <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 5 out of 5">
                                                                <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                                                            </div>

                                                            <p class="meta">
                                                                <strong>Anna Kowalsky</strong> &ndash;
                                                                <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                                                            </p>


                                                            <div itemprop="description" class="description">
                                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                                                                </p>
                                                            </div>

                                                            <p class="meta">
                                                                <strong itemprop="author">Anna Kowalsky</strong> &ndash; <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </li><!-- #comment-## -->

                                                <li class="comment odd alt thread-odd thread-alt depth-1">

                                                    <div class="comment_container">

                                                        <div class="comment-text">

                                                            <div itemprop="reviewRating" class="star-rating" title="Rated 5 out of 5">
                                                                <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                                                            </div>

                                                            <p class="meta">
                                                                <strong>Anna Kowalsky</strong> &ndash;
                                                                <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                                                            </p>


                                                            <div itemprop="description" class="description">
                                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                                                                </p>
                                                            </div>

                                                            <p class="meta">
                                                                <strong itemprop="author">Anna Kowalsky</strong> &ndash; <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </li><!-- #comment-## -->
                                            </ol><!-- /.commentlist -->

                                        </div><!-- /#comments -->

                                        <div class="clear"></div>
                                    </div><!-- /.electro-advanced-reviews -->
                                </div><!-- /.panel -->

                            </div>
                        </div><!-- /.woocommerce-tabs -->
                    </div>
                </div>




        </div><!-- /.product -->

        </main><!-- /.site-main -->
    </div><!-- /.content-area -->
      
</div><!-- /.container -->
  
<script type="text/javascript">
    $("#zoom_03").elevateZoom({
        gallery:'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true
     });

    $("#zoom_03").bind("click", function(e) {
        var ez =   $('#zoom_03').data('elevateZoom');
        $.fancybox(ez.getGalleryList());
        return false;
    });



<?php if($modelProduct->salestype==2):?>
    showTimerRemaining(<?=strtotime($modelProduct->lastshowdates)?>,$("#pro_day"),$("#pro_hour"),$("#pro_min"),$("#pro_sec"));
<?php endif;?>
</script>