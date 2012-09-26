<!-- app/View/Tasks/index.ctp -->
<?php echo $this->Html->link('新規タスク','/Tasks/create');?>
<h3><?php echo count($tasks_data);?>件のタスクが未完了です</h3>
<?php foreach ($tasks_data as $row): ?>
<?php echo $this->element('task',array('task' => $row))?>
<?php endforeach; ?>
