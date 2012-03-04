<?php
$this->breadcrumbs=array(
	'Contracts',
);

$this->menu=array(
	//array('label'=>'Create Contract', 'url'=>array('create')),
	array('label'=>'Manage Contract', 'url'=>array('admin')),
);
?>

<h1>Contracts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
