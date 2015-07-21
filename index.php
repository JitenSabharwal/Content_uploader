<?php
include '/login/login_status.php';
?>
<!doctype html>
<html>
<head>
 <?php
      include_once('include/links.php');
 ?> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--StyleSheets-->
<link rel="stylesheet" href="./css/menu.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<!--End of StyleSheets-->
<!-- Script files -->
  <script type="text/javascript">
    function logout()
        {
          xml=createAjaxObj();
          xml.open("POST","login/logout.php",false);
          xml.send();
          window.location="loginindex.php";
          
        }
    $(document).ready(function(){ 
    $(".linkout").bind('click',function(){
          logout();
    });     
    });
    
  </script>
  
 
<!--script src="./js/jquery-1.11.3.min.js"></script-->

<script src="./js/admin.js"></script>
<script src="./js/menu.js"></script>
  
<!-- End of Script files -->
<title>Content Uploader</title>
</head>
<body>
          <div id='admin_panel_contentholder'>
              <div class='contentHolder'>
<!-- Menu Main body -->

                    <div class="menu"> 
                      
                      <!-- Menu icon -->
                      
                      <div class="icon-close"> <i class="fa fa-close"></i> <a>CLOSE</a><?php 
                      echo "  ".$_SESSION['sess_user']; 
                      ?>
                      </div>
                      
                      <!-- Menu -->
                      
                      <ul>
                        
                        <li ><a class="link" data-target="main.php" href="#">Add Event</a></li>
                        <li ><a class="link" data-target="./functions/update.php" href="#">Update Envent</a></li>
                        <li ><a class="link" data-target="contact.php" href="#">Contact</a></li>
                        <li ><a class="linkout" data-target="logout.php" href="#">Logout</a></li>
                      </ul>
                    </div>

  
              <div class="jumbotron" style="height:10%">
                  <div class="icon-menu"> <i class="fa fa-bars"></i> Menu </div>
              </div>
<!--END of Menu Main body -->
      
<!-- Response Main body -->
       
                <div class='contentWrapper'>
                  
                        <!--Resposne--> 

                </div>
<!-- End of Response Main body -->
                            
          </div>
        </div>

</body>
</html>
