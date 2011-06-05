<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ;
'';// checking for modification in file:templates/base.tpl
if (!("1307297990" == filemtime('templates/base.tpl'))) { ob_end_clean(); return false; };
 /* end template body */
return $this->buffer . ob_get_clean();
?>