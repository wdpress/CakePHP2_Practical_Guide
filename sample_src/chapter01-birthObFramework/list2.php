<?php
error_reporting(0); //PEARのエラーを抑制
require_once 'MDB2.php';
require_once 'Smarty/Smarty.class.php';

//フォームから入力されたキーワードを取得する
$keyword = '';
if (isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];
}

//データベースへ接続する
$dsn = 'mysql://user:password@localhost/cakephp_sample?charset=utf8';
$con = MDB2::connect($dsn);

//入力されたキーワードをもとにクエリを実行する
$sql = sprintf(
  "SELECT id,name,description FROM friends WHERE name LIKE %s",
  $con->quote('%'.$keyword.'%')
);
$result = $con->query($sql);
$data = array();
while ($row = $result->fetchRow(MDB2_FETCHMODE_ASSOC)) {
  $data[] = $row;
}

//クエリの結果をHTMLページとして表示する
$smarty = new Smarty();
$smarty->assign('data',$data);
$smarty->display('list2.tpl');
?>
