<?php
$this->breadcrumbs=array(
	'客户列表'=>array('index'),
	'管理',
);

$this->menu=array(
	array('label'=>'客户列表', 'url'=>array('index')),
	array('label'=>'新增客户', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理客户</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_card',
		'name',
		'phone',
		'address',
		'source',
		/*
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
		 */

		array(
			'class'=>'CButtonColumn',
			'template'=>'{create_contract} {update} {view} {delete}',
			'buttons'=>array
			(
				'create_contract' => array
				(
					'label'=>'新建合同',
					'url'=>'Yii::app()->createUrl("contract/create", array("cid"=>$data->id))',
				),
					
			),
		),
	),
)); ?>
