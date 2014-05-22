<?php
/* @var $this TSiswaController */
/* @var $model TSiswa */

$this->breadcrumbs=array(
	'Tsiswas'=>array('index'),
	$model->NM_SISWA=>array('view','id'=>$model->NIS),
	'Update',
);
?>

<h1>Update Profil </h1>
<!-- <h1><?php echo $model->NM_SISWA; ?></h1> -->

<?php $this->renderPartial('_formSiswa', array('model'=>$model)); ?>