<!-- <?php
    session_start();
?> -->

<!doctype html>
<html lang = "pl">
<head>

    <meta charset="utf-8">
    
    <title> planner </title>

    <link rel = "short icon" href = "https://cdn-icons-png.flaticon.com/512/3874/3874060.png">
    <link rel = "stylesheet" href = "planner_style.css">
    <link rel = "stylesheet" href = "fontello/css/fontello.css" type = "text/css" />

</head>
<body>

    <main>
        
        <div id = "calendar">

            <header>
                <div id = "week">
                    <i class = "icon-calendar-inv"></i>
                </div>
                <div class = "dayName day">MON</div>
                <div class = "dayName day">TUE</div>
                <div class = "dayName day">WED</div>
                <div class = "dayName day">THU</div>
                <div class = "dayName day">FRI</div>
                <div class = "dayName day">SAT</div>
                <div class = "dayName day">SUN</div>
            </header>
            <section>
                <div id = "hours"></div>
                <div id = "monday"      class = "plan day"></div>
                <div id = "tuesday"     class = "plan day"></div>
                <div id = "wednesday"   class = "plan day"></div>
                <div id = "thursday"    class = "plan day"></div>
                <div id = "friday"      class = "plan day"></div>
                <div id = "saturday"    class = "plan day"></div>
                <div id = "sunday"      class = "plan day"></div>
            </section>

        </div>

    </main>

    <div id = "sideBox">

        <!-- <div class = "side">
            <i class = "icon-user-circle-o"></i>
            <span>ACCOUNT</span>
        </div> -->
        <div class = "side">
            <i class = "icon-doc-text-inv"></i> 
            <span>NOTE</span>
        </div>
        <div class = "side">
            <i class = "icon-ok-circled"></i> 
            <span>DAILY</span>
        </div>
        <div class = "side">
            <i class = "icon-th-list"></i> 
            <span>TO-DO</span>
        </div>
        <!-- <div class = "side">
            <i class = "icon-logout"></i>
            <span>LOG OUT</span>
        </div> -->

    </div>


    
    <script src = "planner_script.js" type = "text/javascript"></script>

</body>
</html>
