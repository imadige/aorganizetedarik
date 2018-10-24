
<link href="<?=Yii::app()->request->baseUrl;?>/front/css/thumbnail-gallery.css" rel="stylesheet">
<link href="<?=Yii::app()->request->baseUrl;?>/front/css/colorbox.css" rel="stylesheet">

<script src="<?=Yii::app()->request->baseUrl;?>/front/js/jquery.colorbox.js"></script>

<script>
    $(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
        $(".group1").colorbox({rel:'group1'});

        $('.non-retina').colorbox({rel:'group5', transition:'none'});
        $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

        //Example of preserving a JavaScript event for inline calls.
        $("#click").click(function(){
            $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
            return false;
        });
    });
</script>

<div class="electro-tabs electro-tabs-wrapper wc-tabs-wrapper">

    <div class="electro-tab" id="tab-profil">
        <div class="container">
            <div style="border: 1px solid #e5e5e5;" class="tab-content">
                <ul class="ec-tabs">
                    <li class="reviews_tab active">
                        <a>Profil</a>
                    </li>
                </ul>

                <div  id="reviews" class="electro-advanced-reviews">
                    <div class="advanced-review row">

                        <?php

                            $this->renderPartial("leftinformations");

                        ?>

                        <div class="col-xs-12 col-md-8">
                            <hr class="hidden-lg-up hidden-md-up">

                            <div class="row">

                                <div class="col-lg-12">
                                    <h1 class="page-header">Şirket Belgeleri</h1>
                                    <hr>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a href="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" class="group1" >
                                        <img class="img-responsive center-block" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a href="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" class="group1" >
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a href="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" class="group1" >
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a href="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" class="group1" >
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a href="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" class="group1" >
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a href="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" class="group1" >
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a href="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" class="group1" >
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a href="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" class="group1" >
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a href="<?=Yii::app()->request->baseUrl;?>/front/images/products/1.jpg" class="group1" >
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.col -->

                    </div><!-- /.row -->

                </div><!-- /.electro-advanced-reviews -->

            </div>
        </div>
    </div><!-- /.electro-tab -->

    <div class="electro-tab" id="tab-ayorum">
        <div class="container">
            <div style="border: 1px solid #e5e5e5;" class="tab-content">
                <ul class="ec-tabs">
                    <li class="reviews_tab">
                        <a href="#tab-profil">Kullanıcı Profili</a>
                    </li>
                    <li class="specification_tab active">
                        <a href="#tab-ayorum">Aldığı Yorumlar</a>
                    </li>
                    <li class="specification_tab">
                        <a href="#tab-yyorum">Yaptığı Yorumlar</a>
                    </li>

                </ul>

                <div id="comments">

                    <ol class="commentlist">
                        <li itemprop="review" class="comment even thread-even depth-1">

                            <div id="comment-390" class="comment_container">

                                <div class="comment-text">

                                    <p class="meta">
                                        <strong>John Doe</strong> &ndash;
                                        <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">March 3, 2016</time>:

                                    <div class="star-rating" title="Rated 4 out of 5">
                                        <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                    </div>
                                    </p>



                                    <div itemprop="description" class="description">
                                        <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </li><!-- #comment-## -->
                        <hr>
                        <li class="comment odd alt thread-odd thread-alt depth-1">

                            <div class="comment_container">

                                <div class="comment-text">



                                    <p class="meta">
                                        <strong>Anna Kowalsky</strong> &ndash;
                                        <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                                    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 5 out of 5">
                                        <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                                    </div>
                                    </p>


                                    <div itemprop="description" class="description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </li><!-- #comment-## -->
                        <hr>
                        <li class="comment odd alt thread-odd thread-alt depth-1">

                            <div class="comment_container">

                                <div class="comment-text">



                                    <p class="meta">
                                        <strong>Anna Kowalsky</strong> &ndash;
                                        <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                                    <div itemprop="reviewRating" class="star-rating" title="Rated 5 out of 5">
                                        <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                                    </div>
                                    </p>


                                    <div itemprop="description" class="description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                                        </p>
                                    </div>


                                </div>
                            </div>
                        </li><!-- #comment-## -->
                        <hr>
                    </ol><!-- /.commentlist -->

                </div><!-- /#comments -->

                <div class="clear"></div>

            </div>
        </div>
    </div><!-- /.electro-tab -->

</div><!-- /.electro-tabs -->

