<?php

if (isset($_GET['error'])) {
    $er = $_GET['error'];

    switch ($er) {
        case '200':
            var_dump(http_response_code(200));
            header("HTTP/1.1 200 все окей");
            break;
        case '404':
            var_dump(http_response_code(404));
            var_dump(http_response_code());
            header("HTTP/1.0 404 Не найдено");
            break;
        case '504':
            var_dump(http_response_code(504));
            var_dump(http_response_code());
            header("HTTP/1.0 504 Gateway Time-out ");
            break;
    }

}
