
<?php
  require_once('Tablelib.php');
  require_once('Menulib.php');
  $menu = new APM_MENU();
  $menu->define_css();  
  $tablecss = new APM_TABLE();
  $tablecss->define_css(100,"servers");
  $menu->insert_menu();
  require_once('Servlib.php');
   $test = new APM_SERVERS();
   $result = $test->getServerList();
   print("<br><br><br><br><table id=\"apmtableservers\">");
   print("<tr>");
    print("<th>Id</th>");
    print("<th>Name</th>");
    print("<th>Description</th>");
    print("<th>Installation date</th>");
    print("<th>Retirement date</th>");
    print("<th>OS Id</th>");
   print("</tr>");
   while ($row = pg_fetch_assoc($result)) {
   print("<tr>");
     print("<td>".$row['ID']."</td>");
     print("<td>".$row['NAME']."</td>");
     print("<td>".$row['DESCRIPTION']."</td>");
     print("<td>".$row['INSTALLATION_DATE']."</td>");
     print("<td>".$row['RETIREMENT_DATE']."</td>");
     print("<td>".$row['OS_ID']."</td>");
   print("</tr>");
   }
   print("</table>")
?>      