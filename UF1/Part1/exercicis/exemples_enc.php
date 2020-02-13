<?php

$passwd="12345";

if(sha1(md5($passwd))=="fe703d258c7ef5f50b71e06565a65aa07194907f"){
    echo "BIEN";
}else{
    echo "MAL";
}

?>