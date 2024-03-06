<?php
const BASE_URL = "http://localhost/ecommerce/eshopper/";
const DBHOST = "localhost";
const DBCHARSET = "utf8";
const DBNAME = "php2_wd18301";
const DBUSER = "root";
const DBPASS = "";
// thực hiện việc chuyển trang đến route yêu cầu
function route($url){
    return BASE_URL.$url;
}