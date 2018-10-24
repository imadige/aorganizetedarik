<?php
class HelpController extends Controller
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

	
	public function actionIndex()
	{
		$model = HelpAnnouncement::model()->find();
		$this->render("index",array(
			'announceModel' =>$model
		));
	}

	public function actionAnnouncement(){
		
		$model = HelpAnnouncement::model()->findAll();
		
		$this->render('announcement',array(
			'allannouncements' =>$model
		));
	}

	public function actionCostumerservice()
	{
		$this->render("costumerservice");
	}

	public function actionAllsubjects()
	{
		$this->render("allsubjects");
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */

	public function findHelpCat(){
	    $model = HelpCategories::model()->findAllByAttributes(array("sub_id" => 0));

        foreach ($model as $key => $value) {

            if($value->title == "Alıcıyım"){
                $cssclass = "fa-user";
            }else if($value->title == "Satıcıyım"){
                $cssclass = "fa-users";
            }else if($value->title == "Üyelik İşlemleri"){
                $cssclass = "fa-gears";
            }else if($value->title == "Rapor Et"){
                $cssclass = "fa-exclamation";
            }

            echo "<li>
            <a class='menuitem1' href=''><i class='fa $cssclass fa-2x'></i><br>".Func::xssClear($value->title)."</a>
            <div class='content-menu'>";
                    $this->findSubs($value->category_id);
                echo "</div>
        </li>";
        }
    }

    public function findSubs($id){
        $model = HelpCategories::model()->findAllByAttributes(array("sub_id" => $id));
        foreach ($model as $key => $value) {
            echo "<div class='col-md-6'>
                    <h4>".Func::xssClear($value->title)."</h4>
                        <ul>
                            <li><a href='' class='questionlink'></a></li>
                        </ul>
                  </div>";
        }
    }
	
}