<!--/#navigation-->

<div class="blog1 container">


    <div class="row">
        <div class="col-sm-2 breakingn"><strong><a href="#">ব্রেকিং নিউজ:</a></strong></div>
        <div class="col-sm-10">
            <marquee behavior="scroll" direction="left"><a
                    href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $headline[0]['admin_post_id'] ?>"><?php echo $headline[0]['admin_post_title'] ?></a>
            </marquee>
        </div>
    </div>


    <div class="mcontainer">

        <div class="text-center">

            <div class="row">

                <div class="section-title">
                    <h2>সর্বশেষ <span>সংবাদ</span></h2>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-6">
                    <div class="project-content">
                        <div class="project big-content">
                            <img class="img-responsive"
                                 src="<?php echo base_url(); ?>post_images/<?php echo $latest_news1[0]['admin_post_thumb_img'] ?>"
                                 style="height: 500px; width: 600px"
                                 alt=""/>
                            <div class="overlay">
                                <a href="news-detail.html"><i class="fa fa-arrow-circle-o-right"></i></a>
                                <h3>বিস্তারিত</h3>
                                <h4>জামায়াত এবং ছাত্রশিবিরের নেতা-কর্মীদের গ্রেফতারের তীব্র নিন্দা</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">

                    <div class="">
                        <div class="small-post">
                            <div class="entry-meta">
                                <p>সংবাদ শিরোনাম</p>
                            </div>
                            <?php
                            foreach ($latest_news_details as $row) {
                                ?>
                                <div class="media">
                                    <div class="pull-right">
                                        <a href="#"><img class="img-responsive"
                                                         src="<?php echo base_url(); ?>post_images/<?php echo $row->admin_post_thumb_img ?>"
                                                         style="width:60px;height:60px;" alt=""/></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="datemonth">
                                            <p class="date">১০</p>
                                            <p class="month">মার্চ</p>
                                        </div>

                                        <p class="mdi"><a
                                                href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $row->admin_post_id ?>"><?php echo $row->admin_post_title ?></a>
                                        </p>
                                    </div>
                                    <hr>
                                </div>
                                <?php
                            }
                            ?>


                        </div>
                    </div>


                </div>


                <div class="add_buttons">
                    <a href="<?php echo base_url() ?>PagesController/all_news">
                        <button type="submit"><i class=""></i>সকল সংবাদ</button>
                    </a>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6">
                    <div class="project-content">
                        <div class="project medium-content">
                            <img class="img-responsive" src="<?php echo base_url(); ?>res/images/home/project/c2.jpg"
                                 alt=""/>
                            <div class="overlay">
                                <a href="news-detail.html"><i class="fa fa-arrow-circle-o-right"></i></a>
                                <h3>সাম্প্রতিক সংঘটিত কোন হত্যাকান্ডের সাথে জামায়াতের কোন সম্পর্ক নেই</h3>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="project-content">
                        <div class="project medium-content">
                            <img class="img-responsive" src="<?php echo base_url(); ?>res/images/home/project/c3.jpg"
                                 alt=""/>
                            <div class="overlay">
                                <a href="news-detail.html"><i class="fa fa-arrow-circle-o-right"></i></a>
                                <h3>মাগুরায় জামায়াত শিবিরের নেতা কর্মীদের গ্রেফতারের তীব্র প্রতিবাদ</h3>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <br>


            <div class="row">
                <div class="col-sm-12">
                    <div class="mpromotion parallax-section">
                        <div class="overlay-bg"></div>

                        <div class="col-sm-4">
                            <h1><span>সর্বশেষ বিবৃতি</span></h1>
                            <h6><span><?php echo $latest_news_briefing[0]['admin_post_title'] ?></span></h6>
                            <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $latest_news_briefing[0]['admin_post_id'] ?>"
                               class="btn btn-info">বিস্তারিত</a>
                        </div>


                        <div class="col-sm-8 myborder-left">

                            <ul>

                                <li>
                                    <p class=""><a
                                            href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $latest_news_briefing[1]['admin_post_id'] ?>"><?php echo $latest_news_briefing[1]['admin_post_title'] ?></a>
                                    </p>
                                </li>


                                <li>
                                    <p class=""><a
                                            href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $latest_news_briefing[2]['admin_post_id'] ?>"><?php echo $latest_news_briefing[2]['admin_post_title'] ?></a>
                                    </p>
                                </li>


                                <li>
                                    <p class=""><a
                                            href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $latest_news_briefing[3]['admin_post_id'] ?>"><?php echo $latest_news_briefing[3]['admin_post_title'] ?></a>
                                    </p>
                                </li>


                                <li>
                                    <p class=""><a
                                            href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $latest_news_briefing[4]['admin_post_id'] ?>"><?php echo $latest_news_briefing[4]['admin_post_title'] ?></a>
                                    </p>
                                </li>

                            </ul>

                        </div>


                    </div>


                    <br>


                    <div class="text-center blank-position">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="position-title position-one">
                                    <h2>Section</h2>
                                    <a href="events.html">
                                        <p>Link</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="position-title position-one">
                                    <h2>Section</h2>
                                    <a href="events.html">
                                        <p>Link</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="position-title position-one">
                                    <h2>Section</h2>
                                    <a href="events.html">
                                        <p>Link</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="position-title position-one">
                                    <h2>Section</h2>
                                    <a href="events.html">
                                        <p>Link</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <br>


                    <div class="mpromotion my-parallax-section">
                        <div class="overlay-bg"></div>


                        <div class="col-sm-6">


                            <h2 class="heading"><a href="#" title="সংবাদ">কর্মসূচী</a></h2>

                            <ul class="mylist">
                                <?php
                                foreach ($all_agenda as $row) {
                                    ?>
                                    <li>
                                        <div class="datemonth">
                                            <p class="date">১০</p>
<!--                                            <p class="date">--><?php //echo $row->admin_post_date?><!--</p>-->
                                            <p class="month">মার্চ</p>
                                        </div>
                                        <span><a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $row->admin_post_id ?>"><?php echo $row->admin_post_title?></a></span>
                                    </li>
                                    <?php
                                }
                                ?>

<!--                                <li>-->
<!--                                    <div class="datemonth">-->
<!--                                        <p class="date">১০</p>-->
<!--                                        <p class="month">মার্চ</p>-->
<!--                                    </div>-->
<!--                                    <span><a href="events-detail.html">কর্মসূচী</a></span>-->
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <div class="datemonth">-->
<!--                                        <p class="date">১০</p>-->
<!--                                        <p class="month">মার্চ</p>-->
<!--                                    </div>-->
<!--                                    <span><a href="events-detail.html">কর্মসূচী</a></span>-->
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <div class="datemonth">-->
<!--                                        <p class="date">১০</p>-->
<!--                                        <p class="month">মার্চ</p>-->
<!--                                    </div>-->
<!--                                    <span><a href="events-detail.html">কর্মসূচী</a></span>-->
<!--                                </li>-->
<!---->
<!---->
<!--                                <li>-->
<!--                                    <div class="datemonth">-->
<!--                                        <p class="date">১০</p>-->
<!--                                        <p class="month">মার্চ</p>-->
<!--                                    </div>-->
<!--                                    <span><a href="events-detail.html">কর্মসূচী</a></span>-->
<!--                                </li>-->

                            </ul>


                        </div>


                        <div class="col-sm-6">

                            <h2 class="heading"><a href="#" title="সংবাদ">নির্বাচিত প্রবন্ধ</a></h2>


                            <ul class="mylist">
                                <?php
                                foreach ($articles as $row) {
                                    ?>
                                    <li>
                                        <i class="fa fa-angle-right"></i>
                                        <a href="<?php echo base_url() ?>PagesController/headline_details/<?php echo $row->admin_post_id ?>"
                                           title=""><?php echo $row->admin_post_title ?></a>
                                    </li>

                                    <?php
                                }
                                ?>

                            </ul>

                        </div>

                    </div>

                    <br>
                </div>


            </div>


        </div>


    </div>

</div>



