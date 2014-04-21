<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
/*
$this->breadcrumbs = array(
    'Login',
);*/
?>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <div class="container">
        
        <div class="row clearfix">
            <div class="col-md-6 column">
                <h2>
                    SIMANSA
                </h2>
                <p>
                    SIMANSA merupakan Sistem Informasi SMA Negeri 1 Depok yang berfungsi sebagai sarana penghubung antara sekolah, siswa, dan orang tua.
                </p>
                <p>
                    
                </p>
            </div>
            
            <div class="col-md-6 column">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'username'); ?>
                            <?php echo $form->textField($model, 'username'); ?>
                            <?php echo $form->error($model, 'username'); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'password'); ?>
                            <?php echo $form->passwordField($model, 'password'); ?>
                            <?php echo $form->error($model, 'password'); ?>
                    </div>
                    <div class="form-group">

                        <?php echo $form->checkBox($model, 'rememberMe'); ?>
                            <?php echo $form->label($model, 'rememberMe'); ?>
                            <?php echo $form->error($model, 'rememberMe'); ?>

                    </div>
                    <div class="form-group">
                            <?php echo CHtml::submitButton('Login'); ?>
                    </div>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- form -->


