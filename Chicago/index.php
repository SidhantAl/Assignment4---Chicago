<body>
    <?php include 'includes/html-top.php';?>

    <!-- Navbar -->
    <?php include 'includes/menu.php';?>




        <div id="hero" class="home">

            <figure>
                <img src="images/uor-logo.png" alt="Bei Lu">
            </figure>

            <h1>University of Rochester</h1>
            <h3>Students with a Computer Science Double Major</h3>
        </div>



       
<img class="mySlides" src="images/alex.jpg">
            <p>I’m originally from Iowa and my ethnic heritage consists of quarter Indian, quarter German, and half Russian</p>
                 <img class="mySlides" src="images/charlie.jpg">
            <p>I'm from Hangzhou, China and I've had research expreience in Zhejiang University</p>
            <img class="mySlides" src="images/girl1.jpg">
            <p>I'm from Boston, MA and I'm looking to be a software engineer</p>
            <img class="mySlides" src="images/may.jpg">
            <p>My name is May and am from Bronx, New York and went to St Raymond High School</p>
            
  


        <div class="form">


        <H1>Tell us about yourself</H1>
        <h3>Thank you for visiting out website, if you would like to be added to our listing of students with double majors please complete the form below!</h3>


            <form action="welcome.php" method="post">
                Name:<br>
                <input type="text" name="name" value="Name"><br><br> Major 1:<br>
                <input type="text" name="major1" value="Major1"><br><br> Major 2:<br>
                <input type="text" name="major2" value="Major2"><br><br> Class year:<br>
                <input type="text" name="class" value="Class"><br><br> Gender: 
                <br>
                <input type="radio" name="gender" value="Male"> Male<br>
                <input type="radio" name="gender" value="Female"> Female<br>
                <input type="radio" name="gender" value="Other"> Other<br><br>
                <input type="submit" onclick="alert('Thank you!')" value="Submit">
                
            </form>
        </div>
        <!--form class-->

    </div>

    <footer>
        &copy; 2018 Team Chicago
    </footer>
        
</body>

</html>
