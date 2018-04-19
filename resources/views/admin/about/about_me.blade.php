@extends('layouts.admin')

@section('content')

     <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
               <h1>
                    <i class="fa fa-user-o"></i> About Me
               </h1>
               <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-user-o"></i> About Me</a></li>
                    <li class="active">Blank page</li>
               </ol>
          </section>

          @if(session()->has('message'))
               <div class="alert alert-success" id="alert_message">
                    <i class="fa fa-check"></i> {{ session()->get('message') }}
               </div>
          @endif

          <!-- Main content -->
          <section class="content">

               <!-- preview box -->
               <div class="box">
                    <div class="box-header with-border">
                         <h3 class="box-title">Preview</h3>
                         <p class="box-title pull-right">Edited by: {{ $about_me -> edited_by }}</p>
                    </div>

                    <div class="box-body">

                         {!! $about_me -> body !!}
                         
                    </div>
                    <!-- /.box-body -->

               </div>
               <!-- /.box -->


               <!-- edit box -->
               <div class="box">
                    <div class="box-header with-border">
                         <h3 class="box-title">Edit About Me</h3>
                    </div>

                    <div class="box-body pad">
                         <form action="/admin/about/about_me/1" method="POST" id="form">

                              @csrf
                              {{ method_field('PATCH') }}
                              
                              <textarea class="textarea" name="body" placeholder="Body text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $about_me -> body }}</textarea>

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