<!-- app/Views/Example/test.ctp -->
<?php
echo $this->Html->link(
    'テキストでリンクする',
    'posts/index', //文字列でコントローラーとアクションを指定
    array(
        'target' => '_blank',
        'class' => 'button'
    )
);
?><br/>
<?php
echo $this->Html->link(
    $this->Html->image('cake.power.gif'), //画像にリンクを設定
    array( // コントローラーとアクションを連想配列で指定
        'controller' => 'comments',
        'action' => 'show',
        'id' => 10
    ),
    array('escape' => false) //タグをタグとして出力したい場合
);
?><br/>
<?php
//URLを文字列として生成する
echo $this->Html->url('posts/show/1');
?>