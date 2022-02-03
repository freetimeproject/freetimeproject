<?php

    include 'connect.php';

    $conn = OpenCon();

    echo "Connected Successfully\n\n\n\n";
    echo'<br>';
    echo'<br>';
    echo'<br>';




    $sql = "SELECT id, first_name, last_name, address_1, phone FROM student_info";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


    echo "id:" .$row["id"]. "-Name: " .$row["first_name"]. "-Last name" .$row["last_name"]. "-Address" .$row["address_1"]. "phone" .$row["phone"]. "<br>";
  }
} else {
  echo "0 results";
}



    CloseCon($conn)
?>