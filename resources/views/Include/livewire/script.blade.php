<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('/') }}./asset/frontend/vendor/summernote/js/summernote.min.js"></script>
<!-- Summernote init -->
<script src="{{ asset('/') }}./asset/frontend/js/plugins-init/summernote-init.js"></script>
{{-- datepicker --}}
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function() {
        $('#description').summernote();
        $("#startDate").datepicker({
        todayBtn:  1,
        autoclose: true,
        }).on('changeDate', function (selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#endDate').datepicker('setStartDate', minDate);
        });
        
        $("#endDate").datepicker()
            .on('changeDate', function (selected) {
                var minDate = new Date(selected.date.valueOf());
                $('#startDate').datepicker('setEndDate', minDate);
            });
    });
</script>

{{-- <script>
    $('#description').summernote({
    tabsize: 2,
    height: 200,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
    ],
    callbacks: {
        onChange: function(contents, $editable) {
        @this.set('description', contents);
    }
}
});
</script>  --}}