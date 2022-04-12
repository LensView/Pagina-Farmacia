<?php
    include_once '../controlador/user_session.php';

    $userSession = new UserSession();
    $userSession->closeSesssion();

    header ("location: ../index/index.php");



?>