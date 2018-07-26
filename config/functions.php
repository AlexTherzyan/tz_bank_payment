<?php 


 function includeTemplate($filename, $content = [])
{

    if (is_readable($filename)) {
        ob_start();
        extract($content);
        require_once $filename;
        return ob_get_clean();
    } else return "файл не найден";
}


function isAjax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
}




?>