<?php

class curlOperations{
  function httpGet($url){
    try{
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $output = curl_exec($ch);
      if(curl_errno($ch)){
        throw new Exception(curl_error($ch));
      }
      curl_close($ch);
      return $output;
    }catch(Exception $e){
      echo $e->getMessage();
    }
  }

  function httpPost($url, $param){
    try{
      $postData = '';
      foreach($param as $key => $value){
        $postData .= $key . '=' . $value . '&';
      }
      $postData = rtrim($postData, '&');
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_POST, count($postData));
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
      $output = curl_exec($ch);
      if(curl_errno($ch)){
        throw new Exception(curl_error($ch));
      }
      curl_close($ch);
      return $output;
    }catch(Exception $e){
      echo $e->getMessage();
    }
  }
}




 ?>
