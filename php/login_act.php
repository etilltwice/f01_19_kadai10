<?php 
//初期設定
session_start();
include("./function.php");

$name = $_POST["name"];

//データベース処理
$pdo = db_connect();
$sql = ('SELECT *
         FROM account
         WHERE name =:name');

$stmt = $pdo -> prepare($sql);
$stmt -> bindValue(':name', $name, PDO::PARAM_STR);
$status = $stmt -> execute();
//SQL実行検証
if($status == false){
    $error = $stmt -> erroInfo;
    exit("SQL関連が間違っています".$error);
}

//データ取得
$val = $stmt -> fetch();

if($val["id"] != ""){
    $_SESSION["name"] = $name;
    $_SESSION["title_visit"] = $val["title_visit"];
    $_SESSION["entrance_visit"] = $val["entrance_visit"];
    $_SESSION["doll_visit"] = $val["doll_visit"];
    $_SESSION["child_visit"] = $val["child_visit"];
    $_SESSION["end_visit"] = $val["end_visit"];
    header("location: title1.php");
    
}else{
    $_SESSION["name"] = $name;
    $_SESSION["title_visit"] =0;
    $_SESSION["entrance_visit"]= 0;
    $_SESSION["doll_visit"] = 0;
    $_SESSION["child_visit"] = 0;
    $_SESSION["end_visit"] = 0;

    $sql = ('INSERT INTO account(ID, name, title_visit, entrance_visit, doll_visit, child_visit, end_visit)
             VALUES (null, :name, 0, 0, 0, 0, 0)');

$stmt = $pdo -> prepare($sql);
$stmt -> bindValue(':name', $name, PDO::PARAM_STR);
$status = $stmt -> execute();

//SQL実行検証
if($status == false){
    $error = $stmt -> erroInfo;
    exit("アカウント作成のSQL関連が間違っています".$error);
}
header("location: title1.php");

}
?>