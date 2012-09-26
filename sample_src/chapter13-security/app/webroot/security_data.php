<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>

<body>
  <h1>SecurityData</h1>
  <form action="/security_data/index" method="post">
    name:<input type="text" name="data[User][name]" value="cake" /><br />
    ID:<input type="text" name="data[User][id]" value="1" /><br />       <!--（1） -->
    email:<input type="text" name="data[User][email]" value="a@example.com" /><br /> <!--（2） -->
    <input type="submit" />
  </form>
  <h1>SecurityDataSecurityComponent</h1>
  <form action="/security_data_security_component/index" method="post">
    name:<input type="text" name="data[User][name]" value="cake" /><br />
    ID:<input type="text" name="data[User][id]" value="1" /><br />       <!--（1） -->
    email:<input type="text" name="data[User][email]" value="a@example.com" /><br /> <!--（2） -->
    <input type="submit" />
  </form>
  <h1>SecurityDataExtract</h1>
  <form action="/security_data_extract/index" method="post">
    name:<input type="text" name="data[User][name]" value="cake" /><br />
    ID:<input type="text" name="data[User][id]" value="1" /><br />       <!--（1） -->
    email:<input type="text" name="data[User][email]" value="a@example.com" /><br /> <!--（2） -->
    <input type="submit" />
  </form>
  <h1>SecurityDataWhiteList</h1>
  <form action="/security_data_white_list/index" method="post">
    name:<input type="text" name="data[User][name]" value="cake" /><br />
    ID:<input type="text" name="data[User][id]" value="1" /><br />       <!--（1） -->
    email:<input type="text" name="data[User][email]" value="a@example.com" /><br /> <!--（2） -->
    <input type="submit" />
  </form>
</body>
</html>
