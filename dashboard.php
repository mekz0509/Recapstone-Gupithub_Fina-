<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

</head>
<body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container bg-dark">
      <a class="navbar-brand" href="#">Gupithub Admin Dashboard</a>
    </div>
  </nav>

  <div class="container mt-4">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="users-tab" data-bs-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="true">Users</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="booking-tab" data-bs-toggle="tab" href="#booking" role="tab" aria-controls="booking" aria-selected="false">Booking</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="history-tab" data-bs-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">Booking History</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">




    

      <!-- Users Tab -->
      <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
        <table class="table">
          <thead>
            <tr>
              <th>User ID</th>
              <th>Name</th>
              <th>Email</th>
            </tr>
          </thead>

          <tbody>

            <?php
            include "actions/includes/dbconnect.php";
            $query = "SELECT id,firstname, lastname, email FROM users ORDER BY id";
            
            $results = $conn->query($query);

            if ($results->num_rows > 0) {
              $rows = $results->fetch_all(MYSQLI_ASSOC);
              for ($x = 0; $x <= count($rows)-1; $x++) {
                
                echo "<tr>
                  <td>" . $rows[$x]["id"] ."</td>
                  <td>" . $rows[$x]["firstname"] . ' ' . $rows[$x]["lastname"] ."</td>
                  <td>" . $rows[$x]["email"] ." </td>
                </tr>
                ";
              }
            }
            
            $conn->close();

            ?>



          </tbody>
        </table>
      </div>



      <!-- Booking Tab -->
      <div class="tab-pane fade" id="booking" role="tabpanel" aria-labelledby="booking-tab">
        <table class="table">
          <thead>
            <tr>
              <th>Booking ID</th>
              <th>User</th>
              <th>Date</th>
              <th>Time</th>
              <th>Service</th>
              <th>Barber</th>
            </tr>
          </thead>
          <tbody>
          <?php     
              include "actions/includes/dbconnect.php";
                          // Add this code before trying to use the results
              $query = "SELECT * FROM booking ORDER BY id";
              $results = $conn->query($query);
          

              // Check if any rows were returned
              if ($results->num_rows > 0) {
                  $rows = $results->fetch_all(MYSQLI_ASSOC);
                  for ($x = 0; $x <= count($rows) - 1; $x++) {
                      echo "<tr>
                              <td>" . $rows[$x]["id"] . "</td>
                              <td>" . $rows[$x]["user"] . "</td>
                              <td>" . $rows[$x]["date"] . "</td>
                              <td>" . $rows[$x]["time"] . "</td>
                              <td>" . $rows[$x]["service"] . "</td>
                              <td>" . $rows[$x]["barber"] . "</td>
                            </tr>";
                  }
              } else {
                  echo "No bookings found.";
              }


              $conn->close();
            ?>

          </tbody>
        </table>
      </div>


      <!-- History Tab -->
      <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
        <table class="table">
          <thead>
            <tr>
              <th>Booking ID</th>
              <th>User</th>
              <th>Date</th>
              <th>Time</th>
              <th>Service</th>
              <th>Barber</th>
              <th>Status</th>
            </tr>
          </thead>



          <tbody>
            <!-- Booking history data-->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
