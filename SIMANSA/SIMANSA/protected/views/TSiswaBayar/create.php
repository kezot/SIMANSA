<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TSiswaBayars', 'url'=>array('index')),
    array('label'=>'Manage TSiswaBayar', 'url'=>array('admin')),
);
?>

<h1>Create TSiswaBayar</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
