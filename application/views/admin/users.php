<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-lg-12">

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">All Banners</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($users)) {
                                    foreach ($users as $index => $user) {
                                        ?>
                                        <tr>
                                            
                                            <td><?= $user['user_name'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['phone'] ?></td>
                                            <td><?= $user['created_at'] ?></td>
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