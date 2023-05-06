
<?php
  require_once('Tablelib.php');
  require_once('Menulib.php');
  $menu = new APM_MENU();
  $menu->define_css();  
  $tablecss = new APM_TABLE();
  $tablecss->define_css(100,"capabilities");
  $menu->insert_menu();
  require_once('Caplib.php');
   $test = new APM_CAPABILITIES();
   $result = $test->getCapabilityList();
   print("<br><br><br><br><table id=\"apmtablecapabilities\">");
    print("<tr>");
     print("<th>Id</th>");
     print("<th>Name</th>");
     print("<th>Description</th>");
     print("<th>Father Id</th>");
    print("</tr>");
   while ($row = pg_fetch_assoc($result)) {
    print("<tr>");
      print("<td>".$row['ID']."</td>");
      print("<td>".$row['NAME']."</td>");
      print("<td>".$row['DESCRIPTION']."</td>");
      print("<td>".$row['FATHER_ID']."</td>");
    print("</tr>");
   }
   print("</table>")
?>      