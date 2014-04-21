<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'nis'=>$data->nis, 'kd_tahun_ajaran'=>$data->kd_tahun_ajaran, 'kd_tingkat_kelas'=>$data->kd_tingkat_kelas, 'kd_program_pengajaran'=>$data->kd_program_pengajaran, 'kd_rombel'=>$data->kd_rombel, 'tanggal'=>$data->tanggal)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('NIS')); ?>:</b>
	<?php echo CHtml::encode($data->NIS); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('KD_TAHUN_AJARAN')); ?>:</b>
	<?php echo CHtml::encode($data->KD_TAHUN_AJARAN); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('KD_TINGKAT_KELAS')); ?>:</b>
	<?php echo CHtml::encode($data->KD_TINGKAT_KELAS); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('KD_PROGRAM_PENGAJARAN')); ?>:</b>
	<?php echo CHtml::encode($data->KD_PROGRAM_PENGAJARAN); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('KD_ROMBEL')); ?>:</b>
	<?php echo CHtml::encode($data->KD_ROMBEL); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('KD_PERIODE_BELAJAR')); ?>:</b>
	<?php echo CHtml::encode($data->KD_PERIODE_BELAJAR); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('STATUS_ABSEN')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS_ABSEN); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGAN')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGAN); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_AKSES')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_AKSES); ?><br />
</div>
