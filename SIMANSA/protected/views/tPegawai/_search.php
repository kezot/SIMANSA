<?php
/* @var $this TPegawaiController */
/* @var $model TPegawai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMOR_INDUK'); ?>
		<?php echo $form->textField($model,'NOMOR_INDUK',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_PEGAWAI'); ?>
		<?php echo $form->textField($model,'NM_PEGAWAI',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INISIAL'); ?>
		<?php echo $form->textField($model,'INISIAL',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KOTA_LAHIR'); ?>
		<?php echo $form->textField($model,'KOTA_LAHIR',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->textField($model,'TANGGAL_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_JENIS_KELAMIN'); ?>
		<?php echo $form->textField($model,'KD_JENIS_KELAMIN',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_GOL_DARAH'); ?>
		<?php echo $form->textField($model,'KD_GOL_DARAH',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_AGAMA'); ?>
		<?php echo $form->textField($model,'KD_AGAMA',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_STATUS_NIKAH'); ?>
		<?php echo $form->textField($model,'KD_STATUS_NIKAH',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_POS'); ?>
		<?php echo $form->textField($model,'KD_POS',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_TELP'); ?>
		<?php echo $form->textField($model,'NO_TELP',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_JENIS_KETENAGAAN'); ?>
		<?php echo $form->textField($model,'KD_JENIS_KETENAGAAN',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_HP'); ?>
		<?php echo $form->textField($model,'NO_HP',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIR_FOTO'); ?>
		<?php echo $form->textField($model,'DIR_FOTO',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGAL_AKSES'); ?>
		<?php echo $form->textField($model,'TANGGAL_AKSES'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMOR_INDUK_BARU'); ?>
		<?php echo $form->textField($model,'NOMOR_INDUK_BARU',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NUPTK'); ?>
		<?php echo $form->textField($model,'NUPTK',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GELAR_DEPAN'); ?>
		<?php echo $form->textField($model,'GELAR_DEPAN',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GELAR_BELAKANG'); ?>
		<?php echo $form->textField($model,'GELAR_BELAKANG',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIY_NIGK'); ?>
		<?php echo $form->textField($model,'NIY_NIGK',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIK'); ?>
		<?php echo $form->textField($model,'NIK',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_IBU_KANDUNG'); ?>
		<?php echo $form->textField($model,'NM_IBU_KANDUNG',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RT'); ?>
		<?php echo $form->textField($model,'RT',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RW'); ?>
		<?php echo $form->textField($model,'RW',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KELURAHAN_DESA'); ?>
		<?php echo $form->textField($model,'KELURAHAN_DESA',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KECAMATAN'); ?>
		<?php echo $form->textField($model,'KECAMATAN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KABUPATEN_KOTA'); ?>
		<?php echo $form->textField($model,'KABUPATEN_KOTA',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROPINSI'); ?>
		<?php echo $form->textField($model,'PROPINSI',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_AREA'); ?>
		<?php echo $form->textField($model,'KD_AREA',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS_KEPEGAWAIAN'); ?>
		<?php echo $form->textField($model,'STATUS_KEPEGAWAIAN',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SERTIFIKASI_JABATAN'); ?>
		<?php echo $form->textField($model,'SERTIFIKASI_JABATAN',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAHUN_SERTIFIKAT_JABATAN'); ?>
		<?php echo $form->textField($model,'TAHUN_SERTIFIKAT_JABATAN',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMOR_SERTIFIKAT_JABATAN'); ?>
		<?php echo $form->textField($model,'NOMOR_SERTIFIKAT_JABATAN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_SERTIFIKASI_BIDANG_STUDI'); ?>
		<?php echo $form->textField($model,'KD_SERTIFIKASI_BIDANG_STUDI',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_PROGRAM_KEAHLIAN'); ?>
		<?php echo $form->textField($model,'KD_PROGRAM_KEAHLIAN',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LISENSI_KEPALA_SEKOLAH'); ?>
		<?php echo $form->textField($model,'LISENSI_KEPALA_SEKOLAH',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CATATAN'); ?>
		<?php echo $form->textField($model,'CATATAN',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->