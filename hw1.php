<html>
<head>
<title>系烤表單</title>
</head>
<body background="img/background.png">
<b>Hello!</b></br>
<font color="ff2869">系烤要到啦</font></br>
<font color="0c16cb">請協助填寫表單</font></br>

<form method="post" action="result_hw1.php">
學號:<input type="text" name="id"></br>
姓名:<input type="text" name="name"></br>
性別:
男<input type="radio" name="gender" value="male">
女<input type="radio" name="gender" value="female"></br>
年級:
<select name="grade">
<option value="one">大一
<option value="two">大二    
<option value="three">大三
<option value="four">大四
</select></br>
葷素食:
<input type="checkbox" name="meat" value="meat">葷
<input type="checkbox" name="vege" value="vege">素
</br>
寫給我們的話:</br>
<textarea name="comment" cols="30" rows="10"></textarea></br>

<input type="submit"><input type="reset">

</form>
</body>
</html>