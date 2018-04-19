@extends('layouts.admin')

@section('content')

     <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
               <h1>
                    <i class="fa fa-file-o"></i> View Statistical Analysis
               </h1>
               <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-file-o"></i> View Statistical Analysis</a></li>
                    <li class="active">Blank page</li>
               </ol>
          </section>

          @if(session()->has('message'))
               <div class="alert alert-success" id="alert_message">
                    <i class="fa fa-check"></i> {{ session()->get('message') }}
               </div>
          @endif

          <!-- Main content -->
          <section class="invoice">
               <!-- title row -->
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

@endsection