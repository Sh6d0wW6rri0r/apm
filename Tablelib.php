<?php
class APM_TABLE
{
	public function define_css($w_table,$id) {
		print("<style>");
		print("#apmtable".$id." {");
		  print("font-family: Arial, Helvetica, sans-serif;");
		  print("border-collapse: collapse;");
		  print("width: ".$w_table."%;");
		print("}");
		print("#apmtable".$id." td, #apmtable".$id." th {");
		  print("border: 1px solid #ddd;");
		  print("padding: 8px;");
		print("}");
		print("#apmtable".$id." tr:nth-child(even){background-color: #f2f2f2;}");		
		print("#apmtable".$id." tr:hover {background-color: #ddd;}");		
		print("#apmtable".$id." th {");
		  print("padding-top: 12px;");
		  print("padding-bottom: 12px;");
		  print("text-align: center;");
		  print("background-color: orange;");
		  print("color: white;");
		print("}");
		print("</style>");
	}
}
?>


