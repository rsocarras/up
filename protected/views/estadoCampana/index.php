<?php
$this->breadcrumbs=array(
	'Estado Campanas',
);

$this->menu=array(
array('label'=>'Create EstadoCampana','url'=>array('create')),
array('label'=>'Manage EstadoCampana','url'=>array('admin')),
);
?>

<h1>Estado Campanas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
