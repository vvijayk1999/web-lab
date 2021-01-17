<html>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "Reset123";
      $dbname = "test";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO users (fname, lname, age, address, pincode) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[age]', '$_POST[address]', '$_POST[pincode]')";
      if ($conn->query($sql) === TRUE) {
        echo "<h1>New record created successfully</h1>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $sql = "SELECT * from users ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        echo "<h3 class=\"center\">Here are the existing users in the Database. </h3>";
        echo "<table>";
        echo "<tr>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Age</th>";
        echo "<th>Address</th>";
        echo "<th>Pincode</th>";
        echo "</tr>";

        while($row = $result->fetch_assoc())
        {
          echo "<tr><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["age"]. "</td><td>" . $row["address"]. "</td><td>" . $row["pincode"]. "</td></tr>";
        }
        echo "</table>";
      }
      $conn->close();
    ?>
  </body>
</html>