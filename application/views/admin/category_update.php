<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Add</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-lg-12">

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Banners</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 ">
                        <form action="<?= base_url("admin/pages/update_category") ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">name</label>
                                        <input type="text" class="form-control" name="name" value="<?= $category['name']?>"
                                            placeholder="Product Name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class='form-group'>
                                        <div>
                                            <label for="formGroupExampleInput2">Upload Category Icon</label>
                                        </div>
                                        <div id="categoryIconPreview"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" placeholder="product image" name="category_icon[]" multiple/>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="category_id" id="" value="<?= $category['uid']?>">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" id="" value="Save">
                            </div>
                        </form>
                    </div>

                </div>
            </div>




        </div>



    </div>
</div>


