<?php
$this->breadcrumbs=array(
	'客户',
);

$this->menu=array(
	array('label'=>'新增客户', 'url'=>array('create')),
	array('label'=>'管理客户', 'url'=>array('admin')),
);
?>

<h1>客户</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
