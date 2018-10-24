<div class="container">
    <nav class="woocommerce-breadcrumb">
        <a href="<?=Yii::app()->baseUrl;?>">OrganizeTedarik</a>
        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
        <a href="<?=Yii::app()->createUrl('help/index');?>">Yardım</a>

    </nav><!-- /.woocommerce-breadcrumb -->
</div>
<div class="electro-tabs electro-tabs-wrapper wc-tabs-wrapper">
    <div class="electro-tab" id="tab-profil">
        <div style="padding: 20px;" class="container">
            <h3>Organizetedarik Yardım</h3>
            <hr>
            <?php $this->renderPartial("menu"); ?>
            <div class="advanced-review row helpbox">
                <div class="col-xs-12 col-md-12">
                <div class="col-md-12">
                    <h6 style="text-align: center; padding: 10px">Size Nasıl Yardımcı Olabiliriz ?</h6>
                    <form  method="get" action="/">
                        <div class="input-group">
                            <input style="max-width: 900px;" type="text" class="form-control" placeholder="Arama Yapmak İçin Bir Kelime Yazın (Kategori, iade, ödeme)">
                              <span class="input-group-btn">
                                <button class="btn ubtn-success btnsize" type="button"><i style="position: relative; bottom: 2px; right: 3px" class="fa fa-search"></i></button>
                              </span>
                        </div><!-- /input-group -->
                    </form>
                </div>


                </div><!-- /.col -->
                <div class="clearfix"></div>

            </div>
            <div class="advanced-review row helpbox1">
                <div class="col-xs-12 col-md-12">
                <div class="col-md-12">
                    <h6 style="padding: 10px">Duyurular</h6>
                    <hr>
                    <p style="font-weight: bold; color: #0A246A"><a href="<?=Yii::app()->createUrl("help/announcement");?>"><?=$announceModel->title;?></a></p>
                    <p><?=$announceModel->content;?></p>
                </div>


                </div><!-- /.col -->
                <div class="clearfix"></div>

            </div>
            <div class="advanced-review row helpbox1">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bslk">Popüler Sorular</div>
                        <div class="sklar">
                            <ul>
                                <li><a href="">adadad</a></li>
                                <li><a href="">adadad</a></li>
                                <li><a href="">adadad</a></li>
                                <li><a href="">adadad</a></li>
                                <li><a href="">adadad</a></li>
                                <li><a href="">adadad</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="bslk">Hazır Hizmetler</div>
                        <div class="sklar">
                           <ul>
                               <li><a href="">adadad</a></li>
                               <li><a href="">adadad</a></li>
                               <li><a href="">adadad</a></li>
                               <li><a href="">adadad</a></li>
                               <li><a href="">adadad</a></li>
                               <li><a href="">adadad</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>

        </div>
    </div>
</div>