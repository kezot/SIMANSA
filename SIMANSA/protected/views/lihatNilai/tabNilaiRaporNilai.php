<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars',
);
?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    //'id' => 'lihatRaporNilaiGrid',
    'columns' => array(
//        array('header'=>'Mapel','value'=>$data->TNilaiRaporNilai->KD_MAPEL_DIAJARKAN,
//            'name'=>'KD_MAPEL_DIAJARKAN','filter'=>Chtml::listData(TNilaiRaporNilai::model()->findAll(),'NIS','KD_MAPEL_DIAJARKAN')),
        array(
            'header' => 'Mapel',
            'name' => 'KD_MATA_PELAJARAN_DIAJARKAN',
            'type' => 'raw',
            'value' => '($data->KD_MATA_PELAJARAN_DIAJARKAN == "") ? "" : $data->kDMATAPELAJARANDIAJARKAN->NM_MATA_PELAJARAN_DIAJARKAN',
            //'value' => $data->TNilaiRaporNilai->KD_MATA_PELAJARAN_DIAJARKAN,
        ),
        'NILAI_KOGNITIF',
        'NILAI_PSIKOMOTOR',
        'KETERANGAN',
    )
));
?>