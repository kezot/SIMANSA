<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaAbsensis'=>array('index'),
	'View'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'TANGGAL'=>$model->TANGGAL),
	'Update',
);

$this->menu=array(
	array('label'=>'List TSiswaAbsensi', 'url'=>array('index')),
	array('label'=>'Create TSiswaAbsensi', 'url'=>array('create')),
	array('label'=>'View TSiswaAbsensi', 'url'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'TANGGAL'=>$model->TANGGAL)),
	array('label'=>'Manage TSiswaAbsensi', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
