<!-- Jquery Core Js -->
<script src="{{asset('backend/assets/bundles/libscripts.bundle.js')}}"></script>

<!-- Plugin Js -->
<script src="{{asset('backend/assets/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/bundles/dataTables.bundle.js')}}"></script>

<!-- Jquery Page Js -->
<script src="{{asset('backend/assets/js/template.js')}}"></script>
<script src="{{asset('backend/assets/js/page/index.js')}}"></script>

<script>
    $('#myDataTable')
    .addClass( 'nowrap')
    .dataTable( {
        responsive: true,
        columnDefs: [
            { targets: [-1, -3], className: 'dt-body-right' }
        ]
    });
</script>
