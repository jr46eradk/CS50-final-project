<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
