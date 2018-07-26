<?php
require('../config/config.php');
require('../config/db_connect.php');
require('../config/query.php');


$payments       = getPayments();
$company_info   = getCompany();

?>


<table class="table table-striped">

    <thead>

    <tr>
        <th scope="col">#</th>
        <th scope="col">Платежи</th>
    </tr>

    </thead>
    <tbody>


    <?php if (isset($payments)) : ?>

        <?php $i = 3; $j = 1;  foreach ($payments as $k => $payment):  ?>

            <tr>

                <th scope="row"><?=$j?></th>

                <td>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#<?=$i?>">
                                        <?=$payment['face1']?></a>
                                </h4>
                            </div>
                            <div id="<?=$i?>" class="panel-collapse collapse">



                                <?php

                                $html = '[IN_PARAM] <br>';
                                $search_results = array();
                                foreach($company_info as  $company) {
                                    if( $payment['company_id'] == $company['id']) {
                                        $search_results = $company;

                                        foreach ($company as $key  => $com)

                                            $html .= '<p style="border-bottom: 1px solid gray;">' . $key . '=' . $com . '</p>';
                                    }

                                }



                                echo $html;





                                debug(  $payment['info']);
                                ?>

                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <?php $i++; $j++; ?>
        <?php endforeach;?>

    <?php else: ?>

        <?= "Ошибка при получении данных" ?>

    <?php endif; ?>
    </tbody>
</table>

