<?php
 
$ffi = FFI::cdef(
    "int use_money(int money,int use);
   const char* say_hello(const char *name);
    ",  
    "use_money.dll");
 
echo "result is:". $ffi->use_money( 100,80);
echo "\n";
$hello = $ffi->say_hello("yang");
echo $hello  ;

?>