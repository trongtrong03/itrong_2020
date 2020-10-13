<!DOCTYPE html>
<html class="register">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>閎捷科技</title>
    <link href="image/favicon.ico" rel="shortcut icon">
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
            <section class="banner-wrap">
                <img src="image/banner_register.jpg">
                <img src="image/banner_register_m.jpg">
            </section>
            <section class="inside-wrap">
                <div class="inside-main">
                    <h1>Registered</h1>
                    <div class="link-wrap removeTextNodes">
                        <a href="r_company.php" class="active">公司企業及行號註冊</a>
                        <a href="r_personal.php">個人會員註冊</a>
                    </div>
                    <div class="register-form">
                        <h2>請填寫您要設定的帳號碼.密碼，及相關資料．並完成手機驗證</h2>
                        <form action="">
                            <div class="register-input">
                                <div class="input-item l-50">
                                    <label><b>*</b>會員帳號</label>
                                    <input type="text">
                                </div>
                                <div class="input-item pw-1 label-2">
                                    <label><b>*</b>密碼</label>
                                    <input type="password">
                                </div>
                                <div class="input-item pw-2">
                                    <label><b>*</b>確認密碼</label>
                                    <input type="password">
                                </div>
                                <div class="input-item l-50">
                                    <label><b>*</b>手機號碼</label>
                                    <input type="text" placeholder="號碼前請勿加0，範例：+886 92123456">
                                </div>
                                <div class="input-item r-50">
                                    <label><b>*</b>電子信箱</label>
                                    <input type="text">
                                </div>
                                <div class="input-agree">
                                    <input type="checkbox" id="agree">
                                    <label for="agree">我已同意特約商店服務規範、隱私權政策，閎捷科技平台會員服務條款。</label>
                                </div>
                                <div class="input-item l-50 c-name">
                                    <label><b>*</b>公司/機構名稱</label>
                                    <input type="text">
                                </div>
                                <div class="input-item r-50 c-country">
                                    <label><b>*</b>公司/機構名稱註冊國籍</label>
                                    <input type="text" placeholder="TAIWAN 台灣">
                                </div>
                                <div class="input-item l-50 label-6">
                                    <label><b>*</b>證照登記種類</label>
                                    <select>
                                        <option>變更事項登記表</option>
                                        <option>item2</option>
                                        <option>item3</option>
                                    </select>
                                </div>
                                <div class="input-item r-50">
                                    <label><b>*</b>統一編號</label>
                                    <input type="text">
                                </div>
                                <div class="input-item l-50 label-5">
                                    <label><b>*</b>公司資本額</label>
                                    <input type="text">
                                </div>
                                <div class="input-item r-50 label-6">
                                    <label><b>*</b>公司設立日期</label>
                                    <select>
                                        <option>請選擇</option>
                                        <option>item1</option>
                                        <option>item2</option>
                                        <option>item3</option>
                                    </select>
                                </div>
                                <div class="input-item l-50 label-5">
                                    <label><b>*</b>負責人姓名</label>
                                    <input type="text">
                                </div>
                                <div class="input-item r-50 label-5">
                                    <label><b>*</b>負責人國籍</label>
                                    <select>
                                        <option>請選擇一個國家</option>
                                        <option>item1</option>
                                        <option>item2</option>
                                        <option>item3</option>
                                    </select>
                                </div>
                                <div class="input-item l-50 label-8">
                                    <label><b>*</b>負責人身分證字號</label>
                                    <input type="text">
                                </div>
                                <div class="input-item r-50 label-6">
                                    <label><b>*</b>登記證照種類</label>
                                    <select>
                                        <option>請選擇</option>
                                        <option>item1</option>
                                        <option>item2</option>
                                        <option>item3</option>
                                    </select>
                                </div>
                                <div class="input-item l-50 label-7">
                                    <label><b>*</b>公司聯絡人姓名</label>
                                    <input type="text">
                                </div>
                                <div class="input-item r-50">
                                    <label><b>*</b>公司電話</label>
                                    <input type="text">
                                </div>
                                <div class="input-item single">
                                    <label><b>*</b>通訊地址</label>
                                    <input type="text" placeholder="例如：801高雄市前金市中一路166號6F">
                                </div>
                            </div>
                            <div class="register-upload">
                                <p>*登記證號種類上傳檔案，至少一張</p>
                                <div class="upload-item">
                                    <span>登記證照種類(或公司變更事項登記表或其他營業證明文件)-1</span>
                                    <input id="upload1" type="file">
                                    <label for="upload1">上傳</label>
                                </div>
                                <div class="upload-item">
                                    <span>登記證照種類(或公司變更事項登記表或其他營業證明文件)-2</span>
                                    <input id="upload2" type="file">
                                    <label for="upload2">上傳</label>
                                </div>
                                <div class="upload-item">
                                    <span>登記證照種類(或公司變更事項登記表或其他營業證明文件)-3</span>
                                    <input id="upload3" type="file">
                                    <label for="upload3">上傳</label>
                                </div>
                                <div class="upload-item">
                                    <span>登記證照種類(或公司變更事項登記表或其他營業證明文件)-4</span>
                                    <input id="upload4" type="file">
                                    <label for="upload4">上傳</label>
                                </div>
                                <div class="upload-item">
                                    <span>登記證照種類(或公司變更事項登記表或其他營業證明文件)-5</span>
                                    <input id="upload5" type="file">
                                    <label for="upload5">上傳</label>
                                </div>
                                <div class="upload-item">
                                    <span>登記證照種類(或公司變更事項登記表或其他營業證明文件)-6</span>
                                    <input id="upload6" type="file">
                                    <label for="upload6">上傳</label>
                                </div>
                                <div class="upload-item">
                                    <span>負責人身分證正面</span>
                                    <input id="id1" type="file">
                                    <label for="id1">上傳</label>
                                </div>
                                <div class="upload-item">
                                    <span>負責人身分證反面</span>
                                    <input id="id2" type="file">
                                    <label for="id2">上傳</label>
                                </div>
                            </div>
                            <div class="register-captcha">
                                <div>
                                    <input type="checkbox" id="captcha">
                                    <label for="captcha">我不是機器人</label>
                                </div>
                            </div>
                            <button class="register-submit">我要驗證</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>
