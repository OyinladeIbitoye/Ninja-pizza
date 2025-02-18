<?php

     session_start();
     // how to delete or remove session variable
     if($_SERVER['QUERY_STRING'] == 'noname'){
          unset($_SESSION['name']);
     }

     // get cookie
     $gender = $_COOKIE['gender'] ?? 'unknown';

     $name = $_SESSION['name'] ?? 'Guest';
?>

<head>
     <title>Ninja Pizza</title>
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
          .brand{
               background: #b39ddb !important;
          }
          .brand-text{
               color: #b39ddb !important;
          }
          form{
               max-width: 460px;
               margin: 20px auto;
               padding: 20px;
          }
          .pizza{
               width: 100px;
               margin: 40px auto -30px;
               display: block;
               position: relative;
               top: -30px;
          }
     </style>
</head>
     <body class="grey lighen-4">
          <nav class="white z-depth-0">
               <div class="container">
                    <a href="#" class="brand-logo brand-text">Ninja Pizza</a>
                    <ul id="nav-mobile" class="right hide-on-small-and-down">
                         <li class="black-text">Hello <?php echo htmlspecialchars($name); ?></li>
                         <li class="black-text">(<?php echo htmlspecialchars($gender); ?>)</li>
                         <li><a href="#" class="btn brand z-depth-0">Add a Pizza</a></li>
                    </ul>
               </div>
          </nav>

