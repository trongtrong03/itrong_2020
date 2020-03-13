var wrap = new Vue({
    el: '#wrap',
    data: {
        h_list: [
        	{
        		id: 0,
        		href: 'xxx',
        		title: 'xxxxxx',
        		date: '2020.02.02',
        		tag1: true,
        		tag1_name: '111',
        		tag2: true,
        		tag2_name: '222',
        		img: true,
        		img_name: 'img_1'
        	},
        ],

        query: "",
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