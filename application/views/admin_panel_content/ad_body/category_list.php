<div class="content-wrapper">

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

        <h4 class="" style="margin-top: 2%; margin-bottom: 2%; text-align: center">List of Post Category </h4>
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
                    <th><strong>Post Category Name</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>

                </tr>
                <?php
                if (!$category_data == NULL) {
                    foreach ($category_data as $row): {
                        ++$page;
                        ?>


                        <tr>
                            <td>
                                <?php echo  $row->post_category_id ?>
                            </td>
                            <td><?php echo $row->post_category_name ?></td>



                            <td>
                                <a href='<?php echo base_url() ?>MasterAdminController/update_category/<?php echo $row->post_category_id ?>'>Edit</a>
                            </td>
                            <td>
                                <a href='<?php echo base_url() ?>MasterAdminController/delete_category/<?php echo $row->post_category_id?>'>Delete</a>
                            </td>

                        </tr>


                        <?php


                    }
                    endforeach;
                }
                ?>
                <tr></tr>
            </table>
        </div>

    </section>

</div><!-- /.content-wrapper -->