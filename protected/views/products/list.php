<div style="margin: 10px 0px; font-size: 12px;">
    <div class="container">
        <div class="row">
             <!--
            <div class="col-lg-3">
                <?php $this->renderPartial("//member/smenu",array("active"=>"status")); ?>
            </div>

            <div class="col-lg-9 marginn">
            -->
            <div class="marginn">
                <div style="padding: 10px 30px;" class="jumbotron border123">
                    <form enctype="multipart/form-data" action="#" class="checkout woocommerce-checkout" method="post" name="checkout">
                        <div id="customer_details" class="col2-set">
                            <div class="col-lg-12">
                                <div class="woocommerce-billing-fields">

                                    <h3>Ürünler</h3>
                                   
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="x_panel">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                                                        'id'=>'products-grid',
                                                        'dataProvider'=>$model->search(),
                                                        'filter'=>$model,
                                                        'itemsCssClass' => 'table table-striped table-bordered dataTable no-footer',
                                                        'columns'=>array(
                                                            array(
                                                                "type"=>"raw",
                                                                'name'=>'code',
                                                                'value'=>'$data->code',
                                                                 'htmlOptions'=>array('width'=>'100px'),

                                                            ),
                                                            'name',
                                                           
                                                            array(
                                                                "type"=>"raw",
                                                                'name'=>'status',
                                                                'value'=>'Params::getParams_("product_status",$data->status)',
                                                                'htmlOptions'=>array('width'=>'120px'),
                                                                'filter'=>Params::getParams("product_status"),
                                                            ),
                                                            array(
                                                                "type"=>"raw",
                                                                'name'=>'lastshowdates',
                                                                'value'=>'date("d-m-Y H:i",strtotime($data->lastshowdates))',
                                                                'htmlOptions'=>array('width'=>'150px'),
                                                                'filter'=>Params::getParams("product_viewed"),

                                                            ),
                                                            array(
                                                                "type"=>"raw",
                                                                'name'=>'viewok',
                                                                'value'=>'Func::isProductDisplay($data->viewok,$data->lastshowdates)',
                                                                'htmlOptions'=>array('width'=>'120px'),
                                                                'filter'=>Params::getParams("product_viewed"),
                                                            ),
                                                            array(
                                                                "type"=>"raw",
                                                                'name'=>'updatedateadd',
                                                                'value'=>'date("d-m-Y H:i",strtotime($data->updatedateadd))',
                                                                'htmlOptions'=>array('width'=>'170px'),
                                                            ),
                                                            
                                                            array(
                                                            'class'=>'CButtonColumn',
                                                            'htmlOptions' => array('style' => 'width : 100px;'),
                                                            'template' => '{view}{update}{delete}',
                                                            'buttons' => array(
                                                                'view' => array(
                                                                    'imageUrl' => Yii::app()->request->baseUrl."/frontadmin/img/view.png",
                                                                    'options' => array(
                                                                        'class'=> 'view btn btn-default',
                                                                    ),
                                                                     'url'=>'Yii::app()->createUrl("products/view",array(\'id\'=>$data->code))',  
                                                                ),
                                                                'update' => array(
                                                                    'imageUrl' => Yii::app()->request->baseUrl."/frontadmin/img/update.png",
                                                                    'options' => array(
                                                                        'class'=> 'update btn btn-default',
                                                                    ),
                                                                    'url'=>'Yii::app()->createUrl("products/customize",array(\'id\'=>$data->code))',  
                                                                ),
                                                                'delete' => array(
                                                                    'imageUrl' => Yii::app()->request->baseUrl."/frontadmin/img/delete.png",
                                                                    'options' => array(
                                                                        'class'=> 'delete btn btn-default',
                                                                    ),
                                                                     'url'=>'Yii::app()->createUrl("products/delete",array(\'id\'=>$data->code))',  
                                                                ),
                                                            )
                                                        ),
                                                        ),
                                                    )); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>