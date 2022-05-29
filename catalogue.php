<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
        .catalogue {
            display: grid;
            width: 90%;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: repeat(6, 1fr);
            grid-column-gap: 40px;
            grid-row-gap: 20px;
        }

        .tuck:hover,
        .kathi:hover,
        .cop:hover,
        .maggie:hover,
        .quench:hover {
            transform: scale(1.02)
        }

        .tuck {
            grid-area: 1 / 1 / 4 / 3;
            width: 60%;
            height: 85%;
            border: black 0px solid;
            box-shadow: red 0 0, cyan 0 0;
            transition: box-shadow 200ms;
        }

        .tuck:hover {
            box-shadow: red -6px 0, cyan 6px 0;
        }

        .kathi {
            grid-area: 1 / 3 / 4 / 5;
            width: 60%;
            height: 85%;
            border: black 0px solid;
            box-shadow: red 0 0, cyan 0 0;
            transition: box-shadow 200ms;
        }

        .kathi:hover {
            box-shadow: red -6px 0, cyan 6px 0;
        }

        .cop {
            grid-area: 1 / 5 / 4 / 7;
            width: 100%;
            height: 85%;
            border: black 0px solid;
            box-shadow: red 0 0, cyan 0 0;
            transition: box-shadow 200ms;
        }

        .cop:hover {
            box-shadow: red -6px 0, cyan 6px 0;
        }

        .maggie {
            grid-area: 4 / 2 / 7 / 4;
            width: 60%;
            height: 85%;
            border: black 0px solid;
            box-shadow: red 0 0, cyan 0 0;
            transition: box-shadow 200ms;
        }

        .maggie:hover {
            box-shadow: red -6px 0, cyan 6px 0;
        }

        .quench {
            grid-area: 4 / 4 / 7 / 6;
            width: 60%;
            height: 85%;
            border: black 0px solid;
            box-shadow: red 0 0, cyan 0 0;
            transition: box-shadow 200ms;
        }

        .quench:hover {
            box-shadow: red -6px 0, cyan 6px 0;
        }

        .catalogue {
            width: 90%;
            padding: 1% 0 0;
            margin: auto;
        }

        img {
            width: 100%;
            height: 100%;
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
    </style>
    <title>Catalogue</title>
</head>
<h1>
    <center>Catalogue</center>
</h1>

<body style = "">

    <div class="catalogue" id = "cat">
        <div class="tuck" onclick="tuck_redirect()"><img src="https://i.ibb.co/y8DXw4b/tucklogo.jpg"></img><br><br><br>
        </div>
        <div class="kathi" onclick="kathi_redirect()"><img
                src="https://i.ibb.co/9Nw7HM5/kathijunction.jpg"></img><br><br><br></div>
        <div class="cop" onclick="cop_redirect()"><img
                src="https://i.ibb.co/H2p2TLK/chaiokplease.jpg"></img><br><br><br></div>
        <div class="maggie" onclick="maggie_redirect()"><img
                src="https://i.ibb.co/PtY5gmX/maggie.jpg"></img><br><br><br></div>
        <div class="quench" onclick="quench_redirect()"><img
                src="https://i.ibb.co/Zx8fyv4/quench.jpg"></img></div>
    </div>

</body>
<script>
    function tuck_redirect() {
        let children = document.getElementById("cat").children;
        let opacity = 1;
        var interv = setInterval(() => {
            if (opacity > 0) {
                children[1].children[0].style = "opacity: " + opacity;
                children[2].children[0].style = "opacity: " + opacity;
                children[3].children[0].style = "opacity: " + opacity;
                children[4].children[0].style = "opacity: " + opacity;
                opacity = opacity - 0.1;
            } else {
                clearInterval(interv);
            }
        }, 25);

        setTimeout(() => {
            window.location.href = "menuTuck.php";    
        }, 300);
    }

    function kathi_redirect() {
        let children = document.getElementById("cat").children;
        let opacity = 1;
        var interv = setInterval(() => {
            if (opacity > 0) {
                children[0].children[0].style = "opacity: " + opacity;
                children[2].children[0].style = "opacity: " + opacity;
                children[3].children[0].style = "opacity: " + opacity;
                children[4].children[0].style = "opacity: " + opacity;
                opacity = opacity - 0.1;
            } else {
                clearInterval(interv);
            }
        }, 25);
        
        setTimeout(() => {
            window.location.href = "menuKathi.php";    
        }, 300);
    }

    function cop_redirect() {
        let children = document.getElementById("cat").children;
        let opacity = 1;
        var interv = setInterval(() => {
            if (opacity > 0) {
                children[0].children[0].style = "opacity: " + opacity;
                children[1].children[0].style = "opacity: " + opacity;
                children[3].children[0].style = "opacity: " + opacity;
                children[4].children[0].style = "opacity: " + opacity;
                opacity = opacity - 0.1;
            } else {
                clearInterval(interv);
            }
        }, 25);
        
        setTimeout(() => {
            window.location.href = "menuCop.php";
        }, 300);
    
    }

    function maggie_redirect() {
        let children = document.getElementById("cat").children;
        let opacity = 1;
        var interv = setInterval(() => {
            if (opacity > 0) {
                children[0].children[0].style = "opacity: " + opacity;
                children[1].children[0].style = "opacity: " + opacity;
                children[2].children[0].style = "opacity: " + opacity;
                children[4].children[0].style = "opacity: " + opacity;
                opacity = opacity - 0.1;
            } else {
                clearInterval(interv);
            }
        }, 25);
        
        setTimeout(() => {
            window.location.href = "menuMaggie.php";
        }, 300);
    
    }

    function quench_redirect() {
        let children = document.getElementById("cat").children;
        let opacity = 1;
        var interv = setInterval(() => {
            if (opacity > 0) {
                children[0].children[0].style = "opacity: " + opacity;
                children[1].children[0].style = "opacity: " + opacity;
                children[2].children[0].style = "opacity: " + opacity;
                children[3].children[0].style = "opacity: " + opacity;
                opacity = opacity - 0.1;
            } else {
                clearInterval(interv);
            }
        }, 25);
        
        setTimeout(() => {
            window.location.href = "menuQuench.php";
        }, 300);
    
    }
</script>

</html>