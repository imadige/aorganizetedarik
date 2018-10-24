<?php
    if(!isset($active))
    {
        $active="";
    }

?>
<nav  style="font-size: 14px;">
    <ul class="list-group vertical-menu yamm make-relativee">
        <li class="list-group-item"><span><i class="fa fa-list-ul"></i> Hesap Ayarlarım</span></li>
        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
            <a title="Durum" data-hover="dropdown" href="javascript;;" data-toggle="dropdown" class="dropdown-toggle <?php if($active=="status"){echo "aktif";}?>" aria-haspopup="true">Durum</a>
            <ul role="menu" class=" dropdown-menu">
                <li class="menu-item animate-dropdown menu-item-object-static_block">
                    <div class="yamm-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <ul>
                                                    <li class="nav-title">Durum</li>
                                                    <li class="nav-divider"></li>

                                                    <li><a href="<?=Yii::app()->createUrl("products/list");?>">Ürünler</a></li>
                                                    <li class="nav-divider"></li>

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>

        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
            <a data-hover="dropdown" href="javascript;" data-toggle="dropdown" class="dropdown-toggle <?php if($active=="information"){echo "aktif";}?>" aria-haspopup="true">Bilgilerim / Ayarlarım</a>
            <ul role="menu" class=" dropdown-menu">
                <li class="menu-item animate-dropdown menu-item-object-static_block">
                    <div class="yamm-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <ul>
                                                    <li class="nav-title">Bilgilerim / Ayalarım</li>
                                                    <li class="nav-divider"></li>
                                                    <li><a href="<?=Yii::app()->createUrl("member/updateuser");?>">Bilgileri Düzenle</a></li>
                                                    <li><a href="<?=Yii::app()->createUrl("member/address");?>">Adres Ekle</a></li>
                                                    <li><a href="<?=Yii::app()->createUrl("member/changepassword");?>">Şifre Değiştir</a></li>
                                                    <li class="nav-divider"></li>

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
            <a data-hover="dropdown" href="javascript;;" data-toggle="dropdown" class="dropdown-toggle <?php if($active=="companyinformation"){echo "aktif";}?>" aria-haspopup="true">Şirket Bilgilerim</a>
            <ul role="menu" class=" dropdown-menu">
                <li class="menu-item animate-dropdown menu-item-object-static_block">
                    <div class="yamm-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <ul>
                                                    <li class="nav-title">Şirket Bilgilerim</li>
                                                    <li class="nav-divider"></li>
                                                    <li>
                                                    <li><a href="<?=Yii::app()->createUrl("userscompany/update");?>"> Şirket Bilgisi</a></li>
                                                    <li><a href="<?=Yii::app()->createUrl("member/companylogo");?>"> Şirket Logosu</a></li>
                                                    
                                                    <li class="nav-divider"></li>


                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>

    </ul>
</nav>
