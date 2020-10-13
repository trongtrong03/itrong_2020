<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>BBIN TEMPLATE</title>
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
</head>
<body>
    <div id="mainBody">
        <!-- CONTAINER -->
        <div id="page-container">
            <div id="page-body" class="page-body">
                <!-- INDEX START -->
                <div class="index-wrap clearfix">
                    <span class="index-logo"></span>
                    <div class="index-content index-rwd">
                        <section>
                            <article>
                                <figure>
                                    <img src="image/index_title_rwd.png" class="desktop">
                                    <img src="image/index_title_rwd_m.png" class="tablet">
                                </figure>
                                <h2>RESPONSIVE WEB DESIGN</h2>
                                <p>ＲＷＤ网版，在不同尺寸萤幕上，能够 <i>自动调整排列</i> 为最佳体验的版型，为客户提供更高浏览体验的版型选择。</p>
                                <button class="btnRwd">RWD网版</button>
                            </article>
                            <span class="index-rwd-bar">
                                <span></span>
                                <span><i></i><i></i><i></i></span>
                            </span>
                            <span class="index-rwd-arrow"><i></i></span>
                        </section>
                    </div>
                    <div class="index-content index-adaptive">
                        <section>
                            <article>
                                <figure><img src="image/index_title_adaptive.png"></figure>
                                <h2>ADAPTIVE WEB DESIGN</h2>
                                <p>固定网版版型，</p>
                                <p>在每一个不同尺寸的萤幕上，</p>
                                <p>画面会完全一致。</p>
                                <button class="btnAdaptive">固定网版</button>
                            </article>
                        </section>
                    </div>
                    <button id="aboutOpen" class="about-open-btn">我们的团队</button>
                </div>
                <!-- INDEX END -->
                <!-- ABOUT PAGE START -->
                <div id="about" class="about-wrap">
                    <div class="about-main clearfix">
                        <div class="about-content">
                            <span class="about-logo">
                                <img src="image/bbin-logo-orange.svg">
                            </span>
                            <button class="about-back-btn">
                                <i class="fa fa-angle-left"></i><b></b>
                            </button>
                            <section class="about-txt">
                                <h2>A CREATIVE AGENCY IN BBIN</h2>
                                <h3><img src="image/about_title.png"></h3>
                                <h4><img src="image/about_words.png"></h4>
                                <article>
                                    <p>BBIN</p>
                                    <p>成立于1999年，BBIN宝盈集团成功地由亚洲首屈的博彩系统供应商，逐步发展为娱乐集团。除了博彩产业，近年来更积极拓展其他娱乐事业体。</p>
                                    <p>全球拥有超过1000位专业人才，不断创新、研发逾百款博彩相关产品并获得多项国际认证，提供多元化服务包括有娱乐平台建构、视讯直播客制化及娱乐平台API介接等。</p>
                                    <p>BBIN始终以顾客为中心，及满足顾客需求为最高宗旨。</p>
                                </article>
                                <article>
                                    <p>添加色彩<br>让顶尖娱乐平台魅力四射</p>
                                    <p>一个网站，给使用者留下的第一印象不是网站丰富的内容，也不是网站合理的版面布局，而是网站的丰富色彩。</p>
                                    <p>BBIN专为尊贵的顾客，打造完美的视觉空间，吸引所有使用者的目光。</p>
                                </article>
                            </section>
                        </div>
                        <div class="about-bg">
                            <div class="about-bg-line pelm top"></div>
                            <div class="about-bg-screen">
                                <figure>
                                    <img src="image/about_img.png" class="screen pelm">
                                </figure>
                                <span class="pelm top poker01">
                                    <img src="image/about_poker01.png">
                                </span>
                                <span class="pelm left poker02">
                                    <img src="image/about_poker02.png">
                                </span>
                                <span class="pelm poker03">
                                    <img src="image/about_poker03.png">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ABOUT PAGE END -->
                <!-- ADAPTIVE PAGE START -->
                <div id="adaptiveCont" class="page-wrap">
                    <div class="nav-wrap">
                        <nav class="nav-main">
                            <button id="adaptiveBack" class="nav-back">
                                <i class="fa fa-angle-left"></i><b></b>
                            </button>
                            <button class="nav-switch nav-switch-adaptive mobile-on" data-filter="*">
                                <span><b>固定网版</b><i>所有款式</i></span>
                            </button>
                            <button id="navSwitchRWD" class="nav-switch nav-switch-rwd">
                                <span><b>RWD网版</b></span>
                            </button>
                            <ul class="nav-filter clearfix">
                                <li class="nav-filter-hot">
                                    <button data-filter=".hot">热门版型</button>
                                </li>
                                <li class="nav-filter-layout">
                                    <span class="subtouch">版型布局</span>
                                    <div class="submenu">
                                        <ul>
                                            <li>
                                                <button id="adapNumLa" class="nav-filter-btn-layout-straight" data-filter=".L-a"><i></i></button>
                                            </li>
                                            <li>
                                                <button id="adapNumLb" class="nav-filter-btn-layout-horizontal" data-filter=".L-b"><i></i></button>
                                            </li>
                                            <li>
                                                <button id="adapNumLc" class="nav-filter-btn-layout-multi" data-filter=".L-c"><i></i></button>
                                            </li>
                                            <li>
                                                <button id="adapNumLd" class="nav-filter-btn-layout-diagonal" data-filter=".L-d"><i></i></button>
                                            </li>
                                            <li>
                                                <button id="adapNumLe" class="nav-filter-btn-layout-norules" data-filter=".L-e"><i></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-filter-style">
                                    <span class="subtouch">设计风格</span>
                                    <div class="submenu">
                                        <ul>
                                            <li>
                                                <button id="adapNumF" class="nav-filter-btn-style-fashion" data-filter=".S-fashion">前卫时尚</button>
                                            </li>
                                            <li>
                                                <button id="adapNumC" class="nav-filter-btn-style-classical" data-filter=".S-classical">复古典雅</button>
                                            </li>
                                            <li>
                                                <button id="adapNumG" class="nav-filter-btn-style-gorgeous" data-filter=".S-gorgeous">精致华丽</button>
                                            </li>
                                            <li>
                                                <button id="adapNumS" class="nav-filter-btn-style-simple" data-filter=".S-simple">简约大气</button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-filter-color">
                                    <span class="subtouch">颜色色系</span>
                                    <div class="submenu">
                                        <ul>
                                            <li>
                                                <button class="nav-filter-btn-white" data-filter=".C-white"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-gray" data-filter=".C-gray"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-black" data-filter=".C-black"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-blue" data-filter=".C-blue"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-green" data-filter=".C-green"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-yellow" data-filter=".C-yellow"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-brown" data-filter=".C-brown"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-orange" data-filter=".C-orange"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-red" data-filter=".C-red"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-pink" data-filter=".C-pink"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-purple" data-filter=".C-purple"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <button class="nav-view nav-view-grid"></button>
                    </div>
                    <div class="page-main page-view-grid">
                        <dl id="MixItUpAdap" class="removeTextNodes">
                            <?php include "_adaptive.php"; ?>
                        </dl>
                    </div>
                    <button class="btn-top btn-top-adaptive"><i class="fa fa-angle-up"></i></button>
                </div>
                <!-- ADAPTIVE PAGE END -->
                <!-- RWD PAGE START -->
                <div id="rwdCont" class="page-wrap rwd">
                    <div class="nav-wrap">
                        <nav class="nav-main">
                            <button id="rwdBack" class="nav-back">
                                <i class="fa fa-angle-left"></i><b></b>
                            </button>
                            <button id="navSwitchAdaptive" class="nav-switch nav-switch-adaptive">
                                <span><b>固定网版</b></span>
                            </button>
                            <button class="nav-switch nav-switch-rwd mobile-on" data-filter="*">
                                <span><b>RWD 网版</b><i>所有款式</i></span>
                            </button>
                            <ul class="nav-filter clearfix">
                                <li class="nav-filter-hot">
                                    <button data-filter=".hot">热门版型</button>
                                </li>
                                <li class="nav-filter-layout">
                                    <span class="subtouch">版型布局</span>
                                    <div class="submenu">
                                        <ul>
                                            <li>
                                                <button id="rwdNumLa" class="nav-filter-btn-layout-straight" data-filter=".L-a"><i></i></button>
                                            </li>
                                            <li>
                                                <button id="rwdNumLb" class="nav-filter-btn-layout-horizontal" data-filter=".L-b"><i></i></button>
                                            </li>
                                            <li>
                                                <button id="rwdNumLc" class="nav-filter-btn-layout-multi" data-filter=".L-c"><i></i></button>
                                            </li>
                                            <li>
                                                <button id="rwdNumLd" class="nav-filter-btn-layout-diagonal" data-filter=".L-d"><i></i></button>
                                            </li>
                                            <li>
                                                <button id="rwdNumLe" class="nav-filter-btn-layout-norules" data-filter=".L-e"><i></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-filter-style">
                                    <span class="subtouch">设计风格</span>
                                    <div class="submenu">
                                        <ul>
                                            <li>
                                                <button id="rwdNumF" class="nav-filter-btn-style-fashion" data-filter=".S-fashion">前卫时尚</button>
                                            </li>
                                            <li>
                                                <button id="rwdNumC" class="nav-filter-btn-style-classical" data-filter=".S-classical">复古典雅</button>
                                            </li>
                                            <li>
                                                <button id="rwdNumG" class="nav-filter-btn-style-gorgeous" data-filter=".S-gorgeous">精致华丽</button>
                                            </li>
                                            <li>
                                                <button id="rwdNumS" class="nav-filter-btn-style-simple" data-filter=".S-simple">简约大气</button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-filter-color">
                                    <span class="subtouch">颜色色系</span>
                                    <div class="submenu">
                                        <ul>
                                            <li>
                                                <button class="nav-filter-btn-white" data-filter=".C-white"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-gray" data-filter=".C-gray"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-black" data-filter=".C-black"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-blue" data-filter=".C-blue"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-green" data-filter=".C-green"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-yellow" data-filter=".C-yellow"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-brown" data-filter=".C-brown"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-orange" data-filter=".C-orange"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-red" data-filter=".C-red"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-pink" data-filter=".C-pink"></button>
                                            </li>
                                            <li>
                                                <button class="nav-filter-btn-purple" data-filter=".C-purple"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <button class="nav-view nav-view-grid"></button>
                    </div>
                    <div class="page-main page-view-grid">
                        <dl id="MixItUpRwd" class="removeTextNodes">
                            <?php include "_rwd.php"; ?>
                        </dl>
                    </div>
                    <button class="btn-top btn-top-rwd"><i class="fa fa-angle-up"></i></button>
                </div>
                <!-- RWD PAGE END -->
                <span class="mask-bg"></span>
            </div>
        </div>
    </div>
    <script src="js/isotope-docs.min.js?4"></script>
    <script src="js/parallaxmouse.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
