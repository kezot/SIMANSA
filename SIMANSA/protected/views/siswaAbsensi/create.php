<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaAbsensis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TSiswaAbsensis', 'url'=>array('index')),
    array('label'=>'Manage TSiswaAbsensi', 'url'=>array('admin')),
);
?>

<h1 style="text-align: center">Buat Baru</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model,  'siswaTingkat' => $siswaTingkat)); ?>
