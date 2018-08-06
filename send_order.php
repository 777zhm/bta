<?php
    $adminemail="order@bta.biz.ua";
    $site="bta.biz.ua";
    $username=$_POST["username"];
    $usertelephone=$_POST["usertelephone"]; 
    $userfromplace=$_POST["userfromplace"]; 
    $usertoplace=$_POST["usertoplace"]; 
    $departuredate=$_POST["departuredate"]; 
    $returndate=$_POST["returndate"]; 
    $ticketsquantity=$_POST["ticketsquantity"];
    $discountcode=$_POST["discountcode"];
    $useremail=$_POST["useremail"]; 
    $transportRadios=$_POST["transportRadios"]; 
    $msg=" 
    Клиент $username воспользовался формой обратной связи на сайте $site
    ФИО: $username
    Телефон: $usertelephone
    Сообщение: 
    Заказ билета с $userfromplace в $usertoplace . 
    Дата выезда: $departuredate . 
    Дата возврата: $returndate . 
    Количество билетов: $ticketsquantity .
    Код скидки: $discountcode .
    Вид транспорта: $transportRadios
    E-mail: $useremail 
"; 
mail("$adminemail", "Клиент $username воспользовался формой обратной связи на сайте $site", "$msg"); 
header('Location: http://bta.biz.ua/finalsend.html');
exit; 
 ?>