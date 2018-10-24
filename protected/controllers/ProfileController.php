<?php
class ProfileController extends Controller
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

	
	public function actionProfile()
	{
		$this->render("profile");
	}

	public function actionDocuments()
	{
		$this->render("documents");
	}

	public function actionShopproducts()
	{
		$this->render("shopproducts");
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */


	
	
}