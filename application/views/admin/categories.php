<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-lg-12">

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">All Categories</h5>
                    <a class="btn btn-success" href="<?= base_url('admin/category/add') ?>">Add Category +</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($categories)) {
                                    foreach ($categories as $index => $item) {
                                        ?>

                                        <tr>
                                            <td>
                                                <?= $item['created_at'] ?>
                                            </td>
                                            <td>
                                                <?= $item['name'] ?>
                                            </td>
                                            <td>
                                                <img src="<?= base_url().$item['icon'] ?>" alt="" style="max-height:100px; max-width:100px;">
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/pages/view_category?uid=') . $item['uid'] ?>"
                                                    class="btn btn-info">
                                                    VIEW
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/pages/delete_category?uid=') . $item['uid'] ?>"
                                                    class="btn btn-danger">
                                                    DELETE
                                                </a>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>


    </div>


</div>