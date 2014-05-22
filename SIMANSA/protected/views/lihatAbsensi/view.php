<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars',
);
?>

<h1>Lihat Absensi</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'id' => 'lihatAbsensiGrid',
    'columns' => array(
        'NIS',
        'KD_TINGKAT_KELAS',
        'KD_PROGRAM_PENGAJARAN',
    )
)); ?>