<?php
/* @var $this TPegawaiController */
/* @var $data TPegawai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NIP), array('view', 'id'=>$data->NIP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMOR_INDUK')); ?>:</b>
	<?php echo CHtml::encode($data->NOMOR_INDUK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NM_PEGAWAI')); ?>:</b>
	<?php echo CHtml::encode($data->NM_PEGAWAI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INISIAL')); ?>:</b>
	<?php echo CHtml::encode($data->INISIAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KOTA_LAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->KOTA_LAHIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_LAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_LAHIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_JENIS_KELAMIN')); ?>:</b>
	<?php echo CHtml::encode($data->KD_JENIS_KELAMIN); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_GOL_DARAH')); ?>:</b>
	<?php echo CHtml::encode($data->KD_GOL_DARAH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_AGAMA')); ?>:</b>
	<?php echo CHtml::encode($data->KD_AGAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_STATUS_NIKAH')); ?>:</b>
	<?php echo CHtml::encode($data->KD_STATUS_NIKAH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMAT')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_POS')); ?>:</b>
	<?php echo CHtml::encode($data->KD_POS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_TELP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_TELP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_JENIS_KETENAGAAN')); ?>:</b>
	<?php echo CHtml::encode($data->KD_JENIS_KETENAGAAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_HP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_HP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIR_FOTO')); ?>:</b>
	<?php echo CHtml::encode($data->DIR_FOTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_AKSES')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_AKSES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMOR_INDUK_BARU')); ?>:</b>
	<?php echo CHtml::encode($data->NOMOR_INDUK_BARU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NUPTK')); ?>:</b>
	<?php echo CHtml::encode($data->NUPTK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GELAR_DEPAN')); ?>:</b>
	<?php echo CHtml::encode($data->GELAR_DEPAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GELAR_BELAKANG')); ?>:</b>
	<?php echo CHtml::encode($data->GELAR_BELAKANG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIY_NIGK')); ?>:</b>
	<?php echo CHtml::encode($data->NIY_NIGK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIK')); ?>:</b>
	<?php echo CHtml::encode($data->NIK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NM_IBU_KANDUNG')); ?>:</b>
	<?php echo CHtml::encode($data->NM_IBU_KANDUNG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RT')); ?>:</b>
	<?php echo CHtml::encode($data->RT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RW')); ?>:</b>
	<?php echo CHtml::encode($data->RW); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS_KEPEGAWAIAN')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS_KEPEGAWAIAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SERTIFIKASI_JABATAN')); ?>:</b>
	<?php echo CHtml::encode($data->SERTIFIKASI_JABATAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAHUN_SERTIFIKAT_JABATAN')); ?>:</b>
	<?php echo CHtml::encode($data->TAHUN_SERTIFIKAT_JABATAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMOR_SERTIFIKAT_JABATAN')); ?>:</b>
	<?php echo CHtml::encode($data->NOMOR_SERTIFIKAT_JABATAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_SERTIFIKASI_BIDANG_STUDI')); ?>:</b>
	<?php echo CHtml::encode($data->KD_SERTIFIKASI_BIDANG_STUDI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KD_PROGRAM_KEAHLIAN')); ?>:</b>
	<?php echo CHtml::encode($data->KD_PROGRAM_KEAHLIAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LISENSI_KEPALA_SEKOLAH')); ?>:</b>
	<?php echo CHtml::encode($data->LISENSI_KEPALA_SEKOLAH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATATAN')); ?>:</b>
	<?php echo CHtml::encode($data->CATATAN); ?>
	<br />

	*/ ?>

</div>