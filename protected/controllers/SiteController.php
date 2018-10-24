<?php
class SiteController extends Controller
{

    public $layout = "frontLayout/productLayout";



	public function actions()
	{

        return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionArama()
	{
		$page=1;

		if(isset($_GET["page"]))
		{
			$page=$_GET["page"]+0;

			if($page>1)
			{

			}else{
				$page=1;
			}
		}

		
		$pagesize=Yii::app()->params["productsearchpagesize"];
		$MoProducts=new MoProducts;
		$get=$MoProducts->search("",$page,$pagesize);
		$products=iterator_to_array($get["list"]);
		$products=$products[0]->result;
		$curret_itemcount=0;

		
		
		$pages = new CPagination($get["count"]);
		$pages->setPageSize($pagesize);

		
		$this->render("arama",array(
			'item_count' => $get["count"],
			'pages' => $pages,
			'page_size' =>$pagesize,
			'current_page'=>$page-1,
			"curret_itemcount"=>count($products),
			"products"=>$products,
		));


	}


	public function actionDeneme()
	{
		
		$MoProductgroups=new MoProductgroups;
		$MoProductgroups->ag();
		

		/*
		$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	    $query = new MongoDB\Driver\Query([]); 


	    $bulk = new MongoDB\Driver\BulkWrite;
	    
	    $doc = [ 'name' => 'Toyota', 'price' => 26700];
	    $bulk->insert($doc);
	    $mng->executeBulkWrite('organizetedarik.cars', $bulk);
		     
	*/
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->render("index");
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}



	public function actionGiris()
	{
		$this->render("login");
	}
	
	public function actionForgotPassword(){
		$this->render("forgotpassword");
	}

	public function actionUserlogin()
	{
		
		$data["sonuc"]=0;

		if(Yii::app()->request->isAjaxRequest  && isset($_POST["data"]))
		{
			
			Func::logout();
			$dt=json_decode(urldecode($_POST["data"]));

		
			if(UserIdentity::login($dt))
			{
				$data["sonuc"]=1;
			}
		}

		echo json_encode($data);
	}



	public function actionSupplierlogin()
	{
		
		$data["sonuc"]=0;

		if(Yii::app()->request->isAjaxRequest  && isset($_POST["data"]))
		{
			Func::logout();
			$dt=json_decode(urldecode($_POST["data"]));

			
		
			if(SupplierIdentity::login($dt))
			{
				$data["sonuc"]=1;
			}
		}

		echo json_encode($data);
	}

	
	public function actionProfile()
	{
		$this->render("profile");
	}

	public function actionShopproducts()
	{
		$this->render("shopproducts");
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}



	
	
}