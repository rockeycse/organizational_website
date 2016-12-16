<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Update Admin</small>
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
                <?php echo form_open_multipart('MasterAdminController/update_admin_data/'); ?>
                <!--                <form action="--><?php //echo base_url(); ?><!--MasterAdminController/add_admin_data" method="post">-->
                <div class="box box-primary">

                    <div class="box-body box-profile col-sm-8 col-lg-offset-2">
                        <div class="box-header with-border col-lg-offset-4">
                            <h3 class="box-title " style="text-align: center">Update Admin</h3>
                        </div>

                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_name" class="col-sm-4 control-label">Name</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <input class=" fa-th form-control" name="admin_name" id="admin_name"
                                               placeholder="Name" type="text" required value="<?php echo $admin_data[0]['admin_name']?>">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_email" class="col-sm-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input class="fa-th form-control" name="admin_email" id="admin_email"
                                               placeholder="Email" type="email" value="<?php echo $admin_data[0]['admin_email']?>" required>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_designation" class="col-sm-4 control-label">Designation</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <input class=" fa-th form-control" name="admin_designation"
                                               id="admin_designation" placeholder="Designation" type="text" value="<?php echo $admin_data[0]['admin_designation']?>"
                                               required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body ">
                            <div class="form-group">
                                <label for="admin_password" class="col-sm-4 control-label">Password</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                        <input class="fa-th form-control" name="admin_password" id="admin_password"
                                               placeholder="Password" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="fa-th form-control" type="hidden" name="admin_id" id="admin_id"  value="<?php echo $admin_data[0]['admin_id']?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Image</label>

                                    <div class="input-group">
                                        <div class="box box-primary">
                                            <div id="main">

                                                <h3>Update Admin Image</h3>
                                                <p>Click Here</p>
                                                <input type="file" id="admin_image" name="admin_image"
                                                       class="cmyadmin" value="Upload" required>
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