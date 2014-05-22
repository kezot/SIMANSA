<?php
/* @var $this TPegawaiController */
/* @var $model TPegawai */

$this->breadcrumbs=array(
	'Profil'=>array('index'),
	$model->NM_PEGAWAI,
);


?>

<h1>Profil <?php echo $model->NM_PEGAWAI; ?></h1>

<?php

echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=profil/changePassword&username=' .Yii::app()->user->name. '"><button>Ubah Password</button>';
echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=profil/update&id=' . $model->NIP. '"><button>Update Profil</button>';

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIP',
		'NOMOR_INDUK',
		'NM_PEGAWAI',
		'INISIAL',
		'KOTA_LAHIR',
		'TANGGAL_LAHIR',
		'KD_JENIS_KELAMIN',
		'KD_GOL_DARAH',
		'KD_AGAMA',
		'KD_STATUS_NIKAH',
		'ALAMAT',
		'KD_POS',
		'NO_TELP',
		'KD_JENIS_KETENAGAAN',
		'NO_HP',
		'DIR_FOTO',
		'USERNAME',
		'TANGGAL_AKSES',
		'NOMOR_INDUK_BARU',
		'NUPTK',
		'GELAR_DEPAN',
		'GELAR_BELAKANG',
		'NIY_NIGK',
		'NIK',
		'NM_IBU_KANDUNG',
		'RT',
		'RW',
		'KELURAHAN_DESA',
		'KECAMATAN',
		'KABUPATEN_KOTA',
		'PROPINSI',
		'KD_AREA',
		'EMAIL',
		'STATUS_KEPEGAWAIAN',
		'SERTIFIKASI_JABATAN',
		'TAHUN_SERTIFIKAT_JABATAN',
		'NOMOR_SERTIFIKAT_JABATAN',
		'KD_SERTIFIKASI_BIDANG_STUDI',
		'KD_PROGRAM_KEAHLIAN',
		'LISENSI_KEPALA_SEKOLAH',
		'CATATAN',
	),
)); ?>
