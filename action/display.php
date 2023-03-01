<?php
include 'config.php';
$query = mysqli_query($conn, "select * from messages ORDER BY RAND()
LIMIT 24");
$HTML = '';
$HTML2 = '';
$count = 0;
while ($row = $query->fetch_assoc()) {
  $count++;
  if ($count == 12) {
    $HTML2 .= '<div class="item">
            <div class="card text-dark bg-orange mb-3" >';
    $HTML2 .= ' <div class="card-body">
                <h5 class="card-title">' . $row['full_name'] . '</h5>';
    $HTML2 .= ' <p class="card-text">' . $row['message'] . '</p>
              </div>
            </div>
          </div>';
  } else {
    $HTML .= '<div class="item">
            <div class="card text-dark bg-orange mb-3" >';
    $HTML .= ' <div class="card-body">
                <h5 class="card-title">' . $row['full_name'] . '</h5>';
    $HTML .= ' <p class="card-text">' . $row['message'] . '</p>
              </div>
            </div>
          </div>';
  }
};
$response = array('cards1' => $HTML, 'cards2' => $HTML2);
echo json_encode($response);