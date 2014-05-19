<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
/* @var $this SiteController */
/* @var $data PengumumanAkademik */
?>

<div class="view">
<div class="media">
    <h4 class="media-heading"><?php echo $data->judul;  ?></h4>
    <b><?php $t= $data->tanggal; $newDate = date("g:ia  d-m-Y", strtotime($t)); echo $newDate; ?></b><br>
    <?php echo CHtml::encode($data->konten);?>
</div>
</div>