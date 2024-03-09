<!-- 1: 前置演算はオペランドを変数の前に配置する. 後置演算はオペランドを変数の後ろに配置する.
例えば代入する際に各演算を実施した場合, 前置演算は変数の演算を先に行い, 後置演算は変数の演算を後に行う.
xに1が入っており, yがxを代入するとすると, 前置演算ではxに1を足してから代入され, 後置演算ではxが代入されたあとに1が足される.
つまり, 前置演算の際は x=2とy=2, 後置演算の際は x=2, y=1という結果になる.
-->

<?php
print 15 - '0x10' . '<br />'; // 15
print 2**3 . '<br />'; // 8
$i = 'Z';
$i++;
print $i . '<br />';// AA
print 10 + '1.5e1' . '<br />'; // 25
print 17 % 8; // 1

?>