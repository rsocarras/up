<?php
$this->breadcrumbs=array(
	'Estado Telefonos'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List EstadoTelefono','url'=>array('index')),
array('label'=>'Create EstadoTelefono','url'=>array('create')),
array('label'=>'Update EstadoTelefono','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete EstadoTelefono','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage EstadoTelefono','url'=>array('admin')),
);
?>

<h1>View EstadoTelefono #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
),
)); ?>
