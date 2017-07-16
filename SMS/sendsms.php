<?php

/**
 * @author Kingster
 * @author SuyashBansal
 * @category SMS
 * @copyright 2015
 * @description Request this page with get or post params
 * @param uid = 8142661344
 * @param pwd = pandu123	
 * @param phone = 8790348115 
 * @param msg = "HelloWorld" 
*/
include('way2sms-api.php');

if (isset($_REQUEST['uid']) && isset($_REQUEST['pwd']) && isset($_REQUEST['phone']) && isset($_REQUEST['msg'])) {
    $res = sendWay2SMS($_REQUEST['uid'], $_REQUEST['pwd'], $_REQUEST['phone'], $_REQUEST['msg']);
    if (is_array($res))
        echo $res[0]['result'] ? 'true' : 'false';
    else
        echo $res;
    exit;
}
?>