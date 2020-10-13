<!DOCTYPE html>
<html class="is-login member">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>丸久娱乐城</title>
    <link href="image/favico.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <?php include "_header.php"; ?>
        <!-- Main -->
        <main class="container-wrap">
            <?php include "_nav.php"; ?>
            <div class="container-main">
                <div class="container-content">
                    <div class="member-wrap">
                        <div class="member-main">
                            <button class="member-btn"><i class="fas fa-chevron-down"></i>选单</button>
                            <aside class="member-aside">
                                <ul class="member-nav">
                                    <li>
                                        <h2 class="m-wallet active"><span>中心钱包(L币)</span></h2>
                                        <div class="sub" style="display: block;">
                                            <a href="#0" class="active">中心钱包帐户转点</a>
                                            <a href="#0">优惠申请</a>
                                            <a href="#0">推荐码退佣</a>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="m-money"><span>财务管理</span></h2>
                                        <div class="sub">
                                            <a href="#0">充值</a>
                                            <a href="#0">银行充值通知</a>
                                            <a href="#0">兑换</a>
                                            <a href="#0">绑定银行卡</a>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="m-history"><span>帐户历史</span></h2>
                                        <div class="sub">
                                            <a href="#0">帐务记录</a>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="m-account"><span>我的帐户</span></h2>
                                        <div class="sub">
                                            <a href="#0">帐户信息</a>
                                            <a href="#0">更改密码</a>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="m-mail"><span>站内信箱(0)</span></h2>
                                        <div class="sub">
                                            <a href="#0">未读邮件</a>
                                            <a href="#0">已读邮件</a>
                                            <a href="#0">全部邮件</a>
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn-close"></button>
                            </aside>
                            <div class="member-content">
                                <h1 class="member-head">主钱包帐户转点</h1>
                                <div class="wallet-content">
                                    <div class="wallet-refresh">
                                        <button><i class="fas fa-sync-alt"></i>刷新内容</button>
                                    </div>
                                    <div class="wallet-list">
                                        <ul>
                                            <li class="active">
                                                <span>中心钱包（L币</span><span>100,023.10</span>
                                            </li>
                                            <li>
                                                <span>申博</span><span>游戏维护中</span>
                                            </li>
                                            <li>
                                                <span>三昇體育</span><span>19,569.15</span>
                                            </li>
                                            <li>
                                                <span>丸久彩票</span><span>7.00</span>
                                            </li>
                                            <li>
                                                <span>AG</span><span>14.00</span>
                                            </li>
                                            <li>
                                                <span>PS</span><span>0</span>
                                            </li>
                                            <li>
                                                <span>CQ9</span><span>游戏维护中</span>
                                            </li>
                                            <li>
                                                <span>开元</span><span>游戏维护中</span>
                                            </li>
                                            <li>
                                                <span>GTI</span><span>游戏维护中</span>
                                            </li>
                                            <li>
                                                <span>MG</span><span>103.90</span>
                                            </li>
                                            <li>
                                                <span>爱棋牌</span><span>余额取得失败</span>
                                            </li>
                                            <li>
                                                <span>SA</span><span>0</span>
                                            </li>
                                            <li>
                                                <span>GTI彩票</span><span>0</span>
                                            </li>
                                            <li>
                                                <span>大满贯</span><span>72.32</span>
                                            </li>
                                            <li>
                                                <span>天子</span><span>余额取得中</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wallet-form">
                                        <p>L币点数转换：<br>进行各家游戏需自中心钱包移转L币点数至各家游戏钱包。</p>
                                        <form action="">
                                            <div class="wallet-input">
                                                <div class="account-from">
                                                    <select>
                                                        <option>主要钱包</option>
                                                        <option>項目二</option>
                                                        <option>項目三</option>
                                                    </select>
                                                </div>
                                                <div class="account-to">
                                                    <select>
                                                        <option>主要钱包</option>
                                                        <option>項目二</option>
                                                        <option>項目三</option>
                                                    </select>
                                                </div>
                                                <div class="switch-point">
                                                    <input type="text" placeholder="请输入1至1,000,000任意整数整点">
                                                </div>
                                            </div>
                                            <div class="wallet-btn">
                                                <button class="reset" type="reset">重填</button>
                                                <button class="submit" type="submit">送出</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
        <!-- Float bar -->
        <?php include "_float.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(".member-nav h2").on("click", function(e){
            if($(this).parent().has(".sub")) {
                e.preventDefault();
            }
            if(!$(this).hasClass("active")) {
                $(".sub").slideUp();
                $(".member-nav h2").removeClass("active");
                $(this).next(".sub").slideDown();
                $(this).addClass("active");
            }
            else if($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).next(".sub").slideUp();
            }
        });
    </script>
</body>
</html>
