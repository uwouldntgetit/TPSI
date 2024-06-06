<?php

    // debug
    ini_set('display_errors', '1');

    // dump a variable
    // var_dump($_REQUEST);

    // echo ' <hr> $_RESPONSE <br><br>';
    // var_dump($_RESPONSE);

    if (isset($_COOKIE['theme'])) {
        if ($_COOKIE['theme'] === 'dark') {

            echo '<scipt>
                    document.body.setAttribute("data-theme", "dark");
                  </scipt>';
        } else {
            echo '<script>
                    document.body.setAttribute("data-theme", "light");
                  </scri>';
        }
    }

?>