<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'员工列表', 'url'=>array('index')),
	array('label'=>'管理员工', 'url'=>array('admin')),
);
?>

<h1>新增用户</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>