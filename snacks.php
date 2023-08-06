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
    <h1>SNACKS</h1>
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
                <h3>SAMOSA</h3>
                <img src="samosa.jpg" height="250" width="250">
                <button onclick="myFunction()" align="center">EXPLOREE ME!!! </button>
                <button onclick="" align="right">BUY@ RS 15/- per piece</button>
                    <p id="demo"></p>
                    <script>
                        function myFunction() 
                        {
                            document.getElementById("demo").innerHTML = "A triangular savoury pastry fried in ghee or oil, containing spiced vegetables";
                        }
                    </script>

        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>PAV BHAJI</h3>
                <img src="pavb" height="250" width="250">
                    <button onclick="myFunction1()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="" align="right">BUY@ RS 80/- per kg</button>
                    <p id="demo1"></p>
                    <script>
                        function myFunction1() 
                        {
                            document.getElementById("demo1").innerHTML = "Pav bhaji is a fast food dish from India consisting of a thick vegetable curry served with a soft bread roll.";  
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>MISAL PAV</h3>
                <img src="misal.jpg" height="250" width="250">
                    <button onclick="myFunction2()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="" align="right">BUY@ RS 50/- per kg</button>
                    <p id="demo2"></p>
                    <script>
                        function myFunction2() 
                        {
                            document.getElementById("demo2").innerHTML = "Popular dish from Kolhapur.";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>FRANKIE</h3>
                <img src="frank" height="250" width="250">
                    <button onclick="myFunction3()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="" align="right">BUY@ RS 50/- per kg</button>
                    <p id="demo3"></p>
                    <script>
                        function myFunction3() 
                        {
                            document.getElementById("demo3").innerHTML = "A Frankie is an Indian wrap best described as a Mumbai burrito";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>SANDWHICH</h3>
                <img src="sand.jpg" height="250" width="250">
                    <button onclick="myFunction4()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="" align="right">BUY@ RS 45/- per kg</button>
                    <p id="demo4"></p>
                    <script>
                        function myFunction4() 
                        {
                            document.getElementById("demo4").innerHTML = "A food typically consisting of vegetables, sliced cheese or meat, placed on or between slices of bread, or more generally any dish wherein bread serves as a container or wrapper for another food type.";
                        }
                    </script>
        </div>
    </body>
</html>
