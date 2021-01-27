<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form" method="post">
                        <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Search ..." aria-label="Search">

                    </form>
                </div>

                <?php
                if (isset($_POST['cari'])) {
                  // header ("Location: ../search/index.php?nilai=$_GET[search]");
                  echo "<script>setTimeout(function(){ window.location.href= '../search/index.php?nilai=$_POST[cari]';}, 0);</script>";
                }
                 ?>

            </div>
        </div>

        <div class="col-sm-5">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="../images/home/Polije.png" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    

                    <a class="nav-link" href="../assets/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>



        </div>

    </div>

</header>
