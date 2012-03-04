<?php
$this->breadcrumbs=array(
	'Properties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Property', 'url'=>array('index')),
	array('label'=>'Manage Property', 'url'=>array('admin')),
);
?>

<h1>Create Property</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>