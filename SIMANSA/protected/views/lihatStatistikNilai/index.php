<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Lihat Statistik Nilai',
);
?>

<h1>Lihat Statistik</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
//	'id'=>'tinstrument-form',
//	'enableAjaxValidation'=>false,
)); ?>

<?php
 $flashChart = Yii::createComponent('application.extensions.yiiopenflashchart.EOFC2');

$db = mysql_connect('localhost:33066','root','paspass12345') ;
if (! $db) {
echo "can not connect to mysql" ;
exit ;
}
mysql_select_db("pas_sma");
// Minimum usage. You will always need at least this.

$query='SELECT NILAI_KOGNITIF FROM T_NILAI_RAPOR_NILAI WHERE KD_ROMBEL=2 AND KD_TAHUN_AJARAN=16 AND KD_TINGKAT_KELAS=1';
$result = mysql_query($query);
$nilai=array();
$i=0;
$a=0;
$b=0;
$c=0;
$d  = 0;
$e=0;
$f=0;
$g=0;
$h=0;
$j=0;
$k=0;
 while ($row = mysql_fetch_array($result)) {
     $nilai[$i]=$row['NILAI_KOGNITIF'];
     if($nilai[$i]<=0&&$nilai[$i]<=10){
         $a++;
     }
     else if($nilai[$i]>10&&$nilai[$i]<=20){
         $b++;
     }
     else if($nilai[$i]>20&&$nilai[$i]<=30){
         $c++;
     }
     else if($nilai[$i]>30&&$nilai[$i]<=40){
         $d++;
     }
     else if($nilai[$i]>40&&$nilai[$i]<=50){
         $e++;
     }
     else if($nilai[$i]>50&&$nilai[$i]<=60){
         $f++;
     }
     else if($nilai[$i]>60&&$nilai[$i]<=70){
         $g++;
     }
     else if($nilai[$i]>70&&$nilai[$i]<=80){
         $h++;
     }
     else if($nilai[$i]>80&&$nilai[$i]<=90){
         $j++;
     }
     else if($nilai[$i]>90&&$nilai[$i]<=100){
         $k++;
     }
     $i++;
 }
//$flashChart->begin();
//$flashChart->setData($a,$b,$c,$d,$e,$f,$g,$h,$j,$k);
//$flashChart->renderData('line');
//$flashChart->setTitle('Statistik');
//$flashChart->axis('x',array('range'=>array(0,100,10)));
//$flashChart->area_hollow( 2, 3, 25, '#C11B01', 'Squared', 12, '#8E560F' );

//$flashChart->axis(x, );
//$flashChart->setLegend( 'x','Nilai', '{font-size:12px;' );
//
//$flashChart->axis('y',array('range'=>array(0,100,10)));
//
//$flashChart->y_label_steps( 10 );
//$flashChart->set_y_legend( 'Value', 12, '#C11B01' );

//$flashChart->render(800,400);
$query='SELECT AVG(NILAI_KOGNITIF) AS A FROM T_NILAI_RAPOR_NILAI WHERE KD_ROMBEL=2 AND KD_TAHUN_AJARAN=16 AND KD_TINGKAT_KELAS=1';
$result1 = mysql_query($query);
$avg = mysql_fetch_array($result1);

$query='SELECT (NILAI_KOGNITIF) AS B FROM T_NILAI_RAPOR_NILAI
WHERE KD_ROMBEL=2 AND KD_TAHUN_AJARAN=16 AND KD_TINGKAT_KELAS=1
GROUP BY NILAI_KOGNITIF
HAVING count(*) >= all (SELECT count(*)
                        FROM T_NILAI_RAPOR_NILAI
                        WHERE KD_ROMBEL=2 AND KD_TAHUN_AJARAN=16 AND KD_TINGKAT_KELAS=1
                        GROUP BY NILAI_KOGNITIF)';
$result2 = mysql_query($query);
$mode = mysql_fetch_array($result2);

$query='SELECT avg(NILAI_KOGNITIF) AS C
FROM ( select q.NILAI_KOGNITIF
      FROM T_NILAI_RAPOR_NILAI q, T_NILAI_RAPOR_NILAI p
      WHERE q.KD_ROMBEL=p.KD_ROMBEL AND
      q.KD_TAHUN_AJARAN=p.KD_TAHUN_AJARAN AND
      q.KD_TINGKAT_KELAS=p.KD_TINGKAT_KELAS AND
      q.KD_ROMBEL=2 AND q.KD_TAHUN_AJARAN=16 AND q.KD_TINGKAT_KELAS=1
      GROUP BY q.NILAI_KOGNITIF
      HAVING sum(case when q.NILAI_KOGNITIF= p.NILAI_KOGNITIF then 1 else 0 end)
                     >= abs(sum(sign(q.NILAI_KOGNITIF- p.NILAI_KOGNITIF)))
      ) t';
$result3= mysql_query($query);
$median = mysql_fetch_array($result3);

$flashChart->begin();
$flashChart->setData(array($a,$b,$c,
    $d,$e,$f,$g,$h,$j,$k));
$summary= 'Rata-Rata= '.$avg['A'].' Median= '.
        $median['C'].' Modus= '.$mode['B'];
$flashChart->axis('y',array('range'=>array(0,300,100)));
$flashChart->setLegend( 'x',$summary, '{font-size:12px;}' );
$flashChart->setLegend( 'y','Banyak Siswa', '{font-size:12px;}' );
$flashChart->setTitle('Statistik Nilai');
$flashChart->renderData('bar_filled');
$flashChart->render(800, 400);
//echo $avg['A'];
?>

</center>
<?php $this->endWidget(); ?>
