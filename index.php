


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Airgig</title>
<meta name="keywords" content="violet, web theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="Violet Theme is a free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="login-box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">
			var flashvars = {};
			flashvars.xml_file = "photo_list.xml";
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			attributes.id = "slider";
			swfobject.embedSWF("flash_slider.swf", "flash_grid_slider", "440", "220", "9.0.0", false, flashvars, params, attributes);
</script>
        
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<style>
div.tabscontainer{
    margin:15px 0px;
}

div.tabscontainer div.tabs{
    list-style: none;
    width: 260px;
    cursor: pointer;
    float:left;
    margin-top: 10px;
    left: 0px;
    z-index: 2;
}

div.tabscontainer div.curvedContainer{
	margin-left: 259px;
	border:1px solid #7c7c77;
	min-height:400px;
	-moz-border-radius: 13px;
	border-radius: 13px;
}

div.tabscontainer div.curvedContainer .tabcontent{
	display:none;
	padding:25px;
	font-size:20px;
	font-family: "CenturyGothicRegular", "Century Gothic", Arial, Helvetica, sans-serif;
}

div.tabs div.tab{
    display: block;
    height: 58px;
    background: #eeeeea;
    border: #d6d6d2 solid 1px;
    border-top: none;
    position: relative;
   	color: #73736b;
}

div.tabs div.link{
	padding-left: 20px;
	padding-top:20px;
	font-family: "CenturyGothicRegular", "Century Gothic", Arial, Helvetica, sans-serif;
    font-size: 20px;
}

div.tabs div.tab.selected{
    color: #ffffff;
    border-right-color: #aeaeaa;
}

div.tabs div.tab.selected{
    background: url(images/menuSelBack.png) repeat-x;
    border-right-color: #7c7c77;
}

div.tabs div.tab.first{
	border-top: #dbdbb7 solid 1px;
	-moz-border-radius-topleft: 13px;
	border-top-left-radius: 13px;
}

div.tabs div.tab.last{
	-moz-border-radius-bottomleft: 13px;
	border-bottom-left-radius: 13px;
}

div.tabs div.tab div.arrow{
    position: absolute;
    background: url(images/homeSelArrow.png) no-repeat;
    height: 58px;
    width: 17px;
    left: 100%;
    top: 0px;
    display: none;
}

div.tabs div.tab.selected div.arrow{
    display: block;
}

</style>
<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
<script language="JavaScript">
$(document).ready(function() {

    $(".tabs .tab[id^=tab_menu]").hover(function() {
        var curMenu=$(this);
        $(".tabs .tab[id^=tab_menu]").removeClass("selected");
        curMenu.addClass("selected");

        var index=curMenu.attr("id").split("tab_menu_")[1];
        $(".curvedContainer .tabcontent").css("display","none");
        $(".curvedContainer #tab_content_"+index).css("display","block");
    });
});
</script>
  
</head>
<body id="home">
<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['email_id'])) {
header('Location: page1.php');
}

?>
<div id="templatemo_outer_wrapper">
    <div id="templatemo_wrapper">
    
        <div id="templatemo_header">
            <div id="site_title"><h1><a href="index.php">Free CSS Templates</a></h1></div>
            <div id="templatemo_menu" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.php" class="selected"><span></span>Home</a></li>
					 <li><a href="how.php"><span></span>How it works</a></li>    
                    <li><a href="blog.php"><span></span>Blog</a></li>
                    <li><a href="contact.php"><span></span>Contact</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of templatemo_menu -->
	
			
            <div class="cleaner"></div>
        </div> <!-- end of templatemo header -->
        
        <div id="templatemo_middle">
		<div id=mid_right>
		<br/>
		
		
		<font size="6" face="CenturyGothicRegular" color="black"><br><br>
<p>Airgig connects people  for <br><br>flexible work
by publishing  <br><br>Gigs and qualified individuals <br><br>do the work on their own<br><br> schedule.
</p></font>
		</div>
          
           
 <div id="mid_left">
     
				
<div style="padding: 1px 5px 5px 5px;">

<div id="login-box">

<H2>Here you go!</H2>
<form name="form1" method="post" action="checklogin.php">
<div id="login-box-name" style="margin-top:5px;">Email:</div><div id="login-box-field" style="margin-top:5px;"><input name="email_id" id="email_id" class="form-login" type="text" title="Username" value="" size="30" maxlength="2048" /></div>
<div id="login-box-name">Password:</div><div id="login-box-field"><input name="password" id="password" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
<br />
<span class="login-box-options"><input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Forgot password?</a></span>
<br />

<br/>


<input type="image" src="images/login-btn.png"  name="Submit" value="Login" width="90" height="30" style="margin-left:10px;" />&nbsp;&nbsp;
<a href="registerform.php"><img src="images/signup-btn.png" width="90" height="30" style="margin-left:10px;" /></a>

</form>
</div>

</div>
			
                
            </div>
			
			
     
			
			
			
        </div> <!-- end of middle -->
        
        <div id="templatemo_main">
        
           
                    
        
 <div class="tabscontainer">
     <div class="tabs">
         <div class="tab selected first" id="tab_menu_1">
             <div class="link">Field Research</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">Field Sales and Marketing</div>
             <div class="arrow"></div>
         </div>
          <div class="tab last" id="tab_menu_3">
             <div class="link">Onsite Technical Services</div>
             <div class="arrow"></div>
         </div>
		 <div class="tab last" id="tab_menu_4">
             <div class="link">Photography and Media</div>
             <div class="arrow"></div>
         </div>
		 
		 <div class="tab last" id="tab_menu_5">
             <div class="link">Inspection and Testing</div>
             <div class="arrow"></div>
         </div>
		 <div class="tab last" id="tab_menu_6">
             <div class="link">Administrative support</div>
             <div class="arrow"></div>
         </div>
		 
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
			<strong>
Field Research</strong>
<br>
<br>

Collect information about products or businesses.
<br>
<br>
<strong>EXAMPLE GIGS</strong>
<br><br>
. Collect data on prices and displays
<br><br>
. Survey customers for feedback
<br><br>
. Verify business operating information
<br><br>

	</div>
		<div class="tabcontent" id="tab_content_2">
		
		<strong>Field Sales & Marketing
		</strong>
		<br><br>
Promote a product, brand or businesses.
<br><br>
<strong>EXAMPLE GIGS</strong>
<br><br>
. Hand out promotional materials
<br><br>
. Represent a business at a trade show
<br><br>
. Demonstrate a new product
		
	
		
		</div>
		<div class="tabcontent" id="tab_content_3">
	<strong>		Onsite Technical Services</strong>
	<br>	<br>
Provide installation, maintenance or repair services.
<br>	<br><strong>EXAMPLE GIGS</strong>	<br>
<br>. Install networking equipment	<br>
<br>. Repair telecom infrastructure	<br>
<br>. Troubleshoot and repair machinery	<br>
		</div>
		<div class="tabcontent" id="tab_content_4">
		<strong>	Photography & Media</strong>	<br>
<br>Generate multimedia content from a location, event <br><br> experience.	<br>
<br><strong>EXAMPLE GIGS</strong>	<br>
<br>. Take high quality photographs of real estate	<br>
<br>. Write a review of a local business	<br>
<br>. Record video of a public event
		</div>
		
		<div class="tabcontent" id="tab_content_5">
		<strong>	Inspection & Testing</strong>	<br>
<br>Evaluate a service, product, or location.	<br>
<br><strong>EXAMPLE GIGS</strong>	<br>
<br>. Mystery shop to assess service at a store	<br>
<br>. Inspect and appraise real estate	<br>
<br>. Assess wiring and installations
		</div>
		
		<div class="tabcontent" id="tab_content_6">
	<br>	<strong>	Administrative Support</strong>	<br>
<br>Assist with administrative support and office duties.	<br>
<br><strong>EXAMPLE GIGS</strong>	<br>
<br>. Provide support with phone and filing duties	<br>
<br>. Enter data at an office	<br>
<br>. Prepare financial statements
		</div>
	</div>
</div> 
				
		
				
              
                     </div>
                    
            
            
            
        </div> <!-- end of main -->
    
    </div> <!-- wrapper -->
</div>

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    
    	Copyright © 2012 <a href="index.php">Airgig</a> | 
        &nbsp;|&nbsp;<a href="blog.php">Blog
        </a>&nbsp;|&nbsp;<a href="contact.php">Contact
	
	  <a href="http://facebook.com/Airgig" target="_blank"><img src="images/fb.jpg"HSPACE=20 ALIGN="RIGHT"></a>
                       <a href="http://twitter.com/Airgig" target="_blank"><img src="images/twitter.jpg" HSPACE=10 ALIGN="RIGHT"></a>
	
	
	
	</div>
</div>

</body>
</html>