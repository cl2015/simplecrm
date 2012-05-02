<?php
$this->breadcrumbs=array(
	'物业'=>array('index'),
	'新增',
);

$this->menu=array(
	array('label'=>'物业列表', 'url'=>array('index')),
	array('label'=>'管理物业', 'url'=>array('admin')),
);
?>

<h1>新增物业</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>