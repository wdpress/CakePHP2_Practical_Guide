<!-- app/View/Elements/task.ctp -->
<?php echo $this->Html->css('task'); //CSSを読み込み?>
<div class="roundBox">
<h3><?php echo $task['Task']['id'] ?>
:
<?php echo h($task['Task']['name']);?></h3>
作成日 <?php echo $task['Task']['created'];?>

<p class="comment">
<ul>
<?php foreach ($task['Note'] as $note): ?>
<li><?php echo $note['body']?></li>
<?php endforeach; ?>
<li><?php echo $this->Html->link(
	'コメントを追加',
	'/Comments/create'
);?></li>
</ul></p>

<?php echo $this->Html->link(
	'編集',
	'/Tasks/edit/'.$task['Task']['id'],
	array('class' => 'button left')
);?>

<?php echo $this->Html->link(
	'このタスクを完了する',
	'/Tasks/done/'.$task['Task']['id'],
	array('class' => 'button right')
);?>
 
</div>