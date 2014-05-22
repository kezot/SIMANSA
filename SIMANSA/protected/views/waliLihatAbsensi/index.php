<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
    'Lihat Absensi',
);
?>

<h1>Lihat Absensi</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'id' => 'lihatAbsensiGrid',
    'columns' => array(
        array(
            'header' => 'NIS',
            'name' => 'NIS',
            'type' => 'raw',
            //'urlExpression'=>'waliLihatAbsensi/view&NIS='.$data->NIS.'&KD_TAHUN_AJARAN='.$data->KD_TAHUN_AJARAN.'&KD_TINGKAT_KELAS='.$data->KD_TINGKAT_KELAS.'&KD_PROGRAM_PENGAJARAN='.$data->KD_PROGRAM_PENGAJARAN.'&KD_ROMBEL='.$data->KD_ROMBEL,
            //'url' => 'Yii::app()->createUrl("/waliLihatAbsensi/index", array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN))',
            'value' => 'CHtml::link($data->NIS, Yii::app()->createUrl("waliLihatAbsensi/view",array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN, "KD_ROMBEL"=>$data->KD_ROMBEL, "KD_PROGRAM_PENGAJARAN"=>$data->KD_PROGRAM_PENGAJARAN, "KD_TINGKAT_KELAS"=>$data->KD_TINGKAT_KELAS)))'
            ),
        array(
            'header' => 'Nama',
            'name' => 'NIS',
            'type' => 'raw',
            'value' => '($data->NIS == "") ? "" : $data->nIS->NM_SISWA',
        ),
    )
)); ?>