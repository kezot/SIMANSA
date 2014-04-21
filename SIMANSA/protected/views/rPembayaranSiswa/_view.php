<?php
/* @var $this RPembayaranSiswaController */
/* @var $data RPembayaranSiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PEMBAYARAN_SISWA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PEMBAYARAN_SISWA), array('view', 'id'=>$data->ID_PEMBAYARAN_SISWA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NM_PEMBAYARAN_SISWA')); ?>:</b>
	<?php echo CHtml::encode($data->NM_PEMBAYARAN_SISWA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_AKSES')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_AKSES); ?>
	<br />


</div>