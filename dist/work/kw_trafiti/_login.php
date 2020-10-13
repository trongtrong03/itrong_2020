<section class="login-wrap">
    <div class="login-main">
        <h2>會員登入</h2>
        <div class="login-form">
                <div class="login-input">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="請輸入你註冊的電子信箱">
                </div>
                <div class="login-input">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="請輸入你的密碼">
                </div>
                <div class="login-link removeTextNodes">
                    <button class="btn-regist">免費註冊</button>
                    <button>忘記密碼</button>
                </div>
                <button class="login-submit" onclick="javascript:location.href='m_data.php'">會員登入</button>
                <div class="login-agree">
                    <input type="checkbox" id="c1"/>
                    <label for="c1"><span></span>記住我的帳號（公用或共用電腦請勿勾選）</label>
                </div>
        </div>
    </div>
    <button class="btn-close"></button>
</section>
<section class="regist-wrap">
    <div class="regist-main">
        <h2>如何成為 TRAFITI 會員</h2>
        <div class="regist-form">
            <div class="regist-input name">
                <h3>註冊姓名</h3>
                <div>
                    <input type="text" placeholder="First Name">
                </div>
                <div>
                    <input type="text" placeholder="Middle Name">
                </div>
                <div>
                    <input type="text" placeholder="Surname">
                </div>
            </div>
            <div class="regist-input">
                <h3>電子信箱</h3>
                <div>
                    <input type="text" placeholder="請輸入你註冊的電子信箱">
                </div>
            </div>
            <div class="regist-input born">
                <h3>生日</h3>
                <div>
                    <select>
                        <option>年份</option>
                        <option>2019</option>
                        <option>...</option>
                        <option>1911</option>
                    </select>
                </div>
                <div>
                    <select>
                        <option>月份</option>
                        <option>1</option>
                        <option>...</option>
                        <option>12</option>
                    </select>
                </div>
                <div>
                    <select>
                        <option>日</option>
                        <option>1</option>
                        <option>...</option>
                        <option>31</option>
                    </select>
                </div>
            </div>
            <div class="regist-input cel">
                <h3>聯繫電話</h3>
                <div>
                    <span>
                        <input type="text">
                    </span>
                    <span>
                        <input type="text">
                    </span>
                </div>
            </div>
            <div class="regist-input">
                <h3>密碼</h3>
                <div>
                    <input type="text" placeholder="請設定7-12個英數混合字元的密碼">
                </div>
            </div>
            <div class="regist-input">
                <h3>確認密碼</h3>
                <div>
                    <input type="text" placeholder="請再輸入一次你的密碼">
                </div>
            </div>
            <div class="regist-agree">
                <input type="checkbox" id="c2"/>
                <label for="c2"><span></span>我已仔細閱讀並明瞭「服務條款」、「免責聲明」、「隱私權聲明」等所載內容及其意義，茲同意該等條款規定，並願遵守網站現今、嗣後規範的各種規則。</label>
            </div>
            <button class="regist-submit">我同意以上條款，確定註冊</button>
        </div>
    </div>
    <button class="btn-close"></button>
</section>
<div class="overlay"></div>