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
  else{
    echo"kkk";
  }
} ?>
<!doctype html>
<html lang="en">

<head>
  <title>Login | Tailwind Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>

<body class="h-screen font-sans login bg-cover bg-gray-200">
  <div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
        <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="login.php" method="post">
          <p class=" text-gray-800 font-medium text-center text-lg font-bold">Login</p>
          <div class="">
            <label class="block text-sm text-gray-600" for="username">Email</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="email" type="email" required
              placeholder="Admin Email">
          </div>
          <div class="mt-2">
            <label class="block text-sm text-gray-600" for="password">Password</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text"
              required placeholder="*******">
          </div>
          <div class="mt-4 items-center justify-between">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
              type="submit">Login</button>

          </div>

        </form>

      </div>
    </div>
  </div>
</body>

</html>