
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/reset.css" type="text/css" rel="stylesheet">
    <link href="css/sanitize.css" type="text/css" rel="stylesheet">
    <link href="css/title1.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div id="all">
        
        <img class="moon" src="image/moon.jpg" alt="深淵を見るとき、深淵もまたお前を見ている">
        <!-- 本文 -->
        <p id= "top">貴方は暗い森の中の夜道を歩いていた。</p>
        <p>空に輝く月が道を照らすものの木々の木の葉に遮られているせいか、とても薄暗く</p>
        <p>森の中にいるからか、あるいは陽が落ちて時間が経っているからかこの時期にしては妙に肌寒い</p>
        <p>少し薄気味悪い思いを抱きながら、とっとと用事を済ませてしまおうとあなたは歩む速度を上げる。</p>
        <p id= "direction">向かう先は町の外れの洋館だ。</p>
        <p>忘れ去られたようにひっそりと立つその洋館はあなたの町では奇妙な噂が途切れない程度には有名な場所だった。</p>
        <p>こんな夜更けにそこに向かっているのは別に無意味な好奇心や知識欲が理由ではない。</p>
        <p>貴方の友人から呼び出されたからだ。</p>
        <p>もう一度、携帯を取り出して、友人からのメールを確認してみる。</p>
        
        <!-- メール画面 -->
        <div class="mail">
            <p>差出人：酒井　和也</p>
            <hr color="#cccccc" noshade width="98%">
            <p>件名：</p>
            <hr color="#cccccc" noshade width="98%">
            <p>一生の頼<span class="blood">み</span>だ！　お願いだから助けてくれ！</p>
            <p>屋敷からは出れな<span class="blood">い</span>んだ！</p>
            <p>一緒に来た奴らともはぐれちゃ<span class="blood">っ</span>たし、どうすればいいんだ！</p>
            <p>おまけに何だか気味の悪い奴がいてどう頑張っても撒<span class="blood">け</span>やしない。</p>
            <p>場所は町はずれの洋館<span class="blood">た</span>゛。今すぐ来てくれ！</p>
        </div>

        <div id="surprise">
            <p>本当に何かあるんだったら警察に連絡するだろう。</p>
            <p>それでもあなたにかけたとしたら、きっとこれは悪戯なんだろう。</p>
            <p>急かすのは何らかの準備が終わって今か今かと待ち構えているからだろう。</p>
            <p>何とも奇特な趣味を持った友人を思ってため息を吐きながらあなたは進み続ける。</p>
            <p>やがて貴方は森の中に隠れるように佇む洋館を見つけた。</p>
            <p>真っすぐ続く道の先にそびえるそれはあなたを待ち構えているかのようだった。</p>
        </div>
        
        <img id="door" src="image/door.png" alt="それは本物か">
        
        <p>ドアノブに手を掛けた時にふと妙な考えが頭を過った。</p>
        <div id="note">
            <p class="sanity" id="sanity_before">「はたして自分には酒井和也という友人はいただろうか？」</p>
            <p class="sanity" id="sanity_after">「名前は分かるが顔も声も思い出せない」</p>
        </div>
        <p>一瞬だけ浮かんできた馬鹿馬鹿しい考えを振り払うように頭を振った。</p>
        <p>メールの文面からして彼の焦りが伝わってくるようなものだった。</p>
        <p>危機的状況で頼める相手なんてかなりの信頼がある人しかありえないだろう。</p>
        <p>馬鹿げた思考を振り払って、改めて扉を押し開けた</p>
    </div>

    <!-- リセットボタン -->
    <button id ="reset">記憶削除</button>

    <div id="move">動作確認</div>

    <!-- 音声タグ -->
    <audio id="hope" src="audio/door.wav"></audio>


    <script>
    // 確認画面
    // $("body").ready(function(){
    //     var check = confirm("このページはグロテスクな表現、ホラー要素が存在します。\nそれでも構いませんか？");
    //     if(check == false){
    //     history.back();
    //     }
    //     check = confirm("本当に？");
    //     if(check == false){
    //     history.back();
    //     }
    // });


    // ドアの開閉音
    $("#door").on("click", function(){
        location.replace("entrance.html");
    }); 

    // visit規定
    var count = 1;
    if(localStorage.getItem("T_visit"))
    {
        count =localStorage.getItem("T_visit");
        count++;
        localStorage.setItem("T_visit",count);
    }
    else{
        localStorage.setItem("T_visit",count);
    }
    $("#reset").on("click", function(){
        localStorage.removeItem("T_visit");
    }); 

    // ２回目
    if(count == 2){
        $("#top").prepend("また");
        $("#direction").text("向かう先は今度も町の外れの洋館だ。");
        $("#sanity_after").text("「館に向かうのを今すぐにやめて踵を返して帰るべきだ。」");
        $("#sanity_before").text("「やはり自分には酒井和也という名の友人はいない」");

    }
    else if(count == 3){
        $(".blood").css("color","#f00");
        $(".blood").css("font-size","30px");
        
        // メール以降
        $("#surprise").html("<p id='last'>貴方はぎょっとして携帯を取り落とした。</p>")
        $("#last").after("<p>恐らく今回も徒労で終わるであろう捜索を思うと自然とため息が出てしまう。</p>")
        $("#last").after("<p>気を取り直してまた道を歩いているといつも通り洋館へと辿り着いた。</p>")
        $("#last").after("<p>気のせいだったのだろうか？</p>")
        $("#last").after("<p>注意深く携帯を拾い上げて、もう一度メールを見ると妙な変化は何もなかった。</p>")
        $("#last").after("<p class='sanity'>確かに胡散臭くはあったし結局奴を見つけられたことが無かったが、この場所には何もないと思っていたからだ。</p>")

        
        $("#sanity_after").text("「何故奴を見つけなければならない？」");
        $("#sanity_before").text("「奴を放って家に帰ってもいいのではないか？」");
    }

    //  マウス座標取得
    window.onload=function(){
        
        // マウス移動時の反応
        document.body.addEventListener("mousemove",function(e){
            
            // 座標の取得
            var mX = e.pageX;
            var mY = e.pageY;
        });
    };
    
    //暗闇作成

    </script>
    
</body>
</html>