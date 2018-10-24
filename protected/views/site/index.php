<?php

	require dirname(__FILE__)."/renders/models.php";

?>
<div style="margin-top: 40px;" id="content" class="site-content" tabindex="-1">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<div class="home-v1-deals-and-tabs deals-and-tabs row animate-in-view fadeIn animated" data-animation="fadeIn">
					<div class="deals-block col-lg-4">
						<section class="section-onsale-product">
							<header>
								<h2 class="h1">Bitmek Üzere Olan İhaleler</h2>
							</header><!-- /header -->

							<div class="onsale-products edited1">
								<div class="onsale-product">
									<a href="shop.html">
										<div class="col-sm-6">
											<div class="product-thumbnail">
												<img class="wp-post-image img-responsive" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/onsale-product.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
											</div>
										</div>
										<div class="col-sm-6">
											<h3>Game Console Controller <br>+ USB 3.0 Cable</h3>
												<span class="price">
                            						<span class="electro-price">
                            							<ins><span class="amount">$79.00</span></ins>
                            							<del><span class="amount">$99.00</span></del>
                            						</span>
                            					</span><!-- /.price -->
										</div>


									</a>

									<div class="deal-progress">

										<div style="margin-top: 100px;" class="deal-stock">
											
											<span class="stock-sold">Already Sold: <strong>2</strong></span>
											<span class="stock-available">Available: <strong>26</strong></span>
										</div>

										<div class="progress">
											<span class="progress-bar" style="width:8%">8</span>
										</div>
									</div><!-- /.deal-progress -->

									<div class="deal-countdown-timer">
										<div class="marketing-text text-xs-center">Acele Edin!</div>


										<div id="deal-countdown" class="countdown">
											<span data-value="0" class="days"><span class="value">0</span><b>Gün</b></span>
											<span class="hours"><span class="value">7</span><b>Saat</b></span>
											<span class="minutes"><span class="value">29</span><b>Dakika</b></span>
											<span class="seconds"><span class="value">13</span><b>Saniye</b></span>
										</div>
										<span class="deal-end-date" style="display:none;">2016-12-31</span>
										<script>
											// set the date we're counting down to
											var deal_end_date = document.querySelector(".deal-end-date").textContent;
											var target_date = new Date( deal_end_date ).getTime();

											// variables for time units
											var days, hours, minutes, seconds;

											// get tag element
											var countdown = document.getElementById( 'deal-countdown' );

											// update the tag with id "countdown" every 1 second
											setInterval( function () {

												// find the amount of "seconds" between now and target
												var current_date = new Date().getTime();
												var seconds_left = (target_date - current_date) / 1000;

												// do some time calculations
												days = parseInt(seconds_left / 86400);
												seconds_left = seconds_left % 86400;

												hours = parseInt(seconds_left / 3600);
												seconds_left = seconds_left % 3600;

												minutes = parseInt(seconds_left / 60);
												seconds = parseInt(seconds_left % 60);

												// format countdown string + set tag value
												countdown.innerHTML = '<span data-value="' + days + '" class="days"><span class="value">' + days +  '</span><b>Gün</b></span><span class="hours"><span class="value">' + hours + '</span><b>Saat</b></span><span class="minutes"><span class="value">'
													+ minutes + '</span><b>Dakika</b></span><span class="seconds"><span class="value">' + seconds + '</span><b>Saniye</b></span>';

											}, 1000 );
										</script>
									</div><!-- /.deal-countdown-timer -->
								</div><!-- /.onsale-product -->
							</div><!-- /.onsale-products -->
							
						</section><!-- /.section-onsale-product -->
					
							<aside class="widget electro_posts_carousel_widget">
							<section class="section-posts-carousel">
								<header>

									<h6 class="widget-title">Bizden Haberler</h6> <a style="font-size: 12px;font-weight: bold" href="<?=Yii::app()->createUrl("haber/liste")?>">(Tüm haberler)</a>
									<div class="owl-nav">
										<a href="#posts-carousel-prev" data-target="#posts-carousel-57176fb2e4a7f" class="slider-prev"><i class="fa fa-angle-left"></i></a>
										<a href="#posts-carousel-next" data-target="#posts-carousel-57176fb2e4a7f" class="slider-next"><i class="fa fa-angle-right"></i></a>
									</div>

								</header>

								<div id="posts-carousel-57176fb2e4a7f" class="blog-carousel-homev2">
									<div class="owl-carousel post-carousel blog-carousel-widget">
										
										<?php foreach ($modelHomenews as $key => $value):?>
											<div class='post-item'>
												<a class='post-thumbnail' href="<?=Yii::app()->createUrl("haber/view",array("id"=>$value->news_id))?>">
													<img width='270' height='138' src="<?=$value->imgM_s3url?>" class='wp-post-image' alt='6' />
												</a>
												<div class='post-content'>
													<span class='post-date'>Yayınlanma Tarihi: <?=date("d-m-Y H:i",strtotime($value->dateadd))?></span>
													<a class ='post-name' href="<?=Yii::app()->createUrl("haber/view",array("id"=>$value->news_id))?>"><?=$value->title?></a>
												</div>
											</div>
											
										<?php endforeach ?>


									</div>
								</div>
							</section>
						</aside>
					</div><!-- /.col -->


					<div class="tabs-block col-lg-8">
						<div class="products-carousel-tabs">
							<ul class="nav nav-inline">
								<li class="nav-item"><a class="nav-link active" href="#tab-products-1" data-toggle="tab">İhaleler</a></li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane active" id="tab-products-1" role="tabpanel">
									<div class="woocommerce columns-3">

										<ul class="products columns-3">


											

										<?php foreach($modelHomeProductBid as $key=>$value):
											 
											 if($key==0)
					                         {
					                            $ck="first";
					                         }else if(($key+1)%3==1)
					                         {
					                            $ck="first";
					                         }else if(($key+1)%3==2)
					                         {
					                            $ck="end";
					                         }else{
					                            $ck="";
					                         }


										?>

											<li class="product <?= $ck?>">
												<div class="product-outer1">
													<div class="product-inner">
														<span class="loop-product-categories"><a href="product-category.html" rel="tag"><?=$value->productgroup_name?></a></span>
														<a href="<?=Yii::app()->createUrl('urun/view',array("id"=>Func::buildId($value->code,$value->name)))?>">
															<h3><?=$value->name?></h3>
															<div class="product-thumbnail">
																<img src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->params["cdn"].$value->imageS?>" class="img-responsive" alt="">
															</div>
														</a>

														<div class="price-add-to-cart">
                                                                        <div class="price">
                                                                            <div class="electro-price">

																				<div class="ibf">
																		<span>İhale Başlangıç Fiyatı</span><br>
																		<ins><span> <?=number_format($value->startingprice,2)?> <?=Params::getParams_("currency",$value->currency)?></span></ins>
																	</div>
																	<div class="stf">
																		<span>Son Teklif Fiyatı</span><br>
																		<ins><span> <?=number_format($value->startingprice,2)?> <?=Params::getParams_("currency",$value->currency)?></span></ins>
																	</div>
                                                                            </div>
                                                                        </div>
															
														</div><!-- /.price-add-to-cart -->
														<div class="deal-countdown-timer">
															<div id="deal-countdown1" class="countdown">
																<span data-value="1" class="days"><span class="value HomeProductBid_day_<?=$value->code?>">0</span><b>GÜN</b></span>
																<span class="hours"><span class="value HomeProductBid_hour_<?=$value->code?>">0</span><b>Saat</b></span>
																<span class="minutes"><span class="value HomeProductBid_min_<?=$value->code?>">0</span><b>Dakika</b></span>
																<span class="seconds"><span class="value HomeProductBid_sec_<?=$value->code?>">0</span><b>Saniye</b></span>
															</div>
														</div>
														<div class="hover-area">
															<div class="action-buttons">

																<a rel="nofollow" class="add_to_wishlist" style="cursor:pointer;">Listene Ekle</a>
															</div>
														</div>
													</div><!-- /.product-inner -->
												</div><!-- /.product-outer -->
											</li><!-- /.products -->

											<script>
												 showTimerRemaining(<?=strtotime($value->lastshowdates)?>,$(".HomeProductBid_day_<?=$value->code?>"),$(".HomeProductBid_hour_<?=$value->code?>"),$(".HomeProductBid_min_<?=$value->code?>"),$(".HomeProductBid_sec_<?=$value->code?>"));
											</script>
										<?php endforeach?>



										</ul>
									</div>
								</div>

							</div>
						</div>
					</div><!-- /.tabs-block -->
				</div><!-- /.deals-and-tabs -->


				<section class="home-v1-recently-viewed-products-carousel section-products-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
					<header>
						<h2 class="h1">Fırsat Ürünleri</h2>
						<div class="owl-nav">
							<a href="#products-carousel-prev" data-target=".firsat" class="slider-prev"><i class="fa fa-angle-left"></i></a>
							<a href="#products-carousel-next" data-target=".firsat" class="slider-next"><i class="fa fa-angle-right"></i></a>
						</div>
					</header>

					<div id="recently-added-products-carousel" class="firsat">
						<div class="woocommerce columns-6">
							<div class="products owl-carousel recently-added-products products-carousel columns-6">

						<?php foreach($modelOpportunityproducts as $key=>$value):
									
								?>

								<div class="product">
									<div class="product-outer">
										<div class="product-inner">
											<div class="discount-container pull-right">
												<div class="green_color">
													<div class="discount-detail ">
														<span class="percentage">%</span>
														<span class="rate"><?=$value->discount?></span>
														<span class="indirim">İndirim</span>
													</div>
												</div>
											</div>
											<span class="loop-product-categories"><a href="product-category.html" rel="tag">
											<?=$value->productgroup_name?></a></span>
											<a href="<?=Yii::app()->createUrl('urun/view',array("id"=>Func::buildId($value->code,$value->name)))?>">
												<h3><?=$value->name?></h3>
												<div class="product-thumbnail">
													<img src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->params["cdn"].$value->imageS?>" class="img-responsive" alt="">
												</div>
											</a>

											<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> <?= number_format($value->price,2)?> <?=Params::getParams_("currency",$value->currency)?></span>
                                                                    </span>
                                                                </span>

											</div><!-- /.price-add-to-cart -->

											<div class="hover-area">
												<div class="action-buttons">
													<?php $supplier_id =Yii::app()->user->getState("supplier_id"); if(!isset($supplier_id)) : $style = "style='text-align: center; float: none;'";?>
														<a onclick="addcomparelist(<?=$value->code?>)" class="add-to-compare-link">Karşılaştır</a>
													<?php endif; ?>
													<a <?=$style?> rel="nofollow" onclick="addfollowlist(<?=$value->code?>)" class="add_to_wishlist">Listene Ekle</a>
													
												</div>
											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->
								</div><!-- /.products -->

							<?php endforeach; ?>


							</div>
						</div>
					</div>
				</section>
				<section class="home-v1-recently-viewed-products-carousel section-products-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
					<header>
						<h2 class="h1">Sizin İçin Seçtiklerimiz</h2>
						<div class="owl-nav">
							<a href="#products-carousel-prev" data-target=".sectik" class="slider-prev"><i class="fa fa-angle-left"></i></a>
							<a href="#products-carousel-next" data-target=".sectik" class="slider-next"><i class="fa fa-angle-right"></i></a>
						</div>
					</header>

					<div id="recently-added-products-carousel" class="sectik">
						<div class="woocommerce columns-6">
							<div class="products owl-carousel recently-added-products products-carousel columns-6">


								<?php foreach($modelChoosetoseizeproducts as $key=>$value):
									
								?>

								<div class="product">
									<div class="product-outer">
										<div class="product-inner">

										   <?php if($value->discount!=""):?>
												<div class="discount-container pull-right">
													<div class="green_color">
														<div class="discount-detail ">
															<span class="percentage">%</span>
															<span class="rate"><?=$value->discount?></span>
															<span class="indirim">İndirim</span>
														</div>
													</div>
												</div>
											<?php endif?>

											<span class="loop-product-categories"><a href="product-category.html" rel="tag">
											<?=$value->productgroup_name?></a></span>
											<a href="<?=Yii::app()->createUrl('urun/view',array("id"=>Func::buildId($value->code,$value->name)))?>">
												<h3><?=$value->name?></h3>
												<div class="product-thumbnail">
													<img src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->params["cdn"].$value->imageS?>" class="img-responsive" alt="">
												</div>
											</a>

											<div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> <?= number_format($value->price,2)?> <?=Params::getParams_("currency",$value->currency)?></span></ins>
                                                                    <del><span class="amount"><?=Func::inidianCalculation($value->price,$value->discount,2)?> <?=Params::getParams_("currency",$value->currency)?></span></del>
                                                                    <span class="amount"> </span>
                                                                </span>
                                                            </span>
											</div><!-- /.price-add-to-cart -->

											<div class="hover-area">
												<div class="action-buttons">
													<?php $supplier_id =Yii::app()->user->getState("supplier_id"); if(!isset($supplier_id)) : $style = "style='text-align: center; float: none;'";?>
														<a onclick="addcomparelist(<?=$value->code?>)" class="add-to-compare-link">Karşılaştır</a>
													<?php endif; ?>
													<a <?=$style?> rel="nofollow" onclick="addfollowlist(<?=$value->code?>)" class="add_to_wishlist">Listene Ekle</a>
												</div>
											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->
								</div><!-- /.products -->

							<?php endforeach?>




							</div>
						</div>
					</div>
				</section>
				<section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">

					<header>

						<h2 class="h1">En Çok Satılanlar</h2>

						<ul class="nav nav-inline">

							<li class="nav-item active"><span class="nav-link">En Çok Satılan 20 Ürün</span></li>

							<li class="nav-item"><a class="nav-link" href="product-category.html">Kategori 1</a></li>

							<li class="nav-item"><a class="nav-link" href="product-category.html">Kategori 2</a></li>

							<li class="nav-item"><a class="nav-link" href="product-category.html">Kategori 3</a></li>
						</ul>
					</header>

					<div id="home-v1-product-cards-careousel">
						<div class="woocommerce columns-3 home-v1-product-cards-carousel product-cards-carousel owl-carousel">

							<ul class="products columns-3">
								<li class="product product-card first">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="media-object wp-post-image img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/4.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">TVs</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Widescreen 4K SUHD TV</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $800</span>
                                                                    </span>
                                                                </span>

													
												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card ">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="media-object wp-post-image img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/6.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Peripherals</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>External SSD USB 3.1  750 GB</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $600</span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card last">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="media-object wp-post-image img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/5.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Printers</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Full Color LaserJet Pro  M452dn</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card first">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="img-responsive media-object wp-post-image" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/1.jpg" alt="">

											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Smartphones</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Notebook Purple G752VT-T7008T</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card ">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="img-responsive media-object wp-post-image" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/3.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Headphone Cases</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Universal Headphones Case in Black</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card last">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="img-responsive media-object wp-post-image" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/2.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Smartphones</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $500</span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
							</ul>
							<ul class="products columns-3">
								<li class="product product-card first">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="img-responsive media-object wp-post-image" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/2.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Headphone Cases</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Universal Headphones Case in Black</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $1500</span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card ">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="img-responsive media-object wp-post-image" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/5.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Printers</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Full Color LaserJet Pro  M452dn</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $500</span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card last">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="img-responsive media-object wp-post-image" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/4.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">TVs</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Widescreen 4K SUHD TV</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $400</span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card first">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="img-responsive media-object wp-post-image" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/3.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Smartphones</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Notebook Purple G752VT-T7008T</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card ">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="img-responsive media-object wp-post-image" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/6.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Peripherals</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>External SSD USB 3.1  750 GB</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
								<li class="product product-card last">

									<div class="product-outer">
										<div class="media product-inner">

											<a class="media-left" href="<?=Yii::app()->createUrl('urun/view')?>" title="Pendrive USB 3.0 Flash 64 GB">
												<img class="img-responsive media-object wp-post-image" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/product-cards/1.jpg" alt="">
											</a>

											<div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Smartphones</a>
                                                            </span>

												<a href="<?=Yii::app()->createUrl('urun/view')?>">
													<h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
												</a>

												<div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

												</div><!-- /.price-add-to-cart -->

												<div class="hover-area">
													<div class="action-buttons">
														<a href="#" class="add_to_wishlist">Wishlist</a>
														<a href="#" class="add-to-compare-link">Compare</a>
													</div>
												</div>

											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->

								</li><!-- /.products -->
							</ul>
						</div>
					</div><!-- #home-v1-product-cards-careousel -->

				</section>
				<section class="home-v1-recently-viewed-products-carousel section-products-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
					<header>
						<h2 class="h1">En Son Eklenen Ürünler</h2>
						<div class="owl-nav">
							<a href="#products-carousel-prev" data-target="#recently-added-products-carousel" class="slider-prev"><i class="fa fa-angle-left"></i></a>
							<a href="#products-carousel-next" data-target="#recently-added-products-carousel" class="slider-next"><i class="fa fa-angle-right"></i></a>
						</div>
					</header>

					<div id="recently-added-products-carousel">
						<div class="woocommerce columns-6">
							<div class="products owl-carousel recently-added-products products-carousel columns-6">


								<?php foreach($modelRecentlyadded as $key=>$value):
									
								?>

								<div class="product">
									<div class="product-outer">
										<div class="product-inner">

										   <?php if($value->discount!=""):?>
												<div class="discount-container pull-right">
													<div class="green_color">
														<div class="discount-detail ">
															<span class="percentage">%</span>
															<span class="rate"><?=$value->discount?></span>
															<span class="indirim">İndirim</span>
														</div>
													</div>
												</div>
											<?php endif?>

											<span class="loop-product-categories"><a href="product-category.html" rel="tag">
											<?=$value->productgroup_name?></a></span>
											<a href="<?=Yii::app()->createUrl('urun/view',array("id"=>Func::buildId($value->code,$value->name)))?>">
												<h3><?=$value->name?></h3>
												<div class="product-thumbnail">
													<img src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->params["cdn"].$value->imageS?>" class="img-responsive" alt="">
												</div>
											</a>

											<div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> <?= number_format($value->price,2)?> <?=Params::getParams_("currency",$value->currency)?></span></ins>
                                                                    <del><span class="amount"><?=Func::inidianCalculation($value->price,$value->discount,2)?> <?=Params::getParams_("currency",$value->currency)?></span></del>
                                                                    <span class="amount"> </span>
                                                                </span>
                                                            </span>
											</div><!-- /.price-add-to-cart -->

											<div class="hover-area">
												<div class="action-buttons">

													<?php $supplier_id =Yii::app()->user->getState("supplier_id"); if(!isset($supplier_id)) : $style = "style='text-align: center; float: none;'";?>
														<a onclick="addcomparelist(<?=$value->code?>)" class="add-to-compare-link">Karşılaştır</a>

													<?php endif; ?>
													<a <?=$style?> rel="nofollow" onclick="addfollowlist(<?=$value->code?>)" class="add_to_wishlist">Listene Ekle</a>
												</div>
											</div>
										</div><!-- /.product-inner -->
									</div><!-- /.product-outer -->
								</div><!-- /.products -->

							<?php endforeach?>



							</div>
						</div>
					</div>
				</section>
				<section class="home-list-categories animate-in-view fadeIn animated" data-animation="fadeIn">
					<header>
						<h2 class="h1">Bu ayın En Çok İşlem Gören Kategorileri</h2>
					</header>
					<ul class="categories">
						<li class="category">
							<div class="media">
								<a class="media-left" href="product-category.html">
									<img data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/products/1.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
								</a><!-- /.media-left -->

								<div class="media-body">
									<h4 class="media-heading"><a href="product-category.html">Smart Phones & Tablets</a></h4>
									<ul class="sub-categories list-unstyled">
										<li class="cat-item">
											<a href="product-category.html" >Accessories</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Chargers</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Powerbanks</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Smartphones</a>
										</li>
									</ul>
								</div><!-- /.media-body -->
							</div><!-- /.media -->
							<a class="see-all" href="#">Tümü Gör</a>
						</li>
						<li class="category">
							<div class="media">
								<a class="media-left" href="product-category.html">
									<img data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/products/2.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
								</a><!-- /.media-left -->

								<div class="media-body">
									<h4 class="media-heading"><a href="product-category.html">Video Games & Consoles</a></h4>
									<ul class="sub-categories list-unstyled">
										<li class="cat-item">
											<a href="product-category.html" >Accessories</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Chargers</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Powerbanks</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Smartphones</a>
										</li>
									</ul>
								</div><!-- /.media-body -->
							</div><!-- /.media -->
							<a class="see-all" href="#">Tümü Gör</a>
						</li>
						<li class="category">
							<div class="media">
								<a class="media-left" href="product-category.html">
									<img data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/products/3.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
								</a><!-- /.media-left -->

								<div class="media-body">
									<h4 class="media-heading"><a href="product-category.html">Gadgets</a></h4>
									<ul class="sub-categories list-unstyled">
										<li class="cat-item">
											<a href="product-category.html" >Accessories</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Chargers</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Powerbanks</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Smartphones</a>
										</li>
									</ul>
								</div><!-- /.media-body -->
							</div><!-- /.media -->
							<a class="see-all" href="#">Tümü Gör</a>
						</li>
						<li class="category">
							<div class="media">
								<a class="media-left" href="product-category.html">
									<img data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/products/4.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
								</a><!-- /.media-left -->

								<div class="media-body">
									<h4 class="media-heading"><a href="product-category.html">Home Entertainment</a></h4>
									<ul class="sub-categories list-unstyled">
										<li class="cat-item">
											<a href="product-category.html" >Accessories</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Chargers</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Powerbanks</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Smartphones</a>
										</li>
									</ul>
								</div><!-- /.media-body -->
							</div><!-- /.media -->
							<a class="see-all" href="#">Tümü Gör</a>
						</li>
						<li class="category">
							<div class="media">
								<a class="media-left" href="product-category.html">
									<img data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/products/5.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
								</a><!-- /.media-left -->

								<div class="media-body">
									<h4 class="media-heading"><a href="product-category.html">Laptops & Computers</a></h4>
									<ul class="sub-categories list-unstyled">
										<li class="cat-item">
											<a href="product-category.html" >Accessories</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Chargers</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Powerbanks</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Smartphones</a>
										</li>
									</ul>
								</div><!-- /.media-body -->
							</div><!-- /.media -->
							<a class="see-all" href="#">Tümü Gör</a>
						</li>
						<li class="category">
							<div class="media">
								<a class="media-left" href="product-category.html">
									<img data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/products/6.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
								</a><!-- /.media-left -->

								<div class="media-body">
									<h4 class="media-heading"><a href="product-category.html">Accessories</a></h4>
									<ul class="sub-categories list-unstyled">
										<li class="cat-item">
											<a href="product-category.html" >Accessories</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Chargers</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Powerbanks</a>
										</li>
										<li class="cat-item">
											<a href="product-category.html" >Smartphones</a>
										</li>
									</ul>
								</div><!-- /.media-body -->
							</div><!-- /.media -->
							<a class="see-all" href="#">Tümü Gör</a>
						</li>
					</ul>
				</section>
			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .container -->
</div><!-- #content -->


<!--
<section class="brands-carousel">
	<h2 class="sr-only">Brands Carousel</h2>
	<div class="container">
		<div id="owl-brands" class="owl-brands owl-carousel unicase-owl-carousel owl-outer-nav">

			<div class="item">

				<a href="#">

					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>Acer</h4>
							</div>
						</figcaption>

						<img src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/brands/1.png" class="img-responsive" alt="">

					</figure>
				</a>
			</div>



		</div>

	</div>
</section>

-->

<div class="footer-widgets">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-xs-12">
				<aside class="widget electro_posts_carousel_widget">
					<section class="section-posts-carousel">
						<header>

							<h3 class="widget-title">Bizden Haberler</h6> <a style="font-size: 12px;font-weight: bold" href="<?=Yii::app()->createUrl("haber/list")?>">(Tüm haberler)</h3>
							<div class="owl-nav">
								<a href="#posts-carousel-prev" data-target="#posts-carousel-57176fb2e4a7f" class="slider-prev"><i class="fa fa-angle-left"></i></a>
								<a href="#posts-carousel-next" data-target="#posts-carousel-57176fb2e4a7f" class="slider-next"><i class="fa fa-angle-right"></i></a>
							</div>

						</header>

						<div id="posts-carousel-57176fb2e4a7f" class="blog-carousel-homev2">
							<div class="owl-carousel post-carousel blog-carousel-widget">
								
								
										<?php foreach ($modelHomenews as $key => $value):?>
											<div class='post-item'>
												<a class='post-thumbnail' href="<?=Yii::app()->createUrl("haber/view",array("id"=>$value->news_id))?>">
													<img width='270' height='138' src="<?=$value->imgM_s3url?>" class='wp-post-image' alt='6' />
												</a>
												<div class='post-content'>
													<span class='post-date'>Yayınlanma Tarihi: <?=date("d-m-Y H:i",strtotime($value->dateadd))?></span>
													<a class ='post-name' href="<?=Yii::app()->createUrl("haber/view",array("id"=>$value->news_id))?>"><?=$value->title?></a>
												</div>
											</div>
											
										<?php endforeach ?>

							</div>
						</div>
					</section>
				</aside>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-12">
				<aside class="widget clearfix">
					<div class="body"><h4 class="widget-title">İlginizi Çekebilecek Ürünler</h4>
						<ul class="product_list_widget">
							<li>
								<a href="<?=Yii::app()->createUrl('urun/view')?>" title="Notebook Black Spire V Nitro  VN7-591G">
									<img class="wp-post-image" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/footer/3.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
									<span class="product-title">Notebook Black Spire V Nitro  VN7-591G</span>
								</a>
								<span class="electro-price"><ins><span class="amount">&#36;1,999.00</span></ins> <del><span class="amount">&#36;2,299.00</span></del></span>
							</li>

							<li>
								<a href="<?=Yii::app()->createUrl('urun/view')?>" title="Tablet Red EliteBook  Revolve 810 G2">
									<img class="wp-post-image" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/footer/4.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
									<span class="product-title">Tablet Red EliteBook  Revolve 810 G2</span>
								</a>
								<span class="electro-price"><ins><span class="amount">&#36;1,999.00</span></ins> <del><span class="amount">&#36;2,299.00</span></del></span>
							</li>

							<li>
								<a href="<?=Yii::app()->createUrl('urun/view')?>" title="Widescreen 4K SUHD TV">
									<img class="wp-post-image" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/footer/5.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
									<span class="product-title">Widescreen 4K SUHD TV</span>
								</a>
								<span class="electro-price"><ins><span class="amount">&#36;2,999.00</span></ins> <del><span class="amount">&#36;3,299.00</span></del></span>
							</li>
						</ul>
					</div>
				</aside>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-12">
				<aside class="widget clearfix">
					<div class="body"><h4 class="widget-title">Müşterilerimizden Görüşler</h4>
						<ul  style="height: 300px; overflow-y: scroll" class="product_list_widget">
							<li>
								<a href="<?=Yii::app()->createUrl('urun/view')?>" title="Notebook Black Spire V Nitro  VN7-591G">
									<img class="wp-post-image" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/footer/3.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
									<span class="product-title">Beşler Grup İnsan Kaynakları</span>
								</a>
								<span class="">Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet.</span>
							</li>
							<li>
								<a href="<?=Yii::app()->createUrl('urun/view')?>" title="Notebook Black Spire V Nitro  VN7-591G">
									<img class="wp-post-image" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/footer/3.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
									<span class="product-title">Beşler Grup İnsan Kaynakları</span>
								</a>
								<span class="">Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet.</span>
							</li>
							<li>
								<a href="<?=Yii::app()->createUrl('urun/view')?>" title="Notebook Black Spire V Nitro  VN7-591G">
									<img class="wp-post-image" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/footer/3.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
									<span class="product-title">Beşler Grup İnsan Kaynakları</span>
								</a>
								<span class="">Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet.</span>
							</li>

							<li>
								<a href="<?=Yii::app()->createUrl('urun/view')?>" title="Notebook Black Spire V Nitro  VN7-591G">
									<img class="wp-post-image" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/footer/3.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
									<span class="product-title">Beşler Grup İnsan Kaynakları</span>
								</a>
								<span class="">Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet.</span>
							</li>

							<li>
								<a href="<?=Yii::app()->createUrl('urun/view')?>" title="Notebook Black Spire V Nitro  VN7-591G">
									<img class="wp-post-image" data-echo="<?php echo Yii::app()->request->baseUrl; ?>/front/images/footer/3.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/front/images/blank.gif" alt="">
									<span class="product-title">Beşler Grup İnsan Kaynakları</span>
								</a>
								<span class="">Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet. Lorem dolar ipsum sit amet.</span>
							</li>

						</ul>
					</div>
				</aside>

			</div>
		</div>
	</div>
</div>