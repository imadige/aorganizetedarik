<?php
/* @var $this ProductgroupController */
/* @var $model Productgroup */

$this->breadcrumbs=array(
	'Productgroups'=>array('index'),
	$model->name=>array('view','id'=>$model->productgroup_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productgroup', 'url'=>array('index')),
	array('label'=>'Create Productgroup', 'url'=>array('create')),
	array('label'=>'View Productgroup', 'url'=>array('view', 'id'=>$model->productgroup_id)),
	array('label'=>'Manage Productgroup', 'url'=>array('admin')),
);
?>

<h1>Update Productgroup <?php echo $model->productgroup_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>