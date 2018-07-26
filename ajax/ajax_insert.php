<?php

require '../config/db_connect.php';


// connecting to db
$db = new DB_CONNECT();

$con = $db->connect();

/*
 *
 * Выписка_по_рублевому_счету
 *
 */
if (isset($_POST['DB'])) {


        $company = $_POST['company'];
        $type = $_POST['money'];

        //----------------шапка
        $time       =   htmlspecialchars( $_POST['time']);
        $h1         =   htmlspecialchars( $_POST['header1']);
        $h2         =   htmlspecialchars( $_POST['header2']);
        $h3         =   htmlspecialchars( $_POST['header3']);
        $h4         =   htmlspecialchars( $_POST['header4']);
        $h5         =   htmlspecialchars( $_POST['header5']);
        $datebegin  =   htmlspecialchars( $_POST['datebegin']);
        $dateend    =   htmlspecialchars( $_POST['dateend']);
        $datein     =   htmlspecialchars( $_POST['datein']);
        $restin     =   htmlspecialchars( $_POST['restin']);
        $acpa       =   htmlspecialchars( $_POST['acpa']);
        $acp1       =   htmlspecialchars( $_POST['acpa1']);
        //---------тело----------
        $docdate    =   htmlspecialchars($_POST['docdate']);
        $num        =   htmlspecialchars($_POST['num']);
        $opr        =   htmlspecialchars($_POST['opr']);
        $paymcode   =   htmlspecialchars($_POST['paymcode']);
        $code       =   htmlspecialchars($_POST['code']);
        $acc        =   htmlspecialchars($_POST['acc']);
        $db         =   htmlspecialchars($_POST['db']);
        $credit     =   htmlspecialchars($_POST['credit']);
        $korunp     =   htmlspecialchars($_POST['korunp']);
        $korname    =   htmlspecialchars($_POST['korname']);
        $nazn       =   htmlspecialchars($_POST['nazn']);
        $nazn2      =   htmlspecialchars($_POST['nazn2']);
        $opdate     =   htmlspecialchars($_POST['opdate']);
        //---------------подвал
        $DB         =   htmlspecialchars($_POST['DB']);
        $cr         =   htmlspecialchars($_POST['cr']);
        $restout    =   htmlspecialchars( $_POST['restout']);




        $payments = array(


            'type' => 'Тип: ' . $type,
            'time' => $time,
            'h1' => $h1,
            'h2' => $h2,
            'h3' => $h3,
            'h4' => $h4,
            'h5' => $h5,
            'datebegin' => $datebegin,
            'dateend' => $dateend,
            'datein' => $datein,
            'restin' => $restin,
            'acpa' => $acpa,
            'acp1' => $acp1,

            'docdate' => $docdate,
            'num' => $num,
            'opr' => $opr,
            'paymcode' => $paymcode,
            'code' => $code,
            'acc' => $acc,
            'db' => $db,
            'credit' => $credit,
            'korunp' => $korunp,
            'korname' => $korname,
            'nazn '=> $nazn,
            'nazn2' => $nazn2,
            'opdate' => $opdate,

            'DB' => $DB,
            'cr' => $cr,
            'restout' => $restout,


        );





    $html = '[OUT_PARAM] <br>';
    foreach ($payments as $k => $pay) {

        $html .= '<p style="border-bottom: 1px solid gray;">' . $k . '=' . $pay . '</p>';
    }

        $result = mysqli_query($con, "INSERT INTO payments (company_id, type, info) VALUES ('$company','$type', '$html')");


} else echo  '<h1> Ошибка передачи  </h1>>';


/*
 *
 * Выписка_по_валютному_счету
 *
 */
  if  (isset($_POST['restinq'])) {


    $company = $_POST['company'];
    $type = $_POST['money'];

    //----------------шапка
    $time       = htmlspecialchars($_POST['time']);
    $h1         = htmlspecialchars($_POST['header1']);
    $h2         = htmlspecialchars($_POST['header2']);
    $h3         = htmlspecialchars($_POST['header3']);
    $h4         = htmlspecialchars($_POST['header4']);
    $h5         = htmlspecialchars($_POST['header5']);
    $datebegin  = htmlspecialchars($_POST['datebegin']);
    $dateend    = htmlspecialchars($_POST['dateend']);
    $datein     = htmlspecialchars($_POST['datein']);
    $restin     = htmlspecialchars($_POST['restin']);
    $acpa       = htmlspecialchars($_POST['acpa']);
    $acp1       = htmlspecialchars($_POST['acpa1']);
    //---------тело----------
    $docdate    = htmlspecialchars($_POST['docdate']);
    $num        = htmlspecialchars($_POST['num']);
    $opr        = htmlspecialchars($_POST['opr']);
    $paymcode   = htmlspecialchars($_POST['paymcode']);
    $code       = htmlspecialchars($_POST['code']);
    $acc        = htmlspecialchars($_POST['acc']);
    $db         = htmlspecialchars($_POST['db']);
    $credit     = htmlspecialchars($_POST['credit']);
    $korunp     = htmlspecialchars($_POST['korunp']);
    $korname    = htmlspecialchars($_POST['korname']);
    $nazn       = htmlspecialchars($_POST['nazn']);
    $nazn2      = htmlspecialchars($_POST['nazn2']);
    $opdate     = htmlspecialchars($_POST['opdate']);
    //---------------подвал
    $DB         = htmlspecialchars($_POST['DB']);
    $cr         = htmlspecialchars($_POST['cr']);
    $restout    = htmlspecialchars($_POST['restout']);




    $payments = array(


        'type' => 'Тип: ' . $type,
        'time' => $time,
        'h1' => $h1,
        'h2' => $h2,
        'h3' => $h3,
        'h4' => $h4,
        'h5' => $h5,
        'datebegin' => $datebegin,
        'dateend' => $dateend,
        'datein' => $datein,
        'restin' => $restin,
        'acpa' => $acpa,
        'acp1' => $acp1,

        'docdate' => $docdate,
        'num' => $num,
        'opr' => $opr,
        'paymcode' => $paymcode,
        'code' => $code,
        'acc' => $acc,
        'db' => $db,
        'credit' => $credit,
        'korunp' => $korunp,
        'korname' => $korname,
        'nazn '=> $nazn,
        'nazn2' => $nazn2,
        'opdate' => $opdate,

        'DB' => $DB,
        'cr' => $cr,
        'restout' => $restout,


    );





      $product_row_name1 =  mysqli_query($con,"SELECT o.company_id, type, info, face1, o.id FROM payments o JOIN company u ON o.company_id = u.id");
      $payments1 = array();
      while ($row = mysqli_fetch_array($product_row_name1)  ) {

          // temp user array
          $product = array();
          $product["info"]                   = $row["info"];
          $product["id"]                     = $row["id"];

          $product["type"]                     = $row["type"];
          $product["face1"]                     = $row["face1"];




          array_push($payments1, $product);
      }




   $html = '[OUT_PARAM] <br>';
    foreach ($payments as $k => $pay) {

        $html .= '<p style="border-bottom: 1px solid gray;">' . $k . '=' . $pay . '</p>';
    }

    $result = mysqli_query($con, "INSERT INTO payments (company_id, type, info) VALUES ('$company','$type', '$html')");


} else echo  '<h1> Ошибка передачи  </h1>>';

$db->close();










