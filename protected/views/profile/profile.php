

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
                            <div style="padding: 20px 0" class="inftitle">Bu kullanıcı son 12 ayda <span class="text-info"><b>1698</b></span> değerlendirmede <span class="text-success"><b>%99</b></span> olumlu puan aldı.</div>
                            <hr>
                            <div class="inftitle"><b>Detaylı Satıcı Değerlendirme (Tüm satışlar)</b></div>
                            <hr>
                            <table class="table table-resposive">
                            <div class="rating-histogram">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Kriterler</th>
                                            <th style="text-align: center" colspan="2">Puan</th>
                                            <th style="text-align: center">Değerlendirme Adedi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                Ürünün açıklamalarda anlatıldığı gibi olması
                                            </td>
                                            <div class="rating-bar">
                                                <td>
                                                    <div class="star-rating" title="Rated 5 out of 5">
                                                        <span style="width:36%"></span>
                                                    </div>
                                                </td>
                                                <td><b>2.3</b></td>
                                                <td>
                                                    <div class="rating-count">187</div>

                                                </td>
                                            </div><!-- .rating-bar -->

                                        </tr>
                                        <tr>
                                            <td>
                                                Satıcının alıcıyla olan iletişimi
                                            </td>
                                            <div class="rating-bar">
                                                <td>
                                                    <div class="star-rating" title="Rated 5 out of 5">
                                                        <span style="width:70%"></span>
                                                    </div>
                                                </td>
                                                <td><b>3.3</b></td>
                                                <td>
                                                    <div class="rating-count">98</div>

                                                </td>
                                            </div><!-- .rating-bar -->

                                        </tr>
                                        <tr>
                                            <td>
                                                Ürünün zamanında kargoya verilmesi
                                            </td>
                                            <div class="rating-bar">
                                                <td>
                                                    <div class="star-rating" title="Rated 5 out of 5">
                                                        <span style="width:100%"></span>
                                                    </div>
                                                </td>
                                                <td><b>3.8</b></td>
                                                <td>
                                                    <div class="rating-count">1</div>

                                                </td>
                                            </div><!-- .rating-bar -->

                                        </tr>
                                        <tr>
                                            <td>
                                                Ürünün kargo ücreti
                                            </td>
                                            <div class="rating-bar">
                                                <td>
                                                    <div class="star-rating" title="Rated 5 out of 5">
                                                        <span style="width:30%"></span>
                                                    </div>
                                                </td>
                                                <td><b>4.3</b></td>
                                                <td>
                                                    <div class="rating-count">80</div>

                                                </td>
                                            </div><!-- .rating-bar -->

                                        </tr>
                                        <tr>
                                            <td>
                                                Ürünün kargo (taşıma, teslimat) hizmeti
                                            </td>
                                            <div class="rating-bar">
                                                <td>
                                                    <div class="star-rating" title="Rated 5 out of 5">
                                                        <span style="width:50%"></span>
                                                    </div>
                                                </td>
                                                <td><b>4.7</b></td>
                                                <td>
                                                    <div class="rating-count">5</div>

                                                </td>
                                            </div><!-- .rating-bar -->

                                        </tr>

                                    </tbody>

                            </div>
                            </table>
                            <hr>
                            <div class="avg-rating">
                                <span class="avg-rating-number">4.3</span> Ortalama Puan
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