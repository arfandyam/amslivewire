
@extends('layouts.main')

{{-- @section('stylesheet')
    @livewireStyles

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

@endsection --}}

@section('content')
<div>
    {{-- @include('Include.livewire.script')      --}}
    @livewire('buat-kontrak-khs')   
</div>    
@endsection 

{{-- @section('script')
    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    @livewireScripts           
@endsection --}}




    
{{-- <script>
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
</script>    --}}

