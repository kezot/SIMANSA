<?php
/* @var $this SiswaController */
/* @var $data Siswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NIS), array('view', 'id'=>$data->NIS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_CALSIS')); ?>:</b>
	<?php echo CHtml::encode($data->NO_CALSIS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NM_SISWA')); ?>:</b>
	<?php echo CHtml::encode($data->NM_SISWA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NM_PANGGILAN')); ?>:</b>
	<?php echo CHtml::encode($data->NM_PANGGILAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_JENIS_KELAMIN')); ?>:</b>
	<?php echo CHtml::encode($data->KD_JENIS_KELAMIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KOTA_LAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->KOTA_LAHIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_LAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_LAHIR); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMAT')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RT')); ?>:</b>
	<?php echo CHtml::encode($data->RT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RW')); ?>:</b>
	<?php echo CHtml::encode($data->RW); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_POS')); ?>:</b>
	<?php echo CHtml::encode($data->KD_POS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_GOL_DARAH')); ?>:</b>
	<?php echo CHtml::encode($data->KD_GOL_DARAH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_AGAMA')); ?>:</b>
	<?php echo CHtml::encode($data->KD_AGAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_TELP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_TELP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_HP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_HP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS_SISWA')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS_SISWA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KEWARGANEGARAAN')); ?>:</b>
	<?php echo CHtml::encode($data->KEWARGANEGARAAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANAK_KE')); ?>:</b>
	<?php echo CHtml::encode($data->ANAK_KE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUMLAH_KANDUNG')); ?>:</b>
	<?php echo CHtml::encode($data->JUMLAH_KANDUNG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUMLAH_TIRI')); ?>:</b>
	<?php echo CHtml::encode($data->JUMLAH_TIRI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUMLAH_ANGKAT')); ?>:</b>
	<?php echo CHtml::encode($data->JUMLAH_ANGKAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS_YATIM_PIATU')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS_YATIM_PIATU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BAHASA')); ?>:</b>
	<?php echo CHtml::encode($data->BAHASA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TINGGAL_DI')); ?>:</b>
	<?php echo CHtml::encode($data->TINGGAL_DI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JARAK_SEK')); ?>:</b>
	<?php echo CHtml::encode($data->JARAK_SEK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KELAINAN_JASMANI')); ?>:</b>
	<?php echo CHtml::encode($data->KELAINAN_JASMANI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BERAT_BADAN')); ?>:</b>
	<?php echo CHtml::encode($data->BERAT_BADAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TINGGI_BADAN')); ?>:</b>
	<?php echo CHtml::encode($data->TINGGI_BADAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ASAL_SMP')); ?>:</b>
	<?php echo CHtml::encode($data->ASAL_SMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_STL_SMP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_STL_SMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_STL_SMP')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_STL_SMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LAMA_BELAJAR_SMP')); ?>:</b>
	<?php echo CHtml::encode($data->LAMA_BELAJAR_SMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ASAL_SMA')); ?>:</b>
	<?php echo CHtml::encode($data->ASAL_SMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_TINGKAT_KELAS')); ?>:</b>
	<?php echo CHtml::encode($data->KD_TINGKAT_KELAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_PROGRAM_PENGAJARAN')); ?>:</b>
	<?php echo CHtml::encode($data->KD_PROGRAM_PENGAJARAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DITERIMA_TANGGAL')); ?>:</b>
	<?php echo CHtml::encode($data->DITERIMA_TANGGAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PINDAH_ALASAN')); ?>:</b>
	<?php echo CHtml::encode($data->PINDAH_ALASAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HUBUNGI')); ?>:</b>
	<?php echo CHtml::encode($data->HUBUNGI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGUNG_BIAYA')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGUNG_BIAYA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEMP_AKSES_NET')); ?>:</b>
	<?php echo CHtml::encode($data->TEMP_AKSES_NET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FREK_AKSES_NET')); ?>:</b>
	<?php echo CHtml::encode($data->FREK_AKSES_NET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FREK_REKRE_KEL')); ?>:</b>
	<?php echo CHtml::encode($data->FREK_REKRE_KEL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NILAI')); ?>:</b>
	<?php echo CHtml::encode($data->NILAI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_INDUK')); ?>:</b>
	<?php echo CHtml::encode($data->NO_INDUK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIR_FOTO')); ?>:</b>
	<?php echo CHtml::encode($data->DIR_FOTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS_ENTRI')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS_ENTRI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_JENIS_KETUNAAN')); ?>:</b>
	<?php echo CHtml::encode($data->KD_JENIS_KETUNAAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_STATUS_DALAM_KELUARGA')); ?>:</b>
	<?php echo CHtml::encode($data->KD_STATUS_DALAM_KELUARGA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_SKHUN_SMP')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_SKHUN_SMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_SKHUN_SMP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_SKHUN_SMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NISN')); ?>:</b>
	<?php echo CHtml::encode($data->NISN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIK')); ?>:</b>
	<?php echo CHtml::encode($data->NIK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JENIS_TINGGAL')); ?>:</b>
	<?php echo CHtml::encode($data->JENIS_TINGGAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KELURAHAN_DESA')); ?>:</b>
	<?php echo CHtml::encode($data->KELURAHAN_DESA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KECAMATAN')); ?>:</b>
	<?php echo CHtml::encode($data->KECAMATAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KABUPATEN_KOTA')); ?>:</b>
	<?php echo CHtml::encode($data->KABUPATEN_KOTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROPINSI')); ?>:</b>
	<?php echo CHtml::encode($data->PROPINSI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_AREA')); ?>:</b>
	<?php echo CHtml::encode($data->KD_AREA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_JARAK_SEK')); ?>:</b>
	<?php echo CHtml::encode($data->KD_JARAK_SEK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAT_TRANSPORTASI')); ?>:</b>
	<?php echo CHtml::encode($data->ALAT_TRANSPORTASI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL_PRIBADI')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL_PRIBADI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_AKSES')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_AKSES); ?>
	<br />

	*/ ?>

</div>