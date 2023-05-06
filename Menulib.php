<?php
class APM_MENU
{
	public function define_css() {
		print("<style>");
	    print(".navbar {overflow: hidden; background-color: #333;} ");

		print(".navbar a {float: left; font-size: 16px; color: white; text-align: center; padding: 14px 16px; text-decoration: none;}");
	
		print(".subnav {float: left; overflow: hidden;}");
	
		print(".subnav .subnavbtn {font-size: 16px; border: none; outline: none;color: white; padding: 14px 16px; background-color: inherit; font-family: inherit; margin: 0;} ");
	
		print(".navbar a:hover, .subnav:hover .subnavbtn { background-color: orange;}");
	
		print(".subnav-content {display: none; position: absolute; left: 0;background-color: orange; width: 100%; z-index: 1;}");
	
		print(".subnav-content a {float: left; color: black; text-decoration: none;}");
	
		print(".subnav-content a:hover {background-color: #eee; color: black;}");
	
		print(".subnav:hover .subnav-content {display: block;}");
	
		print(".right {text-align: right; color: white; padding: 14px 16px;text-decoration: none; font-size: 17px;}");

		print("</style>");
	}
	
	public function insert_menu(){
		print("<div class=\"navbar\">");
	    	print("<div class=\"subnav\">");
				print("<button class=\"subnavbtn\">Applications <i class=\"fa fa-caret-down\"></i></button>");
				print("<div class=\"subnav-content\">");
		  	  		print("<a href=\"#portapp\">Portfolios</a>");
		  			print("<a href=\"applications.php\">Manage</a>");
				print("</div>");
	  		print("</div>");
	  		print("<div class=\"subnav\">");
			  	print("<button class=\"subnavbtn\">Capabilities <i class=\"fa fa-caret-down\"></i></button>");
				 print("<div class=\"subnav-content\">");
		  	   		print("<a href=\"capabilities.php\">Manage</a>");
				print("</div>");
	  		 print("</div> ");
	  		 print("<div class=\"subnav\">");
			   	print("<button class=\"subnavbtn\">Business <i class=\"fa fa-caret-down\"></i></button>");
				print("<div class=\"subnav-content\">");
		  	  		print("<a href=\"#link1\">Organizations</a>");
		  			print("<a href=\"#link2\">Locations</a>");
		  			print("<a href=\"#link3\">Process</a>");
				print("</div>");
	  		 print("</div>");
	  		 print("<div class=\"subnav\">");
			   	print("<button class=\"subnavbtn\">Standards <i class=\"fa fa-caret-down\"></i></button>");
				print("<div class=\"subnav-content\">");
		  	  		print("<a href=\"#link1\">Manage</a>");
				print("</div>");
	  		 print("</div>");
	  		 print("<div class=\"subnav\">");
			   	print("<button class=\"subnavbtn\">CMDB<i class=\"fa fa-caret-down\"></i></button>");
				print("<div class=\"subnav-content\">");
		  	  		print("<a href=\"servers.php\">Server</a>");
		  			print("<a href=\"#link2\">Software</a>");
		  			print("<a href=\"#link3\">O/S</a>");
				print("</div>");
	  		 print("</div>");
			print("<div class=\"right\">");
			session_start();
			print($_SESSION['USER_CONNECTED']);
	  		print("</div>");
		print("</div>");
	}
}
?>


