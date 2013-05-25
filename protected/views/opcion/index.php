<?php
$this->breadcrumbs=array(
	'Opcions',
);

$this->menu=array(
array('label'=>'Create Opcion','url'=>array('create')),
array('label'=>'Manage Opcion','url'=>array('admin')),
);
?>

<h1>Opcions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
