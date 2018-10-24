<?php
/* @var $this HelpQuestionsController */
/* @var $model HelpQuestions */

$this->breadcrumbs=array(
	'Help Questions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HelpQuestions', 'url'=>array('index')),
	array('label'=>'Create HelpQuestions', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#help-questions-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Yardım Soruları</h1>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="row">
				<div class="col-sm-12">
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'help-questions-grid',
						'itemsCssClass' => 'table table-striped table-bordered dataTable no-footer',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'columns'=>array(
							'question',
							'answer',
							'dateadd',
							array(
								'class'=>'CButtonColumn',
								'htmlOptions' => array('style'=>'width:170px'),
								'template'=>'{view}{update}{delete}',
								'buttons' => array(
									'update' => array
									(
										'imageUrl'=>Yii::app()->request->baseUrl.'/frontadmin/img/update.png',
										'options' => array(
											'class'=> 'update btn btn-default',
										),
									),
									'view' => array
									(
										'imageUrl'=>Yii::app()->request->baseUrl.'/frontadmin/img/view.png',
										'options' => array(
											'class'=> 'view btn btn-default',
										),
									),
									'delete' => array
									(
										'imageUrl'=>Yii::app()->request->baseUrl.'/frontadmin/img/delete.png',
										'options' => array(
											'class'=> 'delete btn btn-default',
										),
									),
								),
							)
						),
					)); ?>
				</div>
			</div>
		</div>
	</div>
</div>

