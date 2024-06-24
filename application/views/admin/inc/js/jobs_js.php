<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
    $(document).ready(function () {
        $('#job_dataTable').DataTable();
    });
    CKEDITOR.replace('editor_1');
    CKEDITOR.replace('editor_2');
    CKEDITOR.replace('editor_3');
    function submitForm() {
        // Update the textarea with the CKEditor data
        for (var instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        return true; // Proceed with form submission
    }
</script>