<?php
$this->breadcrumbs=array(
	'Estado Telefonos',
);

$this->menu=array(
array('label'=>'Create EstadoTelefono','url'=>array('create')),
array('label'=>'Manage EstadoTelefono','url'=>array('admin')),
);
?>

<h1>Estado Telefonos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
