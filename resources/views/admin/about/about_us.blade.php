@extends('layouts.admin')

@section('content')

     <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
               <h1>
                    <i class="fa fa-users"></i> About Us
               </h1>
               <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-users"></i> About Us</a></li>
                    <li class="active">Blank page</li>
               </ol>
          </section>

          @include('partials.error')

          @if(session()->has('message'))
               <div class="alert alert-success" id="alert_message">
                    <i class="fa fa-check"></i> {{ session()->get('message') }}
               </div>
          @endif

          <!-- Main content -->
          <section class="content">

               <!-- Preview box -->
               <div class="box">
                    <div class="box-header with-border">
                         <h3 class="box-title">Preview</h3>
                         <p class="box-title pull-right">Edited by: {{ $about_us -> edited_by }}</p>
                    </div>

                    <div class="box-body">
                         <h2>{{ $about_us -> title }}</h2>

                         <p>{!! $about_us -> body !!}</p>
                    </div>
                    <!-- /.box-body -->

               </div>
               <!-- /.box -->


               <!-- Edit box -->
               <div class="box">
                    <div class="box-header with-border">
                         <h3 class="box-title">Edit About Us</h3>
                    </div>

                    <div class="box-body pad">
                         <form action="/admin/about/about_us/1" method="POST" id="form">

                              @csrf
                              {{ method_field('PATCH') }}
                              
                              <input class="form-control" type="text" name="title" placeholder="Title here" value="{{ $about_us -> title }}"> <br>
                              <textarea class="textarea" name="body" placeholder="Body text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $about_us -> body }}</textarea>

                                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Update</button>
                                        <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
                         </form>
                    </div>
                    <!-- /.box-body -->

               </div>
               <!-- /.box -->

          </section>
          <!-- /.content -->
     </div>

@endsection