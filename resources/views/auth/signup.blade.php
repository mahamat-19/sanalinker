
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
</head>
<body class="text-center">
     <form class="form-signin" action="" method="POST">
    @csrf
     	<h2>SIGN UP</h2>
          <label>User Name</label>
                        <input type="text"
                        name="username"
                        placeholder="User Name" required><br>
<label>email</label>
          <input type="email"
                    name="email"
                    placeholder="email" required><br>
                        <label>Password</label>
     	<input type="password"
                 name="password"
                 placeholder="Password" required><br>
     	<button type="submit">Sign Up</button><br>
          <a href="login.blade.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>
