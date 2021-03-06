<div id="content" class="site-content" tabindex="-1">
    <div class="container">

        <nav class="woocommerce-breadcrumb" ></nav>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">


                <header class="page-header">
                    <h1 class="page-title">Arama Sonuçları</h1>
                    <p class="woocommerce-result-count">20 üründen 15 tane gösteriliyor</p>
                </header>

                <div class="shop-control-bar">
                    <ul class="shop-view-switcher nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid"><i class="fa fa-th"></i></a></li>
                        <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View" href="#list-view"><i class="fa fa-list"></i></a></li>
                    </ul>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby">
                            <option value="menu_order"  selected='selected'>Akıllı Sıralama</option>
                            <option value="popularity" >Sort by popularity</option>
                            <option value="rating" >Sort by average rating</option>
                            <option value="date" >Sort by newness</option>
                            <option value="price" >Sort by price: low to high</option>
                            <option value="price-desc" >Sort by price: high to low</option>
                        </select>
                    </form>
                    <form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15"  selected='selected'>15 Adet</option><option value="-1" >Tümünü Göster</option></select></form>
                    <nav class="electro-advanced-pagination">
                        <form method="post" class="form-adv-pagination"><input id="goto-page" size="2" min="1" max="2" step="1" type="number" class="form-control" value="1" /></form> of 2<a class="next page-numbers" href="#">&rarr;</a>			<script>
                            jQuery(document).ready(function($){
                                $( '.form-adv-pagination' ).on( 'submit', function() {
                                    var link 		= '#',
                                        goto_page 	= $( '#goto-page' ).val(),
                                        new_link 	= link.replace( '%#%', goto_page );

                                    window.location.href = new_link;
                                    return false;
                                });
                            });
                        </script>
                    </nav>
                </div>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">

                        <ul class="products columns-3">
                            <li class="product first">
                                <div class="product-outer1">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="<?=Yii::app()->createUrl("productdetail/detail")?>">
                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                            <div class="product-thumbnail">

                                                <img data-echo="<?=Yii::app()->request->baseUrl;?>/front/images/products/5.jpg" src="<?=Yii::app()->request->baseUrl;?>/front/images/blank.gif" alt="">

                                            </div>
                                        </a>

                                        <div class="price-add-to-cart">
                                            <div class="price">
                                                <div class="electro-price">
                                                    <div class="ibf">
                                                        <span>İhale Başlangıç Fiyatı</span><br>
                                                        <ins><span> 111 TL</span></ins>
                                                    </div>
                                                    <div class="stf">
                                                        <span>Son Teklif Fiyatı</span><br>
                                                        <ins><span> 111 TL</span></ins>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!-- /.price-add-to-cart -->

                                        <div class="hover-area">
                                            <div class="action-buttons">
                                                <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                <a href="#" class="add-to-compare-link">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                            <li class="product ">
                                <div class="product-outer1">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="<?=Yii::app()->createUrl("productdetail/detail")?>">
                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                            <div class="product-thumbnail">

                                                <img data-echo="<?=Yii::app()->request->baseUrl;?>/front/images/products/4.jpg" src="<?=Yii::app()->request->baseUrl;?>/front/images/blank.gif" alt="">

                                            </div>
                                        </a>

                                        <div class="price-add-to-cart">
                                            <div class="price">
                                                <div class="electro-price">
                                                    <div class="ibf">
                                                        <span>İhale Başlangıç Fiyatı</span><br>
                                                        <ins><span> 111 TL</span></ins>
                                                    </div>
                                                    <div class="stf">
                                                        <span>Son Teklif Fiyatı</span><br>
                                                        <ins><span> 111 TL</span></ins>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!-- /.price-add-to-cart -->

                                        <div class="hover-area">
                                            <div class="action-buttons">
                                                <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                <a href="#" class="add-to-compare-link">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                            <li class="product last">
                                <div class="product-outer1">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="<?=Yii::app()->createUrl("productdetail/detail")?>">
                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                            <div class="product-thumbnail">

                                                <img data-echo="<?=Yii::app()->request->baseUrl;?>/front/images/products/2.jpg" src="<?=Yii::app()->request->baseUrl;?>/front/images/blank.gif" alt="">

                                            </div>
                                        </a>
                                        <div class="deal-countdown-timer">
                                            <div id="deal-countdown1" class="countdown">
                                                <span data-value="1" class="days"><span class="value HomeProductBid_day">0</span><b>GÜN</b></span>
                                                <span class="hours"><span class="value HomeProductBid_hour">0</span><b>Saat</b></span>
                                                <span class="minutes"><span class="value HomeProductBid_min">0</span><b>Dakika</b></span>
                                                <span class="seconds"><span class="value HomeProductBid_sec">0</span><b>Saniye</b></span>
                                            </div>
                                        </div>
                                        <div class="price-add-to-cart">
                                            <div class="price">
                                                <div class="electro-price">
                                                    <div class="ibf">
                                                        <span>İhale Başlangıç Fiyatı</span><br>
                                                        <ins><span> 111 TL</span></ins>
                                                    </div>
                                                    <div class="stf">
                                                        <span>Son Teklif Fiyatı</span><br>
                                                        <ins><span> 111 TL</span></ins>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!-- /.price-add-to-cart -->


                                        <div class="hover-area">
                                            <div class="action-buttons">

                                                <a href="#" rel="nofollow" class="add_to_wishlist">Listene Ekle</a>

                                                <a href="compare.html" class="add-to-compare-link">Karşılaştır</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>

                        </ul>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="true">
                        <ul class="products columns-3">
                            <li class="product list-view">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?=Yii::app()->createUrl("productdetail/detail")?>">
                                            <img class="wp-post-image" data-echo="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" src="<?=Yii::app()->request->baseUrl;?>/front/images/blank.gif" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="<?=Yii::app()->createUrl("productdetail/detail")?>"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                    <div class="product-rating">
                                                        <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                    </div>
                                                    <hr>
                                                    <div class="deal-countdown-timer">
                                                        <div id="deal-countdown1" class="countdown">
                                                            <span data-value="1" class="days"><span class="value HomeProductBid_day">0</span><b>GÜN</b></span>
                                                            <span class="hours"><span class="value HomeProductBid_hour">0</span><b>Saat</b></span>
                                                            <span class="minutes"><span class="value HomeProductBid_min">0</span><b>Dakika</b></span>
                                                            <span class="seconds"><span class="value HomeProductBid_sec">0</span><b>Saniye</b></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12">

                                                <div class="price-add-to-cart">
                                                    <div class="price">
                                                        <div class="electro-price">
                                                            <div class="ibf">
                                                                <span style="font-size: 12px; word-wrap: break-word!important;">İhale Başlangıç Fiyatı</span><br>
                                                                <ins><span> 111 TL</span></ins>
                                                            </div>
                                                            <div class="stf">
                                                                <span style="font-size: 12px;">Son Teklif Fiyatı</span><br>
                                                                <ins><span> 111 TL</span></ins>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div><!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                    <div class="action-buttons">
                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                            <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                            <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                <span class="feedback">Product added!</span>
                                                                <a rel="nofollow" href="#">Wishlist</a>
                                                            </div>

                                                            <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                <a rel="nofollow" href="#">Wishlist</a>
                                                            </div>

                                                            <div style="clear:both"></div>
                                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                                        </div>
                                                        <div class="clear"></div>
                                                        <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="shop-control-bar-bottom">
                    <form class="form-electro-wc-ppp">
                        <select class="electro-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp"><option selected="selected" value="15">Show 15</option><option value="-1">Tümünü Göster</option></select>
                    </form>
                    <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                            <li><span class="page-numbers current">1</span></li>
                            <li><a href="#" class="page-numbers">2</a></li>
                            <li><a href="#" class="next page-numbers">→</a></li>
                        </ul>
                    </nav>
                </div>

            </main><!-- #main -->
        </div><!-- #primary -->

        <div id="sidebar" class="sidebar" role="complementary">
            <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                <ul class="product-categories category-single">
                    <li class="product_cat">
                        <ul class="show-all-cat">
                            <li class="product_cat"><span class="show-all-cat-dropdown">Tüm Kategorileri Göster</span>
                                <ul>
                                    <li class="cat-item"><a href="product-category.html">GPS &amp; Navi</a> <span class="count">(0)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Home Entertainment</a> <span class="count">(1)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Cameras &amp; Photography</a> <span class="count">(5)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Smart Phones &amp; Tablets</a> <span class="count">(20)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Video Games &amp; Consoles</a> <span class="count">(3)</span></li>
                                    <li class="cat-item"><a href="product-category.html">TV &amp; Audio</a> <span class="count">(1)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Gadgets</a> <span class="count">(3)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Car Electronic &amp; GPS</a> <span class="count">(0)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Accessories</a> <span class="count">(11)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Printers &amp; Ink</a> <span class="count">(1)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Software</a> <span class="count">(0)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Office Supplies</a> <span class="count">(0)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Computer Components</a> <span class="count">(1)</span></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li class="cat-item current-cat"><a href="product-category.html">Laptops &amp; Computers</a> <span class="count">(13)</span>
                                <ul class='children'>
                                    <li class="cat-item"><a href="product-category.html">Laptops</a> <span class="count">(6)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Ultrabooks</a> <span class="count">(1)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Computers</a> <span class="count">(0)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Mac Computers</a> <span class="count">(1)</span></li>
                                    <li class="cat-item"><a href="product-category.html">All in One</a> <span class="count">(1)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Servers</a> <span class="count">(1)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Peripherals</a> <span class="count">(1)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Gaming</a> <span class="count">(1)</span></li>
                                    <li class="cat-item"><a href="product-category.html">Accessories</a> <span class="count">(2)</span></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>

            <aside class="widget woocommerce widget_layered_nav marginbottom20">
                <h3 class="widget-title">Fiyat Aralığı</h3>
                <ul class="searchprc">
                    <li><input type="text" placeholder="En yüksek"> </li>
                    <li>- <input type="text" placeholder="En düşük"></li>
                    <li><button><i class="fa fa-search"></i></button></li>
                </ul>
            </aside>

            <div class="clearfix"></div>
            <br><br>

            <aside class="widget widget_electro_products_filter">
                <h3 class="widget-title">Filtreler</h3>
                <aside class="widget woocommerce widget_layered_nav">
                    <h3 class="widget-title">Satış Türü</h3>
                    <ul>
                        <li style=""><a href="#">Sabit Fiyat</a> <span class="count">(4)</span></li>
                        <li style=""><a href="#">İhale</a> <span class="count">(2)</span></li>

                    </ul>
                </aside>

                <aside class="widget woocommerce widget_layered_nav">
                    <h3 class="widget-title">Durum</h3>
                    <ul>
                        <li style=""><a href="#">Sıfır</a> <span class="count">(4)</span></li>
                        <li style=""><a href="#">İkinci El</a> <span class="count">(2)</span></li>
                    </ul>
                </aside>

                <aside class="widget woocommerce widget_layered_nav">
                    <h3 class="widget-title">Kargo</h3>
                    <ul>
                        <li style=""><a href="#">Ücretsiz Kargo</a> <span class="count">(4)</span></li>
                        <li style=""><a href="#">Diğer</a> <span class="count">(2)</span></li>
                    </ul>
                </aside>

                <aside class="widget woocommerce widget_layered_nav">
                    <h3 class="widget-title">Şehir Seçimi</h3>
                    <ul>
                        <li style=""><a href="#">Tüm Şehirler</a> <span class="count">(81)</span></li>
                        <li style=""><a href="#">Gaziantep</a> <span class="count">(2)</span></li>
                    </ul>
                </aside>

            </aside>

        </div>

    </div><!-- .container -->
</div><!-- #content -->