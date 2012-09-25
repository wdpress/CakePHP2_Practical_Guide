<!-- app/View/Posts/edit.ctp -->
<?php echo $this->Form->create('Post',array('type' => 'post')); ?>
<!-- まとめて表示を行う例 -->
<?php echo $this->Form->input('Post.name',array('label' => 'タイトル')); ?>

<!-- 個別に表示を行う例 -->
<?php 
echo $this->Form->label('Post.body','本文');
echo $this->Form->textarea('Post.body');
echo $this->Form->error('Post.body');
?>

<!-- ドロップダウンの例 -->
<?php
$category = array('一般','ニュース','技術');
echo $this->Form->label('Post.category_id','カテゴリ');
echo $this->Form->select('Post.category_id',$category);
echo $this->Form->end('保存');
?>