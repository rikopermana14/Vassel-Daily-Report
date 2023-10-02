<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('logo/logo-logindo.png')}}">
  <title>Vessel Daily Report</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">

  {{-- css bootstarp --}}
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
{{-- java script --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{-- Java Script Bootsrap --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</head>
<body class="hold-transition sidebar-mini layout-fixed">


  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('logo/logo-logindo.png')}}" alt="AdminLTELogo" >
  </div>

  <!-- Navbar -->
  @include('layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    @include('layout.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
       

    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        @yield('content')
    </div>
    
  </div>
  <!-- /.content-wrapper -->
  @include('layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
{{-- <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script> --}}
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>

 <!-- DataTables -->
 <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
 <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
 <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<!-- DataTables  & Plugins -->

<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jszip/jszip.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


<script>
  var table1, table2, table3, table4, table5, table6; // Variabel table yang berbeda untuk setiap tabel
  $(function () {
    // Setup - add a text input to each footer cell
    $('#example thead tr').clone(true).appendTo( '#example thead' );
    $('#example thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

        $( 'input', this ).on( 'keyup change', function () {
            if ( table1.column(i).search() !== this.value ) {
                table1
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    table1 = $('#example').DataTable( {
        "orderCellsTop": true,
        "searching": true,
        "lengthChange": true,
        "fixedHeader": true,
        dom: 'Bfrtip',
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        initComplete: function() {
            var $buttons = $('.dt-buttons').hide();
            $('#exportLink').on('change', function() {
                var btnClass = $(this).find(":selected")[0].id
                ? '.buttons-' + $(this).find(":selected")[0].id
                : null;
                if (btnClass) $buttons.find(btnClass).click();
            })
        }
    });

    // Inisialisasi DataTables untuk tabel lainnya (table2, table3, dan table4) di sini
    // ...
    
    table2 = $('#exampled').DataTable( {
        "orderCellsTop": true,
        "searching": true,
        "lengthChange": true,
        "fixedHeader": true,
        dom: 'Bfrtip',
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        initComplete: function() {
            var $buttons = $('.dt-buttons').hide();
            $('#exportLink').on('change', function() {
                var btnClass = $(this).find(":selected")[0].id
                ? '.buttons-' + $(this).find(":selected")[0].id
                : null;
                if (btnClass) $buttons.find(btnClass).click();
            })
        }
    });

    table3 = $('#examplec').DataTable( {
        "orderCellsTop": true,
        "searching": true,
        "lengthChange": true,
        "fixedHeader": true,
        dom: 'Bfrtip',
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        initComplete: function() {
            var $buttons = $('.dt-buttons').hide();
            $('#exportLink').on('change', function() {
                var btnClass = $(this).find(":selected")[0].id
                ? '.buttons-' + $(this).find(":selected")[0].id
                : null;
                if (btnClass) $buttons.find(btnClass).click();
            })
        }
    });

    table4 = $('#examplep').DataTable( {
        "orderCellsTop": true,
        "searching": true,
        "lengthChange": true,
        "fixedHeader": true,
        dom: 'Bfrtip',
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        initComplete: function() {
            var $buttons = $('.dt-buttons').hide();
            $('#exportLink').on('change', function() {
                var btnClass = $(this).find(":selected")[0].id
                ? '.buttons-' + $(this).find(":selected")[0].id
                : null;
                if (btnClass) $buttons.find(btnClass).click();
            })
        }
    });
    table5 = $('#exampler').DataTable( {
        "orderCellsTop": true,
        "searching": true,
        "lengthChange": true,
        "fixedHeader": true,
        dom: 'Bfrtip',
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        initComplete: function() {
            var $buttons = $('.dt-buttons').hide();
            $('#exportLink').on('change', function() {
                var btnClass = $(this).find(":selected")[0].id
                ? '.buttons-' + $(this).find(":selected")[0].id
                : null;
                if (btnClass) $buttons.find(btnClass).click();
            })
        }
    });
    table6 = $('#examples').DataTable( {
        "orderCellsTop": true,
        "searching": true,
        "lengthChange": true,
        "fixedHeader": true,
        dom: 'Bfrtip',
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        initComplete: function() {
            var $buttons = $('.dt-buttons').hide();
            $('#exportLink').on('change', function() {
                var btnClass = $(this).find(":selected")[0].id
                ? '.buttons-' + $(this).find(":selected")[0].id
                : null;
                if (btnClass) $buttons.find(btnClass).click();
            })
        }
    });

  });

  $('#date-range').daterangepicker({
    startDate: '2023-01-01',
    endDate: '2023-12-31',
    opens: 'left',
    locale: {
        format: 'YYYY-MM-DD'
    }
  }, function(start, end, label) {
    // Menyaring data tabel berdasarkan rentang tanggal yang dipilih
    table1.columns(0).search(start.format('YYYY-MM-DD') + '|' + end.format('YYYY-MM-DD')).draw();
    // Terapkan ini juga ke table2, table3, dan table4 jika Anda menggunakannya
    table2.columns(0).search(start.format('YYYY-MM-DD') + '|' + end.format('YYYY-MM-DD')).draw();
    table3.columns(0).search(start.format('YYYY-MM-DD') + '|' + end.format('YYYY-MM-DD')).draw();
    table4.columns(0).search(start.format('YYYY-MM-DD') + '|' + end.format('YYYY-MM-DD')).draw();
    table5.columns(0).search(start.format('YYYY-MM-DD') + '|' + end.format('YYYY-MM-DD')).draw();
    table6.columns(0).search(start.format('YYYY-MM-DD') + '|' + end.format('YYYY-MM-DD')).draw();
  });
</script>

</body>
</html>
