<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
<meta name="keywords" content="violet, contact form, free templates, website templates, CSS, HTML" />
<meta name="description" content="Violet Theme - free CSS template provided by templatemo.com" />
<link href="css/templatemo_style2.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>
<body id="subpage">


<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['email_id'])) {
header('Location: index.php');
}

?>


<div id="templatemo_outer_wrapper_sp">
    <div id="templatemo_wrapper_sp">
    
        <div id="templatemo_header">
            <div id="site_title"><h1><a href="index.php">Airgig</a></h1></div>
            <div id="templatemo_menu" class="ddsmoothmenu">
                <ul>
                    
                    <li><a href="page1.php" class="selected"><span></span>Post a Gig</a></li>
					  <li><a href="how1.php"><span></span>How it works</a></li>
				
                    
                      
                    <li><a href="blog1.php"><span></span>Blog</a></li>
                    <li><a href="contact1.php" ><span></span>Contact</a></li>
					 <li><a href="logout.php"><span></span>Logout</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of templatemo_menu -->
            
            <div class="cleaner"></div>
        </div> <!-- end of templatemo header -->
        
      
        
        <div id="templatemo_main">
        
            <div class="col_w580 float_l">
            
             
               
                
                <div class="cleaner h30"></div>
                
                <div class="col_w280 float_l">
                    <h4> </h4>
                    
                </div>
                
                <div class="col_w280 float_r">
                  
                    
                </div>
                
                <div class="cleaner h30"></div>
                
                <h3>Post a Gig</h3>
                
                <div id="contact_form">
                    <form method="post" name="contact" action="#">
                        
                            <label for="author">Target-Location:</label> <input type="text" id="author" name="author" class="required input_field" />
                            <div class="cleaner h10"></div>
                                                        
                            
                                                
                            <label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
                            <div class="cleaner h10"></div>
                                
                            <label for="text">Description:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                            <div class="cleaner h10"></div>				
                                                    
                            <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                            <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                            
                    </form> 
                    
                </div>
            </div>
                
            <div class="col_w280 float_r">
                <br>
		

              
            </div>   
            
            <div class="cleaner"></div>
        </div> <!-- end of main -->
    
    </div> <!-- wrapper -->
</div>

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    
    	
       	Copyright © 2011 <a href="index.php">Airgig</a> | 
        &nbsp;|&nbsp;<a href="blog.php">Blog
        </a>&nbsp;|&nbsp;<a href="contact.php">Contact
	
	  <a href="http://facebook.com/Airgig" target="_blank"><img src="images/fb.jpg"HSPACE=20 ALIGN="RIGHT"></a>
                       <a href="http://twitter.com/Airgig" target="_blank"><img src="images/twitter.jpg" HSPACE=10 ALIGN="RIGHT"></a>
	
	</div>
</div>

</body>
</html>