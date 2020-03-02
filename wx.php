<?php
    function checkSignature() {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        
        $token = "sudidi";
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $sign = sha1( $tmpStr );
        
        if( $sign == $signature ){
            return true;
        }else{
            return false;
        }
    }

    checkSignature();

?>