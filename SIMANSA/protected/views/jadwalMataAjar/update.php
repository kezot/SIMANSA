

<h3>Update JadwalMataAjar <?php echo $model->NAMA_KELAS; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'kelas' => $kelas, 'hari' => $hari, 'jam' => $jam)); ?>