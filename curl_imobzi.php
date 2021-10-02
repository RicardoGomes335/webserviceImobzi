<?php
  $Imobzi_secret_key = 'YourSecretKey';
  $url = 'https://api.imobzi.app/v1/properties';
  $request_headers = array(
                    "X-Imobzi-Secret:" . $Imobzi_secret_key
                );
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
  
  $season_data = curl_exec($ch);
  
  if (curl_errno($ch)) {
    print "Error: " . curl_error($ch);
    exit();
  }
  
  // Mostrando o resultado
  curl_close($ch);
  $json = json_decode($season_data, true);
  echo "<pre>";
  print_r($json);
  echo "</pre>";

?>
