<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            background-color: #131212;
            color: #f0f8ff;
            margin-top: 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            display: grid
        }

        div.Display {
            text-align: center;
            border: #f5deb3 solid;
            width: 600px
        }

        #Dis_up {
            display: flex;
            justify-content: center;
            margin: 0;
            height: 50px;
            opacity: 70%
        }

        #Dis_up_num {
            font-size: 20px;
            padding-right: 15px
        }

        #row_1 {
            display: flex;
            justify-content: center;
            border: #f5deb3 solid;
            width: 600px
        }

        #row_2 {
            display: flex;
            justify-content: center;
            border: #f5deb3 solid;
            width: 600px
        }

        #row_3 {
            display: flex;
            justify-content: center;
            border: #f5deb3 solid;
            width: 600px
        }

        #row_4 {
            display: flex;
            justify-content: center;
            border: #f5deb3 solid;
            width: 600px
        }

        button {
            font-size: 60px;
            background-color: #f5f5dc;
            border-radius: 100%;
            padding: 15px;
            margin: 15px;
            width: 115px;
            height: 100px
        }
    </style>
    <!-- <script src="script.js"></script> -->
    <script>function val_a(val) {
            if (Dis_up_op.innerText === '+' || Dis_up_op.innerText === '-' || Dis_up_op.innerText === '÷' || Dis_up_op.innerText === '*') {
                document.getElementById("Dis_down").innerText = val
                Dis_up_op.innerText = ""
            } else {
                let sum = parseInt(document.getElementById("Dis_down").innerText)
                val = 10 * sum + val
                document.getElementById("Dis_down").innerText = val
            }
        } function op(opera) {
            let Dis_down = document.getElementById("Dis_down"), Dis_up_num = document.getElementById("Dis_up_num"), Dis_up_op = document.getElementById("Dis_up_op"); if (opera === 'CE') {
                Dis_down.innerText = '0'
                Dis_up_num.innerText = '0'
                Dis_up_op.innerText = ''
            } if (opera === '+') {
                Dis_up_op.innerText = opera
                Dis_up_num.innerText = parseInt(Dis_up_num.innerText) + parseInt(Dis_down.innerText)
            } else if (opera === '-') {
                Dis_up_op.innerText = opera
                Dis_up_num.innerText = parseInt(Dis_up_num.innerText) - parseInt(Dis_down.innerText)
            } else if (opera === '/') {
                Dis_up_op.innerText = '÷'
                if (parseInt(Dis_up_num.innerText) === 0) {
                    Dis_up_num.innerText = Dis_down.innerText
                } else {
                    Dis_up_num.innerText = parseInt(Dis_up_num.innerText) / parseInt(Dis_down.innerText)
                }
            } else if (opera === '*') {
                Dis_up_op.innerText = opera
                if (parseInt(Dis_up_num.innerText) === 0) {
                    Dis_up_num.innerText = Dis_down.innerText
                } else {
                    Dis_up_num.innerText = parseInt(Dis_up_num.innerText) * parseInt(Dis_down.innerText)
                }
            } else if (opera === 'C') {
                let val = document.getElementById("Dis_down").innerText
                document.getElementById("Dis_down").innerText = parseInt(val / 10)
            }
        } function equal_2() {
            op(Dis_up_op.innerText)
            Dis_up_op.innerText = ''
            Dis_down.innerText = 0
        }</script>
    <title>Calculator</title>
    <link rel="shortcut" href="https://cdn3.iconfinder.com/data/icons/luchesa-vol-9/128/Calculator-256.png"
        type="image/x-icon">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/luchesa-vol-9/128/Calculator-256.png"
        type="image/x-icon">
</head>

<body>
    <div>
        <div class="Display">
            <div id="Dis_up">
                <p id="Dis_up_num" style="font-size: 40px;">0</p>
                <p id="Dis_up_op" style="font-size: 40px;"></p>
            </div>
            <h1 id="Dis_down" style="font-size: 40px;">0</h1>
        </div>
    </div>
    <div class="calfun">
        <div id="row_1">
            <button id="btn_no" onclick="val_a(1)">1</button>
            <button id="btn_no" onclick="val_a(2)">2</button>
            <button id="btn_no" onclick="val_a(3)">3</button>
            <button id="+" onclick="op('+')">+</button>
        </div>
        <div id="row_2">
            <button id="btn_no" onclick="val_a(4)">4</button>
            <button id="btn_no" onclick="val_a(5)">5</button>
            <button id="btn_no" onclick="val_a(6)">6</button>
            <button class="-" onclick="op('-')">-</button>
        </div>
        <div id="row_3">
            <button id="btn_no" onclick="val_a(7)">7</button>
            <button id="btn_no" onclick="val_a(8)">8</button>
            <button id="btn_no" onclick="val_a(9)">9</button>
            <button id="/" onclick="op('/')">÷</button>
        </div>
        <div id="row_4">
            <button id="equal_2" onclick="equal_2()">=</button>
            <button id="btn_no" onclick="val_a(0)">0</button>
            <button id="clear_button" onclick="op('CE')">CE</button>
            <button id="C" onclick="op('C')">C</button>
            <button id="*" onclick="op('*')">x</button>
        </div>
    </div>

</body>

</html>