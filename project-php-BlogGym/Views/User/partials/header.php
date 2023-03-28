<style>
    .logo-shark{
        width: 100px;
    }
</style>
<header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="marketing-index.html"><img class="logo-shark" src="assets/User/imgs/gymshark-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?mod=show&act=home">Home</a>
                            </li>
                            <?php foreach($categories as $cate){?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?mod=show&act=listPost&cat=<?= $cate['id']?>"><?= $cate['category_name']?></a>
                            </li>
                            <?php }?>
<!-- 
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?mod=show&act=listPost&cat=4">Yoga</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?mod=show&act=listPost&cat=5">Helt</a>
                            </li> -->
                       
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="How may I help?">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
           
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="index.php?mod=auth&act=login" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index.php?mod=auth&act=logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->