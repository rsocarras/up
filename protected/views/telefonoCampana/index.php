<?php
$this->breadcrumbs=array(
	'Telefono Campanas',
);

$this->menu=array(
array('label'=>'Create TelefonoCampana','url'=>array('create')),
array('label'=>'Manage TelefonoCampana','url'=>array('admin')),
);
?>

<h1>Telefono Campanas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
