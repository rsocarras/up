<?php
$this->breadcrumbs=array(
	'Campanas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Campana','url'=>array('index')),
	array('label'=>'Create Campana','url'=>array('create')),
	array('label'=>'View Campana','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Campana','url'=>array('admin')),
	);
	?>

	<h1>Update Campana <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>