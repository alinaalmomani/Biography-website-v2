<?php
include "../action/config.php";
session_start();
if ($_SESSION['admin'] != true) {
  header('Location: login.php');
  exit();
}
$sql = "SELECT * FROM messages WHERE approved	= false";
$result = mysqli_query($con, $sql);
$sql2 = "SELECT * FROM admin WHERE admin_id	= 1";
$result2 = mysqli_query($con, $sql2);
$row = mysqli_fetch_assoc($result2);
$name = $row['admin_name'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="icon/x-icon" href="../icon/orange-logo.svg">
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="./dist/all.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Dashboard</title>
</head>

<body>
  <!--Container -->
  <div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
      <!--Header Section Starts Here-->
      <header class="nav bg-orange">
        <div class="text-end">

          <div class="mx-auto p-3  text-end dropdown">


            <div id="dropdownMenuButton1" class="text-white p-2 no-underline  dropdown-toggle"
              data-bs-toggle="dropdown"><?php echo $name; ?>

            </div>

            <div aria-labelledby="dropdownMenuButton1"
              class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r dropdown-menu">
              <ul class=" list-reset">

                <li><a href="logout.php" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!--/Header-->

      <div class="flex flex-1">
        <!--Sidebar-->

        <!--/Sidebar-->
        <!--Main-->
        <main class="bg-white-300 flex-1 p-3 overflow-hidden">

          <div class="flex flex-col">
            <!-- Stats Row Starts Here -->


            <!-- /Stats Row Ends Here -->

            <!-- Card Sextion Starts Here -->
            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

              <!-- card -->

              <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                <div class="px-6 py-2 border-b border-light-grey">
                  <div class="font-bold text-xl">Messages</div>
                </div>
                <div class="table-responsive">
                  <table class="table text-grey-darkest">
                    <thead class="bg-orange text-white text-normal">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Approve</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count = 0;
                      while ($row = mysqli_fetch_assoc($result)) {
                        $count++;
                        $id = $row['message_id'];
                        echo '<tr>
                        <th scope="row">' . $count . '</th>
                        <td>' . $row['full_name'] . '</td>
                        <td>' . $row['company_email'] . '</td>
                        <td>' . $row['message'] . '</td>
                        <td>' . $row['date'] . '</td>
                        <td>
                          <a href="delete.php?id=' . $id . '" class="text-danger"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                        <td>
                          <a href="approve.php?id=' . $id . '" class="text-success"><i class="fa-solid fa-plus"></i></a>
                        </td>
                      </tr>';
                      } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /card -->

            </div>

          </div>
        </main>
        <!--/Main-->
      </div>

    </div>

  </div>
  <script src="./main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>