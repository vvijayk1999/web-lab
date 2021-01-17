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

        $sql = "SELECT * from books where title='$_POST[title]'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          echo "<table border='1'><tr><th>Title</th><th>Author</th><th>Publisher</th></tr>";
          while($row = $result->fetch_assoc()) 
          {
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['author'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>
      </table>
    </div>
  </body>
</html>

