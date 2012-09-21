<!-- app/View/Tasks/index.ctp -->
<?php echo $this->Html->link('新規タスク','/Tasks/create');?>
<h3><?php echo count($tasks_data);?>件のタスクが未完了です</h3>
<table>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>期限日</th>
        <th>作成日</th>
        <th>操作</th>
    </tr>
<?php foreach ($tasks_data as $row): ?>
    <tr>
        <td><?php echo $this->Html->link($row['Task']['id'], '/Tasks/show/'.$row['Task']['id']);?></td>
        <td><?php echo $row['Task']['name'];?></td>
        <td><?php echo $row['Task']['due_date'];?></td>
        <td><?php echo $row['Task']['created'];?></td>
        <td><?php echo $this->Html->link('このタスクを完了する', '/Tasks/done/'.$row['Task']['id']);?></td>
    </tr>
<?php endforeach; ?>
</table>