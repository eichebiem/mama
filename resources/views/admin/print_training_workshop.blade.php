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
                              Training Workshop
                         </h2>
                    </div>
                    <!-- /.col -->
               </div>
               <div class="row">
                    <div class="col-xs-12">
                         <h2 class="page-header">
                              <i class="fa fa-user"></i> {{ $workshop -> company_name}}
                              <small class="pull-right">Date: {{ $workshop -> created_at -> toDayDateTimeString() }}</small>
                         </h2>
                    </div>
                    <!-- /.col -->
               </div>
               <!-- info row -->


               <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                         <strong>Address</strong>
                         <address>
                              {{ $workshop -> company_address }}
                         </address>

                         <strong>Email</strong>
                         <address>
                              {{ $workshop -> company_email }}
                         </address>

                         <strong>Telephone</strong>
                         <address>
                              {{ $workshop -> company_tel }}
                         </address>

                         <strong>No. of Participants</strong>
                         <address>
                              {{ $workshop -> participants }}
                         </address>
                    </div>
                    <!-- /.col -->

                    <div class="col-sm-4 invoice-col">
                         <strong>Contact Person</strong>
                         <address>
                              {{ $workshop -> contact_person }}
                         </address>

                         <strong>Contact Number</strong>
                         <address>
                              {{ $workshop -> contact_number }}
                         </address>

                         <strong>Designation</strong>
                         <address>
                              {{ $workshop -> contact_designation }}
                         </address>

                         <strong>Department</strong>
                         <address>
                              {{ $workshop -> contact_department }}
                         </address>
                    </div>
                    <!-- /.col -->

                    <div class="col-sm-4 invoice-col">
                         <strong>Course</strong>
                         <address>
                              {{ $workshop -> course }}
                         </address>

                         <strong>Ewan</strong>
                         <address>
                              {{ $workshop -> ewan }}
                         </address>

                         <strong>Days</strong>
                         <address>
                              {{ $workshop -> days }}
                         </address>

                         <strong>Special Instructions</strong>
                         <address>
                              {{ $workshop -> special_instructions }}
                         </address>
                    </div>
                    <!-- /.col -->
               </div>
               <!-- /.row -->

          </section>
          <!-- /.content -->
     </div>
     <!-- ./wrapper -->
     </body>
</html>
