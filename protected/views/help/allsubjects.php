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

                <div class="col-lg-3 solmenu2">
                    <ul>
                        <li><a href=""><i class="fa fa-home fa-2x"></i>Yeni Üyeler</a></li>
                        <li><a href=""><i class="fa fa-user fa-2x"></i>Alıcı Rehberi</a></li>
                        <li><a href=""><i class="fa fa-users fa-2x"></i>Tedarikçi Rehberi</a></li>
                        <li><a href=""><i class="fa fa-gears fa-2x"></i>Üyelik ve Hesap Bilgileri</a></li>
                        <li><a href=""><i class="fa fa-exclamation fa-2x"></i>Sözleşmeler ve Kurallar</a></li>
                    </ul>
                </div>
                <div class="col-lg-9 sagicerik">

                    <div class="helpicon">
                        <i class="fa fa-info fa-4x"></i>
                    </div>
                    <div class="helpbox2">
                        <p>Başlamak için yan taraftaki kategorilerden birinin üzerine gelin. </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>