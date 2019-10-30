```html
<body>
      <div id = "main">
         <form action = "" method = "post">
            <label>Name :</label>
            <input type = "text" name = "name" id = "name" />
            <br />
            <input type = "submit" value ="Submit" name = "submit"/>
            <br />
         </form>
      </div>
      
      <?php
         if(isset($_POST["submit"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "TUTORIALS";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO users(name)VALUES ('".$_POST["name"]."')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
</body>
```