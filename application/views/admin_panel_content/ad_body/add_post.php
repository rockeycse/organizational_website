<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small> Post a news</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>MasterAdminController"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Main content -->

    <!--    --><?php //if (isset($my_data)): foreach ($my_data as $row) : ?>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <?php
            $msg = $this->session->flashdata('msg');
            if (isset($msg)) {
                echo "<div class='alert alert-success'>$msg</div>";
            } ?>
            <div class="col-md-12">
                <div style="color: red">
                    <?php echo validation_errors(); ?>
                </div>
                <?php echo form_open_multipart('MasterAdminController/add_post_data'); ?>

                <div class="box box-primary">

                    <div class="box-body box-profile col-sm-8 col-lg-offset-2">
                        <div class="box-header with-border col-lg-offset-4">
                            <h3 class="box-title " style="text-align: center">Post a news</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_name" class="col-sm-4 control-label">Post Title</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <input class=" fa-th form-control" name="admin_post_title" id="admin_post_title"
                                               placeholder="Post Title" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_email" class="col-sm-4 control-label">Post Description</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-th-large"></i>
                                        </div>

                                        <textarea class="form-control" rows="6" name="admin_post_description"
                                                  id="admin_post_description" placeholder="Enter ..."  required>
                                        </textarea>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_designation" class="col-sm-4 control-label">Post Type</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="admin_post_type" name="admin_post_type">
                                        <option></option>
                                        <?php
                                        foreach ($post_type as $row):
                                            ?>
                                            <option
                                                value="<?php echo $row->post_type_id; ?>"><?php echo $row->post_type_name; ?></option>
                                            <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_designation" class="col-sm-4 control-label">Post Date</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <input class=" fa-th form-control" name="admin_post_date"
                                               id="admin_post_date" placeholder="Post Date" type="date"
                                               required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_designation" class="col-sm-4 control-label">Post Category</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="admin_post_category" name="admin_post_category">
                                        <option></option>
                                        <?php
                                        foreach ($post_category as $row):
                                            ?>
                                            <option
                                                value="<?php echo $row->post_category_id; ?>"><?php echo $row->post_category_name; ?></option>
                                            <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_designation" class="col-sm-4 control-label">Author</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <input class=" fa-th form-control" name="admin_post_author"
                                               id="admin_post_author" placeholder="Author" type="text" value="<?php echo $admin_name; ?>"
                                               required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Post Image</label>

                                    <div class="input-group">
                                        <div class="box box-primary col-lg-10 col-lg-offset-1">
                                            <div id="main">
                                                <h3>Add Admin Image</h3>
                                                <p>Click Here</p>
                                                <input type="file" id="admin_post_thumb_img" name="admin_post_thumb_img"
                                                       class="cmyadmin" value="Upload" >
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row box-footer">
                            <a href="#" class="btn btn-warning" data-dismiss="modal" role="button">Cancel</a>
                            <input type="submit" class="btn btn-info pull-right" value="Submit"/>
                        </div>
                    </div>


                </div>
                <!--                </form>-->
                <!-- /.box-body -->
                <?php echo form_close(); ?>
            </div>
        </div>
</div>
</section>
<!-- /.content -->
</div>