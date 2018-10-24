<div id="content" style="margin-bottom: 0!important;" class="site-content" tabindex="-1">
	<div class="container">

		<nav class="woocommerce-breadcrumb" ><a href="<?=Yii::app()->createUrl("site/index") ?>">Anasayfa</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Hesap</nav><!-- .woocommerce-breadcrumb -->
		<hr>
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<article id="post-8" class="hentry">

					<div class="entry-content">
						<div class="woocommerce">
							<div class="customer-login-form">
								<span class="or-text">Veya</span>

								<div class="col2-set" id="customer_login">

									<div class="col-1">


										<h2>Giriş Yap</h2>


										<div class="tabs-block">
											<div class="products-carousel-tabs">
												<ul class="nav nav-inline">
													<li class="nav-item"><a id="login-tab-1" class="nav-link  <?php if(!isset($_GET["login"])){?>
active<?php }?>" href="#tab-login-2" data-toggle="tab">Üye</a></li>
													<li class="nav-item"><a class="nav-link <?php if(isset($_GET["login"]) && $_GET["login"]==2){?>
active<?php }?>" href="#tab-login-1" data-toggle="tab">Tedarikçi</a></li>

												</ul>
											</div>

											<div class="tab-content">
												<div class="tab-pane <?php if(isset($_GET["login"]) && $_GET["login"]==2){?>
active<?php }?>" id="tab-login-1" role="tabpanel">

													<div class="col-sm-12 social-buttons">
														<p class="form-row form-row-wide">
															<a class="btn btn-block btn-social btn-facebook" href="">
																<span style="margin-top: 7px;" class="fa fa-facebook"></span> Facebook ile giriş yap veya üye ol.
															</a>
														</p>
													</div>

													<hr>

													<p class="form-row form-row-wide">
														<label for="username">Email adresi<span class="required"> (*)</span></label>
														<input type="text" class="input-text"  id="supplier_login_username" value="" />
													</p>

													<p class="form-row form-row-wide">
														<label for="password">Şifre<span class="required"> (*)</span></label>
														<input class="input-text" type="password" id="supplier_login_password" />
													</p>

													<p id="supplier_login_error" class="error_system"></p>


													<p class="form-row">
														<input onclick="supplierlogin()" class="button" type="button" value="Tedarikçi olarak Girişi Yap" name="login">
														<label for="rememberme" class="inline"><input type="checkbox" id="supplier_login_rememberme" value="1" /> Beni Hatırla</label>
													</p>

													<p class="lost_password"><a href="<?=Yii::app()->createUrl("site/forgotpassword");?>">Şifrenizi mi Unuttunuz?</a></p>

												</div>


												<div class="tab-pane <?php if(!isset($_GET["login"])){?>
active<?php }?>" id="tab-login-2" role="tabpanel">

													<div class="col-sm-12 social-buttons">
														<p class="form-row form-row-wide">
															<a class="btn btn-block btn-social btn-facebook" href="javascript:;" onclick="userFLogin()">
																<span style="margin-top: 7px;" class="fa fa-facebook"></span> Facebook ile giriş yap veya üye ol.
															</a>
														</p>
													</div>

													<hr>

													<p class="form-row form-row-wide">
														<label for="username">Email adresi<span class="required"> (*)</span></label>
														<input type="text" class="input-text"  id="user_login_username" value="" />
													</p>

													<p class="form-row form-row-wide">
														<label for="password">Şifre<span class="required"> (*)</span></label>
														<input class="input-text" type="password"  id="user_login_password" />
													</p>

													<p id="user_login_error" class="error_system"></p>

													<p class="form-row">
														<input onclick="userlogin()" class="button" type="button" value="Üye Girişi Yap" name="login">
														<label for="rememberme" class="inline"><input type="checkbox" id="user_login_rememberme" value="1" /> Beni Hatırla</label>
													</p>

													<p class="lost_password"><a href="<?=Yii::app()->createUrl("site/forgotpassword");?>">Şifrenizi mi Unuttunuz?</a></p>

												</div>
											</div>
										</div>

									</div><!-- .col-1 -->

									<div class="col-2">
										<h2>Üye Ol</h2>
										<div class="tabs-block">
											<div class="products-carousel-tabs">
												<ul class="nav nav-inline">
													<li class="nav-item"><a class="nav-link  active" href="#tab-products-2" data-toggle="tab">Üye</a></li>
													<li class="nav-item"><a class="nav-link" href="#tab-products-1" data-toggle="tab">Tedarikçi</a></li>

												</ul>
											</div>
											<div class="tab-content">
												<div class="tab-pane" id="tab-products-1" role="tabpanel">

													<p style="margin-top: 15px;" class="form-row form-row-wide">
														<label for="reg_email">Ad Soyad<span class="required">*</span></label>
														<input type="text" class="input-text"  id="supplier_register_name" value="" />
													</p>

													<p id="supplier_register_error_name" class="error_system"></p>

													<p class="form-row form-row-wide">
														<label for="reg_email">Email adresiniz<span class="required">*</span></label>
														<input type="text" class="input-text"  id="supplier_register_email" value="" />
													</p>

													<p id="supplier_register_error_email" class="error_system"></p>

													<p class="form-row form-row-wide">
														<label for="reg_email">Tekrar Email adresiniz<span class="required">*</span></label>
														<input type="text" class="input-text" id="supplier_register_remail" value="" />
													</p>

													<p id="supplier_register_error_remail" class="error_system"></p>

													<p class="form-row form-row-wide">
														<label for="reg_email">Parolanız<span class="required">*</span></label>
														<input type="password" class="input-text" id="supplier_register_password" value="" />
													</p>

													<p id="supplier_register_error_password" class="error_system"></p>

													<p class="form-row"><input onclick="supplierregister()" type="button" class="button" name="register" value="Tedarikçi olarak Üye Ol" /></p>

													<p id="supplier_register_error" class="error_system"></p>
												</div>

												<div class="tab-pane active" id="tab-products-2" role="tabpanel">

													<p style="margin-top: 15px;" class="form-row form-row-wide">
														<label for="reg_email">Ad Soyad<span class="required">*</span></label>
														<input type="text" class="input-text"  id="user_register_name" value="" />
													</p>

													<p id="user_register_error_name" class="error_system"></p>

													<p class="form-row form-row-wide">
														<label for="reg_email">Email adresiniz<span class="required">*</span></label>
														<input type="text" class="input-text"  id="user_register_email" value="" />
													</p>

													<p id="user_register_error_email" class="error_system"></p>

													<p class="form-row form-row-wide">
														<label for="reg_email">Tekrar Email adresiniz<span class="required">*</span></label>
														<input type="text" class="input-text" id="user_register_remail" value="" />
													</p>

													<p id="user_register_error_remail" class="error_system"></p>

													<p class="form-row form-row-wide">
														<label for="reg_email">Parolanız<span class="required">*</span></label>
														<input type="password" class="input-text " id="user_register_password" value="" />
													</p>

													<p id="user_register_error_password" class="error_system"></p>


													<p class="form-row"><input onclick="userregister()" type="button" class="button" name="register" value="Üye Ol" /></p>

													<p id="user_register_error" class="error_system"></p>

												</div>
											</div>
										</div>


									</div><!-- .col-2 -->

								</div><!-- .col2-set -->

							</div><!-- /.customer-login-form -->
							<hr>
						</div><!-- .woocommerce -->
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .col-full -->
</div><!-- #content -->


