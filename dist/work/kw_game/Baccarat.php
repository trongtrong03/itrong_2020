<!DOCTYPE html>
<html class="baccarat">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>百家樂</title>
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
            <div class="game-bet"></div>
            <!-- 牌桌 -->
            <div class="game-table">
                <div class="gt-board">
                    <div class="board-item is-player-two">
                        <div class="bet-area"></div>
                        <span class="bet-count">0</span>
                        <span class="bet-amount">0</span>
                    </div>
                    <div class="board-item is-player-single">
                        <div class="bet-area"></div>
                        <span class="bet-count">0</span>
                        <span class="bet-amount">0</span>
                    </div>
                    <div class="board-item is-player">
                        <div class="bet-area"></div>
                        <span class="bet-count">0</span>
                        <span class="bet-amount">0</span>
                    </div>
                    <div class="board-item is-player-double">
                        <div class="bet-area"></div>
                        <span class="bet-count">0</span>
                        <span class="bet-amount">0</span>
                    </div>
                    <div class="board-item is-banker">
                        <div class="bet-area"></div>
                        <span class="bet-count">0</span>
                        <span class="bet-amount">0</span>
                    </div>
                    <div class="board-item is-banker-double">
                        <div class="bet-area"></div>
                        <span class="bet-count">0</span>
                        <span class="bet-amount">0</span>
                    </div>
                    <div class="board-item is-banker-two">
                        <div class="bet-area"></div>
                        <span class="bet-count">0</span>
                        <span class="bet-amount">0</span>
                    </div>
                    <div class="board-item is-banker-single">
                        <div class="bet-area"></div>
                        <span class="bet-count">0</span>
                        <span class="bet-amount">0</span>
                    </div>
                    <div class="board-item is-tie">
                        <div class="bet-area"></div>
                        <span class="bet-count">0</span>
                        <span class="bet-amount">0</span>
                        <b></b><b></b><!-- 製作不規則籌碼擋板 -->
                    </div>
                    <div class="board-item is-center">
                        <!-- number -->
                        <div class="number-player"></div>
                        <div class="number-banker"></div>
                    </div>
                    <!-- poker -->
                    <div class="poker-area">
                        <div class="poker-item order-1 is-p1">
                            <div class="poker-cover"></div>
                        </div>
                        <div class="poker-item order-2 is-b1">
                            <div class="poker-cover"></div>
                        </div>
                        <div class="poker-item order-3 is-p2">
                            <div class="poker-cover"></div>
                        </div>
                        <div class="poker-item order-4 is-b2">
                            <div class="poker-cover"></div>
                        </div>
                        <div class="poker-item order-5 is-p3">
                            <div class="poker-cover"></div>
                        </div>
                        <div class="poker-item order-6 is-b3">
                            <div class="poker-cover"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 底部 -->
            <div class="game-bottom">
                <!-- 總注 -->
                <div class="gb-amount">
                    <i>总注</i>
                    <b>0</b>
                    <span></span>
                </div>
                <!-- 莊閒問路 -->
                <div class="gb-forecast">
                    <div class="is-banker">
                        <span class="is-big-banker"></span>
                        <span class="is-small-banker"></span>
                        <span class="is-cockroach-player"></span>
                    </div>
                    <div class="is-player">
                        <span class="is-big-banker"></span>
                        <span class="is-small-player"></span>
                        <span class="is-cockroach-banker"></span>
                    </div>
                </div>
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
                <!-- 取消確定 -->
                <div class="game-btn">
                    <button class="btn-repeat"></button>
                    <button class="btn-cancel"></button>
                </div>
                <!-- 統計 -->
                <div class="stat-wrap">
                    <div class="stat-item">
                        庄<span>8</span>
                    </div>
                    <div class="stat-item">
                        庄对<span>4</span>
                    </div>
                    <div class="stat-item">
                        和<span>2</span>
                    </div>
                    <div class="stat-item">
                        闲<span>5</span>
                    </div>
                    <div class="stat-item">
                        闲对<span>2</span>
                    </div>
                    <div class="stat-item">
                        总数<span>70</span>
                    </div>
                </div>
            </div>
            <!-- 開獎 -->
            <div class="result-wrap">
                <!-- 前兩對牌 -->
                <div class="result-main is-default">
                    <div class="result-item-group is-player">
                        <div class="result-item-poker is-p1">
                            <div class="poker-box is-cover"></div>
                        </div>
                        <div class="result-item-poker is-p2">
                            <div class="poker-box is-cover"></div>
                        </div>
                    </div>
                    <div class="result-item-group is-banker">
                        <div class="result-item-poker is-b1">
                            <div class="poker-box is-cover"></div>
                        </div>
                        <div class="result-item-poker is-b2">
                            <div class="poker-box is-cover"></div>
                        </div>
                    </div>
                </div>
                <!-- 補牌 -->
                <div class="result-main is-draw">
                    <div class="result-item-group is-player">
                        <div class="result-item-poker is-p3">
                            <div class="poker-box is-cover"></div>
                        </div>
                    </div>
                    <div class="result-item-group is-banker">
                        <div class="result-item-poker is-b3">
                            <div class="poker-box is-cover"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Win -->
            <div class="win-wrap">
                <div class="win-main">
                    <div class="win-center">
                        <div class="win-amount">390,586</div>
                        <div class="win-result"></div>
                        <span class="win-item"></span>
                        <span class="win-item"></span>
                        <span class="win-item"></span>
                        <span class="win-item"></span>
                        <span class="win-item"></span>
                        <span class="win-light"></span>
                        <span class="win-light"></span>
                    </div>
                </div>
            </div>
            <!-- 自訂籌碼 -->
            <div id="chipCustom" class="game-popup-wrap">
                <div class="game-popup-main">
                    <h2 class="cc-title">请选择四个常用筹码</h2>
                    <div class="cc-checkbox removeTextNodes">
                        <div class="cc-item chip-10">
                            <input type="checkbox" id="chip10" name="cc">
                            <label for="chip10"><span></span></label>
                        </div>
                        <div class="cc-item chip-20">
                            <input type="checkbox" id="chip20" name="cc">
                            <label for="chip20"><span></span></label>
                        </div>
                        <div class="cc-item chip-50">
                            <input type="checkbox" id="chip50" name="cc">
                            <label for="chip50"><span></span></label>
                        </div>
                        <div class="cc-item chip-100">
                            <input type="checkbox" id="chip100" name="cc">
                            <label for="chip100"><span></span></label>
                        </div>
                        <div class="cc-item chip-500">
                            <input type="checkbox" id="chip500" name="cc">
                            <label for="chip500"><span></span></label>
                        </div>
                        <div class="cc-item chip-1000">
                            <input type="checkbox" id="chip1000" name="cc">
                            <label for="chip1000"><span></span></label>
                        </div>
                        <div class="cc-item chip-5000">
                            <input type="checkbox" id="chip5000" name="cc">
                            <label for="chip5000"><span></span></label>
                        </div>
                        <div class="cc-item chip-10000">
                            <input type="checkbox" id="chip10000" name="cc">
                            <label for="chip10000"><span></span></label>
                        </div>
                        <div class="cc-item chip-50000">
                            <input type="checkbox" id="chip50000" name="cc">
                            <label for="chip50000"><span></span></label>
                        </div>
                        <div class="cc-item chip-100000">
                            <input type="checkbox" id="chip100000" name="cc">
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
    <script src="js/baccarat.js"></script>
    <script>
    </script>
</body>
</html>
