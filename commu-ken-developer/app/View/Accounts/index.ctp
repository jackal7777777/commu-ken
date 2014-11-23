<?php
App::uses('Utility');
$this->Html->scriptStart(array('inline' => false)); ?>
//オープニング文章
            var startText = new Array();
            startText['name1'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text1'] = '今日から高校２年生、新しいクラスだ……';
            startText['img1'] ='<?= $pro_pass_img ?>images/none.png';
            startText['name2'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text2'] = '１年のときは、全然友達ができなかったなあ……誰とも上手く話せなくて……';
            startText['img2'] ='<?= $pro_pass_img ?>images/none.png';
            startText['name3'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text3'] = '今年こそは……今年こそは友達が欲しい！';
            startText['img3'] ='<?= $pro_pass_img ?>images/none.png';
            startText['name4'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text4'] = '新しいクラスで、初対面の人もいっぱいいるし！';
            startText['img4'] ='<?= $pro_pass_img ?>images/none.png';
            startText['name5'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text5'] = '……でも、どうやって友達を作ればいいんだ？';
            startText['img5'] ='<?= $pro_pass_img ?>images/none.png';
            startText['name6'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text6'] = 'お兄ちゃん、何悩んでるの？';
            startText['img6'] ='<?= $pro_pass_img ?>images/sister.png';
            startText['name7'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text7'] = 'うわっ！　つ、つむぎ！　勝手に部屋に入ってくるんじゃない！';
            startText['img7'] ='<?= $pro_pass_img ?>images/none.png';
            startText['name7'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text7'] = 'さっきからうるさいから、気になって見に来たのよ。';
            startText['img7'] ='<?= $pro_pass_img ?>images/sister_zitome.png';
            startText['name7'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text7'] = '何、お兄ちゃん、友達を作りたいの？';
            startText['img7'] = '<?= $pro_pass_img ?>images/sister_zitome.png';
            startText['name8'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text8'] = 'き、聞こえてたのか……';
            startText['img8'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name9'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text9'] = 'そうなんだよ、僕だって友達が欲しいんだよ……';
            startText['img9'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name10'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text10'] = 'でも、他人とどう話していいかわからなくて……';
            startText['img10'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name11'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text11'] = 'もう、昔からそんなんだから。';
            startText['img11'] = '<?= $pro_pass_img ?>images/sister_komaru.png';
            startText['name12'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text12'] = 'そういうときは、とりあえず適当に話しかければ良いのよ。';
            startText['img12'] = '<?= $pro_pass_img ?>images/sister_komaru.png';
            startText['name13'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text13'] = 'それが無理なんだよ……';
            startText['img13'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name14'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text14'] = 'いいかつむぎ？';
            startText['img14'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name15'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text15'] = '学校って言うのはな、恐ろしいほど、みんなが空気を読んでいる世界だ。';
            startText['img15'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name16'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text16'] = 'なんていうか、クラスの中で、見えない役割みたいなのがあって……';
            startText['img16'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name17'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text17'] = '僕みたいなぼっちは、明るく楽しく話しちゃいけないみたいな、';
            startText['img17'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name18'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text18'] = 'そういう無言のプレッシャーがあるんだよ。';
            startText['img18'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name19'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text19'] = 'それで毎日、一人でお弁当食べてるの？';
            startText['img19'] = '<?= $pro_pass_img ?>images/sister_zitome.png';
            startText['name20'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text20'] = '言うなつむぎ……　とにかくだ、僕にとって学校は「異世界」なんだよ。';
            startText['img20'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name21'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text21'] = '僕みたいに、暗くて、友達のいないやつは、明るいやつらの間に入っていけないんだ。';
            startText['img21'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name22'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text22'] = 'それをやったらなぜか、「空気読めない」って言われちゃうんだよ……';
            startText['img22'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name23'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text23'] = '中学のときもそうだったから、間違いない……！';
            startText['img23'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name24'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text24'] = 'うーん、なんだかなあ。';
            startText['img24'] = '<?= $pro_pass_img ?>images/sister_komaru.png';
            startText['name25'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text25'] = 'ねえ、なんで「話しかけちゃいけない」の？';
            startText['img25'] = '<?= $pro_pass_img ?>images/sister_komaru.png';
            startText['name26'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text26'] = 'お兄ちゃん、そういう呪いでもかけられてるの？';
            startText['img26'] = '<?= $pro_pass_img ?>images/sister_komaru.png';
            startText['name27'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text27'] = 'いや、そうじゃないけど、だからそういう空気が……';
            startText['img27'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name28'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text28'] = 'もー、空気って何よ？　空気が読めたらエラいの？';
            startText['img28'] = '<?= $pro_pass_img ?>images/sister_ikari.png';
            startText['name29'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text29'] = '空気ばっかり読んでるのって、すっごく疲れない？';
            startText['img29'] = '<?= $pro_pass_img ?>images/sister_ikari.png';
            startText['name30'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text30'] = 'そ、そりゃそうだけど……';
            startText['img30'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name31'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text31'] = 'とにかく、友達欲しいなら、その気持ちに素直になればいいのよ。';
            startText['img31'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name32'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text32'] = 'で、でも、どう話せばいいか、わかんなくて……';
            startText['img32'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name33'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text33'] = 'ほら、感じの悪い言い方しちゃったら、相手を傷つけるだろ？';
            startText['img33'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name34'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text34'] = 'まあ、それはもちろんそうよね…。';
            startText['img34'] = '<?= $pro_pass_img ?>images/sister_komaru.png';
            startText['name35'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text35'] = 'でも、逆に言えば、「言い方」さえそこそこ上手くなればいいのよ。';
            startText['img35'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name36'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text36'] = 'へ？';
            startText['img36'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name37'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text37'] = '友達を作るのに、暗いとか人見知りとか、そういう性格を直す必要なんかないわ。';
            startText['img37'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name38'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text38'] = '周りの空気に合わせて、一人ぼっちのキャラに甘んじる必要もない。';
            startText['img38'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name39'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text39'] = '要は「上手い話し方」さえ工夫すれば、誰だって友達は作れるのよ。';
            startText['img39'] = '<?= $pro_pass_img ?>images/sister_isamasii.png';
            startText['name40'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text40'] = '話し方「だけ」でいいの。案外簡単なものよ、人間関係なんて。';
            startText['img40'] = '<?= $pro_pass_img ?>images/sister_tyousyou.png';
            startText['name41'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text41'] = 'で、でも、その話し方をどうやって身につければいいんだよ？';
            startText['img41'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name42'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text42'] = 'ふふん。私に任せなさーい！';
            startText['img42'] = '<?= $pro_pass_img ?>images/sister_isamasii.png';
            startText['name43'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text43'] = 'は、はあ？';
            startText['img43'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name44'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text44'] = 'こう見えても私、「話し方」だけは自信があるの！';
            startText['img44'] = '<?= $pro_pass_img ?>images/sister_warau.png';
            startText['name45'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text45'] = '友達と仲良くするための話し方、いろいろ教えてあげる！';
            startText['img45'] = '<?= $pro_pass_img ?>images/sister_warau.png';
            startText['name46'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text46'] = '教えてあげるって……そんなこと言われても……';
            startText['img46'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name47'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text47'] = 'うじうじしないの！';
            startText['img47'] = '<?= $pro_pass_img ?>images/sister_okoru.png';
            startText['name48'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text48'] = 'いい？　友達が作りたいんでしょ？';
            startText['img48'] = '<?= $pro_pass_img ?>images/sister_okoru.png';
            startText['name49'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text49'] = 'だったらこれから、何でもいいからクラスメイトと話をしてみて。';
            startText['img49'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name50'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text50'] = '上手く話が続くように。';
            startText['img50'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name51'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text51'] = 'そ、そんなの無理に決まってるだろ！';
            startText['img51'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name52'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text52'] = '変なこと言っちゃったらどうするんだよ！';
            startText['img52'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name53'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text53'] = '大丈夫。';
            startText['img53'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name54'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text54'] = 'もし何かマズいことを言ったら、私がビシビシ教えてあげる。';
            startText['img54'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name55'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text55'] = '「何が悪かったのか」「どう直せばいいか」をね！';
            startText['img55'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name56'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text56'] = 'そして、上手く話を続けられたら、「どこがよかったのか」もしっかり教えてあげるわ！';
            startText['img56'] = '<?= $pro_pass_img ?>images/sister_isamasii.png';
            startText['name57'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text57'] = 'そうやって、マンツーマンで「話し方のコツ」を教われば、ちょっとは自信もつくと思わない？';
            startText['img57'] = '<?= $pro_pass_img ?>images/sister_isamasii.png';
            startText['name58'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text58'] = 'それに、どんどん話し方が上手くなれば、いろんな人と友達になれるかも！';
            startText['img58'] = '<?= $pro_pass_img ?>images/sister_warau.png';
            startText['name59'] = '<?= $pro_pass_img ?>images/name_03.png';
            startText['text59'] = 'お、おお、それはありがたい！';
            startText['img59'] = '<?= $pro_pass_img ?>images/none.png';
            startText['name60'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text60'] = 'よーし、じゃあさっそく学校に行きましょ！';
            startText['img60'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name61'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text61'] = 'あ、最後に一つ、大事なこと！';
            startText['img61'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name62'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text62'] = 'お兄ちゃんは今、友達のいないことを気にしているかもしれないけれど、';
            startText['img62'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name63'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text63'] = '別に「友達が多ければエラい！」ってワケじゃないからね。';
            startText['img63'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name64'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text64'] = '友達が少なくても毎日を楽しめてる人、いっぱいいるんだし。';
            startText['img64'] = '<?= $pro_pass_img ?>images/sister_isamasii.png';
            startText['name65'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text65'] = 'だから、友達作りをするにしても、肩の力を入れすぎる必要は全然ないわ。';
            startText['img65'] = '<?= $pro_pass_img ?>images/sister.png';
            startText['name66'] = '<?= $pro_pass_img ?>images/name_02.png';
            startText['text66'] = '無理せず焦らず、楽しい友達作りができるといいわね！';
            startText['img66'] = '<?= $pro_pass_img ?>images/sister_warau.png';

            var textflg = 0;
            var j = 1;
            //オープニング
            $(function(){
                $("#gameBackBlack").fadeOut(0);
                $("#regi").fadeOut(0);
                $("#loginForm").fadeOut(0);
                $("#gameLogo").fadeOut(0);
                $("#hukidashi").fadeOut(0);
                $("#next").fadeOut(0);
                $("#regi").click(function(){
                    window.location.href = '<?= $rootPath ?>accounts/add';
                });
                

                /*-----久保追記分-----*/

                var replayPage = '<?= $replayPage ?>';


                //cookieCheck
                if(getCookie('skipFlag') == 1){
                    $('#checkbox').prop('checked', true);
                    //replayかどうか確認
                    if(replayPage == null || replayPage == ''){
                        fin();
                    }else{
                        $("#gameLogo").fadeIn(1000).fadeOut(500);
                        $("#hukidashi").delay(2500).fadeIn(500);
                        $("#talker").delay(2500).attr('src', startText['name1']);
                        setTimeout("start()",2500);
                        setTimeout("sp()",2500);
                        $("p").delay(2500).removeClass("split");
                        $("<img>",{
                            "id":"img",
                            "src":"<?= $pro_pass_img ?>images/none.png"
                        }).appendTo("#gameImg");
                        $("#skip").click(function(){
                            fin();
                        });
                    }
                }else{
                    $("#gameLogo").fadeIn(1000).fadeOut(500);
                    $("#hukidashi").delay(2500).fadeIn(500);
                    $("#talker").delay(2500).attr('src', startText['name1']);
                    setTimeout("start()",2500);
                    setTimeout("sp()",2500);
                    $("p").delay(2500).removeClass("split");
                    $("<img>",{
                        "id":"img",
                        "src":"<?= $pro_pass_img ?>images/none.png"
                    }).appendTo("#gameImg");
                    $("#skip").click(function(){
                        fin();
                    });
                }

                var errorFlag = <?=$params?>;
                if(errorFlag == 1){
                  fin();
                }




                //次回以降スキップ用のcheckboxイベント
                $('#checkbox').change(function(event) {
                    //console.log();
                    if($(this).prop('checked') == true){
                        // クッキーをセット
                        window.onload = setCookie('skipFlag','1',7);
                    }else{
                        console.log('out');
                        // クッキーを削除
                        window.onload = setCookie('skipFlag','0',0);
                    }
                });
                /*-----------------------------------*/
                
            });

            //文章、画像、話し手名入れ替え
            function huki(j){
                if(j==67){
                    $("#hukidashi").click(function(){
                        fin();
                    });
                }else{
                    $("#hukidashi").off();

                    //すでに追加されたテキストのスプリットを削除
                    $(".split").first().removeClass("split");
                    //つむぎと僕の切り替え
                    if(startText['name'+j]==startText['name'+(j-1)]){
                        //テキストを一行上に流す
                        $("#gameArticle").animate({"top":"-"+50*(j-2)+"px"});
                        change(j);
                    }else{
                        //テキストを二行分上に流す
                        $("#gameArticle").animate({"top":"-"+50*(j-1)+"px"});
                        $("#gameBackBlack").fadeIn(500).fadeOut(500);
                        setTimeout("change("+j+")",500);
                    }
                }
                
            }
            function fin(){
                $("#gameBackBlack").fadeIn(500);
                $("#hukidashi").fadeOut(0);
                $("#gameImg").fadeOut(0);
                $("#loginForm").delay(500).fadeIn(500);
                $("#next").delay(500).fadeIn(500);
                $("#regi").delay(500).fadeIn(500);
                $("#skip").fadeOut(100);
            }
            function change(j){
                $("#talker img").attr("src",startText['name'+j]);
                $("<p>",{
                    "id":"p"+j,
                    "class":"split",
                    "text":startText['text'+j]
                }).appendTo("#gameArticle");
                sp();
                $("#img").attr("src",startText['img'+j]);
            }
            //最初の二行
            function start(){
                $("<p>",{
                    "id":"p1",
                    "class":"split",
                    "text":startText['text1']
                }).appendTo("#gameArticle");
            }
            //文章をキーボード入力のように表示する。
            function sp(){
                    var setElm = $('.split'),
                    delaySpeed = 50,
                    fadeSpeed = 0;
                    setText = setElm.html();
                    setElm.css({visibility:'visible'}).children().addBack().contents().each(function(){
                        var elmThis = $(this);
                        if (this.nodeType == 3) {
                            var $this = $(this);
                            $this.replaceWith($this.text().replace(/(\S)/g, '<span class="textSplitLoad">$&</span>'));
                        }
                    });
                    $(document).ready(function(){
                        splitLength = $('.textSplitLoad').length;
                        setElm.find('.textSplitLoad').each(function(i){
                            splitThis = $(this);
                            splitTxt = splitThis.text();
                            splitThis.delay(i*(delaySpeed)).css({display:'inline-block',opacity:'0'}).animate({opacity:'1'},fadeSpeed);
                        });
                        setTimeout(function(){
                              setElm.html(setText);
                              $("#hukidashi").on("click",function(){
                                    j = j+1;
                                    huki(j);
                              });

                        },splitLength*delaySpeed+fadeSpeed);
                    });
                }
            //スキップ処理
            //ボタンエフェクト

            //久保追記分
            //cookieの処理
            //setCookie(クッキー名, クッキーの値, クッキーの有効日数); //
            function setCookie(c_name,value,expiredays){
                // pathの指定
                var path = location.pathname;
                // pathをフォルダ毎に指定する場合のIE対策
                var paths = new Array();
                paths = path.split("/");
                if(paths[paths.length-1] != ""){
                    paths[paths.length-1] = "";
                    path = paths.join("/");
                }
                // 有効期限の日付
                var extime = new Date().getTime();
                var cltime = new Date(extime + (60*60*24*1000*expiredays));
                var exdate = cltime.toUTCString();
                // クッキーに保存する文字列を生成
                var s="";
                s += c_name +"="+ escape(value);// 値はエンコードしておく
                s += "; path="+ path;
                if(expiredays){
                    s += "; expires=" +exdate+"; ";
                }else{
                    s += "; ";
                }
                // クッキーに保存
                document.cookie=s;
            }

            // クッキーの値を取得 getCookie(クッキー名); //
            function getCookie(c_name){
                var st="";
                var ed="";
                if(document.cookie.length>0){
                    // クッキーの値を取り出す
                    st=document.cookie.indexOf(c_name + "=");
                    if(st!=-1){
                        st=st+c_name.length+1;
                        ed=document.cookie.indexOf(";",st);
                        if(ed==-1) ed=document.cookie.length;
                        // 値をデコードして返す
                        return unescape(document.cookie.substring(st,ed));
                    }
                }
                return "";
            }

            
<?php $this->Html->scriptEnd(); ?>
    <div id="game">
    <div id="replayOpning">
        <div id="gameBackBlack"></div>
        <?= $this->Html->image('logo.png', array('id' => 'gameLogo')) ?>
        <div id="gameImg"></div>
        <div id="hukidashi">
            <div id="san">
                <?= $this->Html->image('sitasankaku.png') ?>
            </div>
            <div id="talker">
                <?= $this->Html->image('name_03.png') ?>
            <!--/#talker--></div>
            <div id="gameArticle">
                
            <!--/#gameArticle--></div>
        <!--/#hukidashi--></div>
        <!--オープニングスキップするかしないか-->
        <?= $this->Html->image('btn_skip_off.png', array('id' => 'skip')) ?>
        <!--次回から表示するか-->
        <div id="next">
        <?= $this->Html->link($this->Html->image('btn_return.png').$this->Html->image('title_reopening.png'), array('controller' => 'accounts', 'action' => 'index', 2),array('escape'=>false,'id'=>'replayButton')) ?>
<?php
    echo $this->Form->create('User', array('url' => '/accounts/login',
                                        'inputDefaults' => array(
                                                'label' => false,
                                                'div' => false))
    );

    //スキップ確認チェックボックス生成
    echo $this->Form->input('skip',
        array('type' => 'checkbox',
                'id' => 'checkbox',
                'label' => $this->Html->image('title_nextskip.png')));
                //ラベルに画像を指定


?>
        </div>
    </div>
    <!--ログインフォーム-->
    <div id="regi"></div>
    <div id="loginForm">
        <?= $this->Html->image('title_login.png').'<br>' ?>
<?php
    if (isset($error)) echo '<p class="err-message">'.$error.'</p>';
    echo $this->Html->image('login_add.png');
    echo $this->Form->input('id', array('type'=>'email'))."<br>";
    echo $this->Html->image('login_pass.png');
    echo $this->Form->input('password', array('type'=>'password'));
    echo $this->Form->end('', array('type'=>'button'));
?>
    </div>
<div>
        <!--新規会員登録-->       
        <a href="#"><img src=""></a>
    </div>
<!--/#game--></div>
