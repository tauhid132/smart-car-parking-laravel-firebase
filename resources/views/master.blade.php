<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UIU CSS</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <link rel="icon" href="{{ asset('theme/img/fevi.png') }}" type="image/x-icon">
    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{ asset('theme/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('theme/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/et-line-font/et-line-font.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/datatables/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/formwizard/jquery-steps.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/bootstrap-switch/bootstrap-switch.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">


    
</head>


@yield('content')




<!-- Scripts --> 
<script src="{{ asset('theme/js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/app.js') }}"></script> 
<script src="{{ asset('theme/bootstrap/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('theme/js/niche.js') }}"></script>
<!-- Morris JavaScript --> 
<script src="{{ asset('theme/plugins/raphael/raphael-min.js') }}"></script> 
<script src="{{ asset('theme/plugins/morris/morris.js') }}"></script> 
<script src="{{ asset('theme/plugins/functions/dashboard1.js') }}"></script>
<!-- DataTable --> 
<script src="{{ asset('theme/plugins/datatables/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('theme/plugins/datatables/dataTables.bootstrap.min.js') }}"></script> 
<script src="{{ asset('theme/plugins/table-expo/filesaver.min.js') }}"></script>
<script src="{{ asset('theme/plugins/table-expo/xls.core.min.js') }}"></script>
<script src="{{ asset('theme/plugins/table-expo/tableexport.js') }}"></script>

<script src="{{ asset('theme/plugins/formwizard/jquery-steps.js') }}"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Chartjs JavaScript --> 
<script src="{{ asset('theme/plugins/chartjs/chart.min.js') }}"></script>
<!-- <script src="https://www.chartjs.org/dist/2.9.4/Chart.min.js"></script> -->
<script src="{{ asset('theme/plugins/chartjs/chart-int.js') }}"></script>

<!-- Chartist JavaScript --> 
<script src="{{ asset('theme/plugins/chartist-js/chartist.min.js') }}"></script> 
<script src="{{ asset('theme/plugins/chartist-js/chartist-plugin-tooltip.js') }}"></script> 
<script src="{{ asset('theme/plugins/functions/chartist-init.js') }}"></script>

<script src="{{ asset('theme/plugins/bootstrap-treeview-master/bootstrap-treeview.min.js') }}"></script> 
<script src="{{ asset('theme/plugins/bootstrap-treeview-master/bootstrap-treeview.int.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</html>

