<?php
$this->breadcrumbs=array(
	'合同'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'更新合同',
);

$this->menu=array(
	array('label'=>'合同列表', 'url'=>array('index')),
	//array('label'=>'Create Contract', 'url'=>array('create')),
	array('label'=>'查看合同', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'管理合同', 'url'=>array('admin')),
);
?>

<h1>更新合同 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
