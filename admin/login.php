<?php
include '../action/config.php';
session_start();
if (isset($_SESSION['admin'])) {
  header('Location: index.php');
  exit();
}
if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  //validate email and password here
  $password_md5 = md5($password);
  $sql = "SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$password_md5'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) == 1) {
    $_SESSION['admin'] = true;
    header('Location: index.php');
  }
} ?>
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="icon/x-icon" href="../icon/orange-logo.svg">
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="h-screen font-sans login bg-cover ">
  <div class="container mx-auto  ">
    <div class="w-100 ">
      <div class="leading-loose">
        <form class=" p-5 bg-white  shadow form-control text-center mt-5 w-50 mx-auto" action="login.php" method="post">
          <p class=" text-gray-800 font-medium text-center text-lg fw-bold fs-3 p-3">Login</p>
          <div class="form-group">
            <label class="form-label" for="username">Email</label>
            <input class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded form-control" name="email" type="email"
              required placeholder="Admin Email">
          </div>
          <div class="mt-2 form-group">
            <label class="form-label" for="password">Password</label>
            <input class="w-100 px-4  py-2 text-gray-700 bg-gray-200 rounded form-control" id="password" name="password"
              type="text" required placeholder="*******">
          </div>
          <div class="mt-4 items-center justify-between">
            <button class="px-4 py-1 text-white font-light bg-orange rounded btn" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>