<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars',
);

$id_rapor = '';
$nilai = '';
$selected = '';

if (isset($_POST['selectRapor'])) {
    $id_rapor = $_POST['selectRapor'];
}
?>

<h1>Lihat Nilai</h1>

<form method="post" action="<?php echo htmlspecialchars(Yii::app()->request->baseUrl . '/index.php?r=lihatNilai/'); ?>">
    <select name="selectRapor" >
        <?php
        if ($id_rapor == 0) {
            $selected = 'selected';
        }
        echo '<option ' . $selected . ' value="-1">Pilih Semester</option>';
        //echo '<option>' . $selected . '</option>';
        $rapor = $this->listRapor();
        for ($index = 0; $index < count($rapor); $index++) {
            $nilai = $rapor[$index]->KD_TINGKAT_KELAS.$rapor[$index]->KD_PERIODE_BELAJAR;
            //echo '<option>' . $nilai . '</option>';
            if ($nilai == $id_rapor) {
                $selected = 'selected';
                //echo '<option>' . $selected . '</option>';
            } else {
                $selected = '';
                //echo '<option>' . $selected . '</option>';
            }
            $a = $index+1;
            //echo '<option value="' . $rapor[$index]->KD_TINGKAT_KELAS.'" ' . $selected . '>' .$index+1  . '</option>';
            //echo '<option value="'.$rapor[$index]->KD_TINGKAT_KELAS.'" ' . $selected . '>' .$index+1  . '</option>';
            echo '<option value="' . $rapor[$index]->KD_TINGKAT_KELAS .$rapor[$index]->KD_PERIODE_BELAJAR. '" ' . $selected . '>' . $a . '</option>';
        }
        ?>
    </select>

    <input type="submit" name="submit" value="Cari">
</form>

<?php
if(isset($_POST['selectRapor'])){
    $semester = $_POST['selectRapor'];
    $tingkatKelas = (int)substr($semester,0,2);
    $periodeBelajar = (int)substr($semester,2);

    $profile = $this->getUser();
    //$rapor = TNilaiRapor::model()->findByAttributes(array("NIS" => $profile[0], "KD_TINGKAT_KELAS" => $tingkatKelas, "KD_PERIODE_BELAJAR" => $periodeBelajar));
    
    $nilai = $this->createUrl('LihatNilai/Nilai&NIS='.$profile[0].' & KD_TINGKAT_KELAS='.$tingkatKelas.' & KD_PERIODE_BELAJAR='.$periodeBelajar);
    $ekstra = $this->createUrl('LihatNilai/Ekstra&NIS='.$profile[0].' & KD_TINGKAT_KELAS='.$tingkatKelas.' & KD_PERIODE_BELAJAR='.$periodeBelajar);
    $kepribadian = $this->createUrl('LihatNilai/Kepribadian&NIS='.$profile[0].' & KD_TINGKAT_KELAS='.$tingkatKelas.' & KD_PERIODE_BELAJAR='.$periodeBelajar);
    $this->widget('zii.widgets.jui.CJuiTabs', array(
        'tabs' => array(
            'Rapor Mapel' => array('ajax'=>$nilai, 'id'=>'nilai'),
            'Rapor Ekstrakurikuler' => array('ajax'=>$ekstra, 'id'=>'ekstra'),
            'Rapor Kepribadian' => array('ajax'=>$kepribadian, 'id'=>'kepribadian'),
        ),
        // additional javascript options for the tabs plugin
        'options' => array(
            'collapsible' => false,
            //'event' => 'mouseover',
        ),
    ));
}
else{
    $nilai = $this->createUrl('LihatNilai/Nilai');
    $ekstra = $this->createUrl('LihatNilai/Ekstra');
    $kepribadian = $this->createUrl('LihatNilai/Kepribadian');
    $this->widget('zii.widgets.jui.CJuiTabs', array(
        'tabs' => array(
            'Rapor Mapel' => array('ajax'=>$nilai, 'id'=>'nilai'),
            'Rapor Ekstrakurikuler' => array('ajax'=>$ekstra, 'id'=>'ekstra'),
            'Rapor Kepribadian' => array('ajax'=>$kepribadian, 'id'=>'kepribadian'),
        ),
        // additional javascript options for the tabs plugin
        'options' => array(
            'collapsible' => false,
            //'event' => 'mouseover',
        ),
    ));
}
?>