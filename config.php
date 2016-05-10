<?php

session_start();


global $DB;
$DB = pg_connect('host=10.0.0.5 user=scheylla dbname=ls_cv5_web password=123qwe') or die('A conexão falhou!');