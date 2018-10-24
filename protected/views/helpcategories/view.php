<?php
/* @var $this HelpCategoriesController */
/* @var $model HelpCategories */

$this->breadcrumbs=array(
	'Help Categories'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List HelpCategories', 'url'=>array('index')),
	array('label'=>'Create HelpCategories', 'url'=>array('create')),
	array('label'=>'Update HelpCategories', 'url'=>array('update', 'id'=>$model->category_id)),
	array('label'=>'Delete HelpCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HelpCategories', 'url'=>array('admin')),
);
?>

<h1>View HelpCategories #<?php echo $model->category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'category_id',
		'sub_id',
		'title',
		'status',
	),
)); ?>
