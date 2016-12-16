<div class="content-wrapper">
    <?php echo form_open_multipart('MasterAdminController/add_breaking_news_data'); ?>
    <section class="content">
        <div class="row">
            <div class="col-sm-10">

            </div>
        </div>
        <img src="<?php echo base_url(); ?>ad_res/dist/img/beautiful-sampan-eco-resort1.jpg"
             style=" width: 100%;height: 30%">
        <h1 style="color:black;text-align:center">
            Bangladesh Jamaat-e-Islami
        </h1>

        <h4 class="" style="margin-top: 2%; margin-bottom: 2%; text-align: center">Select a News as Breaking News </h4>
        <?php
        $msg = $this->session->flashdata('msg');
        if (isset($msg)) {
            echo "<div class='alert alert-success'>$msg</div>";
        } ?>

        <div id="boxshadow">
            <?php echo $links; ?>
            <table id="t01" style="width: 100%">
                <tr>
                    <th><strong>Sl No</strong></th>
                    <th><strong>Post Title</strong></th>
                </tr>
                <?php
                if (!$post_data == NULL) {
                    foreach ($post_data as $row): {
                        ++$page;
                        ?>


                        <tr>
                            <td>
                                <div class="radio">
                                    <label><input type="radio" name="admin_post_id" value="<?php echo $row->admin_post_id ?>">
                                </div>
                            </td>
                            <td><?php echo $row->admin_post_title ?></td>
                        </tr>


                        <?php


                    }
                    endforeach;
                }
                ?>
                <tr></tr>
            </table>

            <br>
            <div class="col-md-2 col-sm-2 col-lg-offset-5">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>

                <br>

            </div>
            <?php echo $links; ?>


        </div>


    </section>




    <?php echo form_close();?>
</div><!-- /.content-wrapper -->