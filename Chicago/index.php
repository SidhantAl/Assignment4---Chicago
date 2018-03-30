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


        <!-- slideshow -->
        <script src="javascript/slideshow.js"></script>
    
        <div class="container">
            

        <!--Code: Javascript Element goes here-->
        <div>
            <img class="mySlides" alt="Andrew" src="images/Andrew.jpg">
            <img class="mySlides" alt="German" src="images/German.jpg">
            <img class="mySlides" alt="Jovan" src="images/Jovan.jpg">
        </div>
        <br><br><br>
        <!-- Placeholder map -->

        <img alt="maps" src="https://www.maps.com/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/u/s/usa-wall-map_1.jpg">

        <p>There are many amazing students at the University of Rochester who are planning to graduate with two Majors. Here you can find profiles on three such students, each majoring in Computer Science and one other subject.</p>

        <div class="form">
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
