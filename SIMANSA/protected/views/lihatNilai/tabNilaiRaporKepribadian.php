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
            'header' => 'Kepribadian',
            'name' => 'KD_KEPRIBADIAN',
            'type' => 'raw',
            'value' => '($data->KD_KEPRIBADIAN == "") ? "" : $data->kDKEPRIBADIAN->NM_KEPRIBADIAN',
        ),
        'KETERANGAN',
    )
));
?>