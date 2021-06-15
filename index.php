<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK OF SPARKS CORP</title>
    
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    
    <link rel="stylesheet" href="index.css">
    
    <link rel="icon" height="50px" href="./images/icon.png">
    <script src="index.js"></script>
</head>
<body  style="background-color:hsla(259, 44%, 23%, 0.686);" onload="loader()">

<div id="loading">
    <div class="wrapper flex-center">
        <div class="container">
            <div class="container-dot dot-a">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-b">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-c">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-d">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-e">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-f">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-g">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-h">
            <div class="dot"></div>
            </div>
        </div>
    </div>
</div>
    <div class="hero-content">
    <div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:lavender; opacity:1;"> 
            
            &nbsp;
            <div class="navbar-brand font-weight-bold zoomIn animated" id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:hsla(259, 44%, 23%, 0.686);font-family: 'Times New Roman', serif;font-size:5em;">
                &nbsp;BANK OF SPARKS CORP.
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:medium; color:lavender; "> 
                    <li class="nav-item">
                        <a class="nav-link" href="viewcustomers.php" style="color:hsla(259, 44%, 23%, 0.686);font-weight:1em;">
                            <div style="padding-left:80px;" >
                                <!-- <i class="material-icons"style="font-size: x-large;text-align:center;">
                                    account_circle
                                </i> -->
                                
                            </div>
                            Customer Details
                        </a> 
                    </li> 
                </ul> 
            </div>
        </nav> 
    
    <div>
        <div class="row" style="margin:0px; padding:0px;">
            <div class="col-sm font-weight-bold typing_effect" style="padding-left:15px;color:hsla(259, 44%, 23%, 0.686);font-family: 'Times New Roman', serif;font-size:2.2em;text-align:center;justify-content: center;">
             <p class="zoomIn animated" style="margin:20% left;"> <span style="color:lavender;"></span><span class="halfcolour"></span>Every Transaction Has A Purpose!</p>
             <p>Our Services Provides The Best And Safe Transcations!</p>
            </div>
            <div class="col-sm">
            <img src="bank.jpg" alt="bank" style="width:600px;height:389.2px;">
            </div>
        </div>
    </div>
    <div class="footer">
    <p><h3>DONE  BY - Rachana A</h3></p>
            <span style="font-family:verdana;">&copy;</span> 2021 BANK OF SPARKS CORP.<br> All rights reserved.
            </div>
</div>


</body>


<script>
setTimeout(function(){$('#loading').hide();}, 500); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>
</html>