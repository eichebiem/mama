@extends('layouts.admin')

@section('content')

     <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
               <h1>
                    <i class="fa fa-file-o"></i> Statistical Analysis List
               </h1>
               <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-file-o"></i> Statistical Analysis List</a></li>
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

               <!-- Default box -->
               <div class="box box-warning">
                    <div class="box-header with-border">
                         <h3 class="box-title">Request Lists</h3>
                    </div>

                    <div class="box-body">
                         <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                   <tr>
                                        <th>Client Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Unread</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>

                              <tbody>
                                   @if(count($stats) == 0)

                                   @else
                                        @foreach($stats as $stat)
                                             <tr>
                                                  <td>{{ $stat -> client_name }}</td>
                                                  <td>{{ $stat -> client_address }}</td>
                                                  <td>{{ $stat -> client_email }}</td>
                                                  <td>@if($stat -> unread == "1") Yes @else No @endif</td>
                                                  <td>
                                                       
                                                       <a href="/admin/statistical_analysis/view/{{ $stat -> id }}" type="button" class="btn btn-success btn-sm"><i class="fa fa-file-text"></i> View</a>






                                                       <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_{{ $stat -> id }}"><i class="fa fa-edit"></i> Edit</button>

                                                       <!-- Modal -->
                                                       <div class="modal fade" id="edit_{{ $stat -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                            <div class="modal-dialog" role="document">

                                                                 <div class="modal-content">
                                                                      <div class="modal-header alert-warning">
                                                                           <h4 class="modal-title" id="exampleModalLabel">Confirm Edit Action</h4>
                                                                      </div>

                                                                      <div class="modal-body">
                                                                           <p>Are you sure you want to edit <strong>{{ $stat -> client_name }}?</strong></p>
                                                                      </div>
                                                                      
                                                                      <div class="modal-footer">
                                                                           <a href="" type="button" class="btn btn-success"><i class="fa fa-check"></i> Yes</a>
                                                                           <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>







                                                       <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_{{ $stat -> id }}"><i class="fa fa-times"></i> Delete</button>

                                                       <!-- Modal -->
                                                       <div class="modal fade" id="delete_{{ $stat -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                            <div class="modal-dialog" role="document">

                                                                 <div class="modal-content">
                                                                      <div class="modal-header alert-danger">
                                                                           <h4 class="modal-title" id="exampleModalLabel">Confirm Delete Action</h4>
                                                                      </div>

                                                                      <div class="modal-body">
                                                                           <p>Are you sure you want to delete <strong>{{ $stat -> client_name }}?</strong></p>
                                                                      </div>
                                                                      
                                                                      <div class="modal-footer">
                                                                           <a href="/admin/statistical_analysis/delete/{{ $stat -> id }}" type="button" class="btn btn-success"><i class="fa fa-check"></i> Yes</a>
                                                                           <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                  </td>
                                             </tr>
                                        @endforeach
                                   @endif
                              </tbody>
                         </table>
                    </div>
                    <!-- /.box-body -->

               </div>
               <!-- /.box -->

          </section>
          <!-- /.content -->
     </div>

@endsection