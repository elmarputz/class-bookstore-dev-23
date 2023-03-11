<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>SCM4 Book Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="assets/main.css" rel="stylesheet">

</head>
<body>


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">SCM 4 Bookshop (V 2.0)</a>
        </div>


        <div class="navbar-collapse collapse" id="bs-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li  <?php if ($view === 'welcome') { ?>class="active"<?php } ?>><a href="index.php">Home</a></li>
                <li <?php if ($view === 'list') { ?>class="active"<?php } ?>><a href="index.php?view=list">List</a></li>
                <li  <?php if ($view === 'search') { ?>class="active"<?php } ?>><a href="index.php?view=search">Search</a></li>
                <li  <?php if ($view === 'checkout') { ?>class="active"<?php } ?>><a href="index.php?view=checkout">Checkout</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right login">
                <li>
                    <a href="index.php?view=checkout">
                       <span class="badge"><?php // echo Util::escape($cartSize); ?></span> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                </li>
                <li class="dropdown">
                    <?php if ($user == null): ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Not logged in!
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="index.php?view=login">Login now</a>
                            </li>
                        </ul>
<<<<<<< HEAD
                    <?php else: ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Logged in as  <span class="badge"><?php // echo Util::escape($user->getUserName()); ?></span>
=======
                    <?php // else: ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Logged in as  <span class="badge"><?php echo // Util::escape($user->getUserName()); ?></span>
>>>>>>> beb5d4271d2e93d35caf709ddb860dbd2e364f45
                  <b class="caret"></b>
                </a>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li class="centered">
<<<<<<< HEAD
                    <form method="post" action="<?php // echo Util::action(Bookshop\Controller::ACTION_LOGOUT); ?>">
=======
                    <form method="post" action="<?php echo // Util::action(Bookshop\Controller::ACTION_LOGOUT); ?>">
>>>>>>> beb5d4271d2e93d35caf709ddb860dbd2e364f45
                      <input class="btn btn-xs" role="button" type="submit" value="Logout" />
                    </form>
                    </li>
                  </ul>
<<<<<<< HEAD
              <?php endif; ?>
=======
              <?php // endif; ?>
>>>>>>> beb5d4271d2e93d35caf709ddb860dbd2e364f45
                </li>
            </ul> <!-- /. login -->
        </div><!--/.nav-collapse -->
    </div>
</div>

<<<<<<< HEAD
<div class="container">
=======
<div class="container">
>>>>>>> beb5d4271d2e93d35caf709ddb860dbd2e364f45
