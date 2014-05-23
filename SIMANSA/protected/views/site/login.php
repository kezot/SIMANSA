<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
/*
  $this->breadcrumbs = array(
  'Login',
  ); */
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
            <div class="col-md-11 column">
                
                
                <div class="carousel slide" id="carousel-562730">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-562730">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-562730">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-562730">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="" src="http://www.bianchidesign.com/wp-content/themes/bianchidesign/images/portfolio-3-header.jpg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img alt="" src="http://www.bianchidesign.com/wp-content/themes/bianchidesign/images/testimonials-header-2.jpg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img alt="" src="http://www.bianchidesign.com/wp-content/themes/bianchidesign/images/sample-narrow.jpg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div> <a class="left carousel-control" href="#carousel-562730" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-562730" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="row clearfix">
                    <div class="col-md-3 column">
                    </div>
                    <div class="col-md-5 column">
                        <div class ="form" id="loginLogin">
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
                                <?php echo CHtml::submitButton('Login'); ?>
                            </div>
                        </div>
                        <div class="col-md-4 column">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->endWidget(); ?>
    </div><!-- form -->


