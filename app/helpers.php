<?php
function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}

function slugify($text){
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

function currency_format($type, $value){
    if($type == 'Naira' || $type == 'NGN'  ){
        return " ₦".number_format($value, 0);
    }else{
        return "$".number_format($value, 0);
    }
}

function currency_format2($value){
    $result = number_format($value, 0, ',', '' );
 
    return $result.'00';
   
}

function lotterygen($maxn = "49",$maxb="6") { 
	srand((double) microtime() * 1000000); 
	while (1>0) { 
		$lottery[] = rand(1,$maxn); 
		$lottery = array_unique($lottery); 
		if (sizeof($lottery) == $maxb) break; 
	} 
	sort($lottery); 
	return implode(", ",$lottery); 
} 

function datetime($date){
    return date("d M, Y", strtotime($date));
}