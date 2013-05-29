<?php
$this->breadcrumbs=array(
		'合同'=>array('index'),
		'管理',
);

$this->menu=array(
		array('label'=>'合同列表', 'url'=>array('index')),
		//array('label'=>'Create Contract', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
		$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
});
		$('.search-form form').submit(function(){
		$.fn.yiiGridView.update('contract-grid', {
		data: $(this).serialize()
});
		return false;
});
		");
?>

<h1>合同管理</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display: none">
	<?php $this->renderPartial('_search',array(
			'model'=>$model,
	)); ?>
</div>
<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'contract-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
				'id',
				array(
	                 'name'=>'customer_search',
	                 'value'=>'$data["customer"]["name"]',
	            ), 
				'amount',
				'contract_number',
				/*
				 'created_at',
'created_by',
'updated_at',
'updated_by',
*/
				array(
						'class'=>'CButtonColumn',
		),
	),
)); ?>
