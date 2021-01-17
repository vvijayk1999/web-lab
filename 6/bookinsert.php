<html>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "Reset123";
      $dbname = "test";

      // Create connection
      $conn = new mysqli("localhost", "root", "Reset123", "test");
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO books (title, author, publisher)
      VALUES ('$_POST[title]', '$_POST[author]', '$_POST[publisher]')";

      if ($conn->query($sql) === TRUE) {
        echo "<h1>New record created successfully</h1>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
    ?>
    <h3 class="center">Search for a book </h3>
    <form action="bookresult.php" method="post">
      Title: <input type="text" name="title" />
      <input type="submit" />
    </form>
  </body>
</html>