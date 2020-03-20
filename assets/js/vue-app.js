const htmlData = [
    {
        id: 0,
        href: '_template',
        title: '1111111111',
        time: '2020.02.02',
        tag1: true,
        tag1_name: 'xxx1',
        tag2: true,
        tag2_name: 'xxx2',
        img: true,
        img_name: 'img_1'
    },
    {
        id: 1,
        href: '_template',
        title: '22222',
        time: '2020.02.02',
        tag1: true,
        tag1_name: '111',
        tag2: true,
        tag2_name: '222',
        img: true,
        img_name: 'img_1'
    },
]

const resData = [
    {
        id: 0,
        href: 'https://www.colorzilla.com/gradient-editor/',
        title: 'Ultimate CSS Gradient Generator',
        desc: '方便好用的線上漸層調製工具，可向下支援至 ie8。',
        tag: '網頁前端',
        img: true,
        img_name: 'colorZilla'
    },
    {
        id: 1,
        href: 'http://apps.eky.hk/css-triangle-generator/zh-hant',
        title: 'CSS 三角形產生器',
        desc: '可即時設定任何三角形的 CSS 樣式，並輸出原始碼提供複製取用。',
        tag: '網頁前端',
        img: false,
        img_name: ''
    },
    {
        id: 2,
        href: 'https://beautifier.io/',
        title: 'Online JavaScript Beautifier',
        desc: '提供線上美化 JavaScript 程式碼，使用者可透過相關參數設置輸出適合自己專案的美化格式。',
        tag: '網頁前端',
        img: false,
        img_name: ''
    },
    {
        id: 3,
        href: 'xxxxxx',
        title: 'xxxxx',
        desc: 'xxxx',
        tag: 'xxxx',
        img: true,
        img_name: 'xxxxx'
    },
    {
        id: 1,
        href: 'xxxxxx',
        title: 'xxxxx',
        desc: 'xxxx',
        tag: 'xxxx',
        img: true,
        img_name: 'xxxxx'
    },
]

var wrap = new Vue({
    el: '#wrap',
    data: {
        h_list: htmlData,
        r_list: resData,
        query: "",
        isActive: 1,
    },

    methods: {
        // 取得 h_list 的數據，給分頁指定用
        getHtmlIndex({ h_list = [], index = 0 }) {
            return h_list[index] || {}
        }
    },

    computed: {
        filterHtml: function() {
            var search = this;
            return this.h_list.filter(function(item) {
                return item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1;
            });
        },

        filterRes: function() {
            var search = this;
            return this.r_list.filter(function(item) {
                return (item.title.toLowerCase().indexOf(search.query.toLowerCase()) !== -1 || item.tag.toLowerCase().indexOf(search.query.toLowerCase()) !== -1);
            });
        },
    },
})