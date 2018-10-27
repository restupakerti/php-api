<?php
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
  
  <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>s
<form name="" method="POST" action="index.php" id="php-api"> 
         <table>
        <tr>
          <td>ID</td>
          <td><input type="text" name="id"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td style="vertical-align: top">Level</td>
          <td>
            <input type="radio" name="level" value="admin">Admin<br>
            <input type="radio" name="level" value="user">User<br>
            <input type="radio" name="level" value="guest">Guest
          </td>
        </tr>
        <tr>
          <td>Fullname</td>
          <td><input type="text" name="fullname"></td>
        </tr>
        <tr>
          <td><button type="submit" value="simpan">SIMPAN</button></td>
        </tr>
      </table>
      </form>
</body>
</html>
<?php
}
?>