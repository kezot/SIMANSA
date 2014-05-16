<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Lihat Statistik Nilai',
);
?>

<?php
/* @var $this  LihatStatistikNilaiController*/

$id_kelas = 0;
$tanda = 0;
$selected = '';
$this->breadcrumbs = array(
    'Lihat Statistik Nilai',
);

if (isset($_POST['selectKelas'])) {
    $id_kelas = (int) $_POST['selectKelas'];
}
?>

<?php $form=$this->beginWidget('CActiveForm', array(
//	'id'=>'tinstrument-form',
//	'enableAjaxValidation'=>false,
)); ?>

<form method="post" action="<?php echo htmlspecialchars(Yii::app()->request->baseUrl . '/index.php?r=LihatStatistik'); ?>">
                <select name="selectKelas" >
                    <?php
                    if ($id_kelas == 0) {
                        $selected = 'selected';
                    }
                    echo '<option ' . $selected . ' value="-1">Silahkan Pilih</option>';
                    //echo '<option>' . $selected . '</option>';
                    $kelas = $this->listKelas();
                    for ($index = 0; $index < count($kelas); $index++) {
                        $tanda = (int) $kelas[$index]->KD_KELAS;
                        //echo '<option>' . $tanda . '</option>';
                        if ($tanda == $id_kelas) {
                            $selected = 'selected';
                            //echo '<option>' . $selected . '</option>';
                        } else {
                            $selected = '';
                            //echo '<option>' . $selected . '</option>';
                        }

                        echo '<option value="' . $kelas[$index]->KD_KELAS . '" ' . $selected . '>' . $kelas[$index]->NAMA_KELAS . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="submit" value="Cari">
            </form>
        </div>


<?php
$listSiswa=array();
$arr=array();
if (isset($_POST['selectKelas']) && $id_kelas > 0) {
    $listSiswa = $this->getKelas($id_kelas);
    for ($index1 = 0; $index1 < count($listSiswa); $index1++) {
        //echo $listSiswa[$index1]->NIS.' ';
        $arr[$index1]=$listSiswa[$index1]->NIS;
        //echo $arr[$index1].' ';
    }
}

$flashChart = Yii::createComponent('application.extensions.yiiopenflashchart.EOFC2'); 

$db = mysql_connect('localhost:33066','root','paspass12345') ;
if (! $db) {
echo "can not connect to mysql" ;
exit ;
}

mysql_select_db("pas_sma");
// Minimum usage. You will always need at least this.

$criteria = new CDbCriteria();
//$criteria->select='Nilai_Kognitif';
$criteria->addInCondition("NIS", $arr);
$result=  TNilaiRaporNilai::model()->findAll($criteria);
//s

//$query='';
////$query='SELECT NILAI_KOGNITIF FROM T_NILAI_RAPOR_NILAI WHERE NIS IN (' . implode(',', $listSiswa->NIS) . ')';
//$result = mysql_query($query);
$nilai=array();
$i=0;
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$g=0;
$h=0;
$j=0;
$k=0;
for ($index1 = 0; $index1 < count($result); $index1++) {
     $nilai[$index1]=$result[$index1]->NILAI_KOGNITIF;
     if($nilai[$index1]<=0&&$nilai[$index1]<=10){
         $a++;
     }
     else if($nilai[$index1]>10&&$nilai[$index1]<=20){
         $b++;
     }
     else if($nilai[$index1]>20&&$nilai[$index1]<=30){
         $c++;
     }
     else if($nilai[$index1]>30&&$nilai[$index1]<=40){
         $d++;
     }
     else if($nilai[$index1]>40&&$nilai[$index1]<=50){
         $e++;
     }
     else if($nilai[$index1]>50&&$nilai[$index1]<=60){
         $f++;
     }
     else if($nilai[$index1]>60&&$nilai[$index1]<=70){
         $g++;
     }
     else if($nilai[$index1]>70&&$nilai[$index1]<=80){
         $h++;
     }
     else if($nilai[$index1]>80&&$nilai[$index1]<=90){
         $j++;
     }
     else if($nilai[$index1]>90&&$nilai[$index1]<=100){
         $k++;
     }
 }
//$query='SELECT AVG(NILAI_KOGNITIF) AS A FROM T_NILAI_RAPOR_NILAI WHERE KD_ROMBEL=2 AND KD_TAHUN_AJARAN=16 AND KD_TINGKAT_KELAS=1';
//$result1 = mysql_query($query);
//$avg = mysql_fetch_array($result1);
//
//$query='SELECT (NILAI_KOGNITIF) AS B FROM T_NILAI_RAPOR_NILAI
//WHERE KD_ROMBEL=2 AND KD_TAHUN_AJARAN=16 AND KD_TINGKAT_KELAS=1
//GROUP BY NILAI_KOGNITIF
//HAVING count(*) >= all (SELECT count(*)
//                        FROM T_NILAI_RAPOR_NILAI
//                        WHERE KD_ROMBEL=2 AND KD_TAHUN_AJARAN=16 AND KD_TINGKAT_KELAS=1
//                        GROUP BY NILAI_KOGNITIF)';
//$result2 = mysql_query($query);
//$mode = mysql_fetch_array($result2);
//
//$query='SELECT avg(NILAI_KOGNITIF) AS C
//FROM ( select q.NILAI_KOGNITIF
//      FROM T_NILAI_RAPOR_NILAI q, T_NILAI_RAPOR_NILAI p
//      WHERE q.KD_ROMBEL=p.KD_ROMBEL AND
//      q.KD_TAHUN_AJARAN=p.KD_TAHUN_AJARAN AND
//      q.KD_TINGKAT_KELAS=p.KD_TINGKAT_KELAS AND
//      q.KD_ROMBEL=2 AND q.KD_TAHUN_AJARAN=16 AND q.KD_TINGKAT_KELAS=1
//      GROUP BY q.NILAI_KOGNITIF
//      HAVING sum(case when q.NILAI_KOGNITIF= p.NILAI_KOGNITIF then 1 else 0 end)
//                     >= abs(sum(sign(q.NILAI_KOGNITIF- p.NILAI_KOGNITIF)))
//      ) t';
//$result3= mysql_query($query);
//$median = mysql_fetch_array($result3);
//
$max = ceil(max($i,$a,$b,$c,$d,$e,$f,$g,$h,$j,$k)/10)*10;
$flashChart->begin();
$flashChart->setData(array($a,$b,$c,
    $d,$e,$f,$g,$h,$j,$k));
//$summary= 'Rata-Rata= '.$avg['A'].' Median= '.
        //$median['C'].' Modus= '.$mode['B'];
$flashChart->axis('y',array('range'=>array(0,$max,ceil($max/10))));
$flashChart->setLegend( 'x','$summary', '{font-size:12px;}' );
$flashChart->setLegend( 'y','Banyak Siswa', '{font-size:12px;}' );
$flashChart->setTitle('Statistik Nilai');
$flashChart->renderData('bar_filled');
$flashChart->render(800, 400);
//echo $avg['A'];
?>

</center>
<?php $this->endWidget(); ?>
