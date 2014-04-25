<?php
/* @var $this TSiswaController */
/* @var $model TSiswa */

$this->breadcrumbs=array(
	'Tsiswas'=>array('index'),
	$model->NIS=>array('view','id'=>$model->NIS),
	'Update',
);

$this->menu=array(
	array('label'=>'List TSiswa', 'url'=>array('index')),
	array('label'=>'Create TSiswa', 'url'=>array('create')),
	array('label'=>'View TSiswa', 'url'=>array('view', 'id'=>$model->NIS)),
	array('label'=>'Manage TSiswa', 'url'=>array('admin')),
);
?>

<h1>Update TSiswa <?php echo $model->NIS; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>