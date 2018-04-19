@extends('layouts.admin')

@section('content')

     <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
               <h1>
                    <i class="fa fa-file-o"></i> View Training Workshop
               </h1>
               <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-file-o"></i> View Training Workshop</a></li>
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


               <!-- this row will not appear when printing -->
               <div class="row no-print">
                    <div class="col-xs-12">
                         <a href="/admin/training_workshop/print/{{ $workshop -> id }}" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
                    </div>
               </div>
          </section>
          <!-- /.content -->
     </div>

@endsection