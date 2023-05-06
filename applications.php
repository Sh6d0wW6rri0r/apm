
<?php
  require_once('Menulib.php');
  require_once('Tablelib.php');
  $menu = new APM_MENU();
  $menu->define_css();
  $tablecss = new APM_TABLE();
  $tablecss->define_css(100,"applications");
  $menu->insert_menu();
  require_once('Applib.php');
   $test = new APM_APPLICATIONS();
   $result = $test->getApplicationList();
   print("<br><br><br><br><table id=\"apmtableapplications\">");
   print("<tr>");
    print("<th>Id</th>");
    print("<th>Name</th>");
    print("<th>Description</th>");
    print("<th>Functional Owner</th>");
    print("<th>Technical Owner</th>");
    print("<th>Deployment date</th>");
    print("<th>Retirement date</th>");
   print("</tr>");
   while ($row = pg_fetch_assoc($result)) {
     print("<tr>");
       print("<td>".$row['ID']."</td>");
       print("<td>".$row['NAME']."</td>");
       print("<td>".$row['DESCRIPTION']."</td>");
       print("<td>".$row['FUNCTIONAL_OWNER']."</td>");
       print("<td>".$row['TECHNICAL_OWNER']."</td>");
       print("<td>".$row['DEPLOYMENT_DATE']."</td>");
       print("<td>".$row['RETIREMENT_DATE']."</td>");
       print("</tr>");
   }
   print("</table>")
?>      