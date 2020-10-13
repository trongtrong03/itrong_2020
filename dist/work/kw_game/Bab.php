<!DOCTYPE html>
<html class="bab">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>飛禽走獸</title>
    <link href="image/favico.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<!--
    動物class一共有四個功能區域會用到：
    小瑪莉項目： .run-item > div
    中間記錄： .r-item
    下方賠率： .bet-item
    中獎結果： .winning-content
    class名稱都一樣：
        鴿子： .is-pigeon
        老鷹： .is-eagle
        金鯊： .is-goldshark
        獅子： .is-lion
        猴子： .is-monkey
        熊貓： .is-panda
        兔子： .is-rabbit
        銀鯊： .is-slivershark
        藍鳥： .is-bird
        孔雀： .is-peacock
        通賠： .is-loss
        通贏： .is-takeall
-->
<body onload="initial();">
    <article id="wrap">
        <div class="game-wrap is-locked">
            <div class="game-nav removeTextNodes">
                <button class="btn-home" onclick="javascript:location.href='index.php'"></button>
                <button class="btn-list"></button>
                <div class="list-wrap">
                    <button class="list-link">下注纪录</button>
                    <button id="btnLimit" class="list-link">下注限额</button>
                    <button id="btnRecord" class="list-link">牌局纪录</button>
                    <button id="btnRule" class="list-link">游戏说明</button>
                    <button id="btnSet" class="list-link">系统设定</button>
                </div>
            </div>
            <button class="btn-fullscreen"></button>
            <div class="game-number">牌局编号：abcd12345</div>
            <div class="game-amount">192,841.00</div>
            <div id="countdown" class="game-time">30</div>
            <!-- 開始/結束 -->
            <div class="game-bet is-start"></div>
            <!-- 牌桌 -->
            <div class="game-table">
                <!-- 小瑪莉 -->
                <div class="run-item run-n1">
                    <div class="is-slivershark"></div>
                </div>
                <div class="run-item run-n2">
                    <div class="is-bird"></div>
                </div>
                <div class="run-item run-n3">
                    <div class="is-bird"></div>
                </div>
                <div class="run-item run-n4">
                    <div class="is-bird"></div>
                </div>
                <div class="run-item run-n5">
                    <div class="is-peacock"></div>
                </div>
                <div class="run-item run-n6">
                    <div class="is-peacock"></div>
                </div>
                <div class="run-item run-n7">
                    <div class="is-takeall"></div>
                </div>
                <div class="run-item run-n8">
                    <div class="is-pigeon"></div>
                </div>
                <div class="run-item run-n9">
                    <div class="is-pigeon"></div>
                </div>
                <div class="run-item run-n10">
                    <div class="is-pigeon"></div>
                </div>
                <div class="run-item run-n11">
                    <div class="is-eagle"></div>
                </div>
                <div class="run-item run-n12">
                    <div class="is-eagle"></div>
                </div>
                <div class="run-item run-n13">
                    <div class="is-goldshark"></div>
                </div>
                <div class="run-item run-n14">
                    <div class="is-lion"></div>
                </div>
                <div class="run-item run-n15">
                    <div class="is-lion"></div>
                </div>
                <div class="run-item run-n16">
                    <div class="is-monkey"></div>
                </div>
                <div class="run-item run-n17">
                    <div class="is-monkey"></div>
                </div>
                <div class="run-item run-n18">
                    <div class="is-monkey"></div>
                </div>
                <div class="run-item run-n19">
                    <div class="is-loss"></div>
                </div>
                <div class="run-item run-n20">
                    <div class="is-panda"></div>
                </div>
                <div class="run-item run-n21">
                    <div class="is-panda"></div>
                </div>
                <div class="run-item run-n22">
                    <div class="is-rabbit"></div>
                </div>
                <div class="run-item run-n23">
                    <div class="is-rabbit"></div>
                </div>
                <div class="run-item run-n24">
                    <div class="is-rabbit"></div>
                </div>
            </div>
            <!-- 左右統計 -->
            <div class="count-list is-left">
                <div class="count-group is-y">
                    <div class="count-item is-goldshark">99,999</div>
                    <div class="count-item is-slivershark">999,999</div>
                </div>
                <div class="count-group is-b">
                    <div class="count-item is-wing">9,999,999</div>
                    <div class="count-item is-eagle">666,999</div>
                    <div class="count-item is-pigeon">80,000</div>
                    <div class="count-item is-peacock">286,666</div>
                    <div class="count-item is-bird">1,000,000</div>
                </div>
                <div class="count-group is-g">
                    <div class="count-item is-claw">99,999</div>
                    <div class="count-item is-lion">999,999</div>
                    <div class="count-item is-monkey">9,999,999</div>
                    <div class="count-item is-panda">666,666</div>
                    <div class="count-item is-rabbit">80,000</div>
                </div>
            </div>
            <div class="count-list is-right">
                <div class="count-group is-y">
                    <div class="count-item is-goldshark">2</div>
                    <div class="count-item is-slivershark">0</div>
                </div>
                <div class="count-group is-b">
                    <div class="count-item is-wing">999</div>
                    <div class="count-item is-eagle">6</div>
                    <div class="count-item is-pigeon">20</div>
                    <div class="count-item is-peacock">15</div>
                    <div class="count-item is-bird">23</div>
                </div>
                <div class="count-group is-g">
                    <div class="count-item is-claw">12</div>
                    <div class="count-item is-lion">88</div>
                    <div class="count-item is-monkey">69</div>
                    <div class="count-item is-panda">26</div>
                    <div class="count-item is-rabbit">0</div>
                </div>
            </div>
            <!-- 結果記錄 -->
            <div class="game-result">
                <div class="r-latest">
                    <div class="is-goldshark"></div>
                </div>
                <div class="r-history">
                    <ul>
                        <li class="r-item">
                            <div class="is-monkey"></div>
                        </li>
                        <li class="r-item">
                            <div class="is-lion"></div>
                        </li>
                        <li class="r-item">
                            <div class="is-pigeon"></div>
                        </li>
                        <li class="r-item">
                            <div class="is-eagle"></div>
                        </li>
                        <li class="r-item">
                            <div class="is-panda"></div>
                        </li>
                        <li class="r-item">
                            <div class="is-rabbit"></div>
                        </li>
                        <li class="r-item">
                            <div class="is-slivershark"></div>
                        </li>
                        <li class="r-item">
                            <div class="is-bird"></div>
                        </li>
                        <li class="r-item">
                            <div class="is-peacock"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- 下注區 -->
            <div class="bet-board">
                <div class="bet-item is-eagle">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-pigeon">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-peacock">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-bird">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-wing">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-slivershark">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-goldshark">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-claw">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-rabbit">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-panda">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-monkey">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
                <div class="bet-item is-lion">
                    <span class="bet-count">0</span>
                    <div class="bet-opt">
                        <div class="bet-area"></div>
                        <div class="bet-chips"></div>
                    </div>
                </div>
            </div>
            <!-- 底部 -->
            <div class="game-bbg"></div>
            <div class="game-bottom">
                <!-- 總注 -->
                <div class="gb-amount">总注 888,888</div>
                <!-- 籌碼 -->
                <div class="gb-row">
                    <div class="gb-chip removeTextNodes">
                        <button class="chip-item chip-10 is-active" value="10" disabled></button>
                        <button class="chip-item chip-20" value="20" disabled></button>
                        <button class="chip-item chip-50" value="50" disabled></button>
                        <button class="chip-item chip-100" value="100" disabled></button>
                        <button class="chip-item chip-500 is-hide" value="500" disabled></button>
                        <button class="chip-item chip-1000 is-hide" value="1000" disabled></button>
                        <button class="chip-item chip-5000" value="5000" disabled></button>
                        <button class="chip-item chip-10000 is-hide" value="10000" disabled></button>
                        <button class="chip-item chip-50000 is-hide" value="50000" disabled></button>
                        <button class="chip-item chip-100000 is-hide" value="100000" disabled></button>
                        <button id="chipSet" class="chip-set"></button>
                    </div>
                    <!-- 取消確定 -->
                    <div class="game-btn">
                        <button class="btn-repeat"></button>
                        <button class="btn-cancel"></button>
                    </div>
                </div>
            </div>
            <!-- 中獎結果 -->
            <div class="winning-wrap">
                <div class="winning-content">+1,800</div>
                <div class="winning-bg"></div>
            </div>
            <!-- 自訂籌碼 -->
            <div id="chipCustom" class="game-popup-wrap">
                <div class="game-popup-main">
                    <h2 class="cc-title">请选择五个常用筹码</h2>
                    <div class="cc-checkbox removeTextNodes">
                        <div class="cc-item chip-10">
                            <input type="checkbox" id="chip10" name="cc" />
                            <label for="chip10"><span></span></label>
                        </div>
                        <div class="cc-item chip-20">
                            <input type="checkbox" id="chip20" name="cc" />
                            <label for="chip20"><span></span></label>
                        </div>
                        <div class="cc-item chip-50">
                            <input type="checkbox" id="chip50" name="cc" />
                            <label for="chip50"><span></span></label>
                        </div>
                        <div class="cc-item chip-100">
                            <input type="checkbox" id="chip100" name="cc" />
                            <label for="chip100"><span></span></label>
                        </div>
                        <div class="cc-item chip-500">
                            <input type="checkbox" id="chip500" name="cc" />
                            <label for="chip500"><span></span></label>
                        </div>
                        <div class="cc-item chip-1000">
                            <input type="checkbox" id="chip1000" name="cc" />
                            <label for="chip1000"><span></span></label>
                        </div>
                        <div class="cc-item chip-5000">
                            <input type="checkbox" id="chip5000" name="cc" />
                            <label for="chip5000"><span></span></label>
                        </div>
                        <div class="cc-item chip-10000">
                            <input type="checkbox" id="chip10000" name="cc" />
                            <label for="chip10000"><span></span></label>
                        </div>
                        <div class="cc-item chip-50000">
                            <input type="checkbox" id="chip50000" name="cc" />
                            <label for="chip50000"><span></span></label>
                        </div>
                        <div class="cc-item chip-100000">
                            <input type="checkbox" id="chip100000" name="cc" />
                            <label for="chip100000"><span></span></label>
                        </div>
                    </div>
                    <div class="cc-btn">
                        <button class="btn-cancel"></button>
                        <button class="btn-confirm"></button>
                    </div>
                </div>
            </div>
            <!-- 下注限額 -->
            <div id="gameLimit" class="game-limit-wrap">
                <div class="game-limit-conent">
                    <ul class="game-limit-list">
                        <li class="is-dragon">
                            <h2>龙</h2>
                            <span>0-30,000</span>
                        </li>
                        <li class="is-tiger">
                            <h2>虎</h2>
                            <span>0-30,000</span>
                        </li>
                        <li class="is-tie">
                            <h2>和</h2>
                            <span>0-30,000</span>
                        </li>
                        <li>
                            <h2>龙单</h2>
                            <span>0-30,000</span>
                        </li>
                        <li>
                            <h2>龙双</h2>
                            <span>0-30,000</span>
                        </li>
                        <li>
                            <h2>龙大</h2>
                            <span>0-30,000</span>
                        </li>
                        <li>
                            <h2>龙小</h2>
                            <span>0-30,000</span>
                        </li>
                        <li>
                            <h2>虎单</h2>
                            <span>0-30,000</span>
                        </li>
                        <li>
                            <h2>虎双</h2>
                            <span>0-30,000</span>
                        </li>
                        <li>
                            <h2>虎大</h2>
                            <span>0-30,000</span>
                        </li>
                        <li>
                            <h2>虎小</h2>
                            <span>0-30,000</span>
                        </li>
                    </ul>
                </div>
                <button class="btn-close"></button>
            </div>
            <!-- 牌局記錄 -->
            <div id="gameRecord" class="game-popup-wrap">
                <div class="game-popup-main">
                    <div class="game-popup-title"></div>
                    <button class="record-refresh"></button>
                    <div class="game-popup-content">
                        <div class="game-record-article">
                            <div class="record-row record-title">
                                <div class="record-col">局号</div>
                                <div class="record-col">开局时间</div>
                                <div class="record-col">开牌点数</div>
                                <div class="record-col">开奖结果</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span><!-- icon-h: 紅心 / icon-c: 梅花 / icon-s: 黑桃 / icon-d: 方塊 -->
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <!-- example start -->
                            <!-- example end -->
                        </div>
                    </div>
                </div>
                <button class="btn-close"></button>
            </div>
            <!-- 遊戲說明 -->
            <div id="gameRule" class="game-popup-wrap">
                <div class="game-popup-main">
                    <div class="game-popup-title"></div>
                    <div class="game-popup-content">
                        <div class="game-rule-article">
                            <div class="text-wrap">
                                <h2>一、玩法</h2>
                                <p>1.本游戏采用8副牌(不含大小鬼)合计416张</p>
                                <p>2.牌面的大小先比点数，K为最大牌，A为最小，其中以2到10牌面就为对应点数，并且10&lt;J&lt;Q&lt;K。相同点数比花色，黑&gt;红&gt;梅&gt;方。点数与花色均相同即为〝和〞</p>
                                <p>3.每靴牌随机使用416张之中的一部分</p>
                                <p>4.下注中状态时点击下注区即可下注</p>
                                <p><br></p>
                                <h2>二、赔率</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam maiores quo accusantium. Accusantium officia impedit dicta, aspernatur voluptatum facere molestias ut mollitia laudantium vero dolorum tempora aliquam dolor dolorem ex nihil voluptas, sequi ratione ullam, quidem et rerum veritatis necessitatibus fugit rem. Dolorum et, impedit rem adipisci possimus totam! Repellendus!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-close"></button>
            </div>
            <!-- 遊戲設定 -->
            <div id="gameSet" class="game-popup-wrap">
                <div class="game-popup-main">
                    <h2 class="game-popup-title"><b>系統設定</b></h2>
                    <div class="game-system-opt">
                        <div class="gs-lang">
                            <h3>语言</h3>
                            <select name="" id="">
                                <option value="">简体中文</option>
                                <option value="">繁體中文</option>
                            </select>
                        </div>
                        <div class="gs-voice">
                            <div class="gs-sound">
                                <h3>游戏音效</h3>
                                <input type="checkbox" id="c1" checked>
                                <label for="c1"><span></span></label>
                            </div>
                            <div class="gs-music">
                                <h3>音乐</h3>
                                <input type="checkbox" id="c2" checked>
                                <label for="c2"><span></span></label>
                            </div>
                        </div>
                    </div>
                    <div class="game-system-btn">
                        <button class="btn-cancel"></button>
                        <button class="btn-confirm"></button>
                    </div>
                </div>
            </div>
            <!-- 聊天室 -->
            <div class="chat-wrap">
                <button class="btn-chat"></button>
                <div class="chat-main">
                    <div class="chat-content">
                        <div class="chat-msg">
                            <div class="chat-user-head">
                                <img src="image/example/c1.png">
                            </div>
                            <div class="chat-user-info">
                                <h2>Julia</h2><time>15:30</time>
                            </div>
                            <div class="chat-user-msg">
                                最好玩的飞禽走兽终于上线啰!
                            </div>
                        </div>
                        <!-- example start -->
                        <div class="chat-msg">
                            <div class="chat-user-head">
                                <img src="image/example/c1.png">
                            </div>
                            <div class="chat-user-info">
                                <h2>Julia</h2><time>15:30</time>
                            </div>
                            <div class="chat-user-msg">
                                HI!
                            </div>
                        </div>
                        <div class="chat-msg">
                            <div class="chat-user-head">
                                <img src="image/example/c2.png">
                            </div>
                            <div class="chat-user-info">
                                <h2>Jack</h2><time>15:32</time>
                            </div>
                            <div class="chat-user-msg">
                                好期待喔~~好期待喔~~!
                            </div>
                        </div>
                        <div class="chat-msg">
                            <div class="chat-user-head">
                                <img src="image/example/c3.png">
                            </div>
                            <div class="chat-user-info">
                                <h2>Patty</h2><time>16:30</time>
                            </div>
                            <div class="chat-user-msg">
                                人生短短几个秋，不醉不归不罢休!
                            </div>
                        </div>
                        <div class="chat-msg">
                            <div class="chat-user-head">
                                <img src="image/example/c4.png">
                            </div>
                            <div class="chat-user-info">
                                <h2>安安</h2><time>16:50</time>
                            </div>
                            <div class="chat-user-msg">
                                歡迎加入!!    歡迎加入!!!
                            </div>
                        </div>
                        <div class="chat-msg">
                            <div class="chat-user-head">
                                <img src="image/example/c1.png">
                            </div>
                            <div class="chat-user-info">
                                <h2>Julia</h2><time>17:10</time>
                            </div>
                            <div class="chat-user-msg">
                                最好玩的飞禽走兽终于上线啰!
                            </div>
                        </div>
                        <div class="chat-msg">
                            <div class="chat-user-head">
                                <img src="image/example/c2.png">
                            </div>
                            <div class="chat-user-info">
                                <h2>Jack</h2><time>17:30</time>
                            </div>
                            <div class="chat-user-msg">
                                最好玩的飞禽走兽终于上线啰!
                            </div>
                        </div>
                        <div class="chat-msg">
                            <div class="chat-user-head">
                                <img src="image/example/c4.png">
                            </div>
                            <div class="chat-user-info">
                                <h2>安安</h2><time>17:31</time>
                            </div>
                            <div class="chat-user-msg">
                                歡迎加入!!    歡迎加入!!!
                            </div>
                        </div>
                        <!-- example end -->
                    </div>
                    <div class="chat-input">
                        <input type="text" placeholder="请输入聊天内容">
                        <button class="chat-enter"></button>
                    </div>
                </div>
            </div>
            <!-- tip -->
            <div class="tip-wrap">
                <div class="tip-content">
                    <p>投注本注后，始可再投注<br>JACKPOT注为本注的一半<br>投注JACKPOT<br>有机会获得高额彩金</p>
                </div>
                <button class="tip-close"></button>
            </div>
            <!-- overlay -->
            <div class="overlay"></div>
        </div>
        <!-- 利用CSS預先載入圖片 -->
        <span class="preload-images"></span>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
    <script src="js/bab.js"></script>
    <script>
    </script>
</body>
</html>
