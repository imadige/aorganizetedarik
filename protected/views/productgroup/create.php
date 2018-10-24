<?php
/* @var $this ProductgroupController */
/* @var $model Productgroup */

$this->breadcrumbs=array(
	'Productgroups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Productgroup', 'url'=>array('index')),
	array('label'=>'Manage Productgroup', 'url'=>array('admin')),
);
?>

<h1>Yeni bir ürün grubu oluştur</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>