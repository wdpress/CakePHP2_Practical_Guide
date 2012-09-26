<h1>SQL Injection</h1>
<?php if (!empty($user)): ?>
<p>Hello!</p>
<?php else: ?>
<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('email', array('value' => "a@example.com")); ?>
<?php echo $this->Form->input('pass', array('value' => "pass01' OR 1=1-- ")); ?>
<?php echo $this->Form->end('submit'); ?>
<?php endif; ?>
