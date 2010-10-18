<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!--[if IE]><![endif]-->

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>PHP and JS Communication Examples</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
  <textarea id="userListJson" style="display: none;">
    <?php

           $userList = array(
                            'pjfry' => array(
                                'name'    => 'Philip J. Fry',
                                'userId'  => 'pjfry',
                                'job'     => 'Delivery Boy',
                                'age'     => 42
                            ),
                            'mrowe' => array(
                                'name'    => 'Mike Rowe',
                                'userId'  => 'mrowe',
                                'job'     => 'All Of Them',
                                'age'     => 48
                            ),
                            'vprice' => array(
                                'name'    => 'Vincent Price',
                                'userId'  => 'vprice',
                                'job'     => 'Creepy Guy',
                                'age'     => 82
                            ),
                            'mfreeman' => array(
                                'name'    => 'Morgan Freeman',
                                'userId'  => 'mfreeman',
                                'job'     => 'God, President, Personal Driver, Inmate',
                                'age'     => 78
                            )
            );

            echo json_encode($userList);
    ?>
  </textarea>

  <div id="container">
    <header>
        Reusable Templates
    </header>
    
    <div id="main">
        <h2>Users</h2>
        <ul id="users">
            <?php foreach ($userList as $u) : ?>
                <li id="<?php echo $u['userId']; ?>"><?php echo $u['name']; ?></li>
            <?php endforeach; ?>
        </ul>
    
        <div style="margin-top: 20px;">
            <h2>User Details</h2>
            <div id="details"></div>
        </div>
    </div>
    
    <footer>

    </footer>
  </div> <!-- end of #container -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="js/jquery-1.4.2.min.js"><\/script>')</script>
  <script src="js/jquery.tmpl.min.js"></script>
  <script src="js/templates2.js"></script>
</body>
</html>