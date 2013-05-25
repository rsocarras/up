<?php
$this->breadcrumbs=array(
	'Estado Telefonos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List EstadoTelefono','url'=>array('index')),
	array('label'=>'Create EstadoTelefono','url'=>array('create')),
	array('label'=>'View EstadoTelefono','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EstadoTelefono','url'=>array('admin')),
	);
	?>

	<h1>Update EstadoTelefono <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>