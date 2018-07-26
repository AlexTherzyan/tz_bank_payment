<?php





if (isset($_POST['select'])) {

    $div = '';


if ($_POST['select'] == 'Выписка_по_рублевому_счету') {

    $div = ' <h4 class="text-primary">Шапка выписки</h4>
                                <div class="form-group">
                                   <input name="time" class="form-control" type="text" placeholder="Дата и время формирования выписки (ДД.ММ.ГГГГ ЧЧ:ММ:СС)">
                                </div>

                               <div class="form-group">
                                   <input name="header1" class="form-control" type="text" placeholder="ВЫПИСКА ПО СЧЕТУ ЗА ПЕРИОД дата_начала по дата_окончания)">
                               </div>

                               <div class="form-group">
                                   <input name="header2" class="form-control" type="text" placeholder="Номер исполнителя">
                               </div>

                               <div class="form-group">
                                   <input name="header3" class="form-control" type="text" placeholder="Дата последней операции (ДД.ММ.ГГГГ)">
                               </div>

                               <div class="form-group">
                                   <input name="header4" class="form-control" type="text" placeholder="Номер счета">
                               </div>

                               <div class="form-group">
                                   <input name="header5" class="form-control" type="text" placeholder="Наименование лицевого счета">
                               </div>

                               <div class="form-group">
                                   <input name="datebegin" class="form-control" type="text" placeholder="Дата начала запрашиваемого периода (ДД.ММ.ГГГГ)">
                               </div>

                               <div class="form-group">
                                   <input name="dateend" class="form-control" type="text" placeholder="Дата окончания запрашиваемого периода (ДД.ММ.ГГГГ)">
                               </div>

                               <div class="form-group">
                                   <input name="datein" class="form-control" type="text" placeholder="Дата входящего остатка (ДД.ММ.ГГГГ)">
                               </div>

                               <div class="form-group">
                                   <input name="restin" class="form-control" type="text" placeholder="Входящий остаток">
                               </div>

                               <div class="form-group">
                                   <input name="acpa" class="form-control" type="text" placeholder="АКТИВ/ПАССИВ">
                               </div>

                               <div class="form-group">
                                   <input name="acpa1" class="form-control" type="text" placeholder="АКТИВ/ПАССИВ">
                               </div>
                               
                    <h5 class="text-primary">Движение по счету</h5>
                               
                               
                                <div class="form-group">
                                   <input name="docdate" class="form-control" type="text" placeholder="Дата операции (ДД.ММ.ГГГГ)">
                               </div>
                               
                               <div class="form-group">
                                   <input name="num" class="form-control" type="text" placeholder="Номер документа">
                               </div>
                               
                               <div class="form-group">
                                   <input name="opr" class="form-control" type="text" placeholder="Код операции">
                               </div>
                               
                               <div class="form-group">
                                   <input name="paymcode" class="form-control" type="text" placeholder="Код платежа в бюджет">
                               </div>
                               
                               <div class="form-group">
                                   <input name="code" class="form-control" type="text" placeholder="БИК банка-корреспондента">
                               </div>
                               <div class="form-group">
                                   <input name="code" class="form-control" type="text" placeholder="Номер счета корреспондента">
                               </div>
                               <div class="form-group">
                                   <input name="acc" class="form-control" type="text" placeholder="Сумма операции по дебету">
                               </div>
                               <div class="form-group">
                                   <input name="db" class="form-control" type="text" placeholder="Сумма операции по кредиту">
                               </div>
                               <div class="form-group">
                                   <input name="credit" class="form-control" type="text" placeholder="УНП корреспондента">
                               </div>
                               <div class="form-group">
                                   <input name="korunp" class="form-control" type="text" placeholder="Наименование корреспондента">
                               </div>
                               <div class="form-group">
                                   <input name="nazn" class="form-control" type="text" placeholder="Назначение платежа (первых 210 символов)">
                               </div>
                               <div class="form-group">
                                   <input name="nazn2" class="form-control" type="text" placeholder="Продолжение назначения платежа">
                               </div>
                               <div class="form-group">
                                   <input name="opdate" class="form-control" type="text" placeholder="Дата операции (ДД.ММ.ГГГГ)">
                               </div>
                               
                          <h5 class="text-primary">Подвал выписки</h5>
                               
                               <div class="form-group">
                                   <input name="DB" class="form-control" type="text" placeholder="Итого обороты по дебету">
                               </div>
                               <div class="form-group">
                                   <input name="cr" class="form-control" type="text" placeholder="Итого обороты по кредиту">
                               </div>
                               <div class="form-group">
                                   <input name="restout" class="form-control" type="text" placeholder="Исходящий остаток">
                               </div>
                               
                               ';
}


  if  ($_POST['select'] =='Выписка_по_валютному_счету') {

        $div = ' 
        
        <h4 class="text-primary">Шапка выписки</h4>
                                <div class="form-group">
                                   <input name="time" class="form-control" type="text" placeholder="Дата и время формирования выписки (ДД.ММ.ГГГГ ЧЧ:ММ:СС)">
                                </div>

                               <div class="form-group">
                                   <input name="header1" class="form-control" type="text" placeholder="ВЫПИСКА ПО СЧЕТУ ЗА ПЕРИОД дата_начала по дата_окончания)">
                               </div>

                               <div class="form-group">
                                   <input name="header2" class="form-control" type="text" placeholder="Номер исполнителя">
                               </div>

                               <div class="form-group">
                                   <input name="header3" class="form-control" type="text" placeholder="Дата последней операции (ДД.ММ.ГГГГ)">
                               </div>

                               <div class="form-group">
                                   <input name="header4" class="form-control" type="text" placeholder="Номер счета">
                               </div>

                               <div class="form-group">
                                   <input name="header5" class="form-control" type="text" placeholder="Наименование лицевого счета">
                               </div>

                               <div class="form-group">
                                   <input name="datebegin" class="form-control" type="text" placeholder="Дата начала запрашиваемого периода (ДД.ММ.ГГГГ)">
                               </div>

                               <div class="form-group">
                                   <input name="dateend" class="form-control" type="text" placeholder="Дата окончания запрашиваемого периода (ДД.ММ.ГГГГ)">
                               </div>

                               <div class="form-group">
                                   <input name="datein" class="form-control" type="text" placeholder="Дата входящего остатка (ДД.ММ.ГГГГ)">
                               </div>

                               <div class="form-group">
                                   <input name="restin" class="form-control" type="text" placeholder="Входящий остаток">
                               </div>
                               
                                <div class="form-group">
                                   <input name="restinq" class="form-control" type="text" placeholder="Входящий остаток (рублевый эквивалент)">
                               </div>
                               
                                <div class="form-group">
                                   <input name="i1" class="form-control" type="text" placeholder="Код валюты">
                               </div>
                               
                                <div class="form-group">
                                   <input name="i1str" class="form-control" type="text" placeholder="Название валюты">
                               </div>

                               <div class="form-group">
                                   <input name="acpa" class="form-control" type="text" placeholder="АКТИВ/ПАССИВ">
                               </div>

                               <div class="form-group">
                                   <input name="acpa1" class="form-control" type="text" placeholder="АКТИВ/ПАССИВ">
                               </div>
                               
                    <h5 class="text-primary">Движение по счету</h5>
                               
                               
                                <div class="form-group">
                                   <input name="docdate" class="form-control" type="text" placeholder="Дата операции (ДД.ММ.ГГГГ)">
                               </div>
                               
                               <div class="form-group">
                                   <input name="num" class="form-control" type="text" placeholder="Номер документа">
                               </div>
                               
                               <div class="form-group">
                                   <input name="opr" class="form-control" type="text" placeholder="Код операции">
                               </div>
                               
                               <div class="form-group">
                                   <input name="paymcode" class="form-control" type="text" placeholder="Код платежа в бюджет">
                               </div>
                               
                               <div class="form-group">
                                   <input name="code" class="form-control" type="text" placeholder="БИК банка-корреспондента">
                               </div>
                               <div class="form-group">
                                   <input name="code" class="form-control" type="text" placeholder="Номер счета корреспондента">
                               </div>
                               <div class="form-group">
                                   <input name="acc" class="form-control" type="text" placeholder="Сумма операции по дебету">
                               </div>
                               <div class="form-group">
                                   <input name="db" class="form-control" type="text" placeholder="Сумма операции по кредиту">
                               </div>
                               <div class="form-group">
                                   <input name="credit" class="form-control" type="text" placeholder="УНП корреспондента">
                               </div>
                               <div class="form-group">
                                   <input name="korunp" class="form-control" type="text" placeholder="Наименование корреспондента">
                               </div>
                               <div class="form-group">
                                   <input name="nazn" class="form-control" type="text" placeholder="Назначение платежа (первых 210 символов)">
                               </div>
                               <div class="form-group">
                                   <input name="nazn2" class="form-control" type="text" placeholder="Продолжение назначения платежа">
                               </div>
                               <div class="form-group">
                                   <input name="opdate" class="form-control" type="text" placeholder="Дата операции (ДД.ММ.ГГГГ)">
                               </div>
                               
                               
                                <div class="form-group">
                                   <input name="debq" class="form-control" type="text" placeholder="Сумма операции по дебету (рублевый эквивалент)">
                               </div>
                                <div class="form-group">
                                   <input name="creq" class="form-control" type="text" placeholder="Сумма операции по кредиту (рублевый эквивалент)">
                               </div>
                                <div class="form-group">
                                   <input name="deb" class="form-control" type="text" placeholder="Сумма операции по дебету (валюта)">
                               </div>
                                <div class="form-group">
                                   <input name="cre" class="form-control" type="text" placeholder="Сумма операции по кредиту (валюта)">
                               </div>
                                <div class="form-group">
                                   <input name="i2" class="form-control" type="text" placeholder="Код валюты">
                               </div>
                                <div class="form-group">
                                   <input name="rate" class="form-control" type="text" placeholder="Курс">
                               </div>
                               
                          <h5 class="text-primary">Подвал выписки</h5>
                               
                               <div class="form-group">
                                   <input name="debvq" class="form-control" type="text" placeholder="Итого обороты по дебету (рублевый эквивалент)">
                               </div>
                               <div class="form-group">
                                   <input name="crevq" class="form-control" type="text" placeholder="Итого обороты по кредиту (рублевый эквивалент)">
                               </div>
                               <div class="form-group">
                                   <input name="debv" class="form-control" type="text" placeholder="Итого обороты по дебету (валюта)">
                               </div>
                                 <div class="form-group">
                                   <input name="crev" class="form-control" type="text" placeholder="Итого обороты по кредиту (валюта)">
                               </div>
                                 <div class="form-group">
                                   <input name="restout" class="form-control" type="text" placeholder="Исходящий остаток (валюта)">
                               </div>
                                 <div class="form-group">
                                   <input name="restoutq" class="form-control" type="text" placeholder="Исходящий остаток (рублевый эквивалент)">
                               </div>
                               
         
 ';

    }


    echo $div;



}




?>