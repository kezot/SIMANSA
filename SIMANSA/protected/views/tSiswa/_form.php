<?php
/* @var $this TSiswaController */
/* @var $model TSiswa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tsiswa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NIS'); ?>
		<?php echo $form->textField($model,'NIS',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'NIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_CALSIS'); ?>
		<?php echo $form->textField($model,'NO_CALSIS',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'NO_CALSIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NM_SISWA'); ?>
		<?php echo $form->textField($model,'NM_SISWA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NM_SISWA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NM_PANGGILAN'); ?>
		<?php echo $form->textField($model,'NM_PANGGILAN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NM_PANGGILAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_JENIS_KELAMIN'); ?>
		<?php echo $form->textField($model,'KD_JENIS_KELAMIN',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_JENIS_KELAMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KOTA_LAHIR'); ?>
		<?php echo $form->textField($model,'KOTA_LAHIR',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'KOTA_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->dateField($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->error($model,'TANGGAL_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'ALAMAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RT'); ?>
		<?php echo $form->textField($model,'RT',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'RT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RW'); ?>
		<?php echo $form->textField($model,'RW',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'RW'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_POS'); ?>
		<?php echo $form->textField($model,'KD_POS',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'KD_POS'); ?>
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
		<?php echo $form->labelEx($model,'NO_TELP'); ?>
		<?php echo $form->textField($model,'NO_TELP',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'NO_TELP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_HP'); ?>
		<?php echo $form->textField($model,'NO_HP',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'NO_HP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS_SISWA'); ?>
		<?php echo $form->textField($model,'STATUS_SISWA',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'STATUS_SISWA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KEWARGANEGARAAN'); ?>
		<?php echo $form->textField($model,'KEWARGANEGARAAN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'KEWARGANEGARAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ANAK_KE'); ?>
		<?php echo $form->textField($model,'ANAK_KE'); ?>
		<?php echo $form->error($model,'ANAK_KE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JUMLAH_KANDUNG'); ?>
		<?php echo $form->textField($model,'JUMLAH_KANDUNG'); ?>
		<?php echo $form->error($model,'JUMLAH_KANDUNG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JUMLAH_TIRI'); ?>
		<?php echo $form->textField($model,'JUMLAH_TIRI'); ?>
		<?php echo $form->error($model,'JUMLAH_TIRI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JUMLAH_ANGKAT'); ?>
		<?php echo $form->textField($model,'JUMLAH_ANGKAT'); ?>
		<?php echo $form->error($model,'JUMLAH_ANGKAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS_YATIM_PIATU'); ?>
		<?php echo $form->textField($model,'STATUS_YATIM_PIATU',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'STATUS_YATIM_PIATU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BAHASA'); ?>
		<?php echo $form->textField($model,'BAHASA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'BAHASA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TINGGAL_DI'); ?>
		<?php echo $form->textField($model,'TINGGAL_DI',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TINGGAL_DI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JARAK_SEK'); ?>
		<?php echo $form->textField($model,'JARAK_SEK',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'JARAK_SEK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KELAINAN_JASMANI'); ?>
		<?php echo $form->textField($model,'KELAINAN_JASMANI',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'KELAINAN_JASMANI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BERAT_BADAN'); ?>
		<?php echo $form->textField($model,'BERAT_BADAN'); ?>
		<?php echo $form->error($model,'BERAT_BADAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TINGGI_BADAN'); ?>
		<?php echo $form->textField($model,'TINGGI_BADAN'); ?>
		<?php echo $form->error($model,'TINGGI_BADAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ASAL_SMP'); ?>
		<?php echo $form->textField($model,'ASAL_SMP'); ?>
		<?php echo $form->error($model,'ASAL_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_STL_SMP'); ?>
		<?php echo $form->textField($model,'NO_STL_SMP',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'NO_STL_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TANGGAL_STL_SMP'); ?>
		<?php echo $form->textField($model,'TANGGAL_STL_SMP'); ?>
		<?php echo $form->error($model,'TANGGAL_STL_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LAMA_BELAJAR_SMP'); ?>
		<?php echo $form->textField($model,'LAMA_BELAJAR_SMP'); ?>
		<?php echo $form->error($model,'LAMA_BELAJAR_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ASAL_SMA'); ?>
		<?php echo $form->textField($model,'ASAL_SMA'); ?>
		<?php echo $form->error($model,'ASAL_SMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_TINGKAT_KELAS'); ?>
		<?php echo $form->textField($model,'KD_TINGKAT_KELAS',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'KD_TINGKAT_KELAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_PROGRAM_PENGAJARAN'); ?>
		<?php echo $form->textField($model,'KD_PROGRAM_PENGAJARAN',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_PROGRAM_PENGAJARAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DITERIMA_TANGGAL'); ?>
		<?php echo $form->textField($model,'DITERIMA_TANGGAL'); ?>
		<?php echo $form->error($model,'DITERIMA_TANGGAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PINDAH_ALASAN'); ?>
		<?php echo $form->textField($model,'PINDAH_ALASAN',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PINDAH_ALASAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUBUNGI'); ?>
		<?php echo $form->textField($model,'HUBUNGI',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'HUBUNGI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TANGGUNG_BIAYA'); ?>
		<?php echo $form->textField($model,'TANGGUNG_BIAYA'); ?>
		<?php echo $form->error($model,'TANGGUNG_BIAYA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TEMP_AKSES_NET'); ?>
		<?php echo $form->textField($model,'TEMP_AKSES_NET',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'TEMP_AKSES_NET'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FREK_AKSES_NET'); ?>
		<?php echo $form->textField($model,'FREK_AKSES_NET',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'FREK_AKSES_NET'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FREK_REKRE_KEL'); ?>
		<?php echo $form->textField($model,'FREK_REKRE_KEL',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'FREK_REKRE_KEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NILAI'); ?>
		<?php echo $form->textField($model,'NILAI',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'NILAI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_INDUK'); ?>
		<?php echo $form->textField($model,'NO_INDUK',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'NO_INDUK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIR_FOTO'); ?>
		<?php echo $form->textField($model,'DIR_FOTO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DIR_FOTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS_ENTRI'); ?>
		<?php echo $form->textField($model,'STATUS_ENTRI',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'STATUS_ENTRI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_JENIS_KETUNAAN'); ?>
		<?php echo $form->textField($model,'KD_JENIS_KETUNAAN',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_JENIS_KETUNAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KD_STATUS_DALAM_KELUARGA'); ?>
		<?php echo $form->textField($model,'KD_STATUS_DALAM_KELUARGA',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_STATUS_DALAM_KELUARGA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TANGGAL_SKHUN_SMP'); ?>
		<?php echo $form->textField($model,'TANGGAL_SKHUN_SMP'); ?>
		<?php echo $form->error($model,'TANGGAL_SKHUN_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_SKHUN_SMP'); ?>
		<?php echo $form->textField($model,'NO_SKHUN_SMP',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'NO_SKHUN_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NISN'); ?>
		<?php echo $form->textField($model,'NISN',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'NISN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIK'); ?>
		<?php echo $form->textField($model,'NIK',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NIK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JENIS_TINGGAL'); ?>
		<?php echo $form->textField($model,'JENIS_TINGGAL',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'JENIS_TINGGAL'); ?>
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
		<?php echo $form->labelEx($model,'KD_JARAK_SEK'); ?>
		<?php echo $form->textField($model,'KD_JARAK_SEK',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'KD_JARAK_SEK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALAT_TRANSPORTASI'); ?>
		<?php echo $form->textField($model,'ALAT_TRANSPORTASI',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'ALAT_TRANSPORTASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL_PRIBADI'); ?>
		<?php echo $form->textField($model,'EMAIL_PRIBADI',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'EMAIL_PRIBADI'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->