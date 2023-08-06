<!-- aj code compare -->

<style>
    #menu{
        background-color: greenyellow;
    }
    nav#menu ul{
        list-style: none;
        display: block
    }
    nav#menu li{
        list-style: none;
        padding: 0;
        display: inline;
        font-size: 25px;
        padding: 25px;
    }
</style>
<html>
    <h1>DIARY</h1>
    <body>
        <div id="compare">
                        <nav id="menu">
                <ul>
				    <li class="menuitem"><a href="http://localhost/HMI/WDL2.php">Home</a></li>
				    <li class="menuitem"><a href="http://localhost/HMI/news.php">News</a></li>
                    <li class="menuitem"><a href="http://localhost/HMI/contact.php">Contact</a></li>
				    <li class="menuitem"><a href="http://localhost/HMI/about.php">About</a></li>
                </ul>
	       </nav>
        </div>    
            <div id="comapre">
                <h3>ICE CREAM</h3>
                <img src="ice.jpg" height="250" width="250">
                <button onclick="myFunction()" align="center">EXPLOREE ME!!! </button>
                <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 150/- per 1L Tub</button>    
                <p id="demo"></p>
                    <script>
                        function myFunction() 
                        {
                            document.getElementById("demo").innerHTML = "A soft, sweet frozen food made with milk and cream and typically flavoured with vanilla, fruit, or other ingredients.";
                        }
                    </script>

        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>PANEER</h3>
                <img src="paneer.jpg" height="250" width="250">
                    <button onclick="myFunction1()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 400/- per kg</button>
                    <p id="demo1"></p>
                    <script>
                        function myFunction1() 
                        {
                            document.getElementById("demo1").innerHTML = "A type of milk curd cheese used in Indian, Iranian, and Afghan cooking";  
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>SHRIKHAND</h3>
                <img src="shri.jpg" height="250" width="250">
                    <button onclick="myFunction2()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 80/- per kg</button>
                    <p id="demo2"></p>
                    <script>
                        function myFunction2() 
                        {
                            document.getElementById("demo2").innerHTML = "Shrikhand is an Indian sweet dish made of strained dahi (yogurt)";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>RABDI</h3>
                <img src="rabdi.jpg" height="250" width="250">
                    <button onclick="myFunction3()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 60/- per kg</button>
                    <p id="demo3"></p>
                    <script>
                        function myFunction3() 
                        {
                            document.getElementById("demo3").innerHTML = "A sweet, condensed-milk-based dish, originating from the Indian subcontinent, made by boiling milk on low heat for a long time until it becomes dense and changes its colour to off-white or pale yellow.";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>YOGHURT</h3>
                <img src="dahi.jpg" height="250" width="250">
                    <button onclick="myFunction4()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 100/- per kg</button>
                    <p id="demo4"></p>
                    <script>
                        function myFunction4() 
                        {
                            document.getElementById("demo4").innerHTML = "A semi-solid food prepared from milk fermented by added bacteria, often sweetened and flavoured.";
                        }
                    </script>
        </div>
    </body>
</html>
