<?php
$this->breadcrumbs=array(
	'Tipo Usuarios',
);

$this->menu=array(
array('label'=>'Create TipoUsuario','url'=>array('create')),
array('label'=>'Manage TipoUsuario','url'=>array('admin')),
);
?>

<h1>Tipo Usuarios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
