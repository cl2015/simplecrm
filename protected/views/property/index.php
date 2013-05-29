<?php
$this->breadcrumbs=array(
	'物业',
);

$this->menu=array(
	array('label'=>'新增物业', 'url'=>array('create')),
	array('label'=>'管理物业', 'url'=>array('admin')),
);
?>

<h1>物业</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
