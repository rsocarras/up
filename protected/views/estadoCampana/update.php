<?php
$this->breadcrumbs=array(
	'Estado Campanas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List EstadoCampana','url'=>array('index')),
	array('label'=>'Create EstadoCampana','url'=>array('create')),
	array('label'=>'View EstadoCampana','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EstadoCampana','url'=>array('admin')),
	);
	?>

	<h1>Update EstadoCampana <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>