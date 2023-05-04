
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
</head>
<body>
<form action="" method="post">
     	<h2>LOGIN</h2>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>
     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
     	<button type="submit">Login</button><br>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>
