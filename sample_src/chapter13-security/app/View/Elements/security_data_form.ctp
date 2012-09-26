  <h1><?php echo h($title); ?></h1>
  <form action="<?php echo h($url); ?>" method="post">
    name:<input type="text" name="data[User][name]" value="cake" /><br />
    ID:<input type="text" name="data[User][id]" value="1" /><br />       <!--（1） -->
    email:<input type="text" name="data[User][email]" value="a@example.com" /><br /> <!--（2） -->
    <input type="submit" />
  </form>

