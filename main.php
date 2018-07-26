<!DOCTYPE html>


<html>

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>TZ</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


</head>


<body>
<div class="container-fluid">

<div class="row" style="margin-top: 50px;">
    <div class="col-2" >
        <div class="nav flex-column nav-pills container" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-top: 10px">

            <?php $show=''; ?>
            <?php foreach ($category as $key): ?>

                <?php if ($key == 'Компании') : ?>
                    <?php $show='active';?>

                <?php else:?>
                    <?php $show='';?>
                <?php endif;?>

                <a class="nav-link <?=$show;?>" id="v-pills-profile-tab" data-toggle="pill" href="#<?=$key;?>" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <?=$key;?>
                    <?php if ($key == 'Платежи') : ?>
                        <span class="badge badge-light" style="float: right;" id="pay-count"></span>
                    <?php endif;?>
                    <?php if ($key == 'Компании') : ?>
                        <span class="badge badge-light" style="float: right;" id="company-count"></span>
                    <?php endif;?>
                </a>
            <?php endforeach; ?>

        </div>
    </div>
    <div class="col-9">




        <div class="tab-content" id="v-pills-tabContent">


            <?php $count = 0; $show=''; ?>
            <?php foreach ($category as $key): ?>

                <?php if ($key == 'Компании') : ?>
                    <?php $show='show active';?>
                <?php else:?>
                    <?php $show='';?>
                <?php endif;?>


                <div class="tab-pane fade <?=$show;?>" id="<?=$key;?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">

<!-- =============================================================================================================== -->
<!-- =============================================SET PAYMENTS=========================================================== -->
<!-- =============================================================================================================== -->



                    <?php if ($key == 'Выписки') : ?>

                        <form method="post" id="formx">

<!--                            --><?php //if ($result): ?>
<!---->
<!--                                <div class="alert alert-success" role="alert">-->
<!--                                    Выписка успешно добавлена-->
<!--                                </div>-->

<!--                            --><?php //endif; ?>

                            <div class="form-group">


                                <label for="exampleFormControlSelect1">Выберите компанию</label>
                                <select  name="company" class="form-control sss"  id="exampleFormControlSelect1 ">
                                    <option value="">Компания...</option>

                                    <?php foreach ($company_info as $company): ?>
                                        <option  value="<?=$company['id']?>"><?=$company['face1']?></option>

                                    <?php endforeach; ?>

                                </select>


                            </div>




                            <div class="form-group">

                                <label for="exampleFormControlSelect1">Выберите тип запроса</label>
                                <select  name="money" class="form-control ajax-pay" id="dis">
                                    <option value="">Выберите тип выписки...</option>
                                    <option value="Выписка_по_рублевому_счету">Выписка по рублевому счету</option>
                                    <option value="Выписка_по_валютному_счету">Выписка по валютному счету</option>

                                </select>


                            </div>



                            <div class="container " id="pay_body">



                            </div>


                            <button  type="submit"  class="btn btn-primary">Отправить</button>

                    </form>

                <?php endif; ?>



<!-- =============================================================================================================== -->
<!-- =============================================PAYMENTS=========================================================== -->
<!-- =============================================================================================================== -->





                    <?php if ($key == 'Платежи') : ?>

                    <div class="container" id="payments">

                    </div>

                    <?php endif; ?>



<!-- =============================================================================================================== -->
<!-- =============================================COMPANY=========================================================== -->
<!-- =============================================================================================================== -->

            <?php if ($key == 'Компании') : ?>


                <table class="table table-striped">

                    <thead>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Компании</th>
                    </tr>

                    </thead>
                    <tbody>


                    <?php if (isset($company_info)) : ?>

                    <?php foreach ($company_info as  $company): ?>

                        <tr>

                            <th scope="row"><?=$company['id']?></th>

                            <td>

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#<?=$company['id']?>">
                                                    <?=$company['face1']?></a>
                                            </h4>
                                        </div>
                                        <div id="<?=$company['id']?>" class="panel-collapse collapse">

                                            <?php

                                            debug($company);
                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach;?>
                    <?php else: ?>

                        <?= "Ошибка при получении данных" ?>
                    <?php endif; ?>

                    </tbody>
                </table>



            <?php endif; ?>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>




</div>


<script src="js/jquery-1.11.0.min.js"></>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script>


    document.getElementById("dis").disabled = true;


    $( ".sss" ).change(function() {
        document.getElementById("dis").disabled = false;
    });

    $(document).ready(function () {

        $('.ajax-pay').change(function () {

            var  select = $(this).val();

            $.ajax({

                url:  "ajax/ajax.php",
                method: "POST",
                data: {select:select},
                success:function (data) {

                    $('#pay_body').html(data);

                },
                error:  function(xhr, str){
                    alert('Возникла ошибка: ' + xhr.responseCode);
                }
            });
        });
    });



</script>

<script>


    // count company
    function companyCount() {
        $.ajax({
            url: "ajax/ajax_company_count.php",
            type: "post",

            success: function (data) {


                $("#company-count").html(data);


            },
            error: function (xhr, str) {
                alert('Возникла ошибка: ' + xhr.responseCode);
            },

        });
    }
    // count payments
    function payCount() {
        $.ajax({
            url: "ajax/ajax_count.php",
            type: "post",

            success: function (data) {


                $("#pay-count").html(data);


            },
            error: function (xhr, str) {
                alert('Возникла ошибка: ' + xhr.responseCode);
            },

        });
    }

    // подгрузка новых платежей
    function show() {
        $.ajax({
            url: "ajax/ajax_payments.php",
            type: "post",

            success: function (data) {


                $("#payments").html(data);


            },
            error: function (xhr, str) {
                alert('Возникла ошибка: ' + xhr.responseCode);
            },

        });
    }


    $("#formx").submit(function (event) {

        event.preventDefault();

        $.ajax({
            url: "ajax/ajax_insert.php",
            type: "post",
            data: $("#formx").serialize(),//собираем все данные из формы

            success: function () {

                companyCount()
                payCount();
                show();
                alert("Шаблон сохранен");

            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }

        });

    });

    companyCount()
    payCount();
    show();

</script>

</body>



</html>



