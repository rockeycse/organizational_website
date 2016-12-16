<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->

        <?php
        $msg = $this->session->flashdata('msg');
        if (isset($msg)) {
            echo "<div class='alert alert-success'>$msg</div>";
        } ?>

        <?php echo form_open_multipart('MasterAdminController/add_post_type_data'); ?>

        <section class="content">
            <?php echo validation_errors(); ?>
            <div class="row">
                <img src="<?php echo base_url(); ?>ad_res/dist/img/beautiful-sampan-eco-resort1.jpg"
                     style=" width: 100%;height: 30%">
                <h3 style="color:black;text-align:center">
                    Add Post Type
                </h3>
                <!-- left column -->
                <div class="col-md-4 col-sm-3 col-lg-offset-4">
                    <!-- general form elements -->
                    <div class="box box-info">

                        <div class="box-body">
                            <label>Post Type <span style="color:red;font-size:16px;">*</span></label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="post_type_name" name="post_type_name"
                                       placeholder="Post Type Name" required>
                            </div>


                        </div>
                    </div>

                </div>

            </div>

            <!-- /.row -->
        </section>

        <!-- /.content -->
        <div class="col-md-2 col-sm-2 col-lg-offset-5">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>

            <br>

        </div>
        <br>
        <!--        </form>-->
        <?php echo form_close(); ?>
    </div>
</div>
