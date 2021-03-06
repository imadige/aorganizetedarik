<?php

class AdminsController extends Controller
{
	
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/adminLayout/admin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST requests
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		$adminid=Yii::app()->user->getState("admin_id");

		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view','create','update','admin','delete'),
				'expression' => array('AllowExpression','allowOnlyAdmin')
			),
			array('deny',  // deny all users
				'users'=>array('*'),
				'deniedCallback' => function() {$this->redirect(array ('panel/login'));},
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Admins;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$p1="";
		$p2="";

		if(isset($_POST['Admins']))
		{
			$model->attributes=$_POST['Admins'];
			$model=Func::allXssClearArr($model);

			$p1=$model->password;
			$p2=$model->password2;

			$model->dateadd=date("Y-m-d H:i:s");

			///comment
			if(!empty($model->password)){
				$model->password=md5(sha1(md5($model->password)));
			}

			if(!empty($model->password2)){
				$model->password2=md5(sha1(md5($model->password2)));
			}

			$model->admin=0;

			if($model->save())
			{
				$this->redirect(array('view','id'=>$model->admin_id));
			}else{

				
				$model->password=$p1;
				$model->password2=$p2;
			}
		}



		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$password = $model->password;
		$model->password="";

		$p1="";
		$p2="";
		if(isset($_POST['Admins']))
		{
			
			$model->attributes=$_POST['Admins'];
			$model=Func::allXssClearArr($model);
			
			if(!empty($model->password)){
				$p1=$model->password;
				$model->password = md5(sha1(md5($model->password)));

				if(!empty($model->password2)){
					$p2=$model->password2;
					$model->password2 = md5(sha1(md5($model->password2)));
				}
			}else{
						$model->password = $password;
				$model->password2 = $password;
			}

			if($model->save())
			{
				$this->redirect(array('view','id'=>$model->admin_id));
			}else{

				$model->password=$p1;
				$model->password2=$p2;
			}
			
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model=$this->loadModel($id);

		if($model->admin==0)
		{

			$model->delete();

		}

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Admins');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Admins('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Admins']))
			$model->attributes=$_GET['Admins'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Admins the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Admins::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Admins $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='admins-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}



}
