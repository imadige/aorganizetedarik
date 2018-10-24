<?php 


class Func
{
	private $harf=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

	private $sayilar=array('0','1','2','3','4','5','6','7','8','9');


	public static function logout()
	{
		
			session_start();
			session_destroy();
	}

	public function getHashCode($x,$y){

		$hashCode = "";

		$basamak= rand($x,$y);

		for($i=0;$i<$basamak;$i++){
			$hashCode.= $this->harf[rand(0,count($this->harf)-1)];
			$hashCode.= $this->sayilar[rand(0,count($this->sayilar)-1)];
			
		}
		
		return $hashCode;
	}

	public static function inidianCalculation($number,$discount)
	{
		return number_format(($number/(100-$discount))*100,2);
	}

	public static function xssClear($value)
	{
		return htmlspecialchars(strip_tags($value));
	}

	public static function allXssClearArr($arr)
	{
		if(is_object($arr))
		{
			foreach($arr as $key=>$value)
			{
				if(is_string($value))
					$arr->$key=self::xssClear($value);
			}
		}elseif(is_array($arr))
		{
			foreach($arr as $key=>$value)
			{
				if(is_string($value))
					$ar[$key]=self::xssClear($value);
			}
		}

		return $arr;
	}

	public static function removeTags($value){

		return strip_tags($value,"<p><b><strong><i><ol><a><ul><li><br><span><table><tr><td><tbody><thead><img><b><i><u><video><source><a><hr><s><font>");
		
	}
	public function fileTypeControl($file)
	{
		$conrol=false;
		foreach(Yii::app()->params["imageTypes"] as $value)
		{
			if($file["type"]==$value)
			{
				$control=true;
			}

		}
		
		return $control;
	}

	public function fileTypeControl2($type)
	{
		$control=false;
		foreach(Yii::app()->params["imageTypes"] as $value)
		{
			if($type==$value)
			{
				$control=true;
			}

		}
		
		return $control;
	}

	public function getIP()
    {
        $ip="";
    	$tmp=array();
        
        if(getenv("HTTP_CLIENT_IP")) {
            $ip =  getenv("HTTP_CLIENT_IP");
        } else { 
        
	        if(getenv("HTTP_X_FORWARDED_FOR")) {
	            $ip =  getenv("HTTP_X_FORWARDED_FOR");
	            
	            if(strstr($ip, ",")) {
	                $tmp =  explode(",", $ip);
	                $ip =  trim($tmp[0]);
	            }
	        }else {
	            $ip =  getenv("REMOTE_ADDR");
	        }
    	}
        
        return $ip;
    }


	public static function getAdmin($id)
	{
		return Admins::model()->findByPk($id);
	}

	public static function getProductgroup($id)
	{
		return Productgroup::model()->findByPk($id);
	}

	public static function isProductDisplay($status,$date)
	{
		if($status!=1)
		{
			return '<span class="red_c">Gösterilmiyor</span>';
		}else{

			if(time()<strtotime($date))
			{
				return  '<span class="green_c">Gösteriliyor</span>';;
			}else{
				return '<span class="red_c">Gösterilmiyor</span>';
			}
		}
	}


	public static function toAscii($string) {
	

		    $turkce=array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");

			$duzgun=array("s", "s", "i", "u", "u", "o", "o", "c", "c", "s", "s", "i", "g", "g", "i", "o", "o", "c", "c", "u", "u");
		    $string = str_replace($turkce, $duzgun, $string);
		     
		    $string=trim(strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-')));

		    if(substr($string,strlen($string)-1,strlen($string))=="-")
		    {
		    	return  substr($string,0,strlen($string)-1);
		    }else{
		    	return $string;
		    }
	
	}

	public static function buildId($id,$title)
	{
		return $id."-".self::toAscii($title);
	}

	public static function percentagepoints($id)
	{
		return $id*100/5;
	}

    public function offerbasket(){
        $user_id = Yii::app()->user->getState("user_id");

        $criteria = new CDbCriteria();
        $criteria->select = "t.*,products.currency as currency,products.code as code,products.name as product_name,products.price as product_price, productimages.imageS_s3url as product_imageS";
        $criteria->join = "inner join products on (products.products_id = t.products_id) inner join productimages on (productimages.products_id = t.products_id)";
        $criteria->condition = "productimages.imagetype = :types && t.users_id = :uid";
        $criteria->params = array(
            ":types" => 0,
            ":uid" => $user_id
        );
        $model = Offerbasket::model()->findAll($criteria);
        return $model;
    }
}