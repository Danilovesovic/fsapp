<?php

require "connection.php";
require "helpers.php";

if(session_status() === PHP_SESSION_NONE){
    session_start();
}