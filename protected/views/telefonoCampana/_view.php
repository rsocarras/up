<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campana_id')); ?>:</b>
	<?php echo CHtml::encode($data->campana_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_id')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activacion')); ?>:</b>
	<?php echo CHtml::encode($data->activacion); ?>
	<br />


</div>