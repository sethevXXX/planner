<?php
    session_start();
?>

<!doctype html>
<html lang = "pl">
<head>

    <meta charset="utf-8">
    
    <title> planner </title>

    <link rel = "short icon" href = "https://cdn-icons-png.flaticon.com/512/3874/3874060.png">
    <link rel = "stylesheet" href = "planner_style.css">
    <link rel = "stylesheet" href = "fontello/css/fontello.css" type = "text/css" />

    <script type = "text/javascript" src = "planner_script.js"></script>

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
        <div id = "logOut" class = "side">
            <i class = "icon-logout"></i> LOG OUT
        </div>
        <div id = "note" class = "side">
            <i class = "icon-doc-text-inv"></i> NOTE
        </div>
        <div id = "daily" class = "side">
            <i class = "icon-ok-circled"></i> DAILY
        </div>
        <div id = "todo" class = "side">
            <i class = "icon-th-list"></i> TO-DO
        </div>
    </div>

</body>
</html>
