<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- I setup the cookie here that lasts for 100_000 seconds -->
    <?php 
                setcookie("theme", "dark", time() + 100000);
    ?>


    <div class="flex-container flex-column basis-33">
        <div>
            <svg class="logo">
                <path id="logo-path" d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"></path>
            </svg>
        </div>
    </div>

    <button onclick="changeTheme()">Cambia</button>
         
    <div class="flex-container flex-column basis-39">
        <h1 class="title">Sign in to Github</h1>
        <div id="form-wrapper" class="the-great-wrapper flex-container">
            <form class="form flex-container">
                <div class="input-wrapper">
                    <label for="username">Username or email address</label>
                    <input type="email" id="username" placeholder="" required>
                </div>

                <div class="input-wrapper">
                    <label for="password" class="flex-container" id="password-label">
                        <p>Password</p>
                        <a href="#" style="font-size: 0.7em;">Forgot password?</a>
                    </label>
                    <input type="password" id="password" placeholder="" required>
                </div>
                <button type="submit" id="submit">Sign in</button>
            </form>

        </div>
        <div class="options flex-container">
            <a href="#">Sign in with passkey</a>
            <p>New to Github? <a href="#">Create an account</a></p>
        </div>
    </div>
    
    <div class="side-image-container basis-60">
        <img id="side-image" src="hero-desktop-a38b0fd77b6c.webp" width="100%">
    </div>

    <script>
        lastTheme = "dark";
        newTheme = "light";
        toChange;
        function changeTheme(){
            document.cookie = "theme="+newTheme;
            location.reload;
            toChange = lastTheme;
            lastTheme = newTheme;
            newTheme = toChange;
        }
    </script>
    
</body>
</html>