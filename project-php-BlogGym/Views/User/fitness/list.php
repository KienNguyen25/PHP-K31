
<!-- ------------- -->
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Markedia - Marketing Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="./assets/User/css/bootstrap.css" rel="stylesheet">
    
    <!-- FontAwesome Icons core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js">
    <link href="./assets/User/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="./assets/User/styles.css">
    <!-- Animate styles for this template -->
    <link href="./assets/User/css/animate.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="./assets/User/css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="./assets/User/css/colors.css" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="./assets/User/css/versionn/marketing.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
   #cta{
      background: rgba(0, 0, 0, 0) url(./assets/User/imgs/banner-shark.webp) no-repeat scroll center center / cover !important;
   }
   .con-banner {
    width: 500px;
   }
 .center-banner{
    justify-content: center;  
    }

</style>
<body>

    <div id="wrapper">
      <!-- header -->
      <?php   include 'Views/User/partials/header.php'; ?>


   <!-- slider -->
   <section id="cta" class="section">
            <div class="container">
                <div class="row center-banner">
                    <div class="col-lg-8 col-md-12 align-self-center">
                       <img class="con-banner" src="assets/User/imgs/con-banner.png" alt="">
                    </div>
                 
                </div>
            </div>
        </section>
        <!-- end slider -->

        <section class="section lb">
            <div class="container">
                <div class="row center-banner">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-custom-build">
                                <div class="blog-box wow fadeIn">
                                <?php foreach($posts as $post){?>
                                    <div class="post-media">
                                        <a href="index.php?mod=show&act=details&id=<?=$post['id']?>" title="">
                                            <img src="<?= $post['thumbnail']?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>

                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">
                                  
                                        <h4><a href="#" title=""><?= $post['name']?></a></h4>
                                        <p><?= $post['description']?></p>
                                        <small><a href="marketing-category.html" title="">Make Money</a></small>
                                        <small><a href="marketing-single.html" title="">24 July, 2017</a></small>
                                        <small><a href="#" title="">by Jack</a></small>
                                        <small><a href="#" title=""><i class="fa fa-eye"></i> 2291</a></small>
                                    </div><!-- end meta -->
                                    <?php }?>
                                </div><!-- end blog-box -->
                                <hr class="invis">
                            </div>
                        </div>
                        <hr class="invis">
                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                       <!--  SIDEBAR -->
                       <?php  include 'Views/User/partials/sidebar.php'; ?>

                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

   

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->
    <?php  include 'Views/User/partials/footer.php'; ?>

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>