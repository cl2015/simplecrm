<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'员工列表', 'url'=>array('index')),
	array('label'=>'新增员工', 'url'=>array('create')),
	array('label'=>'查看员工', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'管理员工', 'url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>