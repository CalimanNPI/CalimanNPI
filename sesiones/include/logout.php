<?php
include_once 'session.php';

$session = new SessionUser();
$session->closeSession();

header('location: ../index.php');