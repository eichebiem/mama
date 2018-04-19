<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>8 NorthEast | Admin</title>
          <!-- Tell the browser to be responsive to screen width -->
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <!-- Bootstrap 3.3.7 -->
          <link rel="stylesheet" href="/admins/css/vendor/bootstrap.min.css">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="/admins/css/vendor/font-awesome.min.css">
          <!-- Ionicons -->
          <link rel="stylesheet" href="/admins/css/vendor/ionicons.min.css">
          <!-- Theme style -->
          <link rel="stylesheet" href="/admins/css//theme/AdminLTE.min.css">

          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

          <!-- Google Font -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
     </head>

     <body onload="window.print();">
          <div class="wrapper">
          <!-- Main content -->
          <section class="invoice">
               <!-- title row -->
               <div class="row">
                    <div class="col-xs-12">
                         <h2 style="text-align:center">
                              Statistical Analysis
                         </h2>
                    </div>
                    <!-- /.col -->
               </div>
               <div class="row">
                    <div class="col-xs-12">
                         <h2 class="page-header">
                              <i class="fa fa-user"></i> {{ $stat -> client_name}}
                              <small class="pull-right">Date: {{ $stat -> created_at -> toDayDateTimeString() }}</small>
                         </h2>
                    </div>
                    <!-- /.col -->
               </div>
               <!-- info row -->


               <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                         <strong>Address</strong>
                         <address>
                              {{ $stat -> client_address }}
                         </address>

                         <strong>Email</strong>
                         <address>
                              {{ $stat -> client_email }}
                         </address>

                         <strong>Contact Number</strong>
                         <address>
                              {{ $stat -> contact_number }}
                         </address>

                         <strong>Telephone</strong>
                         <address>
                              {{ $stat -> client_tel }}
                         </address>
                    </div>
                    <!-- /.col -->

                    <div class="col-sm-4 invoice-col">
                         <strong>Research Title</strong>
                         <address>
                              {{ $stat -> research_title }}
                         </address>

                         <strong>Statistical Procedure/s</strong>
                         <address>
                              {{ $stat -> stats_procedure }}
                         </address>
                    </div>
                    <!-- /.col -->

                    <div class="col-sm-4 invoice-col">
                         <strong>Company / Institution Name</strong>
                         <address>
                              {{ $stat -> company_name }}
                         </address>

                         <strong>Address</strong>
                         <address>
                              {{ $stat -> company_address }}
                         </address>

                         <strong>Research Class</strong>
                         <address>
                              {{ $stat -> research_class }}
                         </address>
                    </div>
                    <!-- /.col -->
               </div>
               <!-- /.row -->


               <!-- this row will not appear when printing -->
               <div class="row no-print">
                    <div class="col-xs-12">
                         <a href="/admin/statistical_analysis/print/{{ $stat -> id }}" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
                    </div>
               </div>
          </section>
          <!-- /.content -->
     </div>
     <!-- ./wrapper -->
     </body>
</html>
