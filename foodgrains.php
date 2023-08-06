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
    <h1>FOODGRAINS</h1>
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
                <h3>RICE</h3>
                <img src="rice.jpg" height="250" width="250">
                <button onclick="myFunction()" align="center">EXPLOREE ME!!! </button>
                <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 50/- per kg</button>
                    <p id="demo"></p>
                    <script>
                        function myFunction() 
                        {
                            document.getElementById("demo").innerHTML = "A swamp grass which is widely cultivated as a source of food, especially in Asia.";
                        }
                    </script>

        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>WHEAT</h3>
                <img src="wheat" height="250" width="250">
                    <button onclick="myFunction1()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 60/- per kg</button>
                    <p id="demo1"></p>
                    <script>
                        function myFunction1() 
                        {
                            document.getElementById("demo1").innerHTML = "Wheat is a grass widely cultivated for its seed, a cereal grain which is a worldwide staple food.";  
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>JOWAR</h3>
                <img src="jowar.jpg" height="250" width="250">
                    <button onclick="myFunction2()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 55/- per kg</button>
                    <p id="demo2"></p>
                    <script>
                        function myFunction2() 
                        {
                            document.getElementById("demo2").innerHTML = "Jowar is the Indian name for sorghum, a cereal grain native to Africa. Also known as white millet. ";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>BAJRA</h3>
                <img src="bajra.jpg" height="250" width="250">
                    <button onclick="myFunction3()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 65/- per kg</button>
                    <p id="demo3"></p>
                    <script>
                        function myFunction3() 
                        {
                            document.getElementById("demo3").innerHTML = "Bajra is one of the most widely grown varieties of millet and also known as Black Millet or Pearl Millet.";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>RAGI</h3>
                <img src="ragi.jpg" height="250" width="250">
                    <button onclick="myFunction4()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 75/- per kg</button>
                    <p id="demo4"></p>
                    <script>
                        function myFunction4() 
                        {
                            document.getElementById("demo4").innerHTML = "A cereal grass, Eleusine coracana, cultivated in the Old World for its grain";
                        }
                    </script>
        </div>
    </body>
</html>
