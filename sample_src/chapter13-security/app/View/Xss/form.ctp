<h1>Xss Form</h1>
<form action="" method="post">
<input type="text" name="name" value="<?php echo $this->Form->value('name'); ?>" />
<input type="submit" />
</form>

<?php echo $this->Form->create(false); ?>
<?php echo $this->Form->input('name', array('value' => "\"><script>alert('Hello');</script>")); ?>
<?php echo $this->Form->end('submit'); ?>
