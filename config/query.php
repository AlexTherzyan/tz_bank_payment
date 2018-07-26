<?php



function getPayments()
{
    // connecting to db
    $db = new DB_CONNECT();
    $con = $db->connect();

    $product_row_name =  mysqli_query($con,"SELECT o.company_id, type, info, face1, o.id FROM payments o JOIN company u ON o.company_id = u.id");
    $payments = array();
    while ($row = mysqli_fetch_array($product_row_name)  ) {

        // temp user array
        $product = array();
        $product["info"]                   = $row["info"];
        $product["id"]                     = $row["id"];
        $product["company_id"]                     = $row["company_id"];
        $product["type"]                     = $row["type"];
        $product["face1"]                     = $row["face1"];




        array_push($payments, $product);
    }
    $db->close();
    return $payments;
}

function getPaymentsCount(){

    // connecting to db
    $db = new DB_CONNECT();
    $con = $db->connect();

    $result=mysqli_query($con,"SELECT id FROM payments;");


    $row_cnt = mysqli_num_rows($result);

    return $row_cnt;


    $db->close();
}

function getCompanyCount(){

    // connecting to db
    $db = new DB_CONNECT();
    $con = $db->connect();

    $result=mysqli_query($con,"SELECT id FROM company;");


    $row_cnt = mysqli_num_rows($result);

    return $row_cnt;


    $db->close();
}

function getCompany()
{
    $db = new DB_CONNECT();
    $con = $db->connect();

    $company =  mysqli_query($con,"SELECT * FROM company ");
    $company_info = array();
    $product = array();
    while ($row = mysqli_fetch_array($company)  ) {




        $product["id"]                     = $row["id"];
        $product["date_begin"]             = $row["date_begin"];
        $product["date_end"]               = $row["date_end"];
        $product["dont_send_empty"]        = $row["dont_send_empty"];
        $product["address"]                = $row["address"];
        $product["face1"]                  = $row["face1"];
        $product["face2"]                  = $row["face2"];
        $product["app_face"]               = $row["app_face"];
        $product["accsettl"]               = $row["accsettl"];
        $product["cbu"]                    = $row["cbu"];
        $product["cbuaddress"]             = $row["cbuaddress"];
        $product["city"]                   = $row["city"];
        $product["name"]                   = $row["name"];
        $product["unn"]                    = $row["unn"];




        array_push($company_info, $product);
    }

    $db->close();
    return $company_info;
}
















