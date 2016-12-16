<div id="blog-breadcrumb" class="text-center page-breadcrumb">
    <div class="container">
        <h1>বিস্তারিত<span>সংবাদ</span></h1>
        <p class="breadcrumb-text"></p>
    </div>
</div>
<!--/.page-breadcrumb-->

<div id="main-blog">
    <div class="container">
        <div class="breadcrumbs">
            <span itemtype="##" itemscope=""><a href="<?php echo base_url() ?>PagesController" itemprop="url"><span
                        itemprop="title">মুলপাতা</span></a></span>

            <span class="delim"><i class="icon fa fa-caret-right"></i></span>
            <span itemtype="##" itemscope=""><a href="news.html">সংবাদ</a></span>
            <span class="delim"><i class="icon fa fa-caret-right"></i></span>
            <span itemtype="##" itemscope="">সাংস্কৃতিক</span>

        </div>

        <div class="row">
            <div id="sidebar" class="col-md-4">
                <div class="widget-area">
                    <div class="widget widget_search">
                        <form role="form" id="search" method="get" name="contact-form" action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" autocomplete="off" placeholder="সংবাদ খুজুন">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>


                    <div class="widget widget_categories">
                        <h3 class="widget_title">সংবাদ</h3>
                        <ul>
                            <li><a href="news.html">সকল সংবাদ</a></li>
                            <li><a href="#">সংবাদ বিজ্ঞপ্তি</a></li>
                            <li><a href="#">ক্যাম্পাস ও শিক্ষা কার্যক্রম</a></li>
                            <li><a href="#">আন্দোলন কর্মসূচী</a></li>
                            <li><a href="#">প্রশিক্ষন কার্যক্রম</a></li>
                        </ul>
                    </div>

                    <div class="widget">
                        <h3 class="widget_title">সর্বশেষ সংবাদ</h3>
                        <div class="latest-posts">

                            <?php
                            $i = 0;
                            foreach ($latest_news as $row) {
                                ?>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img class="img-responsive" src="<?php echo base_url()?>post_images/<?php echo $row->admin_post_thumb_img?>" alt=""/></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="entry-title"><a href="#"><?php echo $row->admin_post_title ?></a>
                                        </h4>
                                        <div class="entry-meta small">
                                            <p><i class="fa fa-calendar"></i>মঙ্গলবার, ২১ জুন ২০১৬</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
<!--                            <div class="media">-->
<!--                                <div class="pull-left">-->
<!--                                    <a href="#"><img class="img-responsive" src="images/blog/post2.jpg" alt=""/></a>-->
<!--                                </div>-->
<!--                                <div class="media-body">-->
<!--                                    <h4 class="entry-title"><a href="#">অপপ্রচার বন্ধ করে নেতাদের সন্ধান ও মুক্তি না-->
<!--                                            দিলে কঠোর কর্মসূচি ঘোষনা করা হবে</a></h4>-->
<!--                                    <div class="entry-meta small">-->
<!--                                        <p><i class="fa fa-calendar"></i>মঙ্গলবার, ২১ জুন ২০১৬</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="media">-->
<!--                                <div class="pull-left">-->
<!--                                    <a href="#"><img class="img-responsive" src="images/blog/post3.jpg" alt=""/></a>-->
<!--                                </div>-->
<!--                                <div class="media-body">-->
<!--                                    <h4 class="entry-title"><a href="#">গুম গণগ্রেপ্তার অপপ্রচার করে সরকার গুপ্তহত্যা-->
<!--                                            ধামাচাপা দিতে চাইছে</a></h4>-->
<!--                                    <div class="entry-meta small">-->
<!--                                        <p><i class="fa fa-calendar"></i>মঙ্গলবার, ২১ জুন ২০১৬</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="media">-->
<!--                                <div class="pull-left">-->
<!--                                    <a href="#"><img class="img-responsive" src="images/blog/post4.jpg" alt=""/></a>-->
<!--                                </div>-->
<!--                                <div class="media-body">-->
<!--                                    <h4 class="entry-title"><a href="#">আগামী ২১ জুন মঙ্গলবার দেশব্যাপী বিক্ষোভ কর্মসূচি-->
<!--                                            ঘোষনা</a></h4>-->
<!--                                    <div class="entry-meta small">-->
<!--                                        <p><i class="fa fa-calendar"></i>মঙ্গলবার, ২১ জুন ২০১৬</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="media">-->
<!--                                <div class="pull-left">-->
<!--                                    <a href="#"><img class="img-responsive" src="images/blog/post5.jpg" alt=""/></a>-->
<!--                                </div>-->
<!--                                <div class="media-body">-->
<!--                                    <h4 class="entry-title"><a-->
<!--                                            href="#">--><?php //echo $headline_details[0]['admin_post_title'] ?><!--</a></h4>-->
<!--                                    <div class="entry-meta small">-->
<!--                                        <p><i class="fa fa-calendar"></i>মঙ্গলবার, ২১ জুন ২০১৬</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>


                    <!--


                    <div class="widget">
                        <h3 class="widget_title">Recent Comments</h3>
                        <div class="recent-comment">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="img-responsive" src="images/team/1.jpg" alt="" /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="entry-title"><a href="#">Artisan wolf fap lomo, laborum</a></h4>
                                    <div class="entry-meta small">
                                        <p><i class="fa fa-calendar"></i>14 Feb 2015</p>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="img-responsive" src="images/team/3.jpg" alt="" /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="entry-title"><a href="#">Artisan wolf fap lomo, laborum</a></h4>
                                    <div class="entry-meta small">
                                        <p><i class="fa fa-calendar"></i>14 Feb 2015</p>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="img-responsive" src="images/team/5.jpg" alt="" /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="entry-title"><a href="#">Exercitation photo booth stumptown</a></h4>
                                    <div class="entry-meta small">
                                        <p><i class="fa fa-calendar"></i>12 Feb 2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="img-responsive" src="images/team/1.jpg" alt="" /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="entry-title"><a href="#">Exercitation photo booth stumptown</a></h4>
                                    <div class="entry-meta small">
                                        <p><i class="fa fa-calendar"></i>12 Feb 2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="img-responsive" src="images/team/7.jpg" alt="" /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="entry-title"><a href="#">Exercitation photo booth stumptown</a></h4>
                                    <div class="entry-meta small">
                                        <p><i class="fa fa-calendar"></i>12 Feb 2015</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget tag-cloud">
                        <h3 class="widget_title">Tag Clouds</h3>
                        <ul>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Marketing</a></li>

                            <li><a href="#">Bloging</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Multipurpose</a></li>
                            <li><a href="#">Graphics</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Graphics</a></li>
                        </ul>
                    </div>

-->
                </div>
            </div>
            <!--/Sidebar-->

            <div id="content" class="site-content col-md-8">
                <div class="post">
                    <div class="entry-header">
                        <div class="entry-thumbnail">
                            <img class="img-responsive"
                                 src="<?php echo base_url(); ?>post_images/<?php echo $headline_details[0]['admin_post_thumb_img'] ?>"
                                 alt=""/>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="entry-title">
                            <a href="blog-detail.html"><?php echo $headline_details[0]['admin_post_title'] ?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="publish-date"><i class="fa fa-calendar"></i><a href="#">রবিবার, ১৯ জুন
                                        ২০১৬</a></li>
                                <li class="tag"><i class="fa fa-tags"></i><a href="#">সংবাদ</a></li>
                            </ul>

                            <!--                            <ul>-->
                            <!--                                <li class="tag"><i class="fa fa-pencil-square"></i><a href="#">-->
                            <?php //echo $headline_details[0]['admin_post_author']?><!--</a></li>-->
                            <!--                            </ul>-->
                        </div>
                        <div class="entry-summary">

                            <p><?php echo $headline_details[0]['admin_post_description'] ?></p>

                        </div>
                        <div class="social-share">


                            <a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i
                                    class="fa fa-twitter"></i><span></span></a>

                            <a href="http://facebook.com" class="icon-button facebook"><i
                                    class="fa fa-facebook"></i><span></span></a>

                            <a href="http://plus.google.com" class="icon-button google-plus"><i
                                    class="fa fa-google-plus"></i><span></span></a>

                        </div>
                        <!--/social-share-->
                    </div>
                </div>
                <!--/post-->
                <div class="media-wrapper">


                    <div class="widget">
                        <h3 class="widget_title">সংশ্লিষ্ট সংবাদ</h3>

                        <div class="row">

                            <div class="latest-posts">

                                <ul>
                                    <?php
                                    $i = 0;
                                    foreach ($related_news as $row) {
                                        ?>
                                        <li>

                                            <h4 class="entry-title"><a href="#"> <i
                                                        class="fa fa-newspaper-o"></i><?php echo $row->admin_post_title ?>
                                                    অপপ্রচার বন্ধ করে নেতাদের সন্ধান ও মুক্তি
                                                    না দিলে কঠোর কর্মসূচি ঘোষনা করা হবে</a></h4>

                                        </li>
                                        <!--                                    <li>-->
                                        <!--                                        <h4 class="entry-title"> <a href="#"><i class="fa fa-newspaper-o"></i>ঝিনাইদহে পুরোহিত হত্যার সাথে ছাত্রশিবিরকে জড়িয়ে পুলিশ সুপারের মিথ্যা বক্তব্যের তীব্র নিন্দা ও প্রতিবাদ</a></h4>-->
                                        <!--                                    </li>-->
                                        <!---->
                                        <!--                                    <li>-->
                                        <!--                                        <h4 class="entry-title"> <a href="#"> <i class="fa fa-newspaper-o"></i>বাংলামেইলসহ কিছু গণমাধ্যমে ছাত্রশিবিরকে জড়িয়ে মিথ্যা ও ভিত্তিহীন প্রতিবেদন প্রকাশের তীব্র নিন্দা ও প্রতিবাদ</a></h4>-->
                                        <!--                                    </li>-->
                                        <!---->
                                        <!--                                    <li>-->
                                        <!--                                        <h4 class="entry-title"> <a href="#"> <i class="fa fa-newspaper-o"></i>আগামী ২১ জুন মঙ্গলবার দেশব্যাপী বিক্ষোভ কর্মসূচি ঘোষনা</a></h4>-->
                                        <!--                                    </li>-->
                                        <?php
                                        $i++;
                                    }
                                    ?>

                                </ul>


                            </div>


                        </div>

                    </div>


                </div>
                <!--/media-wrapper-->
            </div>
        </div>
    </div>
</div>
<!--/#main-blog-->
