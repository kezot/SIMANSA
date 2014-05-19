<?php
/* @var $this RPembayaranSiswaController */
/* @var $model RPembayaranSiswa */

$this->breadcrumbs=array(
	'Rpembayaran Siswas'=>array('index'),
	$model->ID_PEMBAYARAN_SISWA=>array('view','id'=>$model->ID_PEMBAYARAN_SISWA),
	'Update',
);

$this->menu=array(
	array('label'=>'List RPembayaranSiswa', 'url'=>array('index')),
	array('label'=>'Create RPembayaranSiswa', 'url'=>array('create')),
	array('label'=>'View RPembayaranSiswa', 'url'=>array('view', 'id'=>$model->ID_PEMBAYARAN_SISWA)),
	array('label'=>'Manage RPembayaranSiswa', 'url'=>array('admin')),
);
?>

<h1>Update RPembayaranSiswa <?php echo $model->ID_PEMBAYARAN_SISWA; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>