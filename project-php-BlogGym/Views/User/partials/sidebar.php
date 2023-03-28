<div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                               <?php foreach($posts as $featured){?>

                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="index.php?mod=show&act=details&id=<?=$featured['id']?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="<?= $featured['thumbnail']?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?= $featured['name']?></h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                    <?php }?>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div id="" class="widget">
                                <h2 class="widget-title">Advertising</h2>
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Instagram Feed</h2>
                                <div class="instagram-wrapper clearfix">
                                    <a class="" href="#"><img src="upload/small_09.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/small_01.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/small_02.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/small_03.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/small_04.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/small_05.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/small_06.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/small_07.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/small_08.jpg" alt="" class="img-fluid"></a>
                                </div><!-- end Instagram wrapper -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
                                <div class="link-widget">
                                    <ul>
                                        <li><a href="#">Marketing <span>(21)</span></a></li>
                                        <li><a href="#">SEO Service <span>(15)</span></a></li>
                                        <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                        <li><a href="#">Make Money <span>(22)</span></a></li>
                                        <li><a href="#">Blogging <span>(66)</span></a></li>
                                        <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                        <li><a href="#">Video Tuts <span>(87)</span></a></li>
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->