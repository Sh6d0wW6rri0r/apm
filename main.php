
  <?php
  require_once('Tablelib.php');
  require_once('Menulib.php');
  $menu = new APM_MENU();
  $menu->define_css();
  $tablecss = new APM_TABLE();
  $tablecss->define_css(50,"about");
  $menu->insert_menu();
  print("<center>");
  print("<br><br><br><br><table id=\"apmtableabout\">");
   print("<tr>");
    print("<th><center>APM system</center></th>");
   print("</tr>");
   print("<tr>");
     print("<td><center>(c) Olivier Moulin</center></td>");
   print("</tr>");
   print("</table>");
   print("</center>");
  ?>
