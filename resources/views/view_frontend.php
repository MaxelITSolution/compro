<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
          
    <meta name="description" content="A free Bootstrap powerd HTML template exclusively crafted for the super lazy designers like me who designed thousand of websites till today but never got a chance to build one himself.">
    <meta name="keywords" content="Free Portfolio Template, Free Template, Free Bootstrap Template, Dribbble Portfolio Template, Free HTML5 Template">
    <meta name="author" content="EvenFly Team">
    
    <title>Maxel</title>
    <link rel="icon" href="img/favicon.png">
     
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
        
    <link rel="stylesheet" href="css/simple-line-icons.css">    
    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->     
   </head>
    <body data-spy="scroll" style="background:url('./img/maze.png');">
        <div id="preloader">           
            <div id="status">
                <div class="wow tada infinite" data-wow-duration="6s"><img src="img/favicon.png" style="width:100px;"></div>
            </div>
        </div>
        
        <div id="about" class="container">
          <div class="nav">
            <ul>
              <li class="home" onclick="rotatePage('index')"><a href="#">Home</a></li>
              <li class="tutorials" onclick="rotatePage('bitsolution')"><a href="#">BITSolution</a></li>
              <li class="about" onclick="rotatePage('product')"><a href="#">Product</a></li>
              <li class="news"><a class="active">Portfolio</a></li>
              <li class="contact" onclick="rotatePage('client')"><a href="#">Client</a></li>
              <li class="contact" onclick="rotatePage('contact')"><a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-md-1"></div>

          <div class="col-md-10">
            <div class="wow fadeIn"  data-wow-duration="3s" style="text-align:center;">
              <h1>
                <br>Our <strong>Works</strong>
              </h1>
              
              <h4>
                Feel free to see some <strong>Project</strong> that we have made
                <br><br><br>
              </h4>

              @include('frontend.viewPortofolio')
            </div>
            <br><br>
          </div>
          
        </div>

    @include('frontend.footer')
  </body>
</html>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-latest.min.js"></script>
  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  
  <!--Other necessary scripts-->
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
  <script src="js/drifolio.js"></script>
  <script src="js/wow.min.js"></script>
  <script>new WOW().init();</script>    

  <script type="text/javascript">
      var timer = 0;
      setInterval(function() {
          timer++;
      }, 10); // every 5 sec

      function rotatePage(x){
          $("html").addClass("rotate360cw");
          setTimeout(function() {
              window.location = x + "";
          }, 300); // every 5 sec
      }

      function changeContent(x){
          $("#contentPortfolio").addClass("zoomOutanimation");
          setTimeout(function() {
              $("#contentPortfolio").removeClass("zoomOutanimation");
              $.post("data/viewPortfolio.php", { work:x },
        function(result) { 
           $("#contentPortfolio").html(result);
          }
        );
          }, 200); // every 5 sec
      }
          
      function resetContent(){
          $("#contentPortfolio").addClass("zoomOutanimation");
          setTimeout(function() {
              $("#contentPortfolio").removeClass("zoomOutanimation");
              $.post("data/viewPortfolio.php", { work:"default" },
        function(result) { 
           $("#contentPortfolio").html(result);
          }
        );
          }, 200); // every 5 sec
      }
  </script>