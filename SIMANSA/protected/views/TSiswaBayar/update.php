<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars'=>array('index'),
	'View'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'ID_PEMBAYARAN_SISWA'=>$model->ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR'=>$model->TANGGAL_BAYAR),
	'Update',
);

$this->menu=array(
	array('label'=>'List TSiswaBayar', 'url'=>array('index')),
	array('label'=>'Create TSiswaBayar', 'url'=>array('create')),
	array('label'=>'View TSiswaBayar', 'url'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'ID_PEMBAYARAN_SISWA'=>$model->ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR'=>$model->TANGGAL_BAYAR)),
	array('label'=>'Manage TSiswaBayar', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
