<?php
$this->breadcrumbs=array(
	'Estado Telefonos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List EstadoTelefono','url'=>array('index')),
array('label'=>'Manage EstadoTelefono','url'=>array('admin')),
);
?>

<h1>Create EstadoTelefono</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>