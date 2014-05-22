<?php
/* @var $this TPegawaiController */
/* @var $model TPegawai */

$this->breadcrumbs=array(
	'Tpegawais'=>array('index'),
	$model->NIP,
);

$this->menu=array(
	array('label'=>'List TPegawai', 'url'=>array('index')),
	array('label'=>'Create TPegawai', 'url'=>array('create')),
	array('label'=>'Update TPegawai', 'url'=>array('update', 'id'=>$model->NIP)),
	array('label'=>'Delete TPegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NIP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TPegawai', 'url'=>array('admin')),
);
?>

<h1>View TPegawai #<?php echo $model->NIP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
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
