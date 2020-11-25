<?php
include "db.php";
include_once "func.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");

if (!empty(g('kul_eposta'))&&!empty(g('kul_sifre'))&&$_SERVER['REQUEST_METHOD']=='GET') {
    $token=createToken();//func.php
    $veri = $db->prepare('SELECT * FROM kullanicilar where kul_eposta=? and kul_sifre=?');
    $veri->execute(array(g('kul_eposta'), g('kul_sifre')));
    $say = $veri->rowCount();
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    foreach ($v as $bilgi) ;

    if ($say == 1) {
        $json_array['isLogin'] = true;
        $json_array['kul_id'] = $bilgi['kul_id'];
        $json_array['token'] = $token;
        echo json_encode($json_array, JSON_UNESCAPED_UNICODE);

        $kul_token_guncelle = $db->prepare("UPDATE kullanicilar SET kul_token=? WHERE kul_Id=?");
        $kul_token_guncelleme = $kul_token_guncelle->execute(array($token, $bilgi['kul_id']));
    } else {
        $json_array['isLogin'] = false;
        echo json_encode($json_array, JSON_UNESCAPED_UNICODE);
    }
}




?>
