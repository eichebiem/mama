@extends('layouts.admin')


@section('content')
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
          <h1>
          <i class="fa fa-home"></i> Home
          </h1>
          <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Blank page</li>
          </ol>
     </section>

     <!-- Main content -->
     <section class="content">

          <!-- Small boxes (Stat box) -->
          <div class="row">
          <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-red">
               <div class="inner">
               <h3>{{ $workshops }}</h3>

               <p>New Workshop Requests</p>
               </div>
               <div class="icon">
               <i class="ion ion-person-add"></i>
               </div>
               <a href="/admin/training_workshops" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-purple">
               <div class="inner">
               <h3>53<sup style="font-size: 20px">%</sup></h3>

               <p>New Business Requests</p>
               </div>
               <div class="icon">
               <i class="ion ion-person-add"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-orange">
               <div class="inner">
               <h3>{{ $stats }}</h3>

               <p>New Stats Requests</p>
               </div>
               <div class="icon">
               <i class="ion ion-person-add"></i>
               </div>
               <a href="/admin/statistical_analysis" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-orange">
               <div class="inner">
               <h3>65</h3>

               <p>Comming soon</p>
               </div>
               <div class="icon">
               <i class="ion ion-person-add"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
          </div>
          <!-- ./col -->
          </div>
          <!-- /.row -->

     </section>
     <!-- /.content -->
     </div>
     <!-- /.content-wrapper -->

@endsection