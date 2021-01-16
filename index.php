<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="maine.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="js/main.js">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font/fontawesome-free-5.15.1-web/css/all.min.css">

  </head>
  <body>
    
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav nav-fill nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#skill">SKILLS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">EDUCATION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">PORTFOLIO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">TESTIMONY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">EXPENRIENCE</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">CONTACT</a>
        </li>
        </ul>
    </div>
    </nav>


    <div id="about" class="container shadow p-3 mb-5 bg-white rounded mt-3">
    
            <div class="row">
                <div class="col-md-4 ">
                    <div class="py-2">
                        <img alt="" src="pol-sanchez-almerge-screenshot009.jpg" class="img-fluid"/>
                    </div>
                    <div class="">
                    <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p> $data[6]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                    </div>
                </div>

                <div class="col-md-7 d-flex flex-column justify-content-center">
                    <div class="py-2">
                        <h2 class="pb-3">ABOUT ME</h2>
                        <div class="i_c"></div>  
                    </div>
                    <div class="info">
                        <div class="row pt-3">
                            <p class=" col-md-4 col-lg-4">Full Name</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\"> $data[1]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                        <div class="row">
                            <p class=" col-md-4 col-lg-4">Address</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\"> $data[2]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                        <div class="row">
                            <p class=" col-md-4 col-lg-4">Date of birth</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\"> $data[5]</p>";
      
                        echo"</tr>";
                        } ob_flush();
                        ?>
                        </div>
                        <div class="row">
                            <p class=" col-md-4 col-lg-4">Email</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\"> $data[3]</p>";
      
                        echo"</tr>";
                        }
                        ?>
                        </div>
                        <div class="row">
                            <p class=" col-md-4 col-lg-4">Number phone</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\"> $data[4]</p>";
      
                        echo"</tr>";
                        } ob_flush();
                        ?>
                        </div>
                    </div>

                </div>

                <div class="col-md-1">
                    <div class="h-100">
                        <div class="col-lg-3 col-md-3 h-25 w-25">
                            <a href="">
                                <i class="fab fa-github-square"></i>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 h-25 w-25">
                            <a href="">
                                <i class="fab fa-instagram-square" ></i>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 h-25 w-25">
                            <a href="">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 h-25 w-25">
                            <a href="">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- skill -->
    <div id="skill" class="container shadow p-3 mb-5 bg-white rounded mt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="py-2">
                    <h2 class="pb-3">SKILL</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p class="last_if">+ ádsadsdasdasdasda</p>
                <p class="last_if">+ ádsadsdasdasdasda</p>
                <p class="last_if">+ ádsadsdasdasdasda</p>
                <p class="last_if">+ ádsadsdasdasdasda</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                    <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='HTML'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p>$data[1]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='CSS'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p>$data[1]</p>";
      
                        echo"</tr>";
                        } 
                        ob_flush();
       
                        ?>
                           <?php
                           ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='JS'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p>$data[1]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                          <?php
                          ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='SQL'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p>$data[1]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                         <?php
                         ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='TEAM WORK'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p>$data[1]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                    </div>
                    <div class="col-md-8">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50% ; height:35px"><?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='HTML'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p>$data[2]%</p>";
                        echo"</tr>";
                        }
                        ob_flush();
                        ?></div> 
                    </div> <br>
                    <div class="progress">
                         <?php
                         ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1'AND skill='CSS'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:$data[2]% ; height:20px\">$data[2]%</div> ";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                    </div> <br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:30% ; height:35px"> <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1'AND skill='JS'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p>$data[2]%</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?></div> 
                    </div> <br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70% ; height:35px">   <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1'AND skill='SQL'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p>$data[2]%</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?></div> 
                    </div> <br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:60% ; height:35px"><?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1'AND skill='TEAM WORK'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p>$data[2]%</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?></div> 
                    </div> <br>
                </div>
            </div>
        </div>
    </div>
    </div>





<!-- e -->
<div id="education" class="container-fluid shadow p-3 mb-5 bg-white rounded mt-3">
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col-md-4">
                <div class="py-2">
                    <h2 class="pb-3">ACHIEVEMENT</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, aperiam molestiae rem quae quis labore, earum officiis omnis quam at veniam cupiditate libero odio debitis magni sit, natus nemo similique!</p>
            </div> 

            <div class="col-md-8">
                <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="pol-sanchez-almerge-screenshot009.jpg" alt="Los Angeles">
                            <div class="carousel-caption">
				            <h1 class="display-2">hight school</h1>
				            <p>
graduated from high school with a good degree</p>
				           
			                </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pol-sanchez-almerge-toolbag-uplox.jpg" alt="Chicago">
                            <div class="carousel-caption">
				            <h1 class="display-2">
University</h1>
				            <p>

                            Currently studying at Irrigation University, majoring in information technology</p>
				           
			                </div>
                        </div>
                        
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>




<!-- education -->
<div id="education" class="container shadow mb-5 bg-white rounded mt-3">
        <div class="row">
            <div class="col-md-4 pt-3 pb-3">
                <div class="py-2 px-3">
                    <h2 class="pb-3">EDUCATION</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p class="px-3"> Et, aperiam molestiae rem quae quis labore, earum officiis omnis quam at veniam cupiditate libero odio debitis magni sit, natus nemo similique!</p>
            </div> 

            <div class="col-md-8 d-flex flex-column justify-content-center px-5 py-5 border-left " style="background-color: #ebebeb">
                <div class=" shadow  bg-white rounded " >
                    <div id="accordion" >
                        <div class="card "  >
                            <div class="card-header "  >
                                
                                <a class="card-link" data-toggle="collapse" href="#collapseOne1" >
                                    <i class="fas fa-pen ">&emsp;</i>
                                    fdfdsfdsfdsfdsfdsfdsfdsfdf
                                </a>
                            </div>
                            <div id="collapseOne1" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non officiis consequatur vitae corrupti quas aspernatur autem. Quisquam pariatur maiores iusto exercitationem ratione harum sed placeat praesentium repellat nam, repellendus eligendi in possimus. Quisquam optio ut debitis eos maiores cum aperiam nostrum assumenda rerum ab, eius dolores eaque vel quos esse.
                                </div>
                            </div>
                        </div>

                        <div class="card" >
                            <div class="card-header" >
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo1">
                                    <i class="fas fa-pen ">&emsp;</i>
                                    afdfdsfsdf
                                </a>
                            </div>
                            <div id="collapseTwo1" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum..
                                </div>
                            </div>
                        </div>

                        <div class="card" >
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree1">
                                    <i class="fas fa-pen ">&emsp;</i>
                                    Collapsible Group Item #1
                                </a>
                            </div>
                            <div id="collapseThree1" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum..
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 



<!-- PORTFOLIO -->
<div id="portfolio" class="container shadow p-3 mb-5 bg-white rounded mt-3">
        <div class="row px-3">
            <div class="col-md-4 border-right">
                <div class="py-2">
                    <h2 class="pb-3">PORTFOLIO</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, aperiam molestiae rem quae quis labore, earum officiis omnis quam at veniam cupiditate libero odio debitis magni sit, natus nemo similique!</p>
            </div> 

            <div class="col-md-8 d-flex flex-column justify-content-center">

            
                <div class="row">
                    <div class="col-md-6 ">
                        <a id="modal-318613" href="#modal-container-318613"  data-toggle="modal">
                            <img src="pol-sanchez-almerge-screenshot009.jpg" alt="" class="img-fluid">
                        </a>
                        <p class="text-center">dfdfd</p>
                        <div class="modal fade" id="modal-container-318613" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <h5 >
                                            <img src="pol-sanchez-almerge-toolbag-uplox.jpg" alt="" class="img-fluid">
                                        </h5> 
                                        <p class="text-center">dfdfd</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6  ">
                        <a id="modal-318613" href="#modal-container-318613"  data-toggle="modal">
                                <img src="pol-sanchez-almerge-toolbag-uplox.jpg" alt="" class="img-fluid">
                            </a>
                            <p class="text-center">dfdfd</p>
                            <div class="modal fade" id="modal-container-318613" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <h5 >
                                                <img src="pol-sanchez-almerge-toolbag-uplox.jpg" alt="" class="img-fluid">
                                            </h5> 
                                            <p class="text-center">dfdfd</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>


                
            </div>
        </div>
    </div>
</div>


<div id="education" class="container-fluid shadow p-3 mb-5 bg-white rounded mt-3">
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col-md-4">
                <div class="py-2">
                    <h2 class="pb-3">TESTIMONIALS</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, aperiam molestiae rem quae quis labore, earum officiis omnis quam at veniam cupiditate libero odio debitis magni sit, natus nemo similique!</p>
            </div> 

            <div class="col-md-8">
                <div id="demo2" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo2" data-slide-to="0" class="active"></li>
                        <li data-target="#demo2" data-slide-to="1"></li>
                        <li data-target="#demo2" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="pol-sanchez-almerge-screenshot009.jpg" alt="Los Angeles">
                            <div class="carousel-caption">
				            <h1 class="display-2">hight school</h1>
				            <p>
graduated from high school with a good degree</p>
				           
			                </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pol-sanchez-almerge-toolbag-uplox.jpg" alt="Chicago">
                            <div class="carousel-caption">
				            <h1 class="display-2">
University</h1>
				            <p>

                            Currently studying at Irrigation University, majoring in information technology</p>
				           
			                </div>
                        </div>
                        
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo2" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- experience -->
<div id="experience" class="container shadow mb-5 bg-white rounded mt-3">
        <div class="row">
            <div class="col-md-4 pt-3 pb-3">
                <div class="py-2 px-3">
                    <h2 class="pb-3">EXPERIENCE</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p class="px-3"> Et, aperiam molestiae rem quae quis labore, earum officiis omnis quam at veniam cupiditate libero odio debitis magni sit, natus nemo similique!</p>
            </div> 

            <div class="col-md-8 d-flex flex-column justify-content-center px-5 py-5 border-left " style="background-color: #ebebeb">
                <div class=" shadow  bg-white rounded " >
                    <div id="accordion2" >
                        <div class="card "  >
                            <div class="card-header "  >
                                <a class="card-link" data-toggle="collapse" href="#collapseOne" >
                                    <i class="fab fa-readme">&emsp;</i>
                                    fdfdsfdsfdsfdsfdsfdsfdsfdf
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non officiis consequatur vitae corrupti quas aspernatur autem. Quisquam pariatur maiores iusto exercitationem ratione harum sed placeat praesentium repellat nam, repellendus eligendi in possimus. Quisquam optio ut debitis eos maiores cum aperiam nostrum assumenda rerum ab, eius dolores eaque vel quos esse.
                                </div>
                            </div>
                        </div>

                        <div class="card" >
                            <div class="card-header" >
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    <i class="fab fa-readme">&emsp;</i>
                                    afdfdsfsdf
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion2">
                                <div class="card-body">
                                    Lorem ipsum..
                                </div>
                            </div>
                        </div>

                        <div class="card" >
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    <i class="fab fa-readme">&emsp;</i>
                                    Collapsible Group Item #1
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion2">
                                <div class="card-body">
                                    Lorem ipsum..
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




<!-- contact -->

    <div id="contact" class="container shadow p-3 mb-5 bg-white rounded mt-3">
    <div class="container-fluid padding">	
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Contact us</h2>
		</div>
		<div class="col-12 social padding">
			<p>Please feel fee to leave a message to me. I would love to hear from you anytime. Also you can call me or push me a message to my social networks.
Thank you</p>
		</div>
	</div>
</div>	

<form action="" class="form">
	<div class="container-fluid padding">	
		<div class="row text-center">
			<div class="col-md-4">
				
				<hr class="light">
                <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" name="name" class="form-control" id="nam">
                </div>

			</div>
			    <div class="col-md-4">				
				<hr class="light">
				<div class="form-group">
                <label for="usr">Email:</label>
                <input type="text" name="email" class="form-control" id="eml">
                </div>
			</div>
			<div class="col-md-4">				
				<hr class="light">
                <div class="form-group">
                <label for="usr">Number phone:</label>
                <input type="text" name="number_phone" class="form-control" id="nph">
                </div>

			</div>
			
		</div>
	</div>

<div class="row text-center padding">
		<div class="col-12">
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="container" rows="5" name="comment" id="comment"></textarea>
            <button type="submit" class="btn btn-primary">send</button>
        </div>
<div class="col-12">
				<hr class="light-100">
				<h5>&copy; 306no.1</h5>
			</div>
          
    </div>
    </form>
    <?php
    ob_start() ;
    require 'connect.php';
    if(isset($_GET['name'])){
        $na=$_GET['name'];
    }
    if(isset($_GET['email'])){
        $em=$_GET['email'];
    }
    if(isset($_GET['number_phone'])){
        $np=$_GET['number_phone'];
    }
    if(isset($_GET['comment'])){
        $cm=$_GET['comment'];
    }
    if(isset($na) or isset($em) or isset($np)or isset($cm)){
        $sql="INSERT INTO contact(name,email,phone,comment) values ('$na','$em','$np','$cm')";     
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            include('class.smtp.php');
            include "class.phpmailer.php"; 
            $nFrom = "Quàng dUY hưng";    //mail duoc gui tu dau, thuong de ten cong ty ban
            $mFrom = 'hung321chiengden@gmail.com';  //dia chi email cua ban 
            $mPass = '09450117350';       //mat khau email cua ban
            $nTo = $na; //Ten nguoi nhan
            $mTo = $em;   //dia chi nhan mail
            $mail             = new PHPMailer();
            $body             = '
            Thank you for sending me lazy, I will respond as soon as possible.ddd';   // Noi dung email
            $title = 'thank you';   //Tieu de gui mail
            $mail->IsSMTP();             
            $mail->CharSet  = "utf-8";
            $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
            $mail->SMTPAuth   = true;    // enable SMTP authentication
            $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
            $mail->Host       = "smtp.gmail.com";    // sever gui mail.
            $mail->Port       = 465;         // cong gui mail de nguyen
            // xong phan cau hinh bat dau phan gui mail
            $mail->Username   = $mFrom;  // khai bao dia chi email
            $mail->Password   = $mPass;              // khai bao mat khau
            $mail->SetFrom($mFrom, $nFrom);
            $mail->AddReplyTo('hung321chiengden@gmail.com', 'Freetuts.net'); //khi nguoi dung phan hoi se duoc gui den email nay
            $mail->Subject    = $title;// tieu de email 
            $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
            $mail->AddAddress( $em, $nTo);
            // thuc thi lenh gui mail 
            if(!$mail->Send()) {
                echo 'Co loi!'; 
            } 
            header("Location:contact.php");
        }
        else{
            echo "Không thêm được";
        }
        }

        ob_flush();
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>