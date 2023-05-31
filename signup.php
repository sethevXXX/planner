<!doctype html>
<html lang = "pl">
<head>

    <meta charset="utf-8">
    
    <title> sign up </title>

    <link rel = "short icon" href = "https://cdn-icons-png.flaticon.com/512/3874/3874060.png">
    <link rel = "stylesheet" href = "signup_style.css">
    <link rel = "stylesheet" href = "fontello/css/fontello.css" type = "text/css" />

</head>
<body>
    
    <main>
        
        <section>

            <header>
                <i class = " icon-user-circle"></i>
            </header>

            <form method = "POST" action = "register.php">
                <div class = "inputBox">
                    <input type = "text" name = "username" placeholder = " username" spellcheck = "false" required />
                </div>
                <div class = "inputBox">
                    <input type = "password" name = "password" placeholder = " password" required />
                </div>
                <input type = "submit" id = "signUpButton" value = "sign up"/>
            </form>
            
            <div id = "margin"></div>

        </section>

    </main>

    

    <script type = "text/javascript" src = "signup_script.js"></script>

</body>
</html>
