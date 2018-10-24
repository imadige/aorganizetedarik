var params={};

function isInt(n){
    return Number(n) === n && n % 1 === 0;
}

function isFloat(n){
    return Number(n) === n && n % 1 !== 0;
}

function validateEmail(email) {
     var re = /^[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/
    return re.test(email);
}

function errorGoto(element) {
    $('html, body').animate({
        scrollTop: $(element).offset().top-100 + 'px'
    }, 600);
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function userlogin(){

	var control=true;

	$('#user_login_error').html("");

	if($('#user_login_username').val().trim()=="")
	{
		control=false;
		$('#user_login_error').html("Kullanıcı veya e-mail boş olamaz.");
	}else if($('#user_login_password').val().trim()=="")
	{

		control=false;
		$('#user_login_error').html("Parola boş olamaz.");
	}


	if(control==true)
	{
		var data={
			username:$('#user_login_username').val().trim(),
			password:$('#user_login_password').val().trim(),
			rememberme:$('#user_login_rememberme').prop("checked")==true?1:0,
		};
		var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

		$.ajax({
		 type: "POST",
		 dataType:'json',  
		 url: params.site+"/site/userlogin", 
		 data: dataString,
		 timeout: 30000,
		 success: function(data)
		 {

			if(data.sonuc==1)
			{

				window.location=params.site+"/member/uaccount";

			}else{

				$('#user_login_error').html("Kullanıcı ve/veya Parola hatalı.");
			} 
		 }
		});
	}
	
}

function supplierlogin(){

	var control=true;

	$('#supplier_login_error').html("");

	if($('#supplier_login_username').val().trim()=="")
	{
		control=false;
		$('#supplier_login_error').html("Kullanıcı veya e-mail boş olamaz.");
	}else if($('#supplier_login_password').val().trim()=="")
	{

		control=false;
		$('#supplier_login_error').html("Parola boş olamaz.");
	}


	if(control==true)
	{
		var data={
			username:$('#supplier_login_username').val().trim(),
			password:$('#supplier_login_password').val().trim(),
			rememberme:$('#user_login_rememberme').prop("checked")==true?1:0,
		};
		var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

		$.ajax({
		 type: "POST",
		 dataType:'json',  
		 url: params.site+"/site/supplierlogin", 
		 data: dataString,
		 timeout: 30000,
		 success: function(data)
		 {

			if(data.sonuc==1)
			{

				window.location=params.site+"/member/saccount";

			}else{

				$('#supplier_login_error').html("Kullanıcı ve/veya Parola hatalı.");
			} 
		 }
		});
	}
	
}
		
function userFLogin() {
    
  FB.login(function(response){
     FB.api('/me', function(response) {

     });

  }, {scope: 'email,user_location,user_birthday,user_friends'});

}

function suppliersFLogin() {
    
  FB.login(function(response){
     FB.api('/me', function(response) {

     });

  }, {scope: 'email,user_location,user_birthday,user_friends'});

}

function userregister(){

	var control=true;

	$('#user_register_error').html("");
	$('#user_register_error_name').html("");
	$('#user_register_error_email').html("");
	$('#user_register_error_remail').html("");
	$('#user_register_error_password').html("");

	if($('#user_register_name').val().trim()=="")
	{
		control=false;
		$('#user_register_error_name').html("Ad Soyad boş olamaz.");
	}else if($('#user_register_name').val().trim().length<5)
	{
		control=false;
		$('#user_register_error_name').html("Geçerli bir Ad Soyad giriniz.");
	}

	if($('#user_register_email').val().trim()=="")
	{

		control=false;
		$('#user_register_error_email').html("Email boş olamaz.");
	}else if(!validateEmail($('#user_register_email').val().trim()))
	{

		control=false;
		$('#user_register_error_email').html("Geçerli bir Email giriniz.");
	}


	if($('#user_register_remail').val().trim()=="")
	{

		control=false;
		$('#user_register_error_remail').html("Tekrar Email boş olamaz.");
	}else if($('#user_register_remail').val().trim()!=$('#user_register_email').val().trim())
	{

		control=false;
		$('#user_register_error_remail').html("Email kontrolü uyuşmuyor.");
	}



	if($('#user_register_password').val().trim()=="")
	{

		control=false;
		$('#user_register_error_password').html("Parola boş olamaz.");
	}else if($('#user_register_password').val().trim().length<6)
	{
		control=false;
		$('#user_register_error_password').html("Parola en az 6 karekter olamalıdır.");
	}

	if(control==true)
	{
		var data={
			name:$('#user_register_name').val().trim(),
			email:$('#user_register_email').val().trim(),
			password:$('#user_register_password').val().trim(),
		};
		var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

		$.ajax({
		 type: "POST",
		 dataType:'json',  
		 url: params.site+"/member/userregister", 
		 data: dataString,
		 timeout: 30000,
		 success: function(data)
		 {

			if(data.sonuc==3)
			{

				$('#user_register_error_password').html("Lütfen basit bir parola kullanmayınız ve parolanızı değiştiriniz.");

			}else if(data.sonuc==2)
			{

				$('#user_register_error_email').html("Email adresi daha önce alınmış.");

				

			}else if(data.sonuc==1){

				window.location=params.site+"/member/uaccount";
			}else{

				$('#user_register_error').html("Kayıt esnasında bir hata oluştu, lütfen tekrar deneyiniz.");
			} 
		 }
		});
	}

}

function supplierregister(){

	var control=true;

	$('#supplier_register_error').html("");
	$('#supplier_register_error_name').html("");
	$('#supplier_register_error_email').html("");
	$('#supplier_register_error_remail').html("");
	$('#supplier_register_error_password').html("");

	if($('#supplier_register_name').val().trim()=="")
	{
		control=false;
		$('#supplier_register_error_name').html("Ad Soyad boş olamaz.");
	}else if($('#supplier_register_name').val().trim().length<5)
	{
		control=false;
		$('#supplier_register_error_name').html("Geçerli bir Ad Soyad giriniz.");
	}

	if($('#supplier_register_email').val().trim()=="")
	{

		control=false;
		$('#supplier_register_error_email').html("Email boş olamaz.");
	}else if(!validateEmail($('#supplier_register_email').val().trim()))
	{

		control=false;
		$('#supplier_register_error_email').html("Geçerli bir Email giriniz.");
	}


	if($('#supplier_register_remail').val().trim()=="")
	{

		control=false;
		$('#supplier_register_error_remail').html("Tekrar Email boş olamaz.");
	}else if($('#supplier_register_remail').val().trim()!=$('#supplier_register_email').val().trim())
	{

		control=false;
		$('#supplier_register_error_remail').html("Email kontrolü uyuşmuyor.");
	}



	if($('#supplier_register_password').val().trim()=="")
	{

		control=false;
		$('#supplier_register_error_password').html("Parola boş olamaz.");
	}else if($('#supplier_register_password').val().trim().length<6)
	{
		control=false;
		$('#supplier_register_error_password').html("Parola en az 6 karekter olamalıdır.");
	}

	if(control==true)
	{
		var data={
			name:$('#supplier_register_name').val().trim(),
			email:$('#supplier_register_email').val().trim(),
			password:$('#supplier_register_password').val().trim(),
		};
		var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

		$.ajax({
		 type: "POST",
		 dataType:'json',  
		 url: params.site+"/member/supplierregister", 
		 data: dataString,
		 timeout: 30000,
		 success: function(data)
		 {

			if(data.sonuc==3)
			{

				$('#supplier_register_error_password').html("Lütfen basit bir parola kullanmayınız ve parolanızı değiştiriniz.");

			}else if(data.sonuc==2)
			{

				$('#supplier_register_error_email').html("Email adresi daha önce alınmış.");

				

			}else if(data.sonuc==1){

				window.location=params.site+"/member/saccount";
			}else{

				$('#supplier_register_error').html("Kayıt esnasında bir hata oluştu, lütfen tekrar deneyiniz.");
			} 
		 }
		});
	}

}

function changepassword() {
	var control=true;
	$("#alertpassword").hide();
	$('#changepassword_register_error_oldpassword').html("");
	$('#changepassword_register_error_newpassword').html("");
	$('#changepassword_register_error_newpassword2').html("");
	$('#changepassword_register_error').html("");

	if($('#changepassword_register_oldpassword').val().trim()=="")
	{
		control=false;
		$('#changepassword_register_error_oldpassword').html("Eski Şifre boş az olamaz.");
	}

	if($('#changepassword_register_newpassword').val().trim()=="")
	{
		control=false;
		$('#changepassword_register_error_newpassword').html("Yeni Şifre boş az olamaz.");
	}else if($('#changepassword_register_newpassword').val().trim().length<6)
	{
		control=false;
		$('#changepassword_register_error_newpassword').html("Yeni Şifre 6 karekterden daha az olamaz.");
	}else if($('#changepassword_register_newpassword').val().trim()!=$('#changepassword_register_newpassword2').val().trim())
	{
		control=false;
		$('#changepassword_register_error_newpassword2').html("Yeni Şifreler birbiriyle uyuşmuyor.");
	}

	if(control==true)
	{

		var data={
			oldpassword:$('#changepassword_register_oldpassword').val().trim(),
			newpassword:$('#changepassword_register_newpassword').val().trim(),
		};
		var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

		$.ajax({
		 type: "POST",
		 dataType:'json',  
		 url: params.site+"/member/changepasswordcontrol", 
		 data: dataString,
		 timeout: 30000,
		 success: function(data)
		 {
			if(data.sonuc==2)
			{

				$('#changepassword_register_error_oldpassword').html("Eski Şifreniz hatalı.");

				
			}else if(data.sonuc==1){

				
				$("#alertpassword").children("strong").html("Şifre başarılı bir şekilde değiştirilmiştir.");
				$("#alertpassword").show();
			}else if(data.sonuc==3){

				$('#changepassword_register_error').html("Basit bir şifre girmeyiniz. Lütfen Yeni şifrenizi değiştiriniz.");
			} 
		 }
		});

	}
}

function addofferlist(id) {
	var count_number = $("#count_number").val();
    var data = {
        code:id,
		count_number:count_number
    };

    var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: params.site+"/urun/addteklifsepeti",
        data: dataString,
        success: function (data) {
				window.location = params.site+"/urun/teklifsepetim";
        }
    })
}

function addfollowlist(id) {
	var data = {
		code:id
	};

	var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: params.site+"/urun/addfollowlist",
		data: dataString,
		success: function (data) {
				window.location = params.site+"/urun/takiplistesi";
		}
	})
}

function addcomparelist(id) {
	var data = {
		code:id
	};

	var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: params.site+"/urun/addcomparelist",
		data: dataString,
		success: function (data) {
				window.location = params.site+"/urun/urunkarsilastir";
		}
	})
}

function clearFollowlist() {

	$.ajax({
		type: 'POST',
		dataType:'json',
		timeout: 30000,
		url: params.site+"/urun/clearfollowlist",
		success: function (data) {
			if(data.status == 1){
				$(".cart_item").remove();
			}
		}
	})
	
}

function clearOfferbasket() {

	$.ajax({
		type: 'POST',
		dataType:'json',
		timeout: 30000,
		url: params.site+"/urun/clearofferbasket",
		success: function (data) {
			if(data.status == 1){
				$(".cart_item").remove();
				$(".mini_cart_item").remove();
				$(".cart-items-count").html("0");
				$("#msgbasket").html("Sepetiniz Boş");
				$("#allbasket").prepend("<tr><td colspan='6'>Sepetiniz Boş</td></tr>");
			}
		}
	})

}

function deletefollowitem(id) {
	var data = {
		code:id
	};

	var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: params.site+"/urun/deletefollowitem",
		data: dataString,
		success: function (data) {
			if(data.status == 1){
				$("#"+data.code+"").remove();
				if(data.count < 1){
					$("#allbasket").prepend("<tr><td colspan='6'>Takip Listeniz Boş</td></tr>");
				}
			}
		}
	})
}

function deleteofferitem(id) {
	var data = {
		code:id
	};

	var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: params.site+"/urun/deleteofferitem",
		data: dataString,
		success: function (data) {
			if(data.status == 1){
				$("#"+data.code+"").remove();
				$("#"+data.code+"_1"+"").remove();
				if(data.count <1){
					$(".cart-items-count").html("0");
					$("#msgbasket").html("Sepetiniz Boş");
					$("#allbasket").prepend("<tr><td colspan='6'>Sepetiniz Boş</td></tr>");
				}
			}
		}
	})
}

function deletecompareitem(id)
{
	var data = {
		code:id
	};

	var dataString = 'data='+encodeURIComponent(JSON.stringify(data));

	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: params.site+"/urun/deletecompareitem",
		data: dataString,
		success: function (data) {
			if(data.status == 1){
				$("#"+data.code+"").remove();
			}
		}
	})
}

function plus() {
	var c = parseInt($("#t_count").val());
	c++;
	$("#t_count").val(c);
	$(".countprice").html(c);

}
function mins() {
	var c = parseInt($("#t_count").val());
	if(c > 1) {
		c--;
		$("#t_count").val(c);
	}

	$(".countprice").html(c);



}

