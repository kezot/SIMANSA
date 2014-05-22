<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars',
);
?>

<h1>Lihat Nilai</h1>

<?php
$nilai = $this->createUrl('LihatNilai/Nilai');
$ekstra = $this->createUrl('LihatNilai/Ekstra');
$kepribadian = $this->createUrl('LihatNilai/Kepribadian');
//$kepribadian = $this->createUrl('TNilaiRaporNilai/index');
//$nilai = $this->renderPartial('/lihatNilai/tabNilairaporNilai', array('dataProvider'=>$dataProvider));
//$ekstra = $this->renderPartial('/lihatNilai/tabNilairaporNilai', array('dataProvider'=>$dataProvider));
$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs' => array(
        'Rapor Mapel' => array('ajax'=>$nilai, 'id'=>'nilai'),
        'Rapor Ekstrakurikuler' => array('ajax'=>$ekstra, 'id'=>'ekstra'),
        'Rapor Kepribadian' => array('ajax'=>$kepribadian, 'id'=>'kepribadian'),
        
//'Rapor Kepribadian' => array('content' => array('ajax'=>$ekstra, 'id'=>'nilai')),
    ),
    // additional javascript options for the tabs plugin
    'options' => array(
        'collapsible' => false,
        //'event' => 'mouseover',
    ),
));
//$this->widget('zii.widgets.jui.CJuiTabs', array(
//    //'dataProvider'=>$dataProvider,
//    'tabs' => array(
////        'Rapor Mapel' => $this->renderPartial("tabNilaiRaporNilai", array('model'=>$model), true, true),
////        'Rapor Mapel' => $this->renderPartial("tabNilaiRaporNilai", array('model'=>$model), true, true),
////        'Rapor Mapel' => $this->renderPartial("tabNilaiRaporNilai", array('model'=>$model), true, true),
//        'Tab 1' => 'Lalalala',
//        'Tab 2' => array('content'=>$this->renderPartial('/lihatNilai/tabNilaiRaporNilai', array('dataProvider'=>$dataProvider))),
//        'AjaxTab' => array('ajax'=>$this->renderPartial('/lihatNilai/tabNilaiRaporNilai', array('dataProvider'=>$dataProvider))),
//        
//    ),
//    // additional javascript options for the tabs plugin
//    'options' => array(
//        'collapsible' => false,
//        //'event' => 'mouseclick',
//    ),
//));

?>