<?php
/* @var $this SuppliersController */
/* @var $model Suppliers */

$this->breadcrumbs=array(
	'Supplierss'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Suppliers', 'url'=>array('index')),
	array('label'=>'Create Suppliers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#suppliers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Tedarikçileri Yönetimi</h1>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="row">
				<div class="col-sm-12">
				<!--//comment-->
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'suppliers-grid',
						'itemsCssClass' => 'table table-striped table-bordered dataTable no-footer',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'columns'=>array(
							'name',
							'username',
							'email',
							
							array(
								"type"=>"raw",
						        'name'=>'citys_id',
						        'value'=>'$data->citys->name',
						    ),
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
							),
						),
					)); ?>

				</div>
			</div>
		</div>
	</div>
</div>

