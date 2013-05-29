<?php
$this->breadcrumbs=array(
		'客户'=>array('customer/index'),
		$model->customer_id=>array('customer/view','id'=>$model->customer_id),
		$model->id,
);
// $this->menu=array(
// 	array('label'=>'List Track', 'url'=>array('index')),
// 	array('label'=>'Create Track', 'url'=>array('create')),
// 	array('label'=>'Update Track', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Track', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Track', 'url'=>array('admin')),
// );
?>

<h1>查看客户追踪 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customer_id',
		'content',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
