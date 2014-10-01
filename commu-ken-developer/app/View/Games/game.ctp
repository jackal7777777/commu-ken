<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');

echo $this->Html->css('minHeader');
$this->Blocks->set('css-acc', '<style type="text/css">#nav3{background-image:url(<?= $pro_pass_img ?>"nav_act_03_in_off.png");}</style>');

?>
<?php
if (Configure::read('debug') > 0):
    Debugger::checkSecurityKeys();
endif;
?>
<!--ゲーム画面-->
            <div id="game">
            <!--<a id="tweetButton" class="snsButton" href='https://twitter.com/intent/tweet?hashtags=こみゅけん&text=こみゅけんやってみたよ！bit.ly/1Dom9fc' target="blank"></a>
            <a id="fbButton" class="snsButton" href="http://www.facebook.com/share.php?u=http://commu-ken.tokyo" onclick="window.open(this.href, 'FBwindow', menubar=no, toolbar=no, scrollbars=yes'); return false;" target="blank"></a>
            <a id="googleButton" class="snsButton" href="https://plus.google.com/share?url=http://commu-ken.tokyo/" onclick="window.open(this.href, 'Gwindow',  menubar=no, toolbar=no, scrollbars=yes'); return false;" target="blank"></a>-->
                <div id="gameBack">
                    <!--ゲーム要素-->
                    <!--キャラクター表示位置-->
                    <div id="gameImg"></div>
                    <!--吹き出し-->
                    <div id="hukidashi">
                        <!--しゃべり手-->
                        <div id="talker">
                        <!--/#talker--></div>
                        <!--文章-->
                        <div id="gameArticle">
                        <!--/#gameArticle--></div>
                    <!--/#hukidashi--></div>
                    <!--背景暗くする用-->
                    <div id="gameBackBlack"></div>
                    <!--画像：タイマー-->
                    <div id="timer">
                        <?= $this->Html->image('timer_10.png') ?>
                        <?= $this->Html->image('timer_5.png') ?>
                    </div>
                    <!--画像：イベント発生-->
                    <div id="event"></div>
                    <!--画像：イベント名-->
                    <div id="eventTitle"></div>
                    <!--選択肢用の枠-->
                    <div id="selectBox"></div>
                    <!--画像：まとめ-->
                    <div id="summaryTitle"></div>
                    <!--画像:時間切れ-->
                    <div id="timeup"></div>
                </div>
                <!--ゲーム要素終了-->

                <!--ソーシャル＆アンケート-->
                <div id="social">
                    <?= $this->Html->image('title_enquete.png', array('id' => 'socialTitle')) ?><br>
                    <?= $this->Html->image('title_sns.png', array('id' => 'socialSTitle')) ?><br>
                    <div id="socialBtn">
                        <!--<img src="images/btn_tw_off.png" class="socialBtn">
                        <img src="images/btn_fb_off.png" class="socialBtn">
                        <img src="images/btn_gl_off.png" class="socialBtn">-->
                        <a href='https://twitter.com/intent/tweet?hashtags=こみゅけん&text=こみゅけんやってみたよ！bit.ly/1Dom9fc' target="blank" class='socialBtn'><?= $this->Html->image('btn_tw_off.png') ?></a>
                        <a href="http://www.facebook.com/share.php?u=http://commu-ken.tokyo" onclick="window.open(this.href, 'FBwindow', menubar=no, toolbar=no, scrollbars=yes'); return false;" target="blank" class='socialBtn'><?= $this->Html->image('btn_fb_off.png') ?></a>
                        <a href="https://plus.google.com/share?url=http://commu-ken.tokyo/" onclick="window.open(this.href, 'Gwindow',  menubar=no, toolbar=no, scrollbars=yes'); return false;" target="blank" class='socialBtn'><?= $this->Html->image('btn_gl_off.png') ?></a>
                    </div>
                    <!--<form>
                        <textarea></textarea><br>
                        <input type="submit" id="btn_yes">
                        <input type="submit" id="btn_no">
                    </form>-->
<?php
                    echo $this->Form->create('Survey', array(
                        'inputDefaults' => array(
                                'label' => false,
                                'div' => false))
                    );
                    echo $this->Form->input('Survey.survey_text', array('type' => 'textarea')).'<br>';
                    echo $this->Form->hidden('Survey.user_id', array('value' => $user_id));
                    echo $this->Form->hidden('Survey.step_id', array('value' => $step_id));
                    echo $this->Form->submit('btn_useful_off.png', array('type' => 'submit','name' => 'data[Survey][survey_flag]','value' => '0', 'id' => 'btn_yes','div' => false));
                    echo $this->Form->submit('btn_useless_off.png', array('type' => 'submit', 'name' => 'data[Survey][survey_flag]','value' => '1', 'id' => 'btn_no','div' => false));
                    echo $this->Form->end();

?>
                    <?= $this->Html->link($this->Html->image('btn_rescenario.png',array('id' => 'choice')),array('action' => 'choice'),array('escape'=>false)); ?>
                </div>
                <!--ソーシャル＆アンケート終了-->
            <!--/#game--></div>
<?php
    /*こっからアンケ入力フォーム*/

    /*echo "参考になりましたか？";

    echo $this->Form->create('Survey', array(
                'inputDefaults' => array(
                        'label' => false,
                        'div' => false))
            );
    echo $this->Form->input('Survey.survey_text', array('type' => 'textarea'));
    echo $this->Form->hidden('Survey.user_id', array('value' => $user_id));
    echo $this->Form->hidden('Survey.step_id', array('value' => $step_id));
    echo $this->Form->submit('btn_useful_off.png', array('type' => 'submit','name' => 'data[Survey][survey_flag]','value' => '0'));
    echo $this->Form->submit('btn_useless_off.png', array('type' => 'submit', 'name' => 'data[Survey][survey_flag]','value' => '1'));
    echo $this->Form->end();*/
?>
<script>
//シーン

            //PHPからjson形式で渡されたセリフデータをarray形式に変換
            var serifArrayJs = $.parseJSON('<?= $serifArrayJs ?>');

            console.log('json解凍後'+serifArrayJs);
            console.log('特定:'+serifArrayJs[0]["Serif"][1]);




            var selectStage = new Array(); 
                selectStage['background'] = 'background_classroom.jpg';
                selectStage['character'] = '<?= $step_image ?>';
                selectStage['name'] = serifArrayJs[1]["Character"][1];
                selectStage['startText'] = '<?= $step_exp ?>';
                selectStage['eventTitle'] = '<?= $step_name ?>';
                selectStage['say1'] = '<?= $answerArray[1]["Answer"]["answer_text"] ?>';
                selectStage['say2'] = '<?= $answerArray[2]["Answer"]["answer_text"] ?>';
                selectStage['say3'] = '<?= $answerArray[3]["Answer"]["answer_text"] ?>';
                selectStage['say4'] = '<?= $answerArray[4]["Answer"]["answer_text"] ?>';
                selectStage['return0'] = serifArrayJs[0]["Serif"][1];
                selectStage['return1'] = serifArrayJs[1]["Serif"][1];
                selectStage['return2'] = serifArrayJs[2]["Serif"][1];
                selectStage['return3'] = serifArrayJs[3]["Serif"][1];
                selectStage['return4'] = serifArrayJs[4]["Serif"][1];
                selectStage['returnImg0'] = serifArrayJs[0]["Image"][1];
                selectStage['returnImg1'] = serifArrayJs[1]["Image"][1];
                selectStage['returnImg2'] = serifArrayJs[2]["Image"][1];
                selectStage['returnImg3'] = serifArrayJs[3]["Image"][1];
                selectStage['returnImg4'] = serifArrayJs[4]["Image"][1];
                selectStage['summary'] = '';
                selectStage['summaryImg'] = 'sister.png';

            var katuyatyan = 1;//下にもう一個あるから、そっちを動的に変更してね
            var index = 0;
            var act = "";
            var l = 1;
            var lScroll = 1;//改行処理用の変数
            var ll = 2;
            //文字数に応じて配列変更
            var moji = 36;
            var con1 = 0;
            var con2 = 1;
            var con3 = 1;
            var len = 0;
            var m = 0;
            var spFin = 0;//文字表示エフェクト(sp関数)の終了判定用変数
            var supArrNum = new Array();
            var sumArrNum = 0;
            var colect = 0;//正解判断用変数
            var nextStep = '<?= $nextStep ?>';
            /*
                配列を生成
                例）support1-1-1
                support選択肢-セリフ番号-改行があった場合の行目
                support[answer_no]-[serif_no]-改行があった場合の行目
                ※サポート1の1要素目の1行目（38文字以上の場合、2行目が生まれる）
            */

            

            // 配列や連想配列、オブジェクトなどの中身を視覚的に表示する関数
            function vardump(arr,lv,key) {
                var dumptxt = "",
                    lv_idt = "",
                    type = Object.prototype.toString.call(arr).slice(8, -1);
                if(!lv) lv = 0;
                for(var i=0;i<lv;i++) lv_idt += "    ";
                if(key) dumptxt += lv_idt + "[" + key + "] => ";
                
                if(arr == null || arr == undefined){
                    dumptxt += arr + '\n';
                } else if(type == "Array" || type == "Object"){
                    dumptxt += type + "...{\n";
                    for(var item in arr) dumptxt += vardump(arr[item],lv+1,item);
                    dumptxt += lv_idt + "}\n";
                } else if(type == "String"){
                    dumptxt += '"' + arr + '" ('+ type +')\n';
                }  else if(type == "Number"){
                    dumptxt += arr + " (" + type + ")\n";
                } else {
                    dumptxt += arr + " (" + type + ")\n";
                }
                return dumptxt;
            }

            //console.log(vardump(serifArrayJs));

            for(con1=0;con1<=5;con1++){
                console.log('1つめ');
                console.log('con1です'+con1);

                if(con1 < 5){//supportの範囲
                    //連想配列の要素数を取得
                    supArrNum[con1] = arrayLength(serifArrayJs[con1]['Serif']);

                    //katuyatyan = supArrNum;//こっちを動的に変更してね
                    for(con3=2;con3<=supArrNum[con1];con3++){
                        console.log('2つめ');
                        len = arrayLength(serifArrayJs[con1]['Serif'][con3]);
                        console.log('len'+len);
                        for(con2 = 1;con2 <= ((len / moji)+1);con2++){
                            console.log('3つめ');
                            selectStage['support'+con1+"-"+con3+"-"+con2] = serifArrayJs[con1]['Serif'][con3].substr((moji*con2)-moji,moji);
                            console.log('kore'+selectStage['support'+con1+"-"+con3+"-"+con2]);
                            selectStage['supportImg'+con1+"-"+con3+"-"+con2] = serifArrayJs[con1]['Image'][con3];
                            selectStage['supportName'+con1+"-"+con3+"-"+con2] = serifArrayJs[con1]['Character'][con3];
                            console.log(con1+"-"+con3+"-"+con2);
                            console.log('answer_no:'+con1+'serif_no:'+con3+'行数:'+con2+'ここ画像'+serifArrayJs[con1]['Image'][con3]);
                            console.log('support:'+selectStage['support'+con1+"-"+con3+"-"+con2]);
                            console.log('supportImg:'+selectStage['supportImg'+con1+"-"+con3+"-"+con2]);

                        }
                        //selectStage[answer_no-serif_no]の中の行数をselectStage[supLen(answer_no-serif_no)]に登録
                        selectStage['supLen'+con1+'-'+con3] = con2-1;
                        console.log('supLen['+con1+'-'+con3+']:'+selectStage['supLen'+con1+'-'+con3]);
                        console.log('con1です'+con1);
                    }
                }else{//summaryの範囲
                    sumArrNum = arrayLength(serifArrayJs[con1]['Serif']);
                    //console.log('con1:'+con1);
                    //selectStage['sumLen'] = 0;
                    for(con3=1;con3<=sumArrNum;con3++){
                        console.log('2つめ');
                        selectStage['sumLen-'+con3] = 0;
                        len = arrayLength(serifArrayJs[con1]['Serif'][con3]);
                        for(con2 = 1;con2 <= ((len / moji)+1);con2++){
                            console.log('3つめ');
                            console.log('[con3]:'+[con3]);
                            //console.log('serifArrayJs[con1]["Serif"][con3]:'+serifArrayJs[con1]['Serif'][con3]);
                            selectStage['summary1-'+con3+"-"+con2] = serifArrayJs[con1]['Serif'][con3].substr((moji*con2)-moji,moji);
                            selectStage['summaryImg1-'+con3+"-"+con2] = serifArrayJs[con1]['Image'][con3];
                            //console.log(con1+"-"+con3+"-"+con2);
                            //console.log('answer_no:'+con1+'serif_no:'+con3+'行数:'+con2+'ここ画像'+serifArrayJs[con1]['Image'][con3]);
                            //console.log('support:'+selectStage['support'+con1+"-"+con3+"-"+con2]);
                            //console.log('supportImg:'+selectStage['supportImg'+con1+"-"+con3+"-"+con2]);
                            selectStage['sumLen-'+con3]++;
                            //console.log('sumLen-'+con3+'だよ'+selectStage['sumLen-'+con3]);
                            //console.log('con3なり'+con3);
                        } 
                        //console.log('supLen['+con1+'-'+con3+']:'+selectStage['supLen'+con1+'-'+con3]);
                    }
                }
            }
            /*
                配列を生成
                例）summary1
                ※サマリー1要素目の1行目（38文字以上の場合、2行目が生まれる）
            */
            //連想配列の要素数を取得
            /*sumArrNum = arrayLength(serifArrayJs[5]['Serif']);
            for(con3=1;con3<=sumArrNum;con3++){
                len = selectStage['summary'].length;
                for(con2 = 1;con2 <= ((len/moji)+1);con2++){
                    selectStage['summary1-'+con3] = serifArrayJs[5]['Serif'][con2].substr((moji*con2)-moji,moji);
                    selectStage['summaryImg1-'+con3] = serifArrayJs[5]['Image'][con2];
                    console.log(selectStage['summary'+con1+"-"+con2]);
                    console.log(selectStage['summaryImg'+con1+"-"+con2]);
                }
                selectStage['sumLen'] = (len/moji)+1;
                console.log(selectStage['sumLen']);
            }*/
        
            //var save = new Array();
            $(function(){
                //ゲーム要素を隠す
                $("#hukidashi").fadeOut(0);
                $("#timer").fadeOut(0);
                $("#selectBox").fadeOut(0);
                $("#event").fadeOut(0);
                $("#summaryTitle").fadeOut(0);
                $("#timeup").fadeOut(0);
                //ソーシャル要素を隠す
                $("#social").fadeOut(0);
                var url = location.href;
                var sce = url.search(/sce/);
                sce = "sce1sta1";
                //alert(sce);
                //ゲーム画面の背景画像描画
                $("#gameBack").css({"background":"url(<?= $pro_pass_img ?>images/"+selectStage['background']+")"});
                //対象キャラクター表示
                $("<img>",{
                    "id":"img",
                    "src":"<?= $pro_pass_img ?>images/"+selectStage['character']
                }).appendTo("#gameImg");
                //導入文章表示
                setTimeout(function(){
                    $("<p>",{
                        "id":"text",
                        "class":"split",
                        "text":selectStage['startText'],
                        "css":{
                                "line-height":"30px",
                                "margin":"0 auto",
                                "color":"#fff",
                                "width":"600px",
                                "height":"100px",
                                "padding-top":"250px",
                                "font-size":"1.6rem"
                        }
                    }).appendTo("#gameBackBlack");
                    sp();
                },500);
                $("#gameBackBlack").click(function(){
                    $("#text").remove();
                    $("#gameBackBlack").off();
                    $("#timer").fadeIn(500);
                    $("#selectBox").delay(500).slideDown(500);
                    $("#event").fadeIn(500);
                    countDown();
                    //イベント名追記
                    $("#eventTitle").text(selectStage['eventTitle']);
                    //選択肢表示
                    for(var i=1;i<5;i++){
                        $("<div>",{
                            "id":"select"+i,
                            "class":"ans",
                            "text":selectStage["say"+i],
                            "css":{
                                "height":"50px",
                                "width":"600px",
                                "position":"absolute",
                                "top":(70*(i-1))+"px",
                                "left":"0",
                                "background":"url(<?= $pro_pass_img ?>images/bg_choice_off.png)",
                                "text-align":"center",
                                "line-height":"50px",
                                "font-size":"1.6rem"
                            }
                        }).appendTo("#selectBox");
                    }
                    //選択肢マウスオーバー/アウト
                    $("#selectBox").children().mouseover(function(){
                        //alert("a");
                        $(this).css({"background":"url(<?= $pro_pass_img ?>images/bg_choice_on.png)"});
                        $(this).mouseout(function(){
                            $(this).css({"background":"url(<?= $pro_pass_img ?>images/bg_choice_off.png)"});
                        });
                        
                    });
                    //相手の反応
                    $("#selectBox").children().click(function(){
                        //タイマーを止める
                        stopTimer();
                        index = $(this).index();
                        /*---------選択情報保存&正解判断処理------*/
                        save(index+1);
                        /*------------------------*/
                        $("#selectBox").fadeOut(200);
                        $("#gameBackBlack").fadeOut(200);
                        $("#eventTitle").fadeOut(200);
                        $("#timer").fadeOut(200);
                        $("#hukidashi").fadeIn(500);
                        act = "return";
                        text(index,act);
                    });

                    //分岐：タイムオーバー
                    $("#timeup").click(function(){
                        stopTimer();
                        save(0);
                        index = -1;
                        $("#selectBox").fadeOut(200);
                        $("#gameBackBlack").fadeOut(200);
                        $("#eventTitle").fadeOut(200);
                        $("#timer").fadeOut(200);
                        $("#timeup").fadeOut(200);
                        $("#hukidashi").fadeIn(500);
                        act = "return";
                        text(index,act);
                    });

                    //いもうとの返し
                    $("#hukidashi").click(function(){
                        $("#hukidashi").off();
                        $("#gameArticle p").remove();
                        $("#event").fadeOut(0);
                        $("#gameBackBlack").fadeIn(500).fadeOut(500);
                        $("#summaryTitle").fadeIn(500);
                        act = "support";
                        text(index,act);
                        $("#hukidashi").click(function(){
                            if(spFin == 0){
                                spFin = 1;//clickされた時点でclickをロック
                                text(index,act);
                            }
                        });
                    });

                    //form送信用
                    $('input[type="image"]').click(function(event){
                        // HTMLでの送信をキャンセル
                        event.preventDefault();

                        console.log('asd');

                        var $form = $(this).parents('form');
                        var $button_name = $(this).attr('name');
                        var $button_value = $(this).attr('value');

                        console.log($(this));
                        console.log($form.serialize());
                        console.log($button_value);


                        /*if($(this).attr('name') == 'data[Survey][survey_flag_yes]'){

                        }else if(){

                        }
                        
                        //ajax用にデータ格納
                        var ajson = {
                            step_id : <?= $step_id ?>,
                            survey_text : <?= $collectAns ?>,
                            scenario_id : <?= $scenario_id ?>,
                            user_id : '<?= $user_id ?>'
                        };*/
                        console.log($form.serialize() + '&' + $button_name +'='+ $button_value);
                        $.ajax({
                            url: '<?= $this->Html->url(array("controller" =>"games","action" => "survey")) ?>',
                            type: 'post',
                            cache: false,
                            data: $form.serialize() + '&' + $button_name +'='+ $button_value
                        })
                        .done(function(html) {
                            console.log("結果");
                            console.log(html);
                            console.log("success");
                            $('form').children().fadeOut(500);
                            setTimeout(function(){
                                $('form').html('<p>送信が完了しました。</p>');
                            },500);
                        })
                        .fail(function(data) {//ここでエラー分が取得できる
                            console.log("エラーの内容");
                            console.log(data);
                            console.log("error");
                        })
                        .always(function() {
                            console.log("complete");
                        });
                    });
                });
            });
                //文章を上に流す
                function huki(l){
                    //テキストを一行上に流す
                    $("#gameArticle").animate({"top":"-"+41*(l-2)+"px"});
                }
                //文章、画像、話し手名入れ替え
                /*function change(j){
                    $("#talker").text(startText['name'+j]);
                    $("<p>",{
                        "id":"p"+j,
                        "class":"split",
                        "text":startText['text'+j]
                    }).appendTo("#gameArticle");
                    sp();
                    //キャラクター表示切替
                    $("#img").attr("src","images/"+selectStage[act+"Img"+(index+1)]);
                }*/
                //返し
                function text(index,act){
                    //alert(act);
                    //相手の反応
                    if(act == 'return'){
                        //キャラクター表示切替
                        $("#img").attr("src","<?= $pro_pass_img ?>images/"+selectStage[act+"Img"+(index+1)]);
                        //話し手切り替え
                        $("#talker").text(selectStage['name']);
                        //文章挿入
                        $("<p>",{
                            "class":"split",
                            "text":selectStage[act+(index+1)]
                        }).appendTo("#gameArticle");
                        sp();
                        //すでに追加されたテキストのスプリットを削除
                        $(".split").first().removeClass("split");
                    //妹の返し
                    }else if(act == 'support'){
                        //console.log('supportきたよー');
                        //正解していて、かつ次のステップがあれば妹の返しは表示せずに次ステップへ移動する
                        console.log('colect:'+colect);
                        console.log('nextStep:'+nextStep);
                        var nextStepNo = <?= $step_no ?>;
                        nextStepNo++;
                        console.log('nextStepNo!'+nextStepNo);
                        if(colect == 1 && nextStep == 'yes'){
                            window.location.href = '<?= $rootPath ?>games/game/'+<?= $scenario_id ?>+'/'+<?= $stage_id ?>+'/'+nextStepNo;
                        }
                        
                        var supLen = selectStage['supLen'+(index+1)+'-'+ll];
                        //console.log('supLen'+(index+1)+'-'+ll+':'+selectStage['supLen'+(index+1)+'-'+ll]);
                        if(ll <= supArrNum[index+1]){
                            console.log('ll<=supArrNumだよ:ll='+ll+',supArrNum='+supArrNum[index+1]+',l='+l+',supLen='+supLen);
                            if(l <= supLen){
                                console.log('l <= supLenだよ:l='+l+',supLen='+supLen);
                                //キャラクター表示切替
                                $("#img").attr("src","<?= $pro_pass_img ?>images/"+selectStage[act+"Img"+(index+1)+"-"+ll+"-"+l]);
                                console.log('妹画像:'+act+"Img"+(index+1)+"-"+ll+"-"+l);
                                //話し手切り替え
                                $("#talker").text(selectStage['supportName'+(index+1)+"-"+ll+"-"+l]);
                                //if(lScroll > 2){
                                    huki(lScroll);
                                    //lScroll = 1;
                                //}
                                lScroll++;
                                console.log('lScroll'+lScroll);
                                //文章挿入
                                $("<p>",{
                                    "class":"split",
                                    "text":selectStage[act+(index+1)+"-"+ll+"-"+l]
                                }).appendTo("#gameArticle");
                                sp();
                                //すでに追加されたテキストのスプリットを削除
                                $(".split").first().removeClass("split");
                                l = l+1;
                            }
                            if(l > supLen){
                                ll = ll+1;
                                l = 1;
                            }
                        }
                        if(ll > supArrNum[index+1]){
                            l = 1;
                            ll = 1;
                            act = 'summary';
                            //alert("A");
                            $("#hukidashi").off();
                            $("#hukidashi").click(function(){
                                text(index,act);
                            });
                            //text(index,act);

                        }
                    }else if(act == 'summary'){
                        //alert("F");
                        console.log('bell'+ll);
                        console.log('bel'+l);
                        var sumLen = selectStage['sumLen-'+ll];
                        console.log('sumLen'+sumLen);
                        //alert(sumLen);
                        console.log('sumArrNum:'+sumArrNum);
                            if(ll <= sumArrNum){
                                if(l <= sumLen){
                                    //alert("F");
                                    //キャラクター表示切替
                                    $("#img").attr("src","<?= $pro_pass_img ?>images/"+selectStage[act+"Img1-"+ll+"-"+l]);
                                    console.log('妹画像:'+act+"Img1-"+ll+"-"+l);
                                    //話し手切り替え
                                    $("#talker").text('つむぎ');
                                    //huki(lScroll+m);
                                    console.log('lScroll:'+lScroll);
                                    //if(lScroll > 2){
                                        //console.log('通ってはいるぜよ'+lScroll);
                                        huki(lScroll);
                                        //lScroll = 1;
                                    //}
                                    lScroll++;
                                    //文章挿入
                                    $("<p>",{
                                        "class":"split",
                                        "text":selectStage[act+"1-"+ll+"-"+l]
                                    }).appendTo("#gameArticle");
                                    sp();
                                    //すでに追加されたテキストのスプリットを削除
                                    $(".split").first().removeClass("split");
                                    l = l+1;
                                }else{
                                    ll++;
                                    l = 1;
                                    text(index,act);
                                }
                            }else{
                                $("#hukidashi").off();
                                $("#social").fadeIn(500);
                            }
                        console.log('afll'+ll);
                        console.log('afl'+l);
                    }
                    //文章下の三角
                    $("<div>",{
                        "id":"san",
                        "css":{
                            "height":"0px",
                            "width":"0px",
                            "border":"solid 20px transparent",
                            "border-top":"solid 20px #aaa",
                            "position":"absolute",
                            "top":"75px",
                            "right":"20px",
                            "z-index":"3"
                        }
                    }).appendTo("#hukidashi");
                }
        
            //文章をテキスト入力のように表示する
            function sp(){
                //  $("#hukidashi").off();
                
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
                            spFin = 0;//ロック解除
                            console.log('解除');
                    },splitLength*delaySpeed+fadeSpeed);
                    /*if(act != 'return'){
                        setTimeout(function(){
                            $("#hukidashi").on("click",function(){
                                l = l+1;
                                huki(index,act,l);

                            });
                        },splitLength*delaySpeed);
                    }*/
                });
            }
            var timerImg = new Array('timer_0.png','timer_1.png','timer_2.png','timer_3.png','timer_4.png','timer_5.png','timer_6.png','timer_7.png','timer_8.png','timer_9.png');
                timerImg['two0'] = 'timer_00.png';
                timerImg['two1'] = 'timer_10.png'; 
            //タイマー
            function countDown(){
                var sec = 15;
                Timer = setInterval(function(){
                    if(sec>0){
                        sec -= 1;
                        var one = sec%10;
                        var two = Math.floor(sec/10);
                        $("#timer img").eq(1).attr("src","<?= $pro_pass_img ?>images/"+timerImg[one]);
                        $("#timer img").eq(0).attr("src","<?= $pro_pass_img ?>images/"+timerImg['two'+two]);
                    }else{

                        for(var j=1;j<5;j++){
                            $("#select"+j).off();
                        }
                        $("#gameBackBlack").css({"z-index":"9"}).fadeIn(200);
                        $("#timeup").fadeIn(200).click(function(){
                            $("#gameBackBlack").fadeOut(200).delay(200).css({"z-index":"6"});
                            $("#timeup").fadeOut(200);
                        });
                    }
                },1000);
            }
            function stopTimer(){
                clearInterval(Timer);
            }
            function arrayLength(arr){

                var len = 0;

                for (var i in arr) {
                  len++;
                }
                return len;
            }
            function save(index){
                //Ajaxで選択情報を保存
                var answerIds = new Array(
                <?= $answerArray[0]['Answer']['id'] ?>,
                <?= $answerArray[1]['Answer']['id'] ?>,
                <?= $answerArray[2]['Answer']['id'] ?>,
                <?= $answerArray[3]['Answer']['id'] ?>,
                <?= $answerArray[4]['Answer']['id'] ?>); 

                //ajax用にデータ格納
                var ajson = {
                    ans_id : answerIds[index],
                    step_id : <?= $step_id ?>,
                    collectAns_id : <?= $collectAns ?>,
                    scenario_id : <?= $scenario_id ?>,
                    user_id : '<?= $user_id ?>'
                };

                $.ajax({
                    url: '<?= $this->Html->url(array("controller" =>"games","action" => "play_history")) ?>',
                    type: 'post',
                    cache: false,
                    data: ajson
                })
                .done(function(html) {
                    console.log("結果");
                    console.log(html);
                    console.log("success");
                })
                .fail(function(data) {//ここでエラー分が取得できる
                    console.log("エラーの内容");
                    console.log(data);
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });

                //もし選択肢が正解だったら
                if(answerIds[index] == <?= $collectAns ?>){
                    colect = 1;
                }
            }
        </script>
