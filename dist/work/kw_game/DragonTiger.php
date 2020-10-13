<!DOCTYPE html>
<html class="dragontiger">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>龍虎鬥</title>
    <link href="image/favico.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
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
                </div>
            </div>
            <div class="game-number">牌局编号：abcd12345</div>
            <div class="game-amount">192,841.00</div>
            <div id="countdown" class="game-time">30</div>
            <!-- 統計 -->
            <div class="stat-wrap">
                <div class="stat-item">
                    龙<span>99</span>
                </div>
                <div class="stat-item">
                    虎<span>3</span>
                </div>
                <div class="stat-item">
                    和<span>8</span>
                </div>
                <div class="stat-count">总注: 00000</div>
            </div>
            <!-- 右側按鈕 -->
            <div class="game-btn">
                <button class="btn-cancel"></button>
                <button class="btn-repeat"></button>
                <button class="btn-confirm"></button>
            </div>
            <!-- 開始/結束 -->
            <div class="game-bet is-start"></div>
            <!-- 牌桌 -->
            <div class="game-table">
                <span class="gt-cards01"></span>
                <span class="gt-cards02"></span>
                <div class="gt-board">
                    <div class="board-top board-item board-dragon">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-top board-item board-tie">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>20</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-top board-item board-tiger">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-bottom board-item board-d-single">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>100</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-bottom board-item board-d-double">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>10</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-bottom board-item board-d-big">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>3000</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-bottom board-item board-d-small">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-bottom board-item board-t-big">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-bottom board-item board-t-small">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-bottom board-item board-t-single">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="board-bottom board-item board-t-double">
                        <div class="bet-area">
                            <div class="bet-count">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <!-- 龍: 撲克 / 花色class: 梅花c1~c13 方塊d1~d13 愛心h1~h13 黑桃s1~s13 -->
                    <div class="poker-block poker-dragon">
                        <div class="poker-item poker-cover"></div>
                        <div class="poker-item poker-result poker-s1"></div>
                    </div>
                    <!-- 虎: 撲克 / 花色class: 梅花c1~c13 方塊d1~d13 愛心h1~h13 黑桃s1~s13 -->
                    <div class="poker-block poker-tiger">
                        <div class="poker-item poker-cover"></div>
                        <div class="poker-item poker-result poker-c9"></div>
                    </div>
                </div>
            </div>
            <!-- 底部 -->
            <div class="game-bottom">
                <!-- 路紙 -->
                <div class="gb-scorecard">
                    <button class="gb-btn is-all"></button>
                    <!-- 全路 -->
                    <div id="js-all" class="gb-table">
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r3"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b3"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b2"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r2"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                    </div>
                    <!-- 大路 -->
                    <div id="js-big" class="gb-table" style="display: none;">
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1">1</span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1">3</span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1">3</span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1">3</span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1">1</span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1">3</span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1">3</span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1">3</span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid">
                                <span class="sc-item sc-r1"></span>
                            </div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid">
                                <span class="sc-item sc-b1"></span>
                            </div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                        <div class="gb-row">
                            <!-- 39格 -->
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                            <div class="gb-grid"></div>
                        </div>
                    </div>
                </div>
                <!-- 籌碼 -->
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
                <button class="btn-close"></button>
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
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-s">J</span>
                                    <span>,</span>
                                    <span class="pt-item icon-d">K</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
                            </div>
                            <div class="record-row">
                                <div class="record-col">137157648791</div>
                                <div class="record-col">2020-01-06 16:26:37</div>
                                <div class="record-col">
                                    <span class="pt-item icon-h">5</span>
                                    <span>,</span>
                                    <span class="pt-item icon-c">1</span>
                                </div>
                                <div class="record-col">龙,龙单,虎单,虎小,虎小,龙</div>
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
    <script src="js/dragontiger.js"></script>
    <script>
    </script>
</body>
</html>
