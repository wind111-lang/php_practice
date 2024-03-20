<?php
//print true ? 1 : false ? 'ok' : 'ng'; // Deprecated!
print(true ? 1 : false) ? 'ok' : 'ng'; // OKが出る
print true ? 1 : (false ? 'ok' : 'ng');// 1が出る
?>