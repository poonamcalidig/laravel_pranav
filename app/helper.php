<?php
use Illuminate\Support\Facades\Auth;

function validate_user(){
    if(!empty(Auth::user())) {
        return "Welcome to our website";
    }else {
        return "Please login first";
    }
}

// add this file path in composer.json inside first autoload object
// "autoload": {
//     "psr-4": {
//         "App\\": "app/",
//         "Database\\Factories\\": "database/factories/",
//         "Database\\Seeders\\": "database/seeders/"
//     },
//     "files":[
//         "app/helper.php"
//     ]
// },
// run composer dump-autoload
// wherever you want to use this function use it directly

