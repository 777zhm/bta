<?php
    $adminemail="info@bta.biz.ua";
    $site="bta.biz.ua";
    $usernameblabla=$_POST["usernameblabla"];
    $usertelblabla=$_POST["usertelblabla"]; 
    $useremailblabla=$_POST["useremailblabla"]; 
    $textblabla=$_POST["textblabla"]; 
    $msg=" 
    Клиент $usernameblabla воспользовался формой обратной связи на сайте $site
    ФИО: $usernameblabla
    Телефон: $usertelblabla
    E-mail: $useremailblabla 
    Сообщение: $textblabla
"; 
mail("$adminemail", "Клиент $usernameblabla воспользовался формой для пожеланий, благодарностей, обращений и вопросов на сайте $site", "$msg");
header('Location: http://bta.biz.ua/en/finalsend.html');
exit; 
 ?>