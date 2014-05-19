<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div id="content" class="span-16">
		<?php echo $content; ?>
	</div><!-- content -->
	<div class="span-6">
		<p>
			<h2>Sidebar</h2>
			<?php
//                        if (Yii::app()->user->isGuest) {
//                            $this->renderPartial("login", array("model" => new LoginForm));
//                        } else {
//                            echo 'Nanti diisi keterangan user yaaah';
//                        }
                        ?>
		</p>

	</div>
</div>
<?php $this->endContent(); ?>
