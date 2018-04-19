@extends('layouts.admin')

@section('content')

     <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
               <h1>
                    <i class="fa fa-file-o"></i> Training Workshops List
               </h1>
               <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-file-o"></i> Training Workshops List</a></li>
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
               <div class="box box-danger">
                    <div class="box-header with-border">
                         <h3 class="box-title">Request Lists</h3>
                    </div>

                    <div class="box-body">
                         <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                   <tr>
                                        <th>Company Name</th>
                                        <th>Company Address</th>
                                        <th>No. of Participants</th>
                                        <th>Unread</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>

                              <tbody>
                                   @if(count($workshops) == 0)

                                   @else
                                        @foreach($workshops as $workshop)
                                             <tr>
                                                  <td>{{ $workshop -> company_name }}</td>
                                                  <td>{{ $workshop -> company_address }}</td>
                                                  <td>{{ $workshop -> participants }}</td>
                                                  <td>@if($workshop -> unread == "1") Yes @else No @endif</td>
                                                  <td>
                                                       
                                                       <a href="/admin/training_workshop/view/{{ $workshop -> id }}" type="button" class="btn btn-success btn-sm"><i class="fa fa-file-text"></i> View</a>






                                                       <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_{{ $workshop -> id }}"><i class="fa fa-edit"></i> Edit</button>

                                                       <!-- Modal -->
                                                       <div class="modal fade" id="edit_{{ $workshop -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                            <div class="modal-dialog" role="document">

                                                                 <div class="modal-content">
                                                                      <div class="modal-header alert-warning">
                                                                           <h4 class="modal-title" id="exampleModalLabel">Confirm Edit Action</h4>
                                                                      </div>

                                                                      <div class="modal-body">
                                                                           <p>Are you sure you want to edit <strong>{{ $workshop -> company_name }}?</strong></p>
                                                                      </div>
                                                                      
                                                                      <div class="modal-footer">
                                                                           <a href="" type="button" class="btn btn-success"><i class="fa fa-check"></i> Yes</a>
                                                                           <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>







                                                       <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_{{ $workshop -> id }}"><i class="fa fa-times"></i> Delete</button>

                                                       <!-- Modal -->
                                                       <div class="modal fade" id="delete_{{ $workshop -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                            <div class="modal-dialog" role="document">

                                                                 <div class="modal-content">
                                                                      <div class="modal-header alert-danger">
                                                                           <h4 class="modal-title" id="exampleModalLabel">Confirm Delete Action</h4>
                                                                      </div>

                                                                      <div class="modal-body">
                                                                           <p>Are you sure you want to delete <strong>{{ $workshop -> company_name }}?</strong></p>
                                                                      </div>
                                                                      
                                                                      <div class="modal-footer">
                                                                           <a href="/admin/training_workshops/delete/{{ $workshop -> id }}" type="button" class="btn btn-success"><i class="fa fa-check"></i> Yes</a>
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