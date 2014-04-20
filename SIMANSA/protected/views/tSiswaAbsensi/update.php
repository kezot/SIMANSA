<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaAbsensis'=>array('index'),
	'View'=>array('view', 'nis'=>$model->nis, 'kd_tahun_ajaran'=>$model->kd_tahun_ajaran, 'kd_tingkat_kelas'=>$model->kd_tingkat_kelas, 'kd_program_pengajaran'=>$model->kd_program_pengajaran, 'kd_rombel'=>$model->kd_rombel, 'tanggal'=>$model->tanggal),
	'Update',
);

$this->menu=array(
	array('label'=>'List TSiswaAbsensi', 'url'=>array('index')),
	array('label'=>'Create TSiswaAbsensi', 'url'=>array('create')),
	array('label'=>'View TSiswaAbsensi', 'url'=>array('view', 'nis'=>$model->nis, 'kd_tahun_ajaran'=>$model->kd_tahun_ajaran, 'kd_tingkat_kelas'=>$model->kd_tingkat_kelas, 'kd_program_pengajaran'=>$model->kd_program_pengajaran, 'kd_rombel'=>$model->kd_rombel, 'tanggal'=>$model->tanggal)),
	array('label'=>'Manage TSiswaAbsensi', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
