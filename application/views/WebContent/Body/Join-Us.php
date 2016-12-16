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
                <span itemtype="##" itemscope=""><a href="index.html" itemprop="url"><span itemprop="title">মুলপাতা</span></a>
                </span>

            <span class="delim"><i class="icon fa fa-caret-right"></i></span>
            <span itemtype="##" itemscope=""><a href="news.html">সদস্য হউন</a></span>
            <span class="delim"><i class="icon fa fa-caret-right"></i></span>
            <span itemtype="##" itemscope="">সহযোগী সদস্য ফর্ম</span> <span class="delim"><i class="icon fa fa-caret-right"></i></span>

        </div>

        <div class="row">


            <div id="get-touch" class="padding-top">
                <div class="container">
                    <div class="text-center ">
                        <div class="app-section-title">
                            <h2>সহযোগী সদস্য ফর্ম</h2>
                            <!--
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>-->
                            <?php
                            $msg = $this->session->flashdata('msg');
                            if (isset($msg)) {
                                echo "<div class='alert alert-success'>$msg</div>";
                            } ?>
                        </div>
                    </div>
                    <div class="row">

                        <div style="color: red">
                            <?php echo validation_errors(); ?>
                        </div>


                        <form id="apps-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo base_url();?>PagesController/addnewmembers">


                            <div class="col-sm-5">

                                <h3>ব্যক্তিগত তথ্য</h3>


                                <div class="form-group">
                                    <input type="text" name="new_member_name" class="form-control" required="required" placeholder="নাম">
                                </div>


                                <div class="form-group">
                                    <input type="text" name="new_member_fath_or_hasband_name" class="form-control" required="required" placeholder="পিতা/ স্বামীর নাম">
                                </div>


                                <div class="form-group">
                                    <input type="email" name="new_member_email" class="form-control" required="required" placeholder="ইমেইল">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="new_member_mobile" class="form-control" required="required" placeholder="ফোন নম্বর">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="new_member_age" class="form-control" required="required" placeholder="বয়স">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="new_member_education" class="form-control" required="required" placeholder="শিক্ষাগত যোগ্যতা">
                                </div>

                                <!--
                                                                    <div class="form-group">
                                                                        <textarea name="message" id="message" required="required" class="form-control" placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>Send Message</button>
                                                                    </div>
                                -->
                                <!--

                </form>
-->
                            </div>


                            <div class="col-sm-5">

                                <h3>যোগাযোগের ঠিকানা</h3>

                                <!--                    <form id="apps-contact-form" class="contact-form" name="contact-form" method="post" action="#">	-->

                                <div class="form-inline">
                                    <input type="text" name="new_member_street_address" class="form-control" required="required" placeholder="সড়ক নং">
                                    <input type="date" name="new_member_house_no" class="form-control" required="required" placeholder="বাড়ি নং">
                                </div>

                                <div class="form-inline">
                                    <input type="text" name="new_member_vill_colony" class="form-control" required="required" placeholder="গ্রাম/মহল্লা">
                                    <input type="text" name="new_member_word" class="form-control" required="required" placeholder="ওয়ার্ড">
                                </div>


                                <div class="form-inline">
                                    <input type="text" name="new_member_post_office" class="form-control" required="required" placeholder="ডাকঘর">
                                    <input type="text" name="new_member_post_code" class="form-control" required="required" placeholder="পোস্ট কোড">
                                </div>

                                <div class="form-inline">
                                    <input type="text" name="new_member_union" class="form-control" required="required" placeholder="ইউনিয়ন/পৌরসভা">
                                    <input type="text" name="new_member_sub_dis" class="form-control" required="required" placeholder="উপজেলা/থানা">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="new_member_dis" class="form-control" required="required" placeholder="জেলা">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="new_member_country" class="form-control" required="required" placeholder="দেশ">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>জমা দিন</button>
                                </div>

                            </div>



                        </form>

                        <div class="col-sm-2 text-center">


                            <ul class="contact-social">
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>


                        </div>





                    </div>
                    <!--
        <div class="col-sm-4">
            <img class="img-responsive" src="images/landing/2.png" alt="" />
        </div>
-->
                </div>
            </div>
        </div>
        <!--/#get-touch-->


        <!--


                <div class="text-center pagination-section">
            <nav>
                <ul class="pagination">
                    <li><a href="index.html" aria-label="Previous"><span aria-hidden="true">পূর্ববর্তী</span></a></li>
                    <li><a href="#">১</a></li>
                    <li><a class="active" href="#">২</a></li>
                    <li><a href="#">৩</a></li>
                    <li><a href="#">৪</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">পরবর্তী</span></a></li>
                </ul>
            </nav>
        </div>

-->


    </div>
</div>

