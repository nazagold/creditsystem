<form action="go.php" method="post" enctype="multipart/form-data">
<img src='captcha.php' id='capcha-image'>
<a href="javascript:void(0);" onclick="document.getElementById('capcha-image').src='captcha.php?rid=' + Math.random();">Обновить капчу</a>
<span>Введите капчу:</span>
<input type="text" name="code">
<input type="submit" name="go" value="Продолжить">
</form>
