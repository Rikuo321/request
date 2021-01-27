<header id="header" style="padding:0px !important">

       <div class="navbar navbar-inverse" role="banner">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>

                   <a class="navbar-brand" href="./">
                    <h1><img src="images/logo2.png" alt="logo"></h1>
                   </a>

               </div>
               <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav navbar-right">

                       <li class="active"><a href="../" style="font-weight: 400;font-family: initial;">Home</a></li>
                       <li class="dropdown"><a href="../about.php" style="font-weight: 400;font-family: initial;">ABOUT US </a></li>
                       <?php

                         if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {

                            include 'user2.php';
                            include 'admin.php';


                         } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {

                           include 'user2.php';

                         }

                         else {

                           include 'user.php';

                        } ?>

                   </ul>
               </div>
               <div class="search">
                   <form role="form" action="../search/index.php" method="get">
                       <i class="fa fa-search"></i>
                       <div class="field-toggle">
                           <input type="text" class="search-form" name="nilai" autocomplete="off" placeholder="Search">
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </header>
   <!--/#header-->
