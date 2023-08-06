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
    <h1>GOURMET</h1>
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
                <h3>OLIVE OIL</h3>
                <img src="oil.jpg" height="250" width="250">
                <button onclick="myFunction()" align="center">EXPLOREE ME!!! </button>
                <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 700/- per 1L</button>
                    <p id="demo"></p>
                    <script>
                        function myFunction() 
                        {
                            document.getElementById("demo").innerHTML = "Olive oil is the natural oil extracted from olives, the fruit of the olive tree.";
                        }
                    </script>

        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>VINEGAR</h3>
                <img src="vinegar.jpg" height="250" width="250">
                    <button onclick="myFunction1()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 200/- per 1L</button>
                    <p id="demo1"></p>
                    <script>
                        function myFunction1() 
                        {
                            document.getElementById("demo1").innerHTML = " sour-tasting liquid containing acetic acid, obtained by fermenting dilute alcoholic liquids, typically wine, cider, or beer, and used as a condiment or for pickling.";  
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>SUGERCANE JUICE</h3>
                <img src="sugar.jpeg" height="250" width="250">
                    <button onclick="myFunction2()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 120/- per 1L</button>
                    <p id="demo2"></p>
                    <script>
                        function myFunction2() 
                        {
                            document.getElementById("demo2").innerHTML = " A sweet material that consists essentially of sucrose obtained from sugarcane or sugar beets";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>COCONUT MILK</h3>
                <img src="coco.jpg" height="250" width="250">
                    <button onclick="myFunction3()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 30/- per 200ml</button>
                    <p id="demo3"></p>
                    <script>
                        function myFunction3() 
                        {
                            document.getElementById("demo3").innerHTML = "The milk has a thick consistency and a rich, creamy texture";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>CHOCO SPREAD</h3>
                <img src="choco.jpg" height="250" width="250">
                    <button onclick="myFunction4()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 300/- per 300g</button>
                    <p id="demo4"></p>
                    <script>
                        function myFunction4() 
                        {
                            document.getElementById("demo4").innerHTML = "his chocolate spread is made from milk and cocoa to give you the delicious taste of chocolate when you bite into pancakes, bread, cupcakes, and more.";
                        }
                    </script>
        </div>
    </body>
</html>
