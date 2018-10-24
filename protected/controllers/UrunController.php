<?php

class UrunController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	
    public $layout = "frontLayout/productLayout";

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}


	public function actionTeklifsepetineekle($id)
	{
		
		$modelProduct=$this->loadModelCode($id);

	}

	public function actionView($id)
	{
		$ids=explode("-",$id);
		$id=trim($ids[0]);

		$modelProduct=$this->loadModelCode($id);


		$criteria=new CDbCriteria;
		$criteria->condition = "products_id=:products_id";
		$criteria->params = array (	
			':products_id' =>$modelProduct->products_id,
		);
		$criteria->order="imagetype asc";

		$modelProductimages=Productimages::model()->findAll($criteria);

		
		$modelSupplierscompany=Supplierscompany::model()->find("suppliers_id=:suppliers_id",array(":suppliers_id"=>$modelProduct->suppliers_id));

		$arrimages=array();

		foreach($modelProductimages as $key=>$value)
		{
		
			$arrimages[]=array(
				"imageS"=>Yii::app()->params["cdn"].$value->imageS,
				"imageL"=>Yii::app()->params["cdn"].$value->imageL,
				"imageXL"=>Yii::app()->params["cdn"].$value->imageXL,
				"productimages_id"=>$value->productimages_id,
			);
			
		}

		$this->render("view",array(
			"modelProduct"=>$modelProduct,
			"arrimages"=>$arrimages,
			'modelSupplierscompany'=>$modelSupplierscompany
		));
	}

    public function actionAddteklifsepeti(){
        if(Yii::app()->request->isAjaxRequest && isset($_POST["data"])){
            $user_id = Yii::app()->user->getState("user_id");
            $code = json_decode(urldecode($_POST['data']));
            if(isset($code->count_number)){
                $code->count_number = Func::xssClear($code->count_number);
            }else{
                $code->count_number = 1;
            }
            $pmodel = Products::model()->find('code =:code',array(':code' => $code->code));
            $omodel = Offerbasket::model()->findAll("products_id = :pid && users_id = :uid",array(
                ":pid" => $pmodel->products_id,
                ":uid" => $user_id
            ));

            if(!empty($user_id) && count($omodel)==1){
                $offer = new Offerbasket;
                $offer->users_id = $user_id;
                $offer->count_number = $code->count_number;
                $offer->products_id = $pmodel->products_id;
                $offer->dateadd = date("Y-m-d H:i:s");
                if($offer->save()){
                    echo json_encode(array("status" => "1"));
                }
            }else{
                echo json_encode(array("status" => "2"));
            }

        }
    }

    public function actionAddcomparelist(){
        if(Yii::app()->request->isAjaxRequest && isset($_POST["data"])){
            $user_id = Yii::app()->user->getState("user_id");
            $code = json_decode(urldecode($_POST['data']));

            $pmodel = Products::model()->find('code =:code',array(':code' => $code->code));
            $omodel = Comparelist::model()->findAll("products_id = :pid && users_id = :uid",array(
                ":pid" => $pmodel->products_id,
                ":uid" => $user_id
            ));


            if(!empty($user_id )&& count($omodel)==1){
                $comparelist = new Comparelist;
                $comparelist->users_id = $user_id;
                $comparelist->products_id = $pmodel->products_id;
                $comparelist->dateadd = date("Y-m-d H:i:s");
                if($comparelist->save()){
                    echo json_encode(array("status" => "1"));
                }
            }else{
                echo json_encode(array("status" => "2"));
            }

        }
    }
    
    public function actionAddfollowlist(){
        if(Yii::app()->request->isAjaxRequest && isset($_POST["data"])){
            $user_id = Yii::app()->user->getState("user_id");

            $code = json_decode(urldecode($_POST['data']));

            $pmodel = Products::model()->find('code =:code',array(':code' => $code->code));
            $fmodel = Followlist::model()->findAll("products_id = :pid && users_id = :uid",array(
                ":pid" => $pmodel->products_id,
                ":uid" => $user_id
            ));

            if(isset($user_id) && count($fmodel)==0){
                $follow = new Followlist;
                $follow->users_id = $user_id;
                $follow->products_id = $pmodel->products_id;
                $follow->dateadd = date("Y-m-d H:i:s");
                if($follow->save()){
                    echo json_encode(array("status" => "1"));
                }
            }else{
                echo json_encode(array("status" => "2"));
            }

        }
    }

    public function actionTeklifsepetim(){
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

        $this->render("teklifsepetim",array('model' => $model));
    }



    public function actionTakiplistesi(){
        $user_id = Yii::app()->user->getState("user_id");

        $criteria = new CDbCriteria();
        $criteria->select = "t.*,products.currency as currency,products.code as code,products.name as product_name,products.price as product_price, productimages.imageS_s3url as product_imageS";
        $criteria->join = "inner join products on (products.products_id = t.products_id) inner join productimages on (productimages.products_id = t.products_id)";
        $criteria->condition = "productimages.imagetype = :types && t.users_id = :uid";
        $criteria->params = array(
            ":types" => 0,
            ":uid" => $user_id
        );
        $model = Followlist::model()->findAll($criteria);

        $this->render("takiplistesi",array('model' => $model));
    }

    public function actionUrunkarsilastir(){
        $user_id = Yii::app()->user->getState("user_id");

        $criteria = new CDbCriteria();
        $criteria->select = "t.*,products.currency as currency,products.code as code,products.name as product_name,products.price as product_price, productimages.imageS_s3url as product_imageS";
        $criteria->join = "inner join products on (products.products_id = t.products_id) inner join productimages on (productimages.products_id = t.products_id)";
        $criteria->condition = "productimages.imagetype = :types && t.users_id = :uid";
        $criteria->params = array(
            ":types" => 0,
            ':uid' => $user_id
        );
        $model = Comparelist::model()->findAll($criteria);
        $this->render("urunkarsilastir",array("model" => $model));

    }

    public function actionClearfollowlist(){
        if(Yii::app()->request->isAjaxRequest) {

            $user_id = Yii::app()->user->getState("user_id");

            if (isset($user_id)) {
                $delete = Followlist::model()->deleteAll("users_id = :uid", array(":uid" => $user_id));

                if ($delete)
                    echo json_encode(array("status" => "1"));

            } else {
                echo json_encode(array("status" => "2"));
            }
        }
    }

    public function actionClearofferbasket(){
        if(Yii::app()->request->isAjaxRequest) {

            $user_id = Yii::app()->user->getState("user_id");

            if (isset($user_id)) {
                $delete = Offerbasket::model()->deleteAll("users_id = :uid", array(":uid" => $user_id));

                if ($delete)
                    echo json_encode(array("status" => "1"));

            } else {
                echo json_encode(array("status" => "2"));
            }
        }
    }

    public function actionDeletefollowitem(){
        if(Yii::app()->request->isAjaxRequest && isset($_POST["data"])){
            $user_id = Yii::app()->user->getState("user_id");
            $code = json_decode(urldecode($_POST['data']));

            $pmodel = Products::model()->find('code =:code',array(':code' => $code->code));

            if(isset($user_id)){
               $follow = Followlist::model()->find("products_id = :pid && users_id = :uid",array(
                   ":pid" => $pmodel->products_id,
                   ":uid" => $user_id));


                if($follow->delete()){
                    $count_follow = Followlist::model()->find("products_id = :pid && users_id = :uid",array(
                        ":pid" => $pmodel->products_id,
                        ":uid" => $user_id));

                    $count = count($count_follow);
                    echo json_encode(array("status" => "1",'code'=> $pmodel->code,'count' => $count));
                }
            }else{
                echo json_encode(array("status" => "2"));
            }

        }
    }

    public function actionDeleteofferitem(){
        if(Yii::app()->request->isAjaxRequest && isset($_POST["data"])){
            $code = json_decode(urldecode($_POST['data']));

            $pmodel = Products::model()->find('code =:code',array(':code' => $code->code));

            $user_id = Yii::app()->user->getState("user_id");

            if(isset($user_id)){
                $offer = Offerbasket::model()->find("products_id = :pid && users_id = :uid",array(
                    ":pid" => $pmodel->products_id,
                    ":uid" => $user_id));


                if($offer->delete()){

                    $count_offer = Offerbasket::model()->find("products_id = :pid && users_id = :uid",array(
                        ":pid" => $pmodel->products_id,
                        ":uid" => $user_id));

                    $count = count($count_offer);

                    echo json_encode(array("status" => "1",'code'=> $pmodel->code,'count' => $count));
                }
            }else{
                echo json_encode(array("status" => "2"));
            }

        }
    }

    public function actionDeletecompareitem(){
        if(Yii::app()->request->isAjaxRequest && isset($_POST["data"])){
            $code = json_decode(urldecode($_POST['data']));

            $pmodel = Products::model()->find('code =:code',array(':code' => $code->code));

            $user_id = Yii::app()->user->getState("user_id");

            if(isset($user_id)){
                $compare = Comparelist::model()->find("products_id = :pid && users_id = :uid",array(
                    ":pid" => $pmodel->products_id,
                    ":uid" => $user_id));

                if($compare->delete()){
                    $count = count($compare);
                    echo json_encode(array("status" => "1",'code'=> $pmodel->code,'count' => $count));
                }
            }else{
                echo json_encode(array("status" => "2"));
            }

        }
    }



    public function loadModelCode($id)
	{
		$model=Products::model()->find("code=:code",array(":code"=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


}