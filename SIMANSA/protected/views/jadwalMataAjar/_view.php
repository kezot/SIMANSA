<?php
/* @var $this JadwalMataAjarController */
/* @var $data JadwalMataAjar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_KELAS')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_KELAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HARI')); ?>:</b>
	<?php echo CHtml::encode($data->HARI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JAM')); ?>:</b>
	<?php echo CHtml::encode($data->JAM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MATA_PELAJARAN')); ?>:</b>
	<?php echo CHtml::encode($data->MATA_PELAJARAN); ?>
	<br />


</div>