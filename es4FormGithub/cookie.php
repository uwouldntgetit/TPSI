<?php

    // debug
    ini_set('displa_errors', '1');

    // dump a variable
    // var_dump($_REQUEST);

    // echo ' <hr> $_RESPONSE <br><br>';
    // var_dump($_RESPONSE);

    if (isset($_COOKIE['theme'])) {
        if ($_COOKIE['theme'] === 'dark') {

            echo '<style>
                    body {
		      background-color: #333;
		      color: #fafafa;
                    }
                  </style>';
        } else {
            echo '<style>
                    body {
		      background-color: #fafafa;
		      color: #333;
                    }
                  </style>';
        }
    }

?>