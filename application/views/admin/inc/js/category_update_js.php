<script>
    $(document).on('change', 'input[name="category_icon[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (event) {
                var img = $('<img>').attr('src', event.target.result).addClass('preview-image');
                var container = $('<div>').addClass('preview-container').append(img);
                var deleteBtn = $('<button>').text('Delete').addClass('delete-btn');
                container.append(deleteBtn);
                $('#categoryIconPreview').append(container);
            };
            reader.readAsDataURL(files[i]);
        }
    });
    

    $(document).on('click', '.delete-btn', function () {
        $(this).closest('.preview-container').remove();
    });
</script>
<script>

    $(document).ready(function () {
        $('#categoryIconPreview').html(`<img src="<?= base_url().$category['icon']?>" class="preview-image" alt="">`)
    });
</script>
<style>
    .preview-container {
        display: inline-block;
        margin-right: 10px;
        position: relative;
    }

    .preview-image {
        max-height: 100px;
        margin-bottom: 5px;
    }

    .delete-btn {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #ff0000;
        color: #ffffff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 12px;
    }
</style>