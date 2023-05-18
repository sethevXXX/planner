<!doctype html>
<html lang = "pl">
<head>

    <meta charset="utf-8">
    
    <title> login </title>

    <link rel = "short icon" href = "https://cdn-icons-png.flaticon.com/512/3874/3874060.png">
    <link rel = "stylesheet" href = "login_style.css">
    <link rel = "stylesheet" href = "fontello/css/fontello.css" type = "text/css" />

    <script type = "text/javascript" src = "login_script.js"></script>

</head>
<body>
    
    <main>
        
        <section>

            <header>
                <i class = " icon-user-circle"></i>
            </header>

            <form action = "authentication.php" method = "POST">
                <div class = "inputBox">
                    <input type = "text" name = "username" placeholder = " username" spellcheck = "false" required />
                </div>
                <div class = "inputBox">
                    <input type = "password" name = "password" placeholder = " password" required />
                </div>
                <input type = "submit" id = "loginButton" value = "login"/>
            </form>

            <button id = "signUp" onclick = "signUp()">sign up</button>
            
            <div id = "margin"></div>

        </section>

    </main>

    

</body>
</html>
