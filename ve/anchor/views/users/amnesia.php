<?php echo $header; ?>

<section class="login content">

	<?php echo $messages; ?>
<?php $user = filter_var(Input::previous('user'), FILTER_SANITIZE_STRING); ?>

	<form method="post" action="<?php echo Uri::to('admin/amnesia'); ?>">
		<input name="token" type="hidden" value="<?php echo $token; ?>">

		<fieldset>
                        <p><label for="label-user"><?php echo __('users.username'); ?>:</label>
                        <?php echo Form::text('user', $user, array(
                                'id' => 'label-user',
                                'autocapitalize' => 'off',
                                'autofocus' => 'true',
                                'placeholder' => __('users.username')
                        )); ?></p>

			<p class="buttons">
			    <a href="<?php echo Uri::to('admin/login'); ?>"><?php echo __('users.remembered'); ?></a>
    			<button type="submit"><?php echo __('global.reset'); ?></button>
			</p>
		</fieldset>
	</form>

</section>

<?php echo $footer; ?>
