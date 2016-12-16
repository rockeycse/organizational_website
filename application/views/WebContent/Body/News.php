<div id="blog-breadcrumb" class="text-center page-breadcrumb">
    <div class="container">
        <h1>সকল<span>সংবাদ</span></h1>
        <p class="breadcrumb-text"></p>
    </div>
</div><!--/.page-breadcrumb-->


<div id="main-blog">

    <div class="container">
        <div class="breadcrumbs">
            <span itemtype="##" itemscope=""><a href="<?php echo base_url() ?>PagesController" itemprop="url"><span
                        itemprop="title">মুলপাতা</span></a></span>

            <span class="delim"><i class="icon fa fa-caret-right"></i></span>
            <span itemtype="##" itemscope=""><a href="PagesController/all_news">সংবাদ</a></span>
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
                            <li><a href="news-detail.html">সকল সংবাদ</a></li>
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
                            foreach ($latest_news_details as $row) {
                                ?>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $row->admin_post_id ?>"><img
                                                class="img-responsive"
                                                src="<?php echo base_url(); ?>post_images/<?php echo $row->admin_post_thumb_img ?>"
                                                alt=""/></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="entry-title"><a
                                                href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $row->admin_post_id ?>"><?php echo $row->admin_post_title ?></a>
                                        </h4>
                                        <div class="entry-meta small">
                                            <p><i class="fa fa-calendar"></i>মঙ্গলবার, ২১ জুন ২০১৬</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

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
            </div> <!--/Sidebar-->
            <div class="container">
            <div id="content" class="site-content col-md-4">
                <?php
                if (!empty($all_news[0]['admin_post_id'])) {
                    ?>
                    <div class="post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <img class="img-responsive" src="<?php echo base_url()?>post_images/<?php echo $all_news[0]['admin_post_thumb_img'] ?>" style="height: 150px;width: 300px"
                                     alt=""/>
                            </div>
                        </div>

                        <div class="post-content">
                            <h2 class="entry-title">
                                <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[0]['admin_post_id'] ?>"><?php echo $all_news[0]['admin_post_title'] ?></a>
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="publish-date"><i class="fa fa-calendar"></i><a href="#">মঙ্গলবার, ২১ জুন
                                            ২০১৬</a></li>
                                    <li class="tag"><i class="fa fa-tags"></i><a href="#">জাতীয়</a></li>
                                </ul>
                            </div>
                            <div class="entry-summary">
                                <p><?php echo $y = substr($all_news[0]['admin_post_description'], 0, 500) . '.......' ?></p>

                                <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[0]['admin_post_id'] ?>"
                                   class="btn btn-info">বিস্তারিত</a>
                            </div>
                        </div>
                    </div><!--/post-->

                    <?php
                }
                ?>

                <?php
                if (!empty($all_news[1]['admin_post_id'])) {
                ?>
                <div class="post">
                    <div class="entry-header">
                        <div class="entry-thumbnail">
                            <img class="img-responsive" src="<?php echo base_url()?>post_images/<?php echo $all_news[1]['admin_post_thumb_img'] ?>" style="height: 150px;width: 300px"
                                 alt=""/>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="entry-title">
                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[1]['admin_post_id'] ?>"><?php echo $all_news[1]['admin_post_title'] ?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>

                                <li class="publish-date"><i class="fa fa-calendar"></i><a href="#">মঙ্গলবার, ২১ জুন
                                        ২০১৬</a></li>
                                <li class="tag"><i class="fa fa-tags"></i><a href="#">জাতীয়</a></li>
                            </ul>
                        </div>
                        <div class="entry-summary">
                            <p><?php echo $y = substr($all_news[1]['admin_post_description'], 0, 500) . '.......' ?></p>

                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[1]['admin_post_id'] ?>"
                               class="btn btn-info">বিস্তারিত</a>
                        </div>
                    </div>
                </div><!--/post-->

                    <?php
                }
                ?>

                <?php
                if (!empty($all_news[2]['admin_post_id'])) {
                ?>
                <div class="post">
                    <div class="entry-header">
                        <div class="entry-thumbnail">
                            <img class="img-responsive" src="<?php echo base_url()?>post_images/<?php echo $all_news[2]['admin_post_thumb_img'] ?>" style="height: 150px;width: 300px"
                                 alt=""/>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="entry-title">
                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[2]['admin_post_id'] ?>"><?php echo $all_news[2]['admin_post_title'] ?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>

                                <li class="publish-date"><i class="fa fa-calendar"></i><a href="#">মঙ্গলবার, ২১ জুন
                                        ২০১৬</a></li>
                                <li class="tag"><i class="fa fa-tags"></i><a href="#">জাতীয়</a></li>
                            </ul>
                        </div>
                        <div class="entry-summary">
                            <p><?php echo $y = substr($all_news[2]['admin_post_description'], 0, 500) . '.......' ?></p>

                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[2]['admin_post_id'] ?>"
                               class="btn btn-info">বিস্তারিত</a>
                        </div>
                    </div>
                </div><!--/post-->
                    <?php
                }
                ?>

            </div>


            <div id="content" class="site-content col-md-4">
                <?php
                if (!empty($all_news[3]['admin_post_id'])) {
                ?>
                <div class="post">
                    <div class="entry-header">
                        <div class="entry-thumbnail">
                            <img class="img-responsive" src="<?php echo base_url()?>post_images/<?php echo $all_news[3]['admin_post_thumb_img'] ?>" style="height: 150px;width: 300px"
                                 alt=""/>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="entry-title">
                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[3]['admin_post_id'] ?>"><?php echo $all_news[3]['admin_post_title'] ?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>

                                <li class="publish-date"><i class="fa fa-calendar"></i><a href="#">মঙ্গলবার, ২১ জুন
                                        ২০১৬</a></li>
                                <li class="tag"><i class="fa fa-tags"></i><a href="#">জাতীয়</a></li>
                            </ul>
                        </div>
                        <div class="entry-summary">
                            <p><?php echo $y = substr($all_news[3]['admin_post_description'], 0, 500) . '.......' ?><p>
                                <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[3]['admin_post_id'] ?>"
                                   class="btn btn-info">বিস্তারিত</a>
                        </div>
                    </div>
                </div><!--/post-->
                    <?php
                }
                ?>

                <?php
                if (!empty($all_news[4]['admin_post_id'])) {
                ?>
                <div class="post">
                    <div class="entry-header">
                        <div class="entry-thumbnail">
                            <img class="img-responsive" src="<?php echo base_url()?>post_images/<?php echo $all_news[4]['admin_post_thumb_img'] ?>" style="height: 150px;width: 300px"
                                 alt=""/>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="entry-title">
                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[4]['admin_post_id'] ?>"><?php echo $all_news[4]['admin_post_title'] ?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="publish-date"><i class="fa fa-calendar"></i><a href="#">মঙ্গলবার, ২১ জুন
                                        ২০১৬</a></li>
                                <li class="tag"><i class="fa fa-tags"></i><a href="#">জাতীয়</a></li>
                            </ul>
                        </div>
                        <div class="entry-summary">
                            <p><?php echo $y = substr($all_news[4]['admin_post_description'], 0, 500) . '.......' ?></p>
                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[4]['admin_post_id'] ?>"
                               class="btn btn-info">বিস্তারিত</a>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
                <?php
                if (!empty($all_news[5]['admin_post_id'])) {
                ?>
                <div class="post">
                    <div class="entry-header">
                        <div class="entry-thumbnail">
                            <img class="img-responsive" src="<?php echo base_url()?>post_images/<?php echo $all_news[5]['admin_post_thumb_img'] ?>" style="height: 150px;width: 300px"
                                 alt="" >
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="entry-title">
                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[5]['admin_post_id'] ?>"><?php echo $all_news[0]['admin_post_title'] ?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="publish-date"><i class="fa fa-calendar"></i><a href="#">মঙ্গলবার, ২১ জুন
                                        ২০১৬</a></li>
                                <li class="tag"><i class="fa fa-tags"></i><a href="#">জাতীয়</a></li>
                            </ul>
                        </div>
                        <div class="entry-summary">


                            <p><?php
                                echo $y = substr($all_news[5]['admin_post_description'], 0, 500) . '.......' ?></p>
                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $all_news[5]['admin_post_id'] ?>"
                               class="btn btn-info">বিস্তারিত</a>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>

            </div>
            </div>

            <div class="text-center pagination-section">

                <?php  $links;

                $search_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", ":", ",");
                $replace_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", ":", ",");
               echo str_replace( $replace_array,$search_array, $links);

                ?>
            </div>
        </div>
    </div>

</div>
