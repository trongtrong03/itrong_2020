<!DOCTYPE html>
<html class="pk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>單挑</title>
    <link href="image/favico.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body onload="initial();">
    <article id="wrap">
        <div class="game-wrap">
            <div class="game-nav removeTextNodes">
                <button class="btn-home" onclick="javascript:location.href='index.php'"></button>
                <button class="btn-list"></button>
                <div class="list-wrap">
                    <button id="btnRecord" class="list-link">牌局纪录</button>
                    <button id="btnRule" class="list-link">游戏说明</button>
                </div>
            </div>
            <div class="game-number">牌局编号：abcd12345</div>
            <div class="game-amount">192,841.00</div>
            <!-- 開始/結束 -->
            <div class="game-bet is-start"></div>
            <!-- Poker -->
            <div class="poker-wrap">
                <div id="countdown" class="game-time">30</div>
                <div class="poker-item poker-cover"></div>
                <div class="poker-item poker-result">
                    <span class="poker-card poker-s13"></span>
                    <span class="poker-light"></span>
                    <i class="starlight s-1"></i>
                    <i class="starlight s-2"></i>
                    <i class="starlight s-3"></i>
                    <i class="starlight s-4"></i>
                    <i class="starlight s-5"></i>
                    <i class="starlight s-6"></i>
                    <i class="starlight s-7"></i>
                    <i class="suitsItem is-c"></i>
                    <i class="suitsItem is-h"></i>
                    <i class="suitsItem is-s"></i>
                    <i class="suitsItem is-d"></i>
                </div>
            </div>
            <!-- game table -->
            <div class="game-table">
                <div class="gt-head">
                    <div class="gt-number">牌局<span>80</span></div>
                    <div class="gt-suits is-s">
                        <span>2</span>
                    </div>
                    <div class="gt-suits is-c">
                        <span>48</span>
                    </div>
                    <div class="gt-suits is-h">
                        <span>10</span>
                    </div>
                    <div class="gt-suits is-d">
                        <span>12</span>
                    </div>
                    <div class="gt-suits is-crown">
                        <span>8</span>
                    </div>
                </div>
                <div class="gt-row">
                    <div class="gt-item is-c is-new"><!-- is-s:黑桃 / is-c:梅花 / is-h:紅心 / is-d:方塊 / is-crown:皇冠-->
                        <i class="new-icon"></i>
                        <span>K</span>
                    </div>
                    <div class="gt-item is-crown">
                        <span></span>
                    </div>
                    <div class="gt-item is-d">
                        <span>3</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>J</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-s">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-d">
                        <span>5</span>
                    </div>
                </div>
                <!-- example start -->
                <div class="gt-row">
                    <div class="gt-item is-c">
                        <span>K</span>
                    </div>
                    <div class="gt-item is-crown">
                        <span></span>
                    </div>
                    <div class="gt-item is-d">
                        <span>3</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>J</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-s">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-d">
                        <span>5</span>
                    </div>
                </div>
                <div class="gt-row">
                    <div class="gt-item is-c">
                        <span>K</span>
                    </div>
                    <div class="gt-item is-crown">
                        <span></span>
                    </div>
                    <div class="gt-item is-d">
                        <span>3</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>J</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-s">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-d">
                        <span>5</span>
                    </div>
                </div>
                <div class="gt-row">
                    <div class="gt-item is-c">
                        <span>K</span>
                    </div>
                    <div class="gt-item is-crown">
                        <span></span>
                    </div>
                    <div class="gt-item is-d">
                        <span>3</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>J</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-s">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-d">
                        <span>5</span>
                    </div>
                </div>
                <div class="gt-row">
                    <div class="gt-item is-c">
                        <span>K</span>
                    </div>
                    <div class="gt-item is-crown">
                        <span></span>
                    </div>
                    <div class="gt-item is-d">
                        <span>3</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>J</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-s">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-d">
                        <span>5</span>
                    </div>
                </div>
                <div class="gt-row">
                    <div class="gt-item is-c">
                        <span>K</span>
                    </div>
                    <div class="gt-item is-crown">
                        <span></span>
                    </div>
                    <div class="gt-item is-d">
                        <span>3</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>J</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-s">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-d">
                        <span>5</span>
                    </div>
                </div>
                <div class="gt-row">
                    <div class="gt-item is-c">
                        <span>K</span>
                    </div>
                    <div class="gt-item is-crown">
                        <span></span>
                    </div>
                    <div class="gt-item is-d">
                        <span>3</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>J</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-s">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-d">
                        <span>5</span>
                    </div>
                </div>
                <div class="gt-row">
                    <div class="gt-item is-c">
                        <span>K</span>
                    </div>
                    <div class="gt-item is-crown">
                        <span></span>
                    </div>
                    <div class="gt-item is-d">
                        <span>3</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>J</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-s">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-d">
                        <span>5</span>
                    </div>
                </div>
                <div class="gt-row">
                    <div class="gt-item is-c">
                        <span>K</span>
                    </div>
                    <div class="gt-item is-crown">
                        <span></span>
                    </div>
                    <div class="gt-item is-d">
                        <span>3</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>Q</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>J</span>
                    </div>
                    <div class="gt-item is-c">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-s">
                        <span>A</span>
                    </div>
                    <div class="gt-item is-d">
                        <span>5</span>
                    </div>
                </div>
                <!-- example end -->
            </div>
            <!-- bet -->
            <div class="bet-wrap">
                <div class="bet-item">
                    <div class="bet-stakes">12,000</div>
                    <button id="betSpade" class="bet-coin is-s"></button>
                </div>
                <div class="bet-item">
                    <div class="bet-stakes">2,000</div>
                    <button id="betClub" class="bet-coin is-c"></button>
                </div>
                <div class="bet-item">
                    <div class="bet-stakes">500</div>
                    <button id="betHeart" class="bet-coin is-h"></button>
                </div>
                <div class="bet-item">
                    <div class="bet-stakes">25,000</div>
                    <button id="betDiamond" class="bet-coin is-d"></button>
                </div>
                <div class="bet-item">
                    <div class="bet-stakes">7,700</div>
                    <button id="betCrown" class="bet-coin is-crown"></button>
                </div>
            </div>
            <!-- stakes -->
            <div class="stakes-wrap">
                <div class="stakes-top">
                    <h2 class="stakes-title">单注金额</h2>
                    <div class="stakes-ctrl">
                        <button class="stakes-arrow is-reduce"></button>
                        <div class="stakes-unit">10,000</div>
                        <button class="stakes-arrow is-increase"></button>
                    </div>
                </div>
                <div class="stakes-btn">
                    <button class="btn-clean"></button>
                    <button class="btn-continue"></button>
                </div>
            </div>
            <!-- 牌局記錄 -->
            <div id="gameRecord" class="game-popup-wrap">
                <div class="game-popup-main">
                    <div class="game-popup-title"></div>
                    <button class="record-refresh"></button>
                    <div class="game-popup-content">
                        <div class="game-record-article">
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <!-- example start -->
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="gt-row">
                                <div class="gt-item is-c">
                                    <span>K</span>
                                </div>
                                <div class="gt-item is-crown">
                                    <span></span>
                                </div>
                                <div class="gt-item is-d">
                                    <span>3</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>Q</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>J</span>
                                </div>
                                <div class="gt-item is-c">
                                    <span>A</span>
                                </div>
                                <div class="gt-item is-s">
                                    <span>A</span>
                                </div>
                            </div>
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
    <script src="js/pk.js"></script>
    <script>
    </script>
</body>
</html>
