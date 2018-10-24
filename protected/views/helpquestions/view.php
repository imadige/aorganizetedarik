<?php
/* @var $this HelpQuestionsController */
/* @var $model HelpQuestions */

$this->breadcrumbs=array(
	'Help Questions'=>array('index'),
	$model->question_id,
);

$this->menu=array(
	array('label'=>'List HelpQuestions', 'url'=>array('index')),
	array('label'=>'Create HelpQuestions', 'url'=>array('create')),
	array('label'=>'Update HelpQuestions', 'url'=>array('update', 'id'=>$model->question_id)),
	array('label'=>'Delete HelpQuestions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->question_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HelpQuestions', 'url'=>array('admin')),
);
?>

<h1>View HelpQuestions #<?php echo $model->question_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'question_id',
		'category_id',
		'admin_id',
		'question',
		'answer',
		'dateadd',
		'popular',
	),
)); ?>
