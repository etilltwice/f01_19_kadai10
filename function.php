<?
//データ接続
function db_connect(){
    try{
        $pdo =new PDO("mysql:dbname=gamedata_terrorroom; charset=utf8; host=localhost", "root", "");
    }catch(PDOException $e){
        exit("【Caution!】データベースへの接続に失敗しました");
    }
    return $pdo;
}
?>