<?php
//print true ? 1 : false ? 'ok' : 'ng'; // Deprecated!
print(true ? 1 : false) ? 'ok' : 'ng';
print true ? 1 : (false ? 'ok' : 'ng');
?>