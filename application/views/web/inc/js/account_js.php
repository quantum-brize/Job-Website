<script>

    // Add this function to preview selected images before uploading
    // $(document).on('change', 'input[name="home_banner_img[]"]', function (e) {
    //     var files = e.target.files;
    //     $('#imagePreview').html(''); // Clear existing previews
    //     for (var i = 0; i < files.length; i++) {
    //         var reader = new FileReader();
    //         reader.onload = function (e) {
    //             $('#imagePreview').html(`<img src="${e.target.result}" height="100" />`);
    //         };
    //         reader.readAsDataURL(files[i]);
    //     }
    // });

    $(document).on('change', 'input[name="resume_img[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                // $('#resumeImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
                $('#resumeImagePreview').html(`<iframe src="${e.target.result}" class="pdf-container" height="100"></iframe>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });

    $(document).on('change', 'input[name="user_image[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#userImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });

    $(document).on('change', 'input[name="aadhar_img[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#aadharImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });

    $(document).on('change', 'input[name="pan_img[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#panImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });
</script>


