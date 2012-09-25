<html>
<head>
<title>テストページ</title>
</head>
<body>
<form action="list2.php" method="POST">
<input name="keyword">
<input type="submit">
</form>
<ul>
{foreach from=$data item=row}
    <li>{$row.name|escape}<br/>
    <i>{$row.description|escape}</i></li>
{/foreach}
</ul>
</body>
</html>
