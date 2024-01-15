

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>True or False Quiz</title>
</head>
<body style="
 background-image: url('<?php echo base_url(); ?>user_assets/img/test.jpg');background-size: cover;">
    <style>
        #frame001 {
            border-radius: 5px;
            border: 2px solid white;
            height: 450px;
            width: 500px;
            align-content: center;
             position: absolute;
            left: 35%;
            margin-left: -50px;
        }

        .buttons001 {
            background-color: dodgerblue;
            color: white;
            width: 70px;
            height: 30px;
            border-radius: 5px;
        }

        .buttons002 {
            background-color: blue;
            color: white;
            width: 70px;
            height: 30px;
            border-radius: 5px;
        }

        #font001 {
            text-align: center;
            font-size: large;
            color: white;
        }
    </style><center><h1 style="color: white;">Online Test</h1></center>
    &nbsp&nbsp
    <div id="frame001">
        <div id="font001">
            <h2>True Or False Test</h2><text>Question: <text id="number001">0</text></text><br />
            <text>Score: <text id="score001">0</text></text><br />
            <text>Time: <text id="time001">30</text></text><br />
            <hr />
            <br><br><br>
            <br>
            <div id="disappear001">
                <button class="buttons002" onclick="begin001()">Begin</button>
            </div>
            <p id="message001"></p>
            <p id="message002"></p>
            <p id="message003"></p>
            <p id="message004"></p>
        </div>
    </div>
    <script>
        var question001 = ["There are 9 continents in the world.",
            "There is no islands on Earth.",
            "Ostriches have 2 toes in each leg.",
            "Tomatoes are vegetables.",
            "The Blue Whale feeds on Tuna fish.",
            "Fifa World Cup tournaments are played every 4 years.",
            "The north side of the Equator Line has more countries than the south side.",
            "Madagascar is the largest island in the world.",
            "Helium is the lightest gas element out of all gas elements.",
            "The hottest planet in the solar system is Mercury."
        ];

        var options001 = ["<button class=buttons001 onclick=q1i()>True</button><br /><br /><button class=buttons001 onclick=q1c()>False</button>"];
        var options002 = ["<button class=buttons001 onclick=q2c()>False</button><br /><br /><button class=buttons001 onclick=q2i()>True</button>"];
        var options003 = ["<button class=buttons001 onclick=q3c()>True</button><br /><br /><button class=buttons001 onclick=q3i()>False</button>"];
        var options004 = ["<button class=buttons001 onclick=q4i()>True</button><br /><br /><button class=buttons001 onclick=q4c()>False</button>"];
        var options005 = ["<button class=buttons001 onclick=q5c()>False</button><br /><br /><button class=buttons001 onclick=q5i()>True</button>"];
        var options006 = ["<button class=buttons001 onclick=q6i()>False</button><br /><br /><button class=buttons001 onclick=q6c()>True</button>"];
        var options007 = ["<button class=buttons001 onclick=q7c()>True</button><br /><br /><button class=buttons001 onclick=q7i()>False</button>"];
        var options008 = ["<button class=buttons001 onclick=q8c()>False</button><br /><br /><button class=buttons001 onclick=q8i()>True</button>"];
        var options009 = ["<button class=buttons001 onclick=q9c()>True</button><br /><br /><button class=buttons001 onclick=q9i()>False</button>"];
        var options010 = ["<button class=buttons001 onclick=q10i()>True</button><br /><br /><button class=buttons001 onclick=q10c()>False</button>"];

        var a = 0;
        a++;
        var b = 0;
        b++;

        function begin001() {
            c = 30;
            disappear001.innerHTML = "";
            message001.innerHTML = question001[0];
            message002.innerHTML = options001;
            number001.innerHTML = a++;
        }

        function q1c() {
            message003.innerHTML = "Correct. There are 7 continents in the world.";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q1i() {
            message003.innerHTML = "Incorrect. There are 7 continents in the world.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q2c() {
            message003.innerHTML = "Correct. There is a lot of islands on Earth.";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q2i() {
            message003.innerHTML = "Incorrect. There is a lot of islands on Earth.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q3c() {
            message003.innerHTML = "Correct";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q3i() {
            message003.innerHTML = "Incorrect. They do have 2 toes in each leg.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q4c() {
            message003.innerHTML = "Correct. Tomatoes are classified under fruits.";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q4i() {
            message003.innerHTML = "Incorrect. Tomatoes are classified under fruits.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q5c() {
            message003.innerHTML = "Correct. The blue whale feeds on small shrimp-like fish called Krills.";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q5i() {
            message003.innerHTML = "Incorrect. The Blue Whale feeds on small shrimp-like fish called Krills.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q6c() {
            message003.innerHTML = "Correct";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q6i() {
            message003.innerHTML = "Incorrect. Fifa World Cup tournaments are played every 4 years.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q7c() {
            message003.innerHTML = "Correct";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q7i() {
            message003.innerHTML = "Incorrect. More countries on the north side than there are on the south side.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q8c() {
            message003.innerHTML = "Correct. Greenland is the largest island in the world.";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q8i() {
            message003.innerHTML = "Incorrect. Greenland is the largest island in the world.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q9c() {
            message003.innerHTML = "Correct";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q9i() {
            message003.innerHTML = "Incorrect. Helium is the lightest gas of all gas elements.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q10c() {
            message003.innerHTML = "Correct. Venus is the hottest planet. That is because its atmosphere contains 95% of Carbon dioxide.";
            message002.innerHTML = "";
            score001.innerHTML = b++;
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function q10i() {
            message003.innerHTML = "Incorrect. Venus is the hottest planet. That is because its atmosphere contains 95% of Carbon dioxide.";
            message002.innerHTML = "";
            message004.innerHTML = "<button class=buttons002 onclick=next001()>Next</button>";
        }

        function next001() {
            if (a == "2") {
                message001.innerHTML = question001[1];
                message002.innerHTML = options002;
                message003.innerHTML = "";
                number001.innerHTML = a++;
                message004.innerHTML = "";
            }

            else if (a == "3") {
                message001.innerHTML = question001[2];
                message002.innerHTML = options003;
                message003.innerHTML = "";
                number001.innerHTML = a++;
                message004.innerHTML = "";
            }

            else if (a == "4") {
                message001.innerHTML = question001[3];
                message002.innerHTML = options004;
                message003.innerHTML = "";
                number001.innerHTML = a++;
                message004.innerHTML = "";
            }

            else if (a == "5") {
                message001.innerHTML = question001[4];
                message002.innerHTML = options005;
                message003.innerHTML = "";
                number001.innerHTML = a++;
                message004.innerHTML = "";
            }

            else if (a == "6") {
                message001.innerHTML = question001[5];
                message002.innerHTML = options006;
                message003.innerHTML = "";
                number001.innerHTML = a++;
                message004.innerHTML = "";
            }

            else if (a == "7") {
                message001.innerHTML = question001[6];
                message002.innerHTML = options007;
                message003.innerHTML = "";
                number001.innerHTML = a++;
                message004.innerHTML = "";
            }

            else if (a == "8") {
                message001.innerHTML = question001[7];
                message002.innerHTML = options008;
                message003.innerHTML = "";
                number001.innerHTML = a++;
                message004.innerHTML = "";
            }

            else if (a == "9") {
                message001.innerHTML = question001[8];
                message002.innerHTML = options009;
                message003.innerHTML = "";
                number001.innerHTML = a++;
                message004.innerHTML = "";
            }

            else if (a == "10") {
                message001.innerHTML = question001[9];
                message002.innerHTML = options010;
                message003.innerHTML = "";
                number001.innerHTML = a++;
                message004.innerHTML = "";
            } else {
               window.clearInterval(update);
                c = "-";
                message001.innerHTML = "End of Quiz";
                message002.innerHTML = "";
                message003.innerHTML = "";
                message004.innerHTML = "<button class=buttons002 onclick=Submitscore()>Submit</button>";
            }
        }

        function timer001() {
            c = c - 1;
            if (c < 30) {
            time001.innerHTML = c;

            }

            if (c < 1) {
               window.clearInterval(update);
                message001.innerHTML = "Time's up";
                message002.innerHTML = "";
                message003.innerHTML = "";
                message004.innerHTML = "<button class=buttons002 onclick=Submitscore()>Submit</button>";

            }
        }
        function Submitscore()
        {
             
          //  var time001=$("#time001").val();
          $scoree= score001.innerHTML;
            if(score001.innerHTML>='6')
            {
                alert("Congratulations!!! You are pass in exam");
                   window.location.href="http://localhost/urvi/ciex/user/browsejob?score=" + $scoree;
            }
            else
            {
                alert("You are failed in exam");
                 window.location.href="http://localhost/urvi/ciex/user/browsejob?score="+ $scoree;
            }
        
        }

       update = setInterval("timer001()", 1000);

        // function repeat001() {
        //     location.reload();
        // }
    </script>
</body>
</html>