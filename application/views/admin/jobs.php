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
                    <h5 class="m-0 font-weight-bold text-primary">Jobs</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Add Jobs</h6>
                        </div>

                        <div class="card-body">
                            <form action="<?=base_url('admin/pages/add_job')?>" method="POST" onsubmit="return submitForm()">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-control" id="category" name="category" required>
                                                <option value="">Select a category...</option>
                                                <?php if(!empty($categories)){
                                                    foreach($categories as $category){
                                                ?>
                                                    <option value="<?= $category['uid']?>"><?= $category['name']?></option>
                                                <?php }}?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Expire date</label>
                                            <input type="date" class="form-control" name="expire_date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Jobs title</label>
                                    <textarea type="text" class="form-control" name="title" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Jobs details</label>
                                    <textarea name="details" id="editor_1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Location</label>
                                    <input type="text" class="form-control" name="location"></input>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Position</label>
                                        <input type="number" class="form-control" name="position"></input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Experience</label>
                                        <input type="text" class="form-control" name="experience"></input>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Salary</label>
                                            <input type="text" class="form-control" name="salary"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Key responsibilities</label>
                                    <textarea name="responsibilities" id="editor_2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Skills</label>
                                    <textarea name="skills" id="editor_3"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Add">
                                </div>
                            </form>

                        </div>
                    </div>



                </div>
            </div>


            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Jobs</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-info" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>job title</th>
                                            <th>job Deatils</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
if (!empty($jobs)) {
    foreach ($jobs as $index => $item) {
        ?>
                                                <tr>
                                                    <td>
                                                        <?=$item['title']?>
                                                    </td>
                                                    <td>
                                                        <?=$item['details']?>
                                                    </td>
                                                    <td>
                                                        <a href="<?=base_url('admin/pages/delete_job?uid=') . $item['uid']?> "
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

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Jobs Applications</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-info" id="job_dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>date</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>job</th>
                                            <th>cv</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
if (!empty($jobs_req)) {
    foreach ($jobs_req as $index => $item) {
        ?>
                                                <tr>
                                                    <td>
                                                        <?=$item['created_at']?>
                                                    </td>
                                                    <td>
                                                        <?=$item['name']?>
                                                    </td>
                                                    <td>
                                                        <?=$item['email']?>
                                                    </td>
                                                    <td>
                                                        <?=$item['phone']?>
                                                    </td>
                                                    <td>
                                                        <?=$item['job']?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-success" href=" <?=base_url() . $item['file_path']?>">View cv</a>
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


    </div>
</div>
<!-- /.container-fluid -->