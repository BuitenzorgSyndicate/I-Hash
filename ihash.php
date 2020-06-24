<?php
$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\etutup gunungan penyakit thypoid[0m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";
$logo = "\e[36m
  ___    _  _         _    
 |_ _|__| || |__ _ __| |_  
  | |___| __ / _` (_-< ' \ 
 |___|  |_||_\__,_/__/_||_|
 \e[91m[ Identifier Hash Type ]
 \e[1m[ By Raden Gozal x BuitenzorgSydicate ]\e[97m                          

";

echo $logo;
echo " [ \e[93m?\e[97m ] Hash : "; $target = trim(fgets(STDIN));
    $url = 'https://ostch.herokuapp.com/api/v1/hash-identifier?hash='.urlencode($target);
   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
   ]);
   $response = curl_exec($curl);
   curl_close($curl);
 //  echo $response . PHP_EOL; // appear response
 $data = json_decode($response, true);
 if($data['code'] == "403")
{
 echo " [ \e[91m!\e[97m ] Hash Nya Harus Diisi !";
}else
{
 echo " [ \e[92m+\e[97m ] Tipe Hash : ".$data['hash_type']."\n";
 echo " [ \e[92m+\e[97m ] Panjang Char : ".$data['char_length']."\n";
 echo " [ \e[92m+\e[97m ] Tipe Char : ".$data['char_type']."\n";
 echo " \e[1m[ \e[92m+\e[97m ] Done Gan ✓✓✓\n";
}
?>
