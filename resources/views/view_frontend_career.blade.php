<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
          
    <!-- ===========================
    THEME INFO
    =========================== -->
    <meta name="description" content="A free Bootstrap powerd HTML template exclusively crafted for the super lazy designers like me who designed thousand of websites till today but never got a chance to build one himself.">
    <meta name="keywords" content="Free Portfolio Template, Free Template, Free Bootstrap Template, Dribbble Portfolio Template, Free HTML5 Template">
    <meta name="author" content="EvenFly Team">
    
    <!-- DEVEOPER'S NOTE:
    This is a free Bootstrap powered HTML template from EvenFly. Feel free to download, modify and use it for yourself or your clients as long there is no money involved.
    
    Please don't try to sale it from anywhere; because I want it to be free, forever. If you sale it, That's me who deserves the money, not you :)
    -->

    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>Maxel</title><!-- This is what you see on your browser tab-->
    
    <!-- ===========================
    FAVICONS
    =========================== -->
    <link rel="icon" href="img/favicon.png">
     
    <!-- ===========================
    STYLESHEETS
    =========================== -->    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
        
    <!-- ===========================
    ICONS: 
    =========================== -->
    <link rel="stylesheet" href="css/simple-line-icons.css">    
    
    <!-- ===========================
    GOOGLE FONTS
    =========================== -->    
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <!-- ===========================
   GOOGLE ANALYTICS (Optional)
   =========================== -->
    
    <!--Replace this line with your analytics code-->
     
    <!-- Analytics end-->
  
   </head>
    <body data-spy="scroll" style="background:url('./img/maze.png');">
       
        <div id="about" class="container">
          <center>
            <div class="nav">
              <ul>
                <li class="home" onclick="rotatePage('index')"><a href="#">Home</a></li>
                <li class="tutorials" onclick="rotatePage('about')"><a href="#">MAXEL</a></li>
                <li class="about"><a class="active">Career</a></li>
                <li class="news" onclick="rotatePage('product')"><a href="#">Product</a></li>
                <li class="contact" onclick="rotatePage('client')"><a href="#">Client</a></li>
                <li class="contact" onclick="rotatePage('contact')"><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </center>
          	<div class="col-md-12 wow swing"  data-wow-duration="2s">
            <br><br>
                <center>
                    <h2>Open Recruitment</h2>
                            
                    <div class="col-md-12">
                      <hr style="border-color:black;width:70%;">
                      <h4>
                        Want to work with us? Submit your profile. 
                        <br>Verified your email within <b>3 days</b> and we’ll get back to you as soon as possible.
                          <br><br><br>

                        <h4>Speciality :</h4>
                        <b id='choosespecial' style="color:#2AB0C5;"></b>
                        <div>
                          <div class="glyphicon glyphicon-cog notactive"    id="Software" style="font-size:40px;margin:0;color:#ae6665;cursor:pointer;padding:10px;" onclick="choosespeciality('Software')"></div>
                          <div class="glyphicon glyphicon-globe notactive"  id="Website" style="font-size:40px;margin:0;color:#dfba54;cursor:pointer;padding:10px;" onclick="choosespeciality('Website')"></div>
                          <div class="glyphicon glyphicon-signal notactive" id="Internet" style="font-size:35px;margin:0;color:#bfdf54;cursor:pointer;padding:10px;" onclick="choosespeciality('Internet')"></div>
                          <div class="glyphicon glyphicon-hdd notactive" 	id="Hardware" style="font-size:35px;margin:0;color:#2AB0C5;cursor:pointer;padding:10px;" onclick="choosespeciality('Hardware')"></div>
                        </div>
                        <br>
                        <h4>Identity</h4>
                        <form class="form-inline">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                          </div>                  
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3">Phone</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Phone">
                          </div>
                          <br><br>
                           <h4>Your Skill</h4>
                          <textarea class="form-control" rows="3" cols="71" style="resize:none;color:black;" placeholder="e.g PHP, .NET, C++, CodeIgniter"></textarea>
                          <br><br><br>
                          <button type="submit" class="btn btn-warning">Submit</button>
                          <br>
                        </form>
                      </h4>
                    </div>
                </center>
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
                $.post("data/viewProduct.php", { work:x },
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
                $.post("data/viewProduct.php", { work:"default" },
          function(result) { 
             $("#contentPortfolio").html(result);
            }
          );
            }, 200); // every 5 sec
        }

        function choosespeciality (x) {
        	$('#choosespecial').html(x);
        	if(x == "Software"){ $('#choosespecial').css('color','#ae6665'); }
        	if(x == "Website"){ $('#choosespecial').css('color','#dfba54'); }
        	if(x == "Internet"){ $('#choosespecial').css('color','#bfdf54'); }
        	if(x == "Hardware"){ $('#choosespecial').css('color','#2AB0C5'); }
        	$('#Software').css('opacity',0.4);
        	$('#Website').css('opacity',0.4);
        	$('#Internet').css('opacity',0.4);
        	$('#Hardware').css('opacity',0.4);
        	$('#'+x).css('opacity',1);
        }
    </script>