<?php
/* @var $this TPegawaiController */
/* @var $model TPegawai */

$this->breadcrumbs=array(
	'Tpegawais'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TPegawai', 'url'=>array('index')),
	array('label'=>'Create TPegawai', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tpegawai-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tpegawais</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tpegawai-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'NIP',
		'NOMOR_INDUK',
		'NM_PEGAWAI',
		'INISIAL',
		'KOTA_LAHIR',
		'TANGGAL_LAHIR',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
