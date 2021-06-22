<?php

var_dump(http_response_code(504));
var_dump(http_response_code());
header("HTTP/1.0 504 Gateway Time-out ");

?>
