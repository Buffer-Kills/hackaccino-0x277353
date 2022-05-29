<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .collapsible {
            font-family: "Roboto", sans-serif;
            background-color: #5a78f2;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 30%;
            border: none;
            text-align: center;
            outline: none;
            font-size: 20px;
            border-radius: 10px;

        }

        .active,
        .collapsible:hover {
            background-color: #4365f0;
        }

        .content {
            font-family: "Roboto", sans-serif;
            background-color: #f5cbbc;
            font-size: 20px;
            padding: 0px 80px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background-color: #f1f1f1;
            width: 50%;
            margin: 0 auto 0px;
            border-radius: 10px;
        }

        .button-56 {
            width: 52px;
            align-items: center;
            background-color: #fee6e3;
            border: 2px solid #111;
            border-radius: 8px;
            color: #111;
            cursor: pointer;
            font-family: Inter, sans-serif;
            font-size: 16px;
            height: 45px;
            justify-content: center;
            line-height: 24px;
            max-width: 50%;
            padding: 0;
            position: relative;
            text-align: center;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-56:after {
            background-color: #111;
            border-radius: 8px;
            content: "";
            display: block;
            height: 48px;
            left: 0;
            width: 100%;
            position: absolute;
            top: -2px;
            transform: translate(8px, 8px);
            transition: transform .2s ease-out;
            z-index: -1;
        }

        .button-56:hover:after {
            transform: translate(0, 0);
        }

        .button-56:active {
            background-color: #ffdeda;
            outline: 0;
        }

        .button-56:hover {
            outline: 0;
        }

        #mebutton {
            position: fixed;
            bottom: -4px;
            right: 10px;
        }

        .button-24 {
            background: #FF4742;
            border: 1px solid #FF4742;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
            font-size: 20px;
            font-weight: 800;
            line-height: 16px;
            min-height: 40px;
            outline: 0;
            padding: 30px 60px;
            text-align: center;
            text-rendering: geometricprecision;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
        }

        .button-24:hover,
        .button-24:active {
            background-color: white;
            background-position: 0 0;
            color: #FF4742;
        }

        .button-24:active {
            opacity: 1;
        }


        @media (min-width: 768px) {
            .button-56 {
                /* padding: 0 40px; */
            }
        }

        h1 {
            font-size: 60px;
            text-shadow: 5px 5px darkcyan;
            font-family: "Roboto", sans-serif;
            color: white;
        }

        input[type=text] {
            border: 2px solid #111;
            border-radius: 5px;
            height: 45px;
            line-height: normal;
            color: #282828;
            width: 6%;
            box-sizing: border-box;
            user-select: auto;
            font-size: 16px;
            padding: 0 6px;
            padding-left: 12px;
            text-align: center;

            :focus {
                border: 3px solid #5551ff;
            }
        }


        body {
            background: #a4b4f5;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(right, #a4b4f5, #f67b50);
            background: -moz-linear-gradient(right, #a4b4f5, #f67b50);
            background: -o-linear-gradient(right, #a4b4f5, #f67b50);
            background: linear-gradient(to left, #a4b4f5, #f67b50);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    <title>Chai OK Please</title>
</head>

<body>

    <h1>
        <center>Welcome to Chai OK Please</center>
    </h1>

    <button class="collapsible">Cold Chillers</button>
    <div class="content">
        <br>
        <!-- <label>Cold Coffee </label><button onclick="item_sub(1)"> - </button><input type="text" id="1" value="0" readonly><button onclick="item_add(1)"> + </button><br><br>
    <label></label>Iced Tea <button onclick="item_sub(2)"> - </button><input type="text" id = "2" readonly><button onclick="item_add(2)"> + </button> <br><br> -->
        <label>Cold Coffee</label>
        <div align="center"><button class="button-56" role="button" onclick="item_sub(1)">-</button><input type="text"
                id="1" readonly><button class="button-56" role="button" onclick="item_add(1)"> + </button><br><br>
        </div>
        <label>Iced Tea</label>
        <div align="center"><button class="button-56" role="button" onclick="item_sub(2)">-</button><input type="text"
                id="2" readonly><button class="button-56" role="button" onclick="item_add(2)">+</button> <br><br></div>
    </div>
    </div>

    <br><br>

    <button class="collapsible">Hot Hooters </button>
    <div class="content">
        <br>
        <!-- <label></label> Cappuccino <button onclick="item_sub(3)"> - </button><input type="text" id="3"><button onclick="item_add(3)"> + </button> <br><br>
    <label></label> Tea <button onclick="item_sub(4)"> - </button><input type="text" id="4"><button onclick="item_add(4)"> + </button> <br><br>
    <label></label> Espresso <button onclick="item_sub(5)"> - </button><input type="text" id="5"><button onclick="item_add(5)"> + </button> -->

        <label>Capuccino</label>
        <div align="center"><button class="button-56" role="button" onclick="item_sub(3)">-</button><input type="text"
                id="3"><button class="button-56" role="button" onclick="item_add(3)">+</button> <br><br></div>
        <label>Tea</label>
        <div align="center"> <button class="button-56" role="button" onclick="item_sub(4)">-</button><input type="text"
                id="4"><button class="button-56" role="button" onclick="item_add(4)">+</button> <br><br></div>
        <label>Espresso</label>
        <div align="center"><button class="button-56" role="button" onclick="item_sub(5)">-</button><input type="text"
                id="5"><button class="button-56" role="button" onclick="item_add(5)">+</button><br><br></div>


    </div>

    <br><br>

    <div id="mebutton">
        <center><a href="cart.php"><button class="button-24" role="button"> Cart </button></a></center>
        <br><br>
    </div>
    <script>
        function item_add(i) {
            let items = document.getElementById(i);
            items.value++;
        }

        function item_sub(i) {
            let items = document.getElementById(i);
            if (items.value > 0) {
                items.value--;
            }
        }

        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    1
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

</html>