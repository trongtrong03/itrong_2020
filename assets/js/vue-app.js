const htmlData = [
    {
        id: 0,
        href: 'html_symbollist',
        title: 'HTML 常用特殊符號編碼對照表',
        time: '2020.01.30',
        tag1: true,
        tag1_name: 'HTML',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: 'thumb_symbol'
    },
    {
        id: 1,
        href: 'html_googleform',
        title: '使用 Google 表單建立簡易的聯絡信件',
        time: '2020.02.02',
        tag1: true,
        tag1_name: 'HTML',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 2,
        href: 'html_contentmodel',
        title: '認識 HTML5 的元素分類與內容模型（Content Models）',
        time: '2020.02.06',
        tag1: true,
        tag1_name: 'HTML5',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 3,
        href: 'html_schema',
        title: 'Schema──網頁的結構化標記',
        time: '2020.02.16',
        tag1: true,
        tag1_name: 'SEO',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: 'thumb_schema'
    },
    {
        id: 4,
        href: 'html_breadcrumbs',
        title: 'Breadcrumb Trail──談談麵包屑導航',
        time: '2020.02.17',
        tag1: true,
        tag1_name: 'SEO',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: 'thumb_breadcrumbs'
    },
]

const cssData = [
    {
        id: 0,
        href: 'css_mq',
        title: 'CSS 的 Media Queries',
        time: '2019.08.09',
        tag1: true,
        tag1_name: 'CSS3',
        tag2: true,
        tag2_name: 'RWD',
        img: false,
        img_name: ''
    },
    {
        id: 1,
        href: 'css_units',
        title: 'CSS 度量單位（Units）彙整與介紹',
        time: '2019.09.20',
        tag1: false,
        tag1_name: '',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 2,
        href: 'css_compass_install',
        title: '用 Compass 寫 Sass：簡單介紹與環境安裝',
        time: '2020.01.12',
        tag1: true,
        tag1_name: 'Compass',
        tag2: true,
        tag2_name: '安裝',
        img: false,
        img_name: 'thumb_compass'
    },
    {
        id: 3,
        href: 'css_autoprefixer',
        title: 'Autoprefixer──在 Compass 使用 CSS 自動前綴工具',
        time: '2020.01.13',
        tag1: true,
        tag1_name: 'Compass',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: 'thumb_autoprefixer'
    },
    {
        id: 4,
        href: 'css_animation',
        title: '使用 CSS3 寫動畫──Animation＆Keyframes',
        time: '2020.03.01',
        tag1: true,
        tag1_name: 'CSS3',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 5,
        href: 'css_transform_1',
        title: '使元素變形的效果──Transform：2D 篇',
        time: '2020.03.01',
        tag1: true,
        tag1_name: 'CSS3',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 6,
        href: 'css_transform_2',
        title: '使元素變形的效果──Transform：3D 篇',
        time: '2020.03.02',
        tag1: true,
        tag1_name: 'CSS3',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 7,
        href: 'css_transform_3',
        title: '使元素變形的效果──Transform：Matrix（矩陣）篇',
        time: '2020.03.04',
        tag1: true,
        tag1_name: 'CSS3',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 8,
        href: 'css_flexbox',
        title: 'CSS3 彈性佈局模型──Flexible Box',
        time: '2020.03.11',
        tag1: true,
        tag1_name: 'CSS3',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 9,
        href: 'css_filter',
        title: '使用 CSS Filter 給圖片增添「濾鏡」效果',
        time: '2020.04.01',
        tag1: true,
        tag1_name: 'CSS3',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 10,
        href: 'css_column',
        title: '使用 column 實現文字多欄式排版',
        time: '2020.08.14',
        tag1: true,
        tag1_name: 'CSS3',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 11,
        href: 'css_position',
        title: 'Position 的各種定位模式',
        time: '2020.08.29',
        tag1: true,
        tag1_name: 'CSS3',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 12,
        href: 'css_stylus_1',
        title: 'CSS 預處理器語言──Stylus 教學（一）：安裝與使用',
        time: '2020.10.20',
        tag1: true,
        tag1_name: 'Stylus',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 13,
        href: 'css_stylus_2',
        title: 'CSS 預處理器語言──Stylus 教學（二）：基本語法',
        time: '2020.10.21',
        tag1: true,
        tag1_name: 'Stylus',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 14,
        href: 'css_stylus_3',
        title: 'CSS 預處理器語言──Stylus 教學（三）：內建函式',
        time: '2020.10.23',
        tag1: true,
        tag1_name: 'Stylus',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 15,
        href: 'css_stylus_4',
        title: 'CSS 預處理器語言──Stylus 教學（四）：@mixins、@extend、@block',
        time: '2020.10.24',
        tag1: true,
        tag1_name: 'Stylus',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 16,
        href: 'css_stylus_5',
        title: 'CSS 預處理器語言──Stylus 教學（五）：條件式＆迭代',
        time: '2020.10.25',
        tag1: true,
        tag1_name: 'Stylus',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 17,
        href: 'css_stylus_6',
        title: 'CSS 預處理器語言──Stylus 教學（六）：其他',
        time: '2020.10.26',
        tag1: true,
        tag1_name: 'Stylus',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 18,
        href: 'css_input_style',
        title: '關於表單元素（input、select、textarea...）的三兩事',
        time: '2020.11.10',
        tag1: true,
        tag1_name: 'CSS',
        tag2: true,
        tag2_name: 'CSS3',
        img: false,
        img_name: ''
    },
    {
        id: 19,
        href: 'css_textoverflow',
        title: '實現單行與多行的文字溢出省略符',
        time: '2021.01.03',
        tag1: true,
        tag1_name: 'CSS',
        tag2: true,
        tag2_name: 'CSS3',
        img: false,
        img_name: ''
    },
]

const jsData = [
    {
        id: 0,
        href: 'js_learn_1',
        title: 'Javascript 學習筆記（一）：變數與資料型別',
        time: '2019.07.05',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 1,
        href: 'js_learn_2',
        title: 'Javascript 學習筆記（二）：敘述句',
        time: '2019.07.07',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 2,
        href: 'js_learn_3',
        title: 'Javascript 學習筆記（三）：運算式＆運算子',
        time: '2019.07.12',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 3,
        href: 'js_learn_4',
        title: 'Javascript 學習筆記（四）：函式',
        time: '2019.07.14',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 4,
        href: 'js_learn_5',
        title: 'Javascript 學習筆記（五）：陣列---上',
        time: '2019.07.18',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 5,
        href: 'js_learn_6',
        title: 'Javascript 學習筆記（六）：陣列---下',
        time: '2019.07.20',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 6,
        href: 'js_learn_7',
        title: 'Javascript 學習筆記（七）：物件',
        time: '2019.07.26',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 7,
        href: 'js_learn_8',
        title: 'Javascript 學習筆記（八）：基本型別與物件型別',
        time: '2019.08.23',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 8,
        href: 'js_learn_9',
        title: 'Javascript 學習筆記（九）：物件模型---BOM',
        time: '2019.10.30',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    // {
    //     id: 9,
    //     href: 'js_learn_10',
    //     title: 'Javascript 學習筆記（十）：物件模型---DOM',
    //     time: '2019.11.05',
    //     tag1: true,
    //     tag1_name: 'JavaScript',
    //     tag2: false,
    //     tag2_name: 'false',
    //     img: false,
    //     img_name: ''
    // },
    {
        id: 10,
        href: 'js_jq_removeclass',
        title: '移除指定元素所有 Class 的幾種方法',
        time: '2019.11.04',
        tag1: true,
        tag1_name: 'jQuery',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 11,
        href: 'js_jq_selectors',
        title: 'jQuery 選擇器（selector）介紹',
        time: '2019.11.05',
        tag1: true,
        tag1_name: 'jQuery',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 12,
        href: 'js_jq_clone',
        title: 'jQuery 複製（.clone）方法介紹與應用',
        time: '2019.11.05',
        tag1: true,
        tag1_name: 'jQuery',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 13,
        href: 'js_learn_conditional',
        title: '條件運算子、展開運算子、其餘運算子介紹',
        time: '2020.01.03',
        tag1: true,
        tag1_name: 'JavaScript',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 14,
        href: 'js_jq_attributes',
        title: 'jQuery 屬性操作的幾個方法',
        time: '2020.01.04',
        tag1: true,
        tag1_name: 'jQuery',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },
    {
        id: 15,
        href: 'js_jq_event_1',
        title: 'jQuery 觸發事件處理（一）：基本概念',
        time: '2020.01.07',
        tag1: true,
        tag1_name: 'jQuery',
        tag2: false,
        tag2_name: 'false',
        img: false,
        img_name: ''
    },


    // {
    //     id: 9,
    //     href: 'js_vue_intro',
    //     title: '認識 Vue.js',
    //     time: '2019.11.21',
    //     tag1: true,
    //     tag1_name: 'vue',
    //     tag2: false,
    //     tag2_name: 'false',
    //     img: false,
    //     img_name: 'thumb_vue'
    // },
    // {
    //     id: 10,
    //     href: 'js_vue_data',
    //     title: 'Vue 學習筆記（一）：資料（Data）與樣板（Template）',
    //     time: '2019.11.23',
    //     tag1: true,
    //     tag1_name: 'vue',
    //     tag2: false,
    //     tag2_name: 'false',
    //     img: false,
    //     img_name: ''
    // },
    // {
    //     id: 11,
    //     href: 'js_vue_text',
    //     title: 'Vue 學習筆記（二）：v-text 與 v-html',
    //     time: '2019.11.29',
    //     tag1: true,
    //     tag1_name: 'vue',
    //     tag2: false,
    //     tag2_name: 'false',
    //     img: false,
    //     img_name: ''
    // },
]

const jpData = [
    {
        id: 0,
        href: 'jsp_jq_accordion',
        title: '兩層式摺疊列表（Accordion）',
        tag_name: 'jQuery',
        img_name: 'plugin-accordion'
    },
    {
        id: 1,
        href: 'jsp_jq_htabs',
        title: '水平切換頁籤（Tabs）',
        tag_name: 'jQuery',
        img_name: 'plugin-htabs'
    },
    {
        id: 2,
        href: 'jsp_jq_particleground',
        title: '粒子特效（Particleground）',
        tag_name: 'jQuery',
        img_name: 'plugin-particleground'
    },
    {
        id: 3,
        href: 'jsp_jq_vlnewsticker',
        title: '垂直切換跑馬燈（News Ticker）',
        tag_name: 'jQuery',
        img_name: 'plugin-vlnewsticker'
    },
    {
        id: 4,
        href: 'jsp_jq_hlnewsticker',
        title: '水平鍵字效果跑馬燈（News Ticker）',
        tag_name: 'jQuery',
        img_name: 'plugin-hlnewsticker'
    },
    {
        id: 5,
        href: 'jsp_jq_imgcomparison',
        title: '兩張影像的拖曳比較（Image Comparison）',
        tag_name: 'jQuery',
        img_name: 'plugin-imgcomparison'
    },
    {
        id: 6,
        href: 'jsp_jq_vtabs',
        title: '垂直切換頁籤（Tabs）',
        tag_name: 'jQuery',
        img_name: 'plugin-vtabs'
    },
    {
        id: 7,
        href: 'jsp_jq_mixitup',
        title: '項目篩選（MixItUp）',
        tag_name: 'jQuery',
        img_name: 'plugin-mixitup'
    },
    {
        id: 8,
        href: 'jsp_jq_masonry',
        title: '瀑布流（Masonry Grid）',
        tag_name: 'jQuery',
        img_name: 'plugin-masonry'
    },
    {
        id: 9,
        href: 'jsp_jq_copy',
        title: '複製區域文字（Copy）',
        tag_name: 'jQuery',
        img_name: 'plugin-copy'
    },
    {
        id: 10,
        href: 'jsp_jq_pagination',
        title: '分頁效果（Pagination）',
        tag_name: 'jQuery',
        img_name: 'plugin-pagination'
    },
    {
        id: 11,
        href: 'jsp_jq_textdots',
        title: '文字溢出省略符號（Text Dots）',
        tag_name: 'jQuery',
        img_name: 'plugin-textdots'
    },
    {
        id: 12,
        href: 'jsp_jq_datepicker',
        title: '日曆選擇工具（Calendar Picker）',
        tag_name: 'jQuery',
        img_name: 'plugin-datepicker'
    },
    {
        id: 13,
        href: 'jsp_js_picturefill',
        title: '使舊瀏覽器支援 <picture>',
        tag_name: 'javaScript',
        img_name: 'plugin-picturefill'
    },
    {
        id: 14,
        href: 'jsp_jq_gotop',
        title: '點擊返回網頁頂部的按鈕（Go Top）',
        tag_name: 'jQuery',
        img_name: 'plugin-gotop'
    },
    {
        id: 15,
        href: 'jsp_jq_placeholder',
        title: '點擊輸入框時提示文字變色（Placeholder）',
        tag_name: 'jQuery',
        img_name: 'plugin-placeholder'
    },
    {
        id: 16,
        href: 'jsp_jq_checkbox',
        title: '使群組內的核選方塊為單選（Checkbox）',
        tag_name: 'jQuery',
        img_name: 'plugin-checkbox'
    },
    {
        id: 17,
        href: 'jsp_jq_inputconfirm',
        title: '輸入框內容符合判定',
        tag_name: 'jQuery',
        img_name: 'plugin-inputconfirm'
    },
    {
        id: 18,
        href: 'jsp_jq_getfilename',
        title: '取得 Input file 上傳項目的名稱',
        tag_name: 'jQuery',
        img_name: 'plugin-getfilename'
    },
    {
        id: 19,
        href: 'jsp_jq_getfilename',
        title: '取得 Input file 上傳項目的名稱',
        tag_name: 'jQuery',
        img_name: 'plugin-getfilename'
    },
]

const miscData = [
    {
        id: 0,
        href: 'misc_apng',
        title: '什麼是 APNG？',
        time: '2017.08.03',
        tag1: true,
        tag1_name: '影像',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: 'thumb_apng'
    },
    {
        id: 1,
        href: 'misc_uiux',
        title: '關於 UI 與 UX 的三兩事',
        time: '2017.11.01',
        tag1: true,
        tag1_name: 'UI/UX',
        tag2: true,
        tag2_name: '設計',
        img: false,
        img_name: 'thumb_uiux'
    },
    {
        id: 2,
        href: 'misc_gestalt',
        title: 'UI 的格式塔心理學（Gestalt psychology）',
        time: '2017.11.12',
        tag1: true,
        tag1_name: 'UI/UX',
        tag2: true,
        tag2_name: '設計',
        img: false,
        img_name: 'thumb_gestalt'
    },
    {
        id: 3,
        href: 'misc_heif',
        title: '什麼是 HEIF？',
        time: '2017.11.26',
        tag1: true,
        tag1_name: '影像',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 4,
        href: 'misc_gdpr',
        title: 'GDPR：歐盟一般資料保護規章',
        time: '2018.11.04',
        tag1: true,
        tag1_name: '資安',
        tag2: true,
        tag2_name: '網際網路',
        img: false,
        img_name: 'thumb_gdpr'
    },
    {
        id: 5,
        href: 'misc_domain',
        title: '認識網域（Domain Name）',
        time: '2018.12.16',
        tag1: true,
        tag1_name: '網際網路',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 6,
        href: 'misc_msdos',
        title: 'MS-DOS 的基本指令介紹',
        time: '2019.05.09',
        tag1: true,
        tag1_name: 'Windows',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: 'thumb_msdos'
    },
    {
        id: 7,
        href: 'misc_bat_rename',
        title: '做一個簡易的批次更改副檔名功能執行程式',
        time: '2019.06.11',
        tag1: true,
        tag1_name: 'Windows',
        tag2: true,
        tag2_name: '教學',
        img: false,
        img_name: ''
    },
    {
        id: 8,
        href: 'misc_screenshot',
        title: '使用瀏覽器內建截圖功能來擷取網頁畫面',
        time: '2021.10.01',
        tag1: false,
        tag1_name: '',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
]

const appData = [
    // {
    //     id: 0,
    //     href: 'app_sublime_install',
    //     title: 'Sublime Text 安裝與初始設定',
    //     time: '2016.11.22',
    //     tag1: true,
    //     tag1_name: '編輯器',
    //     tag2: true,
    //     tag2_name: 'Sublime',
    //     img: false,
    //     img_name: 'thumb_sublime'
    // },
    {
        id: 0,
        href: 'app_git_intro',
        title: '分散式的版本控制系統──Git 介紹與安裝教學',
        time: '2020.04.05',
        tag1: true,
        tag1_name: 'git',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: 'thumb_git'
    },
    {
        id: 1,
        href: 'app_git_process',
        title: 'Git 筆記（一）：版本控制流程簡述',
        time: '2020.04.06',
        tag1: true,
        tag1_name: 'git',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 2,
        href: 'app_git_init',
        title: 'Git 筆記（二）：版本庫建立與提交流程',
        time: '2020.04.09',
        tag1: true,
        tag1_name: 'git',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 3,
        href: 'app_git_github',
        title: 'Git 筆記（三）：使用 GitHub 建立遠端儲存庫（repository）',
        time: '2021.01.12',
        tag1: true,
        tag1_name: 'git',
        tag2: true,
        tag2_name: 'GitHub',
        img: false,
        img_name: ''
    },
    {
        id: 4,
        href: 'app_git_push',
        title: 'Git 筆記（四）：將本機端版本庫推送資料至遠端儲存庫',
        time: '2021.08.15',
        tag1: true,
        tag1_name: 'git',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    {
        id: 5,
        href: 'app_git_token',
        title: 'Git 筆記（五）：GitHub 的 Token 申請流程',
        time: '2021.08.16',
        tag1: true,
        tag1_name: 'git',
        tag2: true,
        tag2_name: 'GitHub',
        img: false,
        img_name: ''
    },
    {
        id: 5,
        href: 'app_git_pull',
        title: 'Git 筆記（六）：從遠端儲存庫下載或同步資料至本機端',
        time: '2021.08.18',
        tag1: true,
        tag1_name: 'git',
        tag2: false,
        tag2_name: '',
        img: false,
        img_name: ''
    },
    // {
    //     id: 4,
    //     href: 'app_vscode_install',
    //     title: '‍Visual Studio Code 介紹與安裝教學',
    //     time: '2020.02.15',
    //     tag1: true,
    //     tag1_name: '編輯器',
    //     tag2: true,
    //     tag2_name: 'VSCode',
    //     img: false,
    //     img_name: 'thumb_vscode'
    // },
]

const hikData = [
    {
        id: 0,
        href: 'hiking_001',
        name: '學田山',
        title: '學田山',
        catalog: 'lv3',
        tag: true,
        site: '台中市烏日區',
        height: '136m',
        date: '2020.08.07',
        img_name: '20200807'
    },
    {
        id: 1,
        href: 'hiking_002',
        name: '鳶嘴山',
        title: '鳶嘴山',
        catalog: 'lv2',
        tag: true,
        site: '台中市和平區',
        height: '2,180m',
        date: '2019.10.05',
        img_name: '20191005'
    },
    {
        id: 2,
        href: 'hiking_003',
        name: '火炎山',
        title: '小百岳 #35：火炎山',
        catalog: 'sm100',
        tag: true,
        site: '苗栗縣苑裡鎮',
        height: '602m',
        date: '2019.04.28',
        img_name: '20190428'
    },
    {
        id: 3,
        href: 'hiking_004',
        name: '大橫屏山',
        title: '小百岳 #45：大橫屏山',
        catalog: 'sm100',
        tag: true,
        site: '台中市太平區',
        height: '1,206m',
        date: '2020.08.09',
        img_name: '20200809'
    },
    {
        id: 4,
        href: 'hiking_005',
        name: '奇萊主山南峰',
        title: '百岳 #41：奇萊主山南峰',
        catalog: 'bm100',
        tag: true,
        site: '南投縣仁愛鄉',
        height: '3,358m',
        date: '2018.10.13',
        img_name: '20181013'
    },
    {
        id: 5,
        href: 'hiking_006',
        name: '波津加山',
        title: '谷關七雄 ● 老四：波津加山',
        catalog: 'lv2',
        tag: true,
        site: '台中市和平區',
        height: '1,772m',
        date: '2019.12.01',
        img_name: '20191201'
    },
    {
        id: 6,
        href: 'hiking_007',
        name: '東卯山',
        title: '谷關七雄 ● 老五：東卯山',
        catalog: 'lv2',
        tag: true,
        site: '台中市和平區',
        height: '1,690m',
        date: '2019.12.14',
        img_name: '20191214'
    },
    {
        id: 7,
        href: 'hiking_008',
        name: '唐麻丹山',
        title: '谷關七雄 ● 老么：唐麻丹山',
        catalog: 'lv2',
        tag: true,
        site: '台中市和平區',
        height: '1,305m',
        date: '2019.12.15',
        img_name: '20191215_1'
    },
    {
        id: 8,
        href: 'hiking_009',
        name: '屋我尾山',
        title: '谷關七雄 ● 老三：屋我尾山',
        catalog: 'lv2',
        tag: true,
        site: '台中市和平區',
        height: '1,796m',
        date: '2019.12.15',
        img_name: '20191215_2'
    },
    {
        id: 9,
        href: 'hiking_010',
        name: '馬崙山',
        title: '谷關七雄 ● 老二：馬崙山',
        catalog: 'lv2',
        tag: true,
        site: '台中市和平區',
        height: '2,305m',
        date: '2020.01.04',
        img_name: '20200104'
    },
    {
        id: 10,
        href: 'hiking_011',
        name: '白毛山',
        title: '谷關七雄 ● 老六：白毛山',
        catalog: 'lv2',
        tag: true,
        site: '台中市和平區',
        height: '1,522m',
        date: '2020.01.18',
        img_name: '20200118'
    },
    {
        id: 11,
        href: 'hiking_012',
        name: '八仙山',
        title: '谷關七雄 ● 老大：八仙山',
        catalog: 'lv2',
        tag: true,
        site: '台中市和平區',
        height: '2,366m',
        date: '2020.02.09',
        img_name: '20200209'
    },
    {
        id: 12,
        href: 'hiking_013',
        name: '阿冷山',
        title: '谷關第「八」雄：小奇萊 ● 阿冷山',
        catalog: 'lv2',
        tag: true,
        site: '台中市和平區',
        height: '1,540m',
        date: '2020.02.28',
        img_name: '20200228'
    },
    {
        id: 13,
        href: 'hiking_014',
        name: '審馬陣山',
        title: '帝王座巡禮── 百岳 #83：審馬陣山',
        catalog: 'bm100',
        tag: true,
        site: '台中市和平區',
        height: '3,141m',
        date: '2019.10.11',
        img_name: '20191011'
    },
    {
        id: 14,
        href: 'hiking_015',
        name: '南湖北山',
        title: '帝王座巡禮── 百岳 #22：南湖北山',
        catalog: 'bm100',
        tag: true,
        site: '宜蘭縣南澳鄉',
        height: '3,536m',
        date: '2019.10.12',
        img_name: '20191012_1'
    },
    {
        id: 15,
        href: 'hiking_016',
        name: '南湖大山',
        title: '帝王座巡禮── 百岳 #8：南湖大山',
        catalog: 'bm100',
        tag: true,
        site: '台中市和平區',
        height: '3,740m',
        date: '2019.10.12',
        img_name: '20191012_2'
    },
    {
        id: 16,
        href: 'hiking_017',
        name: '九九峰',
        title: '九九峰森林步道',
        catalog: 'lv3',
        tag: true,
        site: '南投縣草屯區',
        height: '779m',
        date: '2020.11.28',
        img_name: '20201128'
    },
    {
        id: 17,
        href: 'hiking_018',
        name: '加里山',
        title: '小百岳 #34：加里山',
        catalog: 'sm100',
        tag: true,
        site: '苗栗縣南庄鄉',
        height: '2,220m',
        date: '2019.09.29',
        img_name: '20190929'
    },
    {
        id: 18,
        href: 'hiking_019',
        name: '頭嵙山',
        title: '小百岳 #41：頭嵙山',
        catalog: 'sm100',
        tag: true,
        site: '台中市新社區',
        height: '859m',
        date: '2018.09.29',
        img_name: '20180929'
    },
    {
        id: 19,
        href: 'hiking_020',
        name: '馬那邦山',
        title: '小百岳 #37：馬那邦山',
        catalog: 'sm100',
        tag: true,
        site: '苗栗縣泰安鄉',
        height: '1,407m',
        date: '2020.03.22',
        img_name: '20200322'
    },
    {
        id: 20,
        href: 'hiking_021',
        name: '稍來山',
        title: '小百岳 #39：稍來山',
        catalog: 'sm100',
        tag: true,
        site: '台中市和平區',
        height: '2,307m',
        date: '2020.04.11',
        img_name: '20200411'
    },
    {
        id: 21,
        href: 'hiking_022',
        name: '水社大山',
        title: '明潭四秀之首：水社大山',
        catalog: 'lv2',
        tag: true,
        site: '南投市魚池鄉',
        height: '2,059m',
        date: '2020.07.19',
        img_name: '20200719'
    },
    {
        id: 22,
        href: 'hiking_023',
        name: '嘉南雲峰',
        title: '雲林第一高峰：嘉南雲峰',
        catalog: 'lv2',
        tag: true,
        site: '雲林縣古坑鄉',
        height: '1,795m',
        date: '2020.10.09',
        img_name: '20201009'
    },
    {
        id: 23,
        href: 'hiking_024',
        name: '合歡山東峰',
        title: '合歡群峰走透透 ● 一：合歡山東峰',
        catalog: 'bm100',
        tag: true,
        site: '南投縣仁愛鄉',
        height: '3,421m',
        date: '2020.08.20',
        img_name: '20200820_1'
    },
    {
        id: 24,
        href: 'hiking_025',
        name: '合歡尖山',
        title: '合歡群峰走透透 ● 二：合歡尖山',
        catalog: 'lv1',
        tag: true,
        site: '南投縣仁愛鄉',
        height: '3,217m',
        date: '2020.08.20',
        img_name: '20200820_2'
    },
    {
        id: 25,
        href: 'hiking_026',
        name: '石門山',
        title: '合歡群峰走透透 ● 三：石門山＆石門山北峰',
        catalog: 'bm100',
        tag: true,
        site: '南投縣仁愛鄉',
        height: '3,237m',
        date: '2020.08.20',
        img_name: '20200820_3'
    },
    {
        id: 26,
        href: 'hiking_027',
        name: '合歡山主峰',
        title: '合歡群峰走透透 ● 四：合歡山主峰',
        catalog: 'bm100',
        tag: true,
        site: '南投縣仁愛鄉',
        height: '3,417m',
        date: '2020.08.20',
        img_name: '20200820_4'
    },
    {
        id: 27,
        href: 'hiking_028',
        name: '南合歡山',
        title: '合歡群峰走透透 ● 五：南合歡山',
        catalog: 'lv1',
        tag: true,
        site: '南投縣仁愛鄉',
        height: '3,220m',
        date: '2020.08.20',
        img_name: '20200820_5'
    },
    {
        id: 28,
        href: 'hiking_029',
        name: '北合歡山',
        title: '合歡群峰走透透 ● 六：北合歡山',
        catalog: 'bm100',
        tag: true,
        site: '南投縣仁愛鄉',
        height: '3,422m',
        date: '2020.08.21',
        img_name: '20200821'
    },
    {
        id: 29,
        href: 'hiking_030',
        name: '三汀山',
        title: '小百岳 #43：三汀山',
        catalog: 'sm100',
        tag: true,
        site: '台中市太平區',
        height: '480m',
        date: '2020.11.23',
        img_name: '20201123'
    },
    {
        id: 30,
        href: 'hiking_031',
        name: '聚興山',
        title: '小百岳 #40：聚興山',
        catalog: 'sm100',
        tag: true,
        site: '台中市潭子區',
        height: '500m',
        date: '2020.11.28',
        img_name: '20201128_2'
    },
    {
        id: 31,
        href: 'hiking_032',
        name: '飛鳳山',
        title: '小百岳 #27：飛鳳山',
        catalog: 'sm100',
        tag: true,
        site: '新竹縣芎林鄉',
        height: '462m',
        date: '2020.11.29',
        img_name: '20201129_1'
    },
    {
        id: 32,
        href: 'hiking_033',
        name: '五指山',
        title: '小百岳 #30：五指山',
        catalog: 'sm100',
        tag: true,
        site: '新竹縣竹東鎮',
        height: '1,062m',
        date: '2020.11.29',
        img_name: '20201129_2'
    },
    {
        id: 33,
        href: 'hiking_034',
        name: '太平山',
        title: '雲嘉五連峰＋１ ● 一：太平山',
        catalog: 'lv3',
        tag: true,
        site: '嘉義縣梅山鄉',
        height: '1,082m',
        date: '2020.12.07',
        img_name: '20201207_1'
    },
    {
        id: 34,
        href: 'hiking_035',
        name: '梨子腳山',
        title: '雲嘉五連峰＋１ ● 二：梨子腳山＆馬鞍山',
        catalog: 'sm100',
        tag: true,
        site: '嘉義縣梅山鄉',
        height: '1,176m',
        date: '2020.12.07',
        img_name: '20201207_2'
    },
    {
        id: 35,
        href: 'hiking_036',
        name: '雲嘉大尖山',
        title: '雲嘉五連峰＋１ ● 三：二尖山＆大尖山',
        catalog: 'sm100',
        tag: true,
        site: '雲林縣古坑鄉',
        height: '1,305m',
        date: '2020.12.07',
        img_name: '20201207_3'
    },
    {
        id: 36,
        href: 'hiking_037',
        name: '獨立山',
        title: '雲嘉五連峰＋１ ● 四：獨立山',
        catalog: 'sm100',
        tag: true,
        site: '嘉義縣竹崎鄉',
        height: '840m',
        date: '2020.12.07',
        img_name: '20201207_4'
    },
    {
        id: 37,
        href: 'hiking_038',
        name: '關刀山',
        title: '小百岳 #36：關刀山',
        catalog: 'sm100',
        tag: true,
        site: '苗栗縣三義鄉',
        height: '889m',
        date: '2020.12.12',
        img_name: '20201212_1'
    },
    {
        id: 38,
        href: 'hiking_039',
        name: '獅頭山',
        title: '小百岳 #29：獅頭山',
        catalog: 'sm100',
        tag: true,
        site: '苗栗縣南庄鄉',
        height: '492m',
        date: '2020.12.12',
        img_name: '20201212_2'
    },
    {
        id: 39,
        href: 'hiking_040',
        name: '石壁山',
        title: '小百岳 #55：石壁山',
        catalog: 'sm100',
        tag: true,
        site: '雲林縣古坑鄉',
        height: '1751m',
        date: '2021.01.02',
        img_name: '20210102'
    },
]

const resData = [
    {
        id: 0,
        href: 'https://www.colorzilla.com/gradient-editor/',
        title: 'Ultimate CSS Gradient Generator',
        desc: '方便好用的線上漸層調製工具，可向下支援至 ie8。',
        tag: 'webfront',
        img: true,
        img_name: 'colorZilla'
    },
    {
        id: 1,
        href: 'http://apps.eky.hk/css-triangle-generator/zh-hant',
        title: 'CSS 三角形產生器',
        desc: '可即時設定任何三角形的 CSS 樣式，並輸出原始碼提供複製取用。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 2,
        href: 'http://tw.faviconico.org/',
        title: 'Favicon 線上製作轉換工具',
        desc: 'favicon.ico 一般用於作為縮略的網站標誌，它顯示在流覽器的位址欄、流覽器標籤上或者在我的最愛上，是展示網站個性的縮略 logo 標誌。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 3,
        href: 'https://beautifier.io/',
        title: 'Online JavaScript Beautifier',
        desc: '提供線上美化 JavaScript 程式碼，使用者可透過相關參數設置輸出適合自己專案的美化格式。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 4,
        href: 'https://www.aconvert.com/tw/image/webp-to-png/',
        title: 'ACONVERT',
        desc: '提供各種線上轉檔的服務，包含 .webp 影像格式的轉換，或是電子書文件的轉換等。',
        tag: 'media',
        img: true,
        img_name: 'aconvert'
    },
    {
        id: 5,
        href: 'https://placeholder.com/',
        title: 'Placehold.it',
        desc: '範例圖片產生器，同時可變更圖片顏色、尺寸，甚至加入文字。',
        tag: 'webfront',
        img: true,
        img_name: 'placeholder'
    },
    {
        id: 6,
        href: 'http://www.colorfavs.com/',
        title: 'colorfavs',
        desc: '上傳你想要分析影像色彩的圖檔，它可自動幫你解析顏色代碼，也可以查看其他配色方案，收藏喜歡的配色。',
        tag: 'webfront',
        img: true,
        img_name: 'colorfavs'
    },
    {
        id: 7,
        href: 'https://stackedit.io/',
        title: 'StackEdit',
        desc: '一款可線上撰寫 Markdown 程式語言的線上工具，有提供輸出轉檔的功能。',
        tag: 'webfront',
        img: true,
        img_name: 'stackedit'
    },
    {
        id: 8,
        href: 'https://cacoo.com/home',
        title: 'Cacoo',
        desc: '提供圖表與 Flowchart 製作、圖表分享與張貼圖表的線上服務。',
        tag: 'webfront',
        img: true,
        img_name: 'cacoo'
    },
    {
        id: 9,
        href: 'http://css2sass.herokuapp.com/',
        title: 'CSS 2 SASS/SCSS CONVERTER',
        desc: '快速轉換 CSS、SASS / SCSS 的線上工具。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 10,
        href: 'https://cssgrid-generator.netlify.com/',
        title: 'CSS Grid Generator',
        desc: '透過 CSS 格線產生器，讓網頁排版更加整齊美觀。',
        tag: 'webfront',
        img: true,
        img_name: 'cssgrid'
    },
    {
        id: 11,
        href: 'https://cubic-bezier.com/#.17,.67,.83,.67',
        title: 'cubic-bezier',
        desc: 'CSS animation 的貝茲曲線線上編輯器，如果不喜歡原本屬性設置的 timing-function，可嘗試利用此工具網站來編輯想要呈現的曲線。',
        tag: 'webfront',
        img: true,
        img_name: 'cubic-bezier'
    },
    {
        id: 12,
        href: 'http://cssanimate.com/',
        title: 'CSS Animate',
        desc: '可在此網站直接製作動畫並觀看演示效果，可立即輸出原始碼，方便設計師直接複製使用。',
        tag: 'webfront',
        img: true,
        img_name: 'cssanimate'
    },
    {
        id: 13,
        href: 'https://jscompress.com/',
        title: 'JSCompress',
        desc: '將 Javascript 原始碼壓縮減少容量空間的線上工具。',
        tag: 'webfront',
        img: true,
        img_name: 'jscompress'
    },
    {
        id: 14,
        href: 'https://squoosh.app/',
        title: 'Squoosh',
        desc: '由 Google 團隊發佈的線上圖片壓縮工具。',
        tag: 'webfront',
        img: true,
        img_name: 'squoosh'
    },
    {
        id: 15,
        href: 'https://bennettfeely.com/clippy/',
        title: 'CSS clip-path maker',
        desc: '可線上繪製 clip-path 圖形，並即時產生 CSS 碼提供複製使用，此外也有預設幾種多邊型。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 16,
        href: 'https://tinypng.com/',
        title: 'TinyPNG',
        desc: '提供圖片壓縮的線上服務，可顯著減少圖片的容量。',
        tag: 'webfront',
        img: true,
        img_name: 'tinypng'
    },
    {
        id: 17,
        href: 'http://placekitten.com/',
        title: 'placekitten',
        desc: '與 Placehold.it 雷同，藉由一串網址來產生圖片，比較特別的是，placekitten 產生的圖片是貓的影像，相較其他相同類型的圖片產生網站來說更加生動活潑。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 18,
        href: 'https://vectorpaint.yaks.co.nz/',
        title: 'SVG Editor',
        desc: '提供線上繪製 SVG 的服務。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 19,
        href: 'https://mixpanel.com/',
        title: 'mixpanel',
        desc: '分析網站的操作模式。',
        tag: 'webfront',
        img: true,
        img_name: 'mixpanel'
    },
    {
        id: 20,
        href: 'https://developers.google.com/speed/pagespeed/insights/',
        title: 'PageSpeed Insights',
        desc: '由 Google developers 推出的網頁載入速度評測工具，可分析網頁是否符合通用規範，總結效能分數並提供改善建議。',
        tag: 'webfront',
        img: true,
        img_name: 'pagespeed'
    },
    {
        id: 21,
        href: 'https://c.runoob.com/',
        title: '菜鸟工具',
        desc: '定義文件檔案類型。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 22,
        href: 'http://tool.chinaz.com/tools/urlencode.aspx',
        title: 'Chinaz.com',
        desc: '您可以使用本工具對中文進行 UrlEncode 編碼。',
        tag: 'webfront',
        img: true,
        img_name: 'chinaz'
    },
    {
        id: 23,
        href: 'http://www.peise.net/tools/web/',
        title: 'Color Scheme Designer',
        desc: '線上配色工具，提供單或多種配色方案選擇，可即時預覽汲取色票之呈現畫面。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 24,
        href: 'https://www.apowersoft.tw/heic-to-jpg',
        title: '免費 HEIC 圖片轉換',
        desc: '免費 HEIC 圖片轉換',
        tag: 'media',
        img: true,
        img_name: 'apowersoft'
    },
    {
        id: 25,
        href: 'https://www.apowersoft.tw/free-online-audio-editor',
        title: 'Apowersoft免費線上音訊編輯',
        desc: '線上免費剪輯音樂網站，讓音訊剪輯更輕鬆。',
        tag: 'media',
        img: true,
        img_name: 'apowersoft'
    },
    {
        id: 26,
        href: 'https://www.onlinevideoconverter.com/zh',
        title: 'OnlineVideoConverter',
        desc: 'YouTube 影片轉檔下載的工具，支援多種格式，諸如 .mp3、.ogg、.wma ...等。',
        tag: 'media',
        img: true,
        img_name: 'onlinevideoconverter'
    },
    {
        id: 27,
        href: 'http://qr.calm9.com/tw/',
        title: 'QR Code 條碼產生器',
        desc: '快速生成 QR CODE 二維條碼的線上工具網站。',
        tag: 'others',
        img: false,
        img_name: ''
    },
    {
        id: 28,
        href: 'https://10minutemail.net/',
        title: '10 分鐘信箱',
        desc: '10 分鐘壽命的電子信箱，超時就失效，避免收到垃圾郵件最好的選擇。',
        tag: 'others',
        img: false,
        img_name: ''
    },
    {
        id: 29,
        href: 'http://gs.statcounter.com/',
        title: 'StatCounter',
        desc: '可查詢目前使用者主流瀏覽器的種類、排名、比例。',
        tag: 'webfront',
        img: true,
        img_name: 'statcounter'
    },
    {
        id: 30,
        href: 'http://hao.shejidaren.com/',
        title: '設計導航',
        desc: '集結許多設計人常造訪或推薦的實用網站，有事沒事可以來造訪看看，或許會發現一些未知的寶典。',
        tag: 'webfront',
        img: true,
        img_name: 'shejidaren'
    },
    {
        id: 31,
        href: 'https://fonts.adobe.com/',
        title: 'Adobe Fonts',
        desc: '由 Adobe 提供的文字庫，可以將其提供的字型用於網頁之中。',
        tag: 'webfront',
        img: true,
        img_name: 'adobefonts'
    },
    {
        id: 32,
        href: 'http://freefrontend.com/',
        title: 'FREE FRONTEND',
        desc: '提供多種 CSS 的實用效果範例，可打包下載應用於自己的專案上。',
        tag: 'webfront',
        img: true,
        img_name: 'freefrontend'
    },
    {
        id: 33,
        href: 'https://www.toptal.com/designers/htmlarrows/',
        title: 'HTML Symbols',
        desc: '提供多種特殊符號的網頁編碼，是除了 Font icon 之外替代使用圖片的不錯方法。',
        tag: 'webfront',
        img: true,
        img_name: 'htmlarrows'
    },
    {
        id: 34,
        href: 'http://necolas.github.io/normalize.css/',
        title: 'Normalize.css',
        desc: '目前最流行的 CSS 重製樣式表之一，較另一款「Reset」多些彈性，並保留有價值的屬性默認值。',
        tag: 'webfront',
        img: true,
        img_name: 'normalize'
    },
    {
        id: 35,
        href: 'http://fontawesome.io/',
        title: 'Font Awesome',
        desc: '目前市面上最流行的文字 Icon 工具。',
        tag: 'webfront',
        img: true,
        img_name: 'fontawesome'
    },
    {
        id: 36,
        href: 'https://daneden.github.io/animate.css/',
        title: 'Animate.css',
        desc: '頗為流行的現成 CSS 動畫效果套件，可直接下載 CSS 檔至自己網頁資料夾中使用、編輯。',
        tag: 'webfront',
        img: true,
        img_name: 'animate'
    },
    {
        id: 37,
        href: 'http://leaverou.github.io/prefixfree/',
        title: '-prefix-free',
        desc: '-prefix-free 是一套 JavaScript 工具，可以自動檢查網頁中的 CSS 程式碼，將必要的供應商前綴自動加上去。',
        tag: 'webfront',
        img: true,
        img_name: 'prefixfree'
    },
    {
        id: 38,
        href: 'https://www.iviewui.com/',
        title: 'iView',
        desc: '一套基於 Vue.js 的高質量 UI 组件庫。',
        tag: 'webfront',
        img: true,
        img_name: 'iviewui'
    },
    {
        id: 39,
        href: 'https://webgradients.com/',
        title: 'WebGradients',
        desc: '擁有 180 款利用 CSS3 background linear gradients 調配而成的漸層色彩庫。',
        tag: 'material',
        img: true,
        img_name: 'webgradients'
    },
    {
        id: 40,
        href: 'https://colourco.de/',
        title: 'Colourco',
        desc: '移動滑鼠可即時取得所需之色彩代碼。',
        tag: 'material',
        img: true,
        img_name: 'colourco'
    },
    {
        id: 41,
        href: 'http://colormind.io/bootstrap/',
        title: 'Colormind',
        desc: '隨機產生配色的網站，此網站較重視略為中性的調和色，產生出來的色調搭配於視覺上較為柔和。',
        tag: 'material',
        img: true,
        img_name: 'colormind'
    },
    {
        id: 42,
        href: 'https://www.color-hex.com/color-palettes/',
        title: 'color-hex',
        desc: '一個數量高達四萬多款的色彩搭配網站。',
        tag: 'material',
        img: true,
        img_name: 'color-hex'
    },
    {
        id: 43,
        href: 'http://www.lolcolors.com/',
        title: 'LOLCOLORS',
        desc: '水滴型的顏色搭配，提供多樣的顏色組合，讓視覺設計更加流暢。',
        tag: 'material',
        img: true,
        img_name: 'lolcolors'
    },
    {
        id: 44,
        href: 'https://colorhunt.co/',
        title: 'Color Hunt',
        desc: '每天都會釋出一組新的顏色搭配，若在設計配色運用上滯礙難行可多加利用。',
        tag: 'material',
        img: true,
        img_name: 'colorhunt'
    },
    {
        id: 45,
        href: 'https://nipponcolors.com/',
        title: '日本傳統色系參考',
        desc: '展示日本傳統風格的各種色彩。',
        tag: 'material',
        img: true,
        img_name: 'nipponcolors'
    },
    {
        id: 46,
        href: 'http://iosfonts.com/',
        title: 'iOS Fonts',
        desc: '可查詢目前 iOS 系統有支援哪些字型。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 47,
        href: 'https://www.mobile-patterns.com/',
        title: 'MOBILE PATTERNS',
        desc: '一個致力於手機裝置介面設計的資源網站，分別提供 Android 及 iOS 的設計範例，同時也提供幾種常見功能的分類選項，得以迅速查閱想要參考的設計方式。',
        tag: 'material',
        img: true,
        img_name: 'mobile-patterns'
    },
    {
        id: 48,
        href: 'https://www.csswinner.com/',
        title: 'CSSWINNER',
        desc: '顧名思義，CSSWINNER 是評分各式網頁作品的線上平台，可以看到諸多網站的各項評分，設計師可以此為借鏡，推敲現今受歡迎的網站設計風格。',
        tag: 'material',
        img: true,
        img_name: 'csswinner'
    },
    {
        id: 49,
        href: 'https://material.io/resources/devices/',
        title: 'Device Metrics',
        desc: '從 Google 的 Material Design 網站提供的 Device Metrics 工具，收錄近年較知名、常見的行動裝置資訊，提供其畫面尺寸、長寬比、PPI、作業系統類型...等訊息。',
        tag: 'material',
        img: true,
        img_name: 'material'
    },
    {
        id: 50,
        href: 'http://screensiz.es/',
        title: 'SCREEN SIZ.ES',
        desc: '與 Device Metrics 工具相同，是查詢各種常見行動裝置各項軟硬體數據的方便網站。',
        tag: 'material',
        img: true,
        img_name: 'screensiz'
    },
    {
        id: 51,
        href: 'https://www.pexels.com/zh-tw/',
        title: 'Pexels',
        desc: '在 Pexels 圖庫裡收錄的相片素材皆採用 CC0（Creative Commons Zero）授權，可使用於個人或商業用途，亦可編輯、修改、複製，不用標註來源或鏈結。',
        tag: 'material',
        img: true,
        img_name: 'pexels'
    },
    {
        id: 52,
        href: 'https://www.brandeps.com/',
        title: 'BrandEPS',
        desc: '擁有大量品牌 LOGO 或 icon 圖示矢量圖的素材網站。',
        tag: 'material',
        img: true,
        img_name: 'brandeps'
    },
    {
        id: 53,
        href: 'http://huaban.com/',
        title: '花瓣网',
        desc: '提供很多類型的創作靈感。',
        tag: 'material',
        img: true,
        img_name: 'huaban'
    },
    {
        id: 54,
        href: 'http://www.ene-design.com/?p_order=view',
        title: 'ホームページデザイン制作の参考に',
        desc: '一個蒐集很多網站設計的日本網站。',
        tag: 'material',
        img: true,
        img_name: 'ene-design'
    },
    {
        id: 55,
        href: 'https://www.freepik.com/',
        title: 'Freepik',
        desc: '免費向量、影像、PSD 檔案下載的素材網站。',
        tag: 'material',
        img: true,
        img_name: 'freepik'
    },
    {
        id: 56,
        href: 'https://sketchsheets.com/',
        title: 'sketchsheets',
        desc: '可下載瀏覽器、常見行動裝置，甚至是 Apple Watch 的設備模板圖檔。',
        tag: 'material',
        img: true,
        img_name: 'sketchsheets'
    },
    {
        id: 57,
        href: 'https://www.materialpalette.com/light-blue/lime',
        title: 'material design palette',
        desc: '秉持「在大面積色塊使用大膽的配色，利用動畫讓介面更生動活潑」的特色，Google 提供了為網頁進行版型配色的線上工具網站，同時也釋出免費 icon 供設計師下載使用。',
        tag: 'material',
        img: true,
        img_name: 'materialpalette'
    },
    {
        id: 58,
        href: 'https://www.behance.net/',
        title: 'Behance',
        desc: 'Behance 比較像是設計師的部落格，同樣也是設計人必知的作品集網站，它背後有 Adobe 作支持，可與 Adobe 軟體相連結。',
        tag: 'material',
        img: true,
        img_name: 'behance'
    },
    {
        id: 59,
        href: 'https://dribbble.com/',
        title: 'Dribbble',
        desc: '國外非常有名，同時也是偌大設計人必須認識的知名設計網站之一，dribble 一詞來自籃球裡「運球」之意，就連網站許多功能都和籃球術語有關。',
        tag: 'material ',
        img: true,
        img_name: 'dribbble'
    },
    {
        id: 60,
        href: 'https://responsive-jp.com/',
        title: 'Responsive Web Design JP',
        desc: '分享日本諸多 RWD 網頁的平台，可提供視覺設計靈感。',
        tag: 'material',
        img: true,
        img_name: 'responsive-jp'
    },
    {
        id: 61,
        href: 'https://material.io/resources/icons/',
        title: 'Material icons',
        desc: '由 Google 提供的免費向量圖集，包含 SVG、PNGs、Icon Font 等檔案類型，可用於個人或企業專案。',
        tag: 'material',
        img: true,
        img_name: 'mobile-patterns'
    },
    {
        id: 62,
        href: 'https://www.flaticon.com/',
        title: 'FLATICON',
        desc: '提供免費的圖示搜尋下載服務。',
        tag: 'material',
        img: true,
        img_name: 'flaticon'
    },
    {
        id: 63,
        href: 'https://juejin.im/',
        title: '掘金',
        desc: '掘金是一個來自中國的高質量社區，提供網頁工作者分享技術、汲取新知的管道。',
        tag: 'teach',
        img: true,
        img_name: 'juejin'
    },
    {
        id: 64,
        href: 'https://uiiiuiii.com/',
        title: 'UiiiUiii 优优教程网',
        desc: '適合所有設計師學習繪圖軟體或分享個人創意的設計平台。',
        tag: 'teach',
        img: true,
        img_name: 'uiiiuiii'
    },
    {
        id: 65,
        href: 'http://www.xueui.cn/',
        title: '学ui网—ui设计师学习教程平台',
        desc: '中國最大、最熱門的 UI 分享設計平台之一。',
        tag: 'teach',
        img: true,
        img_name: 'xueui'
    },
    {
        id: 66,
        href: 'https://cssreference.io/',
        title: 'cssreference.io',
        desc: '收錄所有 CSS 屬性的教學網站。',
        tag: 'teach',
        img: true,
        img_name: 'cssreference'
    },
    {
        id: 67,
        href: 'https://htmlreference.io/',
        title: 'htmlreference.io',
        desc: '收錄所有 HTML 元素及屬性說明的教學網站。',
        tag: 'teach',
        img: true,
        img_name: 'htmlreference'
    },
    {
        id: 68,
        href: 'https://www.codecademy.com/',
        title: 'codecademy',
        desc: '實用的網頁前端語言教學網站。',
        tag: 'teach',
        img: true,
        img_name: 'codecademy'
    },
    {
        id: 69,
        href: 'https://oscarotero.com/jquery/',
        title: 'jQuery Quick API Reference',
        desc: '學習 jQuery 的實用教學網站。',
        tag: 'teach',
        img: true,
        img_name: 'oscarotero'
    },
    {
        id: 70,
        href: 'https://codecombat.com/',
        title: 'CodeCombat',
        desc: '標榜一邊玩遊戲，一邊學程式語言的教學網站，有中文版版本。',
        tag: 'teach',
        img: true,
        img_name: 'codecombat'
    },
    {
        id: 71,
        href: 'https://www.sublimetext.com/',
        title: 'Sublime Text',
        desc: '一套跨平台的程式編輯器，為時下熱門的程式開發軟體之一。',
        tag: 'webfront',
        img: true,
        img_name: 'sublimetext'
    },
    {
        id: 72,
        href: 'https://prepros.io/',
        title: 'Prepros',
        desc: '支援多種前端程式語言（如：Less、Sass、SCSS、Jade ...等）的編譯工具，且享有永久試用的福利。',
        tag: 'webfront',
        img: true,
        img_name: 'prepros'
    },
    {
        id: 73,
        href: 'https://code.visualstudio.com/',
        title: 'Visual Studio Code',
        desc: '一套由微軟公司開發的跨平台程式編輯器。',
        tag: 'webfront',
        img: true,
        img_name: 'visualstudio'
    },
    {
        id: 74,
        href: 'https://nodejs.org/en/',
        title: 'Node.js',
        desc: 'NodeJS 是一套高效能、易擴充的網站應用程式開發框架（Web Application Framework）。',
        tag: 'webfront',
        img: true,
        img_name: 'nodejs'
    },
    {
        id: 75,
        href: 'http://compass-style.org/',
        title: 'Compass',
        desc: 'Compass 是一個 sass 的 Framework，將原來在 sass 裡要寫很多次的樣式，Compass 已內建簡化的寫法。',
        tag: 'webfront',
        img: true,
        img_name: 'compass'
    },
    {
        id: 76,
        href: 'https://rubyinstaller.org/',
        title: 'RubyInstaller',
        desc: '用於安裝 Ruby 語言的開發工具與運行環境。',
        tag: 'others',
        img: true,
        img_name: 'rubyinstaller'
    },
    {
        id: 77,
        href: 'https://gitforwindows.org/',
        title: 'git',
        desc: '分散式版本控制系統，是目前最受歡迎且必須要學會的版本控制軟體。',
        tag: 'others',
        img: true,
        img_name: 'git'
    },
    {
        id: 78,
        href: 'http://www.fancynode.com.cn/pxcook',
        title: 'PxCook',
        desc: '高效的自動標註工具，同時支援 Adobe Photoshop 與 Sketch。',
        tag: 'others',
        img: true,
        img_name: 'pxcook'
    },
    {
        id: 79,
        href: 'http://www.getmarkman.com/',
        title: 'Markman',
        desc: '馬克鰻，設計稿標註測量工具。',
        tag: 'others',
        img: true,
        img_name: 'markman'
    },
    {
        id: 80,
        href: 'https://www.apachefriends.org/zh_tw/index.html',
        title: 'XAMPP',
        desc: 'XAMPP 是完全免費且易於安裝的 Apache 發行版本，號稱時下最流行的 PHP 開發環境。',
        tag: 'others',
        img: true,
        img_name: 'xampp'
    },
    {
        id: 81,
        href: 'https://picpick.app/zh-tw/',
        title: 'PicPick',
        desc: '一款全功能的螢幕擷取工具、直觀的圖片編輯器、色彩選擇器、調色盤、尺規、量角器、十字線和白板等等...',
        tag: 'media',
        img: true,
        img_name: 'picpick'
    },
    {
        id: 82,
        href: 'http://psydk.org/pngoptimizer',
        title: 'PSYDK.ORG',
        desc: 'PngOptimizer 是一款免費的圖片壓縮減肥軟體，支援 PNG、BMP、GIF、TGA、APNG 等圖檔格式，但不支援 JPEG。',
        tag: 'media',
        img: true,
        img_name: 'psydk'
    },
    {
        id: 83,
        href: 'https://www.copytrans.net/copytransheic/',
        title: 'CopyTrans HEIC for Windows',
        desc: '一款可以在 Windows 系統閱覽 iPhone 「HEIC」新影像儲存格式，並轉存為 jpeg 格式的解碼工具。',
        tag: 'media',
        img: true,
        img_name: 'copytransheic'
    },
    {
        id: 84,
        href: 'https://www.screentogif.com/',
        title: 'ScreenToGif',
        desc: 'ScreenToGif 可以將錄影畫面輸出成 Gif 或視頻動畫，錄影採用可移動式的方框，只要是在範圍內的畫面通通可以被錄製起來，後製階段還可以詳細察看每一幀，可以剔除不必要的部分。',
        tag: 'media',
        img: true,
        img_name: 'screentogif'
    },
    {
        id: 85,
        href: 'https://recordit.co/',
        title: 'Recordit Fast Screencasts',
        desc: '擷取螢幕畫面，使其錄製成 .gif 動態影像的應用程式工具。',
        tag: 'media',
        img: true,
        img_name: 'recordit'
    },
    {
        id: 86,
        href: 'http://apngdis.sourceforge.net/',
        title: 'APNG Disassembler',
        desc: '可以將 APNG （動態的 PNG）格式細部分解每一幀，輸出成檔的工具軟體，目前只有 Windows 系統有 GUI 介面，其他作業系統只能使用 CMD 指令來操作。',
        tag: 'media',
        img: true,
        img_name: 'apng'
    },
    {
        id: 87,
        href: 'http://www.azofreeware.com/2015/03/apng-anime-maker-portable.html',
        title: 'APNG Anime Maker',
        desc: '動態 PNG 製作工具，製作方式與 GIF 相同，將各幀 PNG 影像合成為一個檔案，也就是 APNG。',
        tag: 'media',
        img: true,
        img_name: 'apng'
    },
    {
        id: 88,
        href: 'https://app.prntscr.com/zh-cn/index.html',
        title: 'LightShot',
        desc: '好用的螢幕截圖工具，也可以在 Chrome 或 Firefox 擴充元件進行安裝。',
        tag: 'media',
        img: true,
        img_name: 'lightshot'
    },
    {
        id: 89,
        href: 'https://www.fotor.com/tw/',
        title: 'Fotor',
        desc: '創新性照片編輯器及平面設計工具。',
        tag: 'media',
        img: true,
        img_name: 'fotor'
    },
    {
        id: 90,
        href: 'https://loading.io/',
        title: 'LOADING.IO',
        desc: '一款基於多種款式自訂讀取（Loading）圖樣的線上工具，有許多免費款式可以自由挑選、修改。',
        tag: 'webfront',
        img: false,
        img_name: ''
    },
    {
        id: 91,
        href: 'https://maxiang.io/',
        title: '马克飞象',
        desc: '專為印象筆記打造的Markdown編輯器。',
        tag: 'webfront',
        img: true,
        img_name: 'maxiang'
    },
    {
        id: 92,
        href: 'https://uidesigndaily.com/',
        title: 'UI Design Daily',
        desc: '固定每天更新一款網站 UI 設計，可免費使用。',
        tag: 'material',
        img: true,
        img_name: 'uidesigndaily'
    },
    {
        id: 93,
        href: 'https://graygrids.com/',
        title: 'GRAYGRIDS',
        desc: '免費的 Bootstrap 主題範本。',
        tag: 'material',
        img: true,
        img_name: 'graygrids'
    },
    {
        id: 94,
        href: 'https://www.magicpattern.design/tools/css-backgrounds?fbclid=IwAR0MPswKX1IrCpKXnLHojIHQ_I78c-OqM-Amh6HdPTXZBQUc8e9j2Q_PwQ8',
        title: 'MagicPattern',
        desc: '線上生成 CSS 背景樣式，除了可依照使用者需求客製化，也有海量範本可以直接複製語法使用。',
        tag: 'webfront',
        img: true,
        img_name: 'magicpattern'
    },
    {
        id: 95,
        href: 'https://getcssscan.com/css-box-shadow-examples',
        title: 'CSS Scan',
        desc: '提供 83 款由 CSS 寫成的陰影（box-shadow）樣式。',
        tag: 'webfront',
        img: true,
        img_name: 'cssscan'
    },
    {
        id: 96,
        href: 'https://www.giftofspeed.com/?fbclid=IwAR176Y4lTmWzP_KsAOtCnu7aGZSJ-Cb1Hq4wl6DwOLZE6ZzWixXs93OxirU',
        title: 'GiftOfSpeed',
        desc: '一款檢測網站效能的線上工具，測試並列出網站需要改善的建議。',
        tag: 'webfront',
        img: true,
        img_name: 'giftofspeed'
    },
    {
        id: 97,
        href: 'https://screenshot.rocks/?fbclid=IwAR3zl09EzHWh0wlPJf4fb1p40wouYZZ54Vu-oj1-nAL7zLLfqgAfXY3GNDI',
        title: 'Screenshot.Rocks',
        desc: '如果需要將網頁製作成瀏覽器或手機瀏覽器模型，可以透過此線上工具輕鬆達到需求。',
        tag: 'material',
        img: true,
        img_name: 'screenshot'
    },
    {
        id: 98,
        href: 'http://nullice.com/limitPNG/',
        title: 'limitPNG',
        desc: '非常出色的圖片壓縮工具，可根據自身需求，對圖片進行有無損、高低畫質的壓縮作業。',
        tag: 'media',
        img: true,
        img_name: 'limitpng'
    },
    {
        id: 99,
        href: 'https://hackmd.io/home',
        title: 'HackMD',
        desc: '用即時協作的 Markdown 編輯器書寫文件，讓你快速協作、輕鬆紀錄想法、隨時共享知識。',
        tag: 'webfront',
        img: true,
        img_name: 'hackmd'
    },
    {
        id: 100,
        href: 'https://tw.eagle.cool/',
        title: 'Eagle',
        desc: 'Eagle 可以輕鬆收集及整理設計工作的「案例、靈感、截圖、圖片、影片、音訊、情緒板」等各種素材，激發更多創意靈感，讓工作變得更有效率！',
        tag: 'media',
        img: true,
        img_name: 'eagle'
    },
    {
        id: 101,
        href: 'https://www.foundertype.com/index.php/Index/ftXplorer/',
        title: '字加',
        desc: '字加是一款字體獲取工具、字體使用工具、字體管理工具，旨在提供更高效、更便捷的用字服務。',
        tag: 'material',
        img: true,
        img_name: 'ftxplorer'
    },
    {
        id: 102,
        href: 'http://mp3gain.sourceforge.net/download.php',
        title: 'MP3Gain',
        desc: 'MP3Gain 是一款能批次調整 MP3 音量大小的軟體，在無損音質的狀態下將所有歌曲的音軌音量平衡。Window10 使用者建議下載 full-1.2.5 的版本才能正常使用。',
        tag: 'media',
        img: true,
        img_name: 'mp3gain'
    },
]

const wkData = [
    {
        id: 0,
        href: 'work_bbcall',
        name: 'BB Call',
        img: 'bbcall'
    },
    {
        id: 2,
        href: 'work_bbintemp',
        name: 'BBIN 網版官網',
        img: 'bbin_template'
    },
    {
        id: 3,
        href: 'work_bbinin',
        name: 'BBIN iN GAMING',
        img: 'bbin_in'
    },
    {
        id: 4,
        href: 'work_bbsports',
        name: 'BB世足瘋',
        img: 'bbsports'
    },
    {
        id: 5,
        href: 'work_kwpk',
        name: '「單挑」電腦版遊戲介面',
        img: 'kiwigo_pk'
    },
    {
        id: 6,
        href: 'work_kwlottery',
        name: '「快彩」電腦版遊戲介面',
        img: 'kiwigo_lottery'
    },
    {
        id: 7,
        href: 'work_kwroulette',
        name: '「俄羅斯輪盤」電腦版遊戲介面',
        img: 'kiwigo_roulette'
    },
    {
        id: 8,
        href: 'work_kwnctume',
        name: '國立交通大學機械工程學系官網',
        img: 'kiwigo_nctume'
    },
    {
        id: 9,
        href: 'work_kwsnialhome',
        name: '蝸牛居家',
        img: 'kiwigo_snialhome'
    },
    {
        id: 10,
        href: 'work_kwbuh',
        name: 'BUH',
        img: 'kiwigo_buh'
    },
    {
        id: 11,
        href: 'work_kwjy',
        name: '久益數位科技',
        img: 'kiwigo_jy'
    },
    {
        id: 12,
        href: 'work_kwlbs',
        name: '巷仔內',
        img: 'kw_lbs'
    },
    {
        id: 13,
        href: 'work_kwwanjiu',
        name: '丸久娛樂城',
        img: 'kw_wanjiu'
    },
    {
        id: 14,
        href: 'work_kwtrafiti',
        name: 'Trafiti',
        img: 'kw_trafiti'
    },
    {
        id: 15,
        href: 'work_kwlottery2',
        name: '彩票模板網站',
        img: 'kiwigo_lottery2'
    },
    {
        id: 16,
        href: 'work_kwgreatmoney',
        name: '閎捷科技',
        img: 'kiwigo_greatmoney'
    },
    {
        id: 17,
        href: 'work_kwyuyang',
        name: '昱洋企業社',
        img: 'kiwigo_yuyang'
    },
    {
        id: 18,
        href: 'work_kwsc1788',
        name: '神棋Online官網',
        img: 'kiwigo_sc1788'
    },
    {
        id: 19,
        href: 'work_kwgame',
        name: 'Casino Game',
        img: 'kiwigo_game'
    },
    {
        id: 20,
        href: 'work_bbintemp2',
        name: 'BBIN 網版官網2020',
        img: 'bbin_template2'
    },
    {
        id: 21,
        href: 'work_bbinxmas',
        name: 'BBIN 2020聖誕活動網頁',
        img: 'bbin_xmas'
    },
]


var wrap = new Vue({
    el: '#wrap',
    data: {
        h_list: htmlData.reverse(),
        c_list: cssData.reverse(),
        j_list: jsData.reverse(),
        jsp_list: jpData.reverse(),
        m_list: miscData.reverse(),
        a_list: appData.reverse(),
        r_list: resData,
        hk_list: hikData.reverse(),
        wk_list: wkData.reverse(),
        query: "",
        isActive: 1,
        navActive: false,
        pfActive: false,
        listActive: false,
        cleanActive: false,
        currentFilter: 'all',
    },

    methods: {
        // 取得 list 的數據，給分頁指定用
        getHtmlIndex({ h_list = [], index = 0 }) {
            return h_list[index] || {}
        },

        getCssIndex({ c_list = [], index = 0 }) {
            return c_list[index] || {}
        },

        getJsIndex({ j_list = [], index = 0 }) {
            return j_list[index] || {}
        },

        getJspIndex({ jsp_list = [], index = 0 }) {
            return jsp_list[index] || {}
        },

        getMiscIndex({ m_list = [], index = 0 }) {
            return m_list[index] || {}
        },

        getAppIndex({ a_list = [], index = 0 }) {
            return a_list[index] || {}
        },

        getHikIndex({ hk_list = [], index = 0 }) {
            return hk_list[index] || {}
        },

        getWorkIndex({ wk_list = [], index = 0 }) {
            return wk_list[index] || {}
        },

        // 重置搜尋框的值
        resetSearchInput: function(e) {
            e.preventDefault()
            this.$data.cleanActive = false;
            this.$data.query = "";
            // document.getElementById("cleanBtn").classList.remove("is-active");
        },

        // 篩選
        setFilter: function(filter) {
            this.currentFilter = filter;
        },

        // jquery
        runJquery() {
            //Remove inline-block node
            $('.removeTextNodes').contents().filter(function() {
                return this.nodeType === 3;
            }).remove();

            // 粒子特效
            $('.particles-bg').particleground({
                dotColor: '#F6F6F6',
                lineColor: '#F6F6F6',
            });

            // go top
            // $("#sideTop").click(function() {
            //     $('body, html').animate({
            //         scrollTop: 0
            //     }, 500);
            // });
            $(window).scroll(function() {
                if ($(this).scrollTop() > 240) {
                    $("#sideTop").fadeIn(300);
                } else {
                    $("#sideTop").fadeOut(300);
                }
            });

            // catalog
            $("#sideCatalog").click(function() {
                $(".text-catalog").addClass("is-popup");
                $(".overlay").addClass("is-active");
            });

            $("#sideList").click(function() {
                $(".text-list").addClass("is-active");
                $(".overlay").addClass("is-active");
            });

            $("#hikList").click(function() {
                $(".hiking-list").addClass("is-active");
                $(".overlay").addClass("is-active");
            });

            $(".text-close").click(function() {
                $(".text-list, .hiking-list").removeClass("is-active");
                $(".overlay").removeClass("is-active");
            });

            $(".text-catalog li a").click(function() {
                $(".overlay").removeClass("is-active");
                $(".text-catalog").removeClass("is-popup");
            });

            // nav
            $(".nav-btn, .nav-profile").click(function() {
                $("html, body").addClass("no-scroll");
            });
            $(".nav-close, .overlay, .profile-close").click(function() {
                $("html, body").removeClass("no-scroll");
            });

            // text
            $(".overlay").click(function() {
                $(this).removeClass("is-active");
                $(".text-list, .hiking-list").removeClass("is-active");
                $(".text-catalog").removeClass("is-popup");
            });
        },
    },

    computed: {
        filterHtml: function() {
            var search = this;
            return this.h_list.filter(function(item) {
                return (item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag1_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag2_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1);
            });
        },

        filterCss: function() {
            var search = this;
            return this.c_list.filter(function(item) {
                return (item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag1_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag2_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1);
            });
        },

        filterJs: function() {
            var search = this;
            return this.j_list.filter(function(item) {
                return (item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag1_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag2_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1);
            });
        },

        filterJsp: function() {
            var search = this;
            return this.jsp_list.filter(function(item) {
                return (item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1);
            });
        },

        filterMisc: function() {
            var search = this;
            return this.m_list.filter(function(item) {
                return (item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag1_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag2_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1);
            });
        },

        filterApp: function() {
            var search = this;
            return this.a_list.filter(function(item) {
                return (item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag1_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag2_name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1);
            });
        },

        filterRes: function() {
            var search = this;
            return this.r_list.filter(function(item) {
                return (item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.tag.toLowerCase().indexOf(search.query.toLowerCase()) !== -1);
            });
        },

        filterHik: function() {
            var search = this;
            return this.hk_list.filter(function(item) {
                return (item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || 
                    item.name.toLowerCase().indexOf(search.query.toLowerCase()) !== -1);
            });
        },
        
    },

    watch: {
        // 監聽搜尋框的值 一有變化就執行判斷式
        query: function(val, oldVal) {
            if(document.getElementById("searchInput").value.length > 0){
                // document.getElementById("cleanBtn").classList.add("is-active");
                this.cleanActive = true;
            } else {
                // document.getElementById("cleanBtn").classList.remove("is-active");
                this.cleanActive = false;
            }
        }
    },

    mounted(){
        this.runJquery();
    }
})