
<?php
/* @var $this TSiswaController */
/* @var $model TSiswa */

$this->breadcrumbs=array(
	'SIswa'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TSiswa', 'url'=>array('index')),
	array('label'=>'Manage TSiswa', 'url'=>array('admin')),
);
?>

<h1>Create TSiswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>