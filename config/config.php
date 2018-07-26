<?php

$category = ["Компании", "Платежи", "Выписки"];

function debug($arr){
    echo  '<pre>' . print_r($arr, true). '</pre>';
}


//SELECT o.company_id, type, info FROM payments o JOIN company u ON o.company_id = u.id WHERE company_id =1
 ?>