<?php
$this->breadcrumbs=array(
	'客户'=>array('index'),
	'新增',
);

$this->menu=array(
	array('label'=>'客户列表', 'url'=>array('index')),
	array('label'=>'管理客户', 'url'=>array('admin')),
);
?>

<h1>新增客户</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>