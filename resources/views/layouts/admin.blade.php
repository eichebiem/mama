<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>ABC Enrollment System</title>
          <!-- Tell the browser to be responsive to screen width -->
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <!-- Bootstrap 3.3.7 -->
          <link rel="stylesheet" href="/admins/css/vendor/bootstrap.min.css">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="/admins/css/vendor/font-awesome.min.css">
          <!-- Ionicons -->
          <link rel="stylesheet" href="/admins/css/vendor/ionicons.min.css">
          <!-- DataTables -->
          <link rel="stylesheet" href="/admins/css/vendor/dataTables.bootstrap.min.css">
          <!-- Theme style -->
          <link rel="stylesheet" href="/admins/css//theme/AdminLTE.min.css">
          <!-- Theme color -->
          <link rel="stylesheet" href="/admins/css/theme/skin-blue.min.css">
          <!-- bootstrap wysihtml5 - text editor -->
          <link rel="stylesheet" href="/admins/css/plugins/bootstrap3-wysihtml5.min.css">

          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

          <!-- Google Font -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
     </head>
     <body class="hold-transition skin-blue sidebar-mini fixed">
          <!-- Site wrapper -->
          <div class="wrapper">

               @include('admin_partials.header')

          <!-- =============================================== -->

          <!-- Left side column. contains the sidebar -->

               @include('admin_partials.sidebar')

          <!-- =============================================== -->

          <!-- Contains page content -->
               @yield('content')

               @include('admin_partials.footer')

          </div>
          <!-- ./wrapper -->

          <!-- jQuery 3 -->
          <script src="/admins/js/vendor/jquery.min.js"></script>
          <!-- Bootstrap 3.3.7 -->
          <script src="/admins/js/vendor/bootstrap.min.js"></script>
          <!-- DataTables -->
          <script src="/admins/js/vendor/jquery.dataTables.min.js"></script>
          <script src="/admins/js/vendor/dataTables.bootstrap.min.js"></script>
          <!-- SlimScroll -->
          <script src="/admins/js/vendor/jquery.slimscroll.min.js"></script>
          <!-- FastClick -->
          <script src="/admins/js/vendor/fastclick.js"></script>
          <!-- AdminLTE App -->
          <script src="/admins/js/theme/adminlte.min.js"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="/admins/js/theme/demo.js"></script>
          <!-- Bootstrap WYSIHTML5 -->
          <script src="/admins/js/plugins/bootstrap3-wysihtml5.all.min.js"></script>


          <!-- Validate.min js -->
		<script src="/js/jquery.validate.min.js"></script>
		<!-- Custom Script -->
		<script src="/js/custom.js"></script>

          <!-- Custom JS -->
          <script>
               $(document).ready(function(){
                    $('#alert_message').delay(10000).fadeOut();
               });
          </script>
          <!-- end Custom JS -->

          <script>
               $(document).ready(function () {
                    $('.sidebar-menu').tree()
               })
          </script>

          <script>
               $(function () {
                    $('#example1').DataTable({
                         'paging'      : true,
                         'lengthChange': true,
                         'searching'   : true,
                         'ordering'    : false,
                         'info'        : true,
                         'autoWidth'   : true
                    })
               })
          </script>


          <script>
               $(function () {
                    //bootstrap WYSIHTML5 - text editor
                    $('.textarea').wysihtml5()
               })
          </script>

     </body>
</html>
