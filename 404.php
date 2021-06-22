<?php
var_dump(http_response_code(404));
var_dump(http_response_code());
header("HTTP/1.0 404 Не найдено");
?>
