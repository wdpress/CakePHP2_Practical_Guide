<!-- app/View/Tasks/edit.ctp -->
<?php echo $this->Form->create('Task',array('type' => 'post')); ?>
<!-- まとめて表示を行う例 -->
<?php
echo $this->Form->input('Task.name',array('label' => 'タイトル'));
echo $this->Form->input('Task.body',array('label' => '詳細'));
echo $this->Form->end('保存');
?>