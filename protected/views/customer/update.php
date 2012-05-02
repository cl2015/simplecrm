<?php
$this->breadcrumbs=array(
	'客户'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'客户列表', 'url'=>array('index')),
	array('label'=>'新增客户', 'url'=>array('create')),
	array('label'=>'查看客户', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'管理客户', 'url'=>array('admin')),
);
?>

<h1>更新客户 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>