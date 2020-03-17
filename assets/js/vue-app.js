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

var wrap = new Vue({
    el: '#wrap',
    data: {
        h_list: htmlData,
        query: "",
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
    },
})