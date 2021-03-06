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

          <div class="row">
            <section class="col-sm-6 col-1">

            <a href="student1.php">
                <img class="flash" alt="Alex" src="images/alex.jpg">
            </a>

            <p>I’m originally from Iowa and my ethnic heritage consists of quarter Indian, quarter German, and half Russian</p>
          </section>

          <section class="col-sm-6 col-2">

            <a href="student2.php">
                <img class="flash" alt="Charlie" src="images/charlie.jpg">
            </a>
            <p>I'm from Hangzhou, China and I've had research expreience in Zhejiang University</p>
          </section>
        </div>

        <div class="row">
          <section class="col-sm-6 col-1">

            <a href="student3.php">
              <img class="flash" alt="girl1" src="images/girl1.jpg">
            </a>
            <p>I'm from Boston, MA and I'm looking to be a software engineer</p>
          </section>

          <section class="col-sm-6 col-2">

            <a href="student4.php">
              <img class="flash" alt="May" src="images/may.jpg">
            </a>
            <p>My name is May and am from Bronx, New York and went to St Raymond High School</p>
          </section>
        </div>

        </div>

<hr />
        <div class="form">

          <h1>Tell us about yourself</h1><br />
          <h2>Thank you for visiting our website, if you would like to be added to our listing of students with double majors please complete the form below!</h2>
          <br />
              <form action="welcome.php" method="post">
                  Name:<br>
                  <input type="text" name="name" id="name" value="Name"><br><br> Major 1:<br>
                  <input type="text" name="major1" id="major1" value="Major 1"><br><br> Major 2:<br>
                  <input type="text" name="major2" id="major2" value="Major 2"><br><br> Class year:<br>
                  <input type="text" name="class" id="class" value="Class year"><br><br> Gender:<br>
                  <input type="radio" name="gender" id="gendermale" value="male"> Male<br>
                  <input type="radio" name="gender" id="genderfemale" value="female"> Female<br>
                  <input type="radio" name="gender" id="genderother" value="other"> Other<br><br>
                  <input type="submit" onclick="alert('Thank you!')" value="Submit">
            </form>
        </div>
        <!--form class-->

    <footer>
        &copy; 2018 Team Chicago
    </footer>

</body>

</html>
