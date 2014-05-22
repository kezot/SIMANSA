<?php
/* @var $this TPegawaiController */
/* @var $model TPegawai */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tpegawai-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMOR_INDUK'); ?>
		<?php echo $form->textField($model,'NOMOR_INDUK',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'NOMOR_INDUK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NM_PEGAWAI'); ?>
		<?php echo $form->textField($model,'NM_PEGAWAI',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NM_PEGAWAI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INISIAL'); ?>
		<?php echo $form->textField($model,'INISIAL',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'INISIAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KOTA_LAHIR'); ?>
		<?php echo $form->textField($model,'KOTA_LAHIR',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'KOTA_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->textField($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->error($model,'TANGGAL_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_JENIS_KELAMIN'); ?>
		<?php echo $form->textField($model,'KD_JENIS_KELAMIN',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_JENIS_KELAMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_GOL_DARAH'); ?>
		<?php echo $form->textField($model,'KD_GOL_DARAH',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_GOL_DARAH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_AGAMA'); ?>
		<?php echo $form->textField($model,'KD_AGAMA',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_AGAMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_STATUS_NIKAH'); ?>
		<?php echo $form->textField($model,'KD_STATUS_NIKAH',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_STATUS_NIKAH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'ALAMAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_POS'); ?>
		<?php echo $form->textField($model,'KD_POS',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'KD_POS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_TELP'); ?>
		<?php echo $form->textField($model,'NO_TELP',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'NO_TELP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_JENIS_KETENAGAAN'); ?>
		<?php echo $form->textField($model,'KD_JENIS_KETENAGAAN',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_JENIS_KETENAGAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_HP'); ?>
		<?php echo $form->textField($model,'NO_HP',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'NO_HP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIR_FOTO'); ?>
		<?php echo $form->textField($model,'DIR_FOTO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DIR_FOTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USERNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TANGGAL_AKSES'); ?>
		<?php echo $form->textField($model,'TANGGAL_AKSES'); ?>
		<?php echo $form->error($model,'TANGGAL_AKSES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMOR_INDUK_BARU'); ?>
		<?php echo $form->textField($model,'NOMOR_INDUK_BARU',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'NOMOR_INDUK_BARU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NUPTK'); ?>
		<?php echo $form->textField($model,'NUPTK',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'NUPTK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GELAR_DEPAN'); ?>
		<?php echo $form->textField($model,'GELAR_DEPAN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'GELAR_DEPAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GELAR_BELAKANG'); ?>
		<?php echo $form->textField($model,'GELAR_BELAKANG',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'GELAR_BELAKANG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIY_NIGK'); ?>
		<?php echo $form->textField($model,'NIY_NIGK',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NIY_NIGK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIK'); ?>
		<?php echo $form->textField($model,'NIK',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NIK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NM_IBU_KANDUNG'); ?>
		<?php echo $form->textField($model,'NM_IBU_KANDUNG',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'NM_IBU_KANDUNG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RT'); ?>
		<?php echo $form->textField($model,'RT',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'RT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RW'); ?>
		<?php echo $form->textField($model,'RW',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'RW'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KELURAHAN_DESA'); ?>
		<?php echo $form->textField($model,'KELURAHAN_DESA',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'KELURAHAN_DESA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KECAMATAN'); ?>
		<?php echo $form->textField($model,'KECAMATAN',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'KECAMATAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KABUPATEN_KOTA'); ?>
		<?php echo $form->textField($model,'KABUPATEN_KOTA',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'KABUPATEN_KOTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PROPINSI'); ?>
		<?php echo $form->textField($model,'PROPINSI',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PROPINSI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_AREA'); ?>
		<?php echo $form->textField($model,'KD_AREA',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'KD_AREA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS_KEPEGAWAIAN'); ?>
		<?php echo $form->textField($model,'STATUS_KEPEGAWAIAN',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'STATUS_KEPEGAWAIAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SERTIFIKASI_JABATAN'); ?>
		<?php echo $form->textField($model,'SERTIFIKASI_JABATAN',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'SERTIFIKASI_JABATAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TAHUN_SERTIFIKAT_JABATAN'); ?>
		<?php echo $form->textField($model,'TAHUN_SERTIFIKAT_JABATAN',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'TAHUN_SERTIFIKAT_JABATAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMOR_SERTIFIKAT_JABATAN'); ?>
		<?php echo $form->textField($model,'NOMOR_SERTIFIKAT_JABATAN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NOMOR_SERTIFIKAT_JABATAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_SERTIFIKASI_BIDANG_STUDI'); ?>
		<?php echo $form->textField($model,'KD_SERTIFIKASI_BIDANG_STUDI',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'KD_SERTIFIKASI_BIDANG_STUDI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_PROGRAM_KEAHLIAN'); ?>
		<?php echo $form->textField($model,'KD_PROGRAM_KEAHLIAN',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'KD_PROGRAM_KEAHLIAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LISENSI_KEPALA_SEKOLAH'); ?>
		<?php echo $form->textField($model,'LISENSI_KEPALA_SEKOLAH',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'LISENSI_KEPALA_SEKOLAH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CATATAN'); ?>
		<?php echo $form->textField($model,'CATATAN',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'CATATAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->