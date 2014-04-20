<?php
/* @var $this SiswaController */
/* @var $model Siswa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NIS'); ?>
		<?php echo $form->textField($model,'NIS',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_CALSIS'); ?>
		<?php echo $form->textField($model,'NO_CALSIS',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_SISWA'); ?>
		<?php echo $form->textField($model,'NM_SISWA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_PANGGILAN'); ?>
		<?php echo $form->textField($model,'NM_PANGGILAN',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_JENIS_KELAMIN'); ?>
		<?php echo $form->textField($model,'KD_JENIS_KELAMIN',array('size'=>1,'maxlength'=>1)); ?>
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
		<?php echo $form->label($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RT'); ?>
		<?php echo $form->textField($model,'RT',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RW'); ?>
		<?php echo $form->textField($model,'RW',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_POS'); ?>
		<?php echo $form->textField($model,'KD_POS',array('size'=>5,'maxlength'=>5)); ?>
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
		<?php echo $form->label($model,'NO_TELP'); ?>
		<?php echo $form->textField($model,'NO_TELP',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_HP'); ?>
		<?php echo $form->textField($model,'NO_HP',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS_SISWA'); ?>
		<?php echo $form->textField($model,'STATUS_SISWA',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KEWARGANEGARAAN'); ?>
		<?php echo $form->textField($model,'KEWARGANEGARAAN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANAK_KE'); ?>
		<?php echo $form->textField($model,'ANAK_KE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUMLAH_KANDUNG'); ?>
		<?php echo $form->textField($model,'JUMLAH_KANDUNG'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUMLAH_TIRI'); ?>
		<?php echo $form->textField($model,'JUMLAH_TIRI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUMLAH_ANGKAT'); ?>
		<?php echo $form->textField($model,'JUMLAH_ANGKAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS_YATIM_PIATU'); ?>
		<?php echo $form->textField($model,'STATUS_YATIM_PIATU',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BAHASA'); ?>
		<?php echo $form->textField($model,'BAHASA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TINGGAL_DI'); ?>
		<?php echo $form->textField($model,'TINGGAL_DI',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JARAK_SEK'); ?>
		<?php echo $form->textField($model,'JARAK_SEK',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KELAINAN_JASMANI'); ?>
		<?php echo $form->textField($model,'KELAINAN_JASMANI',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BERAT_BADAN'); ?>
		<?php echo $form->textField($model,'BERAT_BADAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TINGGI_BADAN'); ?>
		<?php echo $form->textField($model,'TINGGI_BADAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ASAL_SMP'); ?>
		<?php echo $form->textField($model,'ASAL_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_STL_SMP'); ?>
		<?php echo $form->textField($model,'NO_STL_SMP',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGAL_STL_SMP'); ?>
		<?php echo $form->textField($model,'TANGGAL_STL_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LAMA_BELAJAR_SMP'); ?>
		<?php echo $form->textField($model,'LAMA_BELAJAR_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ASAL_SMA'); ?>
		<?php echo $form->textField($model,'ASAL_SMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_TINGKAT_KELAS'); ?>
		<?php echo $form->textField($model,'KD_TINGKAT_KELAS',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_PROGRAM_PENGAJARAN'); ?>
		<?php echo $form->textField($model,'KD_PROGRAM_PENGAJARAN',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DITERIMA_TANGGAL'); ?>
		<?php echo $form->textField($model,'DITERIMA_TANGGAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PINDAH_ALASAN'); ?>
		<?php echo $form->textField($model,'PINDAH_ALASAN',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HUBUNGI'); ?>
		<?php echo $form->textField($model,'HUBUNGI',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGUNG_BIAYA'); ?>
		<?php echo $form->textField($model,'TANGGUNG_BIAYA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEMP_AKSES_NET'); ?>
		<?php echo $form->textField($model,'TEMP_AKSES_NET',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FREK_AKSES_NET'); ?>
		<?php echo $form->textField($model,'FREK_AKSES_NET',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FREK_REKRE_KEL'); ?>
		<?php echo $form->textField($model,'FREK_REKRE_KEL',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NILAI'); ?>
		<?php echo $form->textField($model,'NILAI',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_INDUK'); ?>
		<?php echo $form->textField($model,'NO_INDUK',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIR_FOTO'); ?>
		<?php echo $form->textField($model,'DIR_FOTO',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS_ENTRI'); ?>
		<?php echo $form->textField($model,'STATUS_ENTRI',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_JENIS_KETUNAAN'); ?>
		<?php echo $form->textField($model,'KD_JENIS_KETUNAAN',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_STATUS_DALAM_KELUARGA'); ?>
		<?php echo $form->textField($model,'KD_STATUS_DALAM_KELUARGA',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGAL_SKHUN_SMP'); ?>
		<?php echo $form->textField($model,'TANGGAL_SKHUN_SMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_SKHUN_SMP'); ?>
		<?php echo $form->textField($model,'NO_SKHUN_SMP',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NISN'); ?>
		<?php echo $form->textField($model,'NISN',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIK'); ?>
		<?php echo $form->textField($model,'NIK',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JENIS_TINGGAL'); ?>
		<?php echo $form->textField($model,'JENIS_TINGGAL',array('size'=>1,'maxlength'=>1)); ?>
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
		<?php echo $form->label($model,'KD_JARAK_SEK'); ?>
		<?php echo $form->textField($model,'KD_JARAK_SEK',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAT_TRANSPORTASI'); ?>
		<?php echo $form->textField($model,'ALAT_TRANSPORTASI',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL_PRIBADI'); ?>
		<?php echo $form->textField($model,'EMAIL_PRIBADI',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGAL_AKSES'); ?>
		<?php echo $form->textField($model,'TANGGAL_AKSES'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->