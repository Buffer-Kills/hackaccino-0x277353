<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .parent {
            display: grid;
            grid-template-columns: repeat(11, 1fr);
            grid-template-rows: repeat(12, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
            width: 90%;
            padding: 0% 0 0;
            margin: 25px 50px 75px 100px;
            font-family: "Roboto", sans-serif;
        }

        .previous {
            position: relative;
            z-index: 1;
            background: #f67b50;
            max-width: 100%;
            margin: 0 25px 50px 75px 100px;
            padding: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
        }

        .todayrecc {
            position: relative;
            z-index: 1;
            background: #a4b4f5;
            max-width: 100%;
            margin: 0 25px 50px 75px 100px;
            padding: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
        }

        .previous {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            grid-template-rows: repeat(5, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
            font-family: "Roboto", sans-serif;
        }

        .todayrecc {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            grid-template-rows: repeat(5, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
            font-family: "Roboto", sans-serif;
        }

        .previous {
            grid-area: 2 / 2 / 7 / 11;
        }

        .todayrecc {
            grid-area: 8 / 2 / 13 / 11;
        }



        .pre1 {
            grid-area: 2 / 2 / 5 / 4;
            position: relative;
            z-index: 1;
            background: white;
            max-width: 100%;
            margin: 0 25px 50px 75px 100px;
            padding: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
        }

        .pre2 {
            grid-area: 2 / 5 / 5 / 7;
            position: relative;
            z-index: 1;
            background: white;
            max-width: 100%;
            margin: 0 25px 50px 75px 100px;
            padding: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
        }

        .pre3 {
            grid-area: 2 / 8 / 5 / 10;
            position: relative;
            z-index: 1;
            background: white;
            max-width: 100%;
            margin: 0 25px 50px 75px 100px;
            padding: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
        }

        .tod1 {
            grid-area: 2 / 2 / 5 / 4;
            position: relative;
            z-index: 1;
            background: white;
            max-width: 100%;
            margin: 0 25px 50px 75px 100px;
            padding: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
            margin: 3%;
            position: relative;
        }

        .tod2 {
            grid-area: 2 / 5 / 5 / 7;
            position: relative;
            z-index: 1;
            background: white;
            max-width: 100%;
            margin: 0 25px 50px 75px 100px;
            padding: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
            margin: 3%;
            position: relative;
        }

        .tod3 {
            grid-area: 2 / 8 / 5 / 10;
            position: relative;
            z-index: 1;
            background: white;
            max-width: 100%;
            margin: 0 25px 50px 75px 100px;
            padding: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
            margin: 3%;
            position: relative;
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

        . {
            margin: 3%;
            position: relative;
        }


        .bottom-txt {
            position: absolute;
            bottom: 20px;
            left: 10px;
        }

        body {
            font-family: "Roboto", sans-serif;
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

        img {
            width: 100%;
            height: 100%;
        }

        h1 {
            color: lightgrey;
        }

        h3 {
            color: black;
            background-color: white;
        }

        table {
            margin: auto;
            width: 50%;
        }

        td {
            width: 33%;
            text-align: center;
        }

        #mebutton {
            position: fixed;
            bottom: -4px;
            right: 10px;
        }
    </style>
    <title>FAR</title>
</head>

<body>
    <center>
        <h1></h1><br><br>
        <h1>WELCOME, *Username*</h1>
    </center>
    <br><br>
    <div class="parent">
        <div class="previous" onclick="">
            <h2>Recently Ordered: </h2>
            <br><br>
            <div class="pre1"> <img src="https://i.ibb.co/tPghsnf/register.jpg" alt="Paste"></img> <h3 class="bottom-txt">
                Register
                </h3></div>
            <div class="pre2"> <img src="https://i.ibb.co/6gskkg6/chillypotato.jpg"></img><h3 class="bottom-txt">
                Chilli Potato
                </h3></div> 
            <div class="pre3"> <img src="https://i.ibb.co/ZXsbtNf/wrap.jpg"></img><h3 class="bottom-txt">
                Paneer Wrap
                </h3></div>
        </div>

        <div class="todayrecc" onclick="">
            <h2>Today's Recommendation: </h2>
            <br><br>
            <div class="tod1"> <img src="https://i.ibb.co/V9nXsSy/white-pasta.jpg" alt="Paste"></img>
                <h3 class="bottom-txt">
                    Alfredo Pasta
                </h3>

            </div>
            <div class="tod2"> <img src="https://i.ibb.co/P6Qrw1f/chips.jpg"></img>
                <h3 class="bottom-txt">
                    Lays Chips
                </h3>
            </div>
            <div class="tod3"> <img src="https://i.ibb.co/GRSHTxF/cola.jpg"></img>
                <h3 class="bottom-txt">
                    CocaCola
                </h3>
            </div>
        </div>
    </div>

    <br><br>

    <br><br>
    <div id="mebutton">
        <center><a href="catalogue.php"><button class="button-24" role="button">Browse</button></a></center>
        <br><br>
    </div>

    <br><br>
</body>

</html>