    <?php include 'includes/html-top.php';?>

    <!-- Navbar -->
    <?php include 'includes/menu.php';?>


        <div id="hero" class="home">

            <figure>
                <img src="images/uor-logo.png" alt="logo">
            </figure>

            <h1>University of Rochester</h1>
            <h2>Students with a Computer Science Double Major</h2>
        </div>

        <div class="container">

          <h1>Thank you!</h1><br />
          <h2>Thank you for visiting our website, you have been added to our listing of students with double majors!</h2>
          <br />
            
          <!--php info here-->

                    <?php
            // 1. Create a database connection
          $dbhost = "localhost";
          $dbuser = "urcscon3_chicag";
          $dbpass = "coffee1N/!";
          $dbname = "urcscon3_chicag";
          $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

          $name = Trim(stripcslashes($_POST['name']));
          $major1 = Trim(stripcslashes($_POST['major1']));
          $major2 = Trim(stripcslashes($_POST['major2']));
          $class = Trim(stripcslashes($_POST['class']));
          $gender = Trim(stripcslashes($_POST['gender']));


          $query = "INSERT INTO myTable (name, major1, major2, class, gender) VALUES ('$name','$major1','$major2','$class','$gender')";
          $result = mysqli_query($connection, $query);

          ?>

            <h3>Your details:</h3>
              <p>
              Name: <?php echo $name; ?><br>

              Major 1: <?php echo $major1; ?><br>

              Major 2: <?php echo $major2; ?><br>

              Class Year: <?php echo $class; ?><br>

              Gender: <?php echo $gender; ?>
              </p>

          <?php
            // 4. Step 4 is unnecessary here because we didn't 
            //    get data that needs to be released
            //mysqli_free_result($result);

            // 5. Close database connection
          mysqli_close($connection);
          ?>
          <!--php-->

        </div>

    <footer>
        &copy; 2018 Team Chicago
    </footer>

</body>

</html>
