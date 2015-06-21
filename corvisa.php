<?

$params = array(

   "Message" => "Este es un mensaje de prueba",

   "From" => "%2B14143235970",

   "To" => "+17087335390"

);



echo httpPost("https://api.us1.corvisa.io/sms/send",$params);



function httpPost($url,$params)

{

  $username = "1POT0NBstqh4XHl5LrwxW";

  $password = ".NYr!ke4alK1VI/obGTiXw8nQt6DW7Fjp$";	

	

  $postData = '';

   //create name value pairs seperated by &

   foreach($params as $k => $v) 

   { 

      $postData .= $k . '='.$v.'&'; 

   }

   rtrim($postData, '&');

 

    $ch = curl_init();  

 

    curl_setopt($ch,CURLOPT_URL,$url);

	curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    curl_setopt($ch,CURLOPT_HEADER, false); 

    curl_setopt($ch, CURLOPT_POST, count($postData));

        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

 

    $output=curl_exec($ch);

 

    curl_close($ch);

    return $output;



}
?>