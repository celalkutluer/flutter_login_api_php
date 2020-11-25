<?php
function temiz($text)
{
    $text = strip_tags($text);
    $text = preg_replace('/<a\s+.*?href="([^")]+)"[^>]*>([^<]+)<\/a>/is', '\2 (\1)', $text);
    $text = preg_replace('/<!--.+?-->/', '', $text);
    $text = preg_replace('/{.+?}/', '', $text);
    $text = preg_replace('/&nbsp;/', ' ', $text);
    $text = preg_replace('/&amp;/', ' ', $text);
    $text = preg_replace('/&quot;/', ' ', $text);
    $text = htmlspecialchars($text);
    $text = addslashes($text);
    return $text;
}

function g($par)
{
    $par = temiz(@$_GET[$par]);
    return $par;
}
function p($par)
{
    $par = htmlspecialchars(addslashes(trim($_POST[$par])));
    return $par;
}

/*SESSİON*/
function s($par)
{
    $session = $_SESSION[$par];
    return $session;
}

function createToken()
{
    $rn = rand(1000, 9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(1);
    return $rn;
}
function rasgeleharf($kackarakter)
{
    $s = "";
    $char = "ABCDEFGHIJKLMNOPRSTUVWYZQX";
    for ($k = 1; $k <= $kackarakter; $k++) {
        $h = substr($char, mt_rand(0, strlen($char) - 1), 1);
        $s .= $h;
    }
    return $s;
}
?>