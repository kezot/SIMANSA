<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars',
);
?>


<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$model->search(),
    'filter' => $model,
    //'id' => 'lihatRaporNilaiGrid',
    'columns' => array(
//        array('header'=>'Mapel','value'=>$data->TNilaiRaporNilai->KD_MAPEL_DIAJARKAN,
//            'name'=>'KD_MAPEL_DIAJARKAN','filter'=>Chtml::listData(TNilaiRaporNilai::model()->findAll(),'NIS','KD_MAPEL_DIAJARKAN')),
        array(
            'header' => 'Ekstrakurikuler',
            'name' => 'ID_EKSTRAKURIKULER',
            'type' => 'raw',
            'value' => '($data->ID_EKSTRAKURIKULER == "") ? "" : $data->iDEKSTRAKURIKULER->NM_EKSTRAKURIKULER',
        ),
        'KETERANGAN',
        'CATATAN',
    )
));
?>