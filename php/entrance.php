<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/reset.css" type="text/css" rel="stylesheet">
    <link href="css/sanitize.css" type="text/css" rel="stylesheet">
    <link href="css/entrance.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <p>中は輪をかけて暗く、携帯のライトが無ければとてもじゃないが見て回ることが出来そうにない。</p>
        <p>空気がじめじめとしてかび臭く、中にいるだけで陰鬱な気分になってしまいそうだ。</p>
        <p>手早く奴を見つけて帰るとしようか。</p>
        <p>そう心に決めて瞬間後ろで木の軋む音が聞こえた。</p>

        <img id="door" src="image/door.png" alt="">
        <p>振り返ると扉がひとりでに閉まっている途中だった。</p>
        <p>扉に思いきりぶつかろうともピクリとも動く様子はない</p>
        <p id="code">どんな仕掛けかは分からないが奴を探す他無いようだ。</p>

        <!-- 音声タグ -->
        <audio src="audio/door.wav" autoplay></audio>

        <input type="text">
        <input type="submit">


        <a href="child.html">子供部屋</a>
        <a href="doll.html">人形部屋</a>
        <a href="study.html">書斎</a>
    </div>
    <!-- スクリプトだよ！！ -->
    <script>
        // visit規定
        var count = 1;
        if(localStorage.getItem("E_visit"))
        {
            count =localStorage.getItem("E_visit");
            count++;
            localStorage.setItem("E_visit",count);
        }
        else{
            localStorage.setItem("E_visit",count);
        }

        // 仕掛けドア
        var nock = 0;
        $("#door").on("click", function(){
            if(nock == 10){
                $("#code").after("<p>何度も扉を叩いていると上から何かが落ちてきてかさりと音を立てた</p><p>足元を見てみると胴体に釘で紙が貼りつけられた藁人形が落ちていた。</p><p>紙には「pass=your name」と書かれていた。</p>");
                nock++;
            }
            else{
                nock++;
            }
        });



    </script>
    
</body>
</html>