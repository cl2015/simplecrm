<?php
$this->breadcrumbs=array(
	'Contracts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contract', 'url'=>array('index')),
	//array('label'=>'Create Contract', 'url'=>array('create')),
	array('label'=>'View Contract', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Contract', 'url'=>array('admin')),
);
?>

<h1>Update Contract <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
