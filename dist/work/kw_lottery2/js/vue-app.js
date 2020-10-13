var wrap = new Vue({
    el: '#wrap',
    data: {
        // ballgame01
        ballgame01_number: [
            { id: "1" },
            { id: "2" },
            { id: "3" },
            { id: "4" },
            { id: "5" },
            { id: "6" },
            { id: "7" },
            { id: "8" },
            { id: "9" },
            { id: "10" },
        ],

        ballgame01_board: [
            { 
                id: "1",
                title: "大",
            },
            { 
                id: "2",
                title: "小",
            },
            { 
                id: "3",
                title: "双",
            },
            { 
                id: "4",
                title: "单",
            },
            { 
                id: "5",
                title: "全",
            },
            { 
                id: "6",
                title: "清",
            },
        ],

        // ballgame02
        ballgame02_board: [
            { 
                id: "big",
                words: "大",
                range: "(12-19)",
                odds: "2.22"
            },
            { 
                id: "small",
                words: "小",
                range: "(3-11)",
                odds: "1.78"
            },
            { 
                id: "single",
                words: "单",
                range: "",
                odds: "1.78"
            },
            { 
                id: "double",
                words: "双",
                range: "",
                odds: "2.22"
            },
        ],

        ballgame02_number: [
            { id: "03" },
            { id: "04" },
            { id: "05" },
            { id: "06" },
            { id: "07" },
            { id: "08" },
            { id: "09" },
            { id: "10" },
            { id: "11" },
            { id: "12" },
            { id: "13" },
            { id: "14" },
            { id: "15" },
            { id: "16" },
            { id: "17" },
            { id: "18" },
            { id: "19" },
        ],

        // ballgame03
        ballgame03_board: [
            { 
                id: "dragon",
                words: "龍",
                no: "冠军",
                odds: "1.96"
            },
            { 
                id: "tiger",
                words: "虎",
                no: "第十名",
                odds: "1.96"
            },
            { 
                id: "big",
                words: "大",
                no: "",
                odds: "1.98"
            },
            { 
                id: "small",
                words: "小",
                no: "",
                odds: "1.98"
            },
            { 
                id: "single",
                words: "单",
                no: "",
                odds: "1.98"
            },
            { 
                id: "double",
                words: "双",
                no: "",
                odds: "1.98"
            },
        ],

        // dicegame01
        dicegame01_board: [
            { 
                id: "big",
                words: "大",
                odds: "1.98"
            },
            { 
                id: "small",
                words: "小",
                odds: "1.98"
            },
            { 
                id: "single",
                words: "单",
                odds: "1.98"
            },
            { 
                id: "double",
                words: "双",
                odds: "1.98"
            },
        ],

        // dicegame02
        dicegame02_board: [
            { 
                id: "1",
            },
            { 
                id: "2",
            },
            { 
                id: "3",
            },
            { 
                id: "4",
            },
            { 
                id: "5",
            },
            { 
                id: "6",
            },
        ],

        // dicegame03
        dicegame03_board: [
            { 
                id: "1",
                num1: "1",
                num2: "2",
            },
            { 
                id: "2",
                num1: "1",
                num2: "3",
            },
            { 
                id: "3",
                num1: "1",
                num2: "4",
            },
            { 
                id: "4",
                num1: "1",
                num2: "5",
            },
            { 
                id: "5",
                num1: "1",
                num2: "6",
            },
            { 
                id: "6",
                num1: "2",
                num2: "3",
            },
            { 
                id: "7",
                num1: "2",
                num2: "4",
            },
            { 
                id: "8",
                num1: "2",
                num2: "5",
            },
            { 
                id: "9",
                num1: "2",
                num2: "6",
            },
            { 
                id: "10",
                num1: "3",
                num2: "4",
            },
            { 
                id: "11",
                num1: "3",
                num2: "5",
            },
            { 
                id: "12",
                num1: "3",
                num2: "6",
            },
            { 
                id: "13",
                num1: "4",
                num2: "5",
            },
            { 
                id: "14",
                num1: "4",
                num2: "6",
            },
            { 
                id: "15",
                num1: "5",
                num2: "6",
            },
        ],

        // dicegame04
        dicegame04_board: [
            { 
                id: "1",
                num: "4"
            },
            { 
                id: "2",
                num: "5"
            },
            { 
                id: "3",
                num: "6"
            },
            { 
                id: "4",
                num: "7"
            },
            { 
                id: "5",
                num: "8"
            },
            { 
                id: "6",
                num: "9"
            },
            { 
                id: "7",
                num: "10"
            },
            { 
                id: "8",
                num: "11"
            },
            { 
                id: "9",
                num: "12"
            },
            { 
                id: "10",
                num: "13"
            },
            { 
                id: "11",
                num: "14"
            },
            { 
                id: "12",
                num: "15"
            },
            { 
                id: "13",
                num: "16"
            },
            { 
                id: "14",
                num: "17"
            },
        ],
        dicegame04_board2: [
            { 
                id: "big",
                words: "大",
                range: "(4-10)"
            },
            { 
                id: "small",
                words: "小",
                range: "(11-17)"
            },
            { 
                id: "single",
                words: "单",
                range: ""
            },
            { 
                id: "double",
                words: "双",
                range: ""
            },
        ],
    }
})