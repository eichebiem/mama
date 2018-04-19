@extends('layouts.master')


@section('content')

<section class="page-header-wrapper">
     <div class="container">
          <div class="row">
               <div class="col-md-12">
                    <div class="page-header">
                         <h1>Training Workshop</h1>
                    </div>
               </div>
          </div><!-- /.row -->
     </div><!-- /.container-fluid -->
</section>


<div class="container">
     <div class="content-wrapper">
          <div class="inner-content">

               @if(session()->has('message'))
                    <div class="alert alert-success" id="alert_message">
                         <i class="fa fa-check"></i> {{ session()->get('message') }}
                    </div>
               @endif

               <div class="row">
                    <div class="col-xs-12 col-md-9 col-sm-8">
                         <article class="blog-post-wrapper single-article">
                              <header class="entry-header">
                                   <h2 class="entry-title">This is standard single article sample</h2>
                              </header><!-- /.entry-header -->

                              <div class="post-thumbnail">

                                   <img src="../img/blog/blog-3.jpg" class="img-responsive " alt="">

                              </div><!-- /.post-thumbnail -->

                              <!-- CONTENTS/DESCRIPTION -->
                              <div class="entry-content">

                                   <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam reiciendis ab qui iste in beatae tempora et omnis vero, nihil possimus aliquam officiis enim nesciunt esse dolorum at suscipit atque?</p>

                                   <br>

                                   <h3>INCLUSIONS</h3>

                                   <ol>
                                        <li>Handouts</li>
                                        <li>Exercise files</li>
                                        <li>Certificate of Participation</li>
                                   </ol>
               
                                   <br>

                                   <h3>REQUIREMENTS</h3>

                                   <ol>
                                        <li>1:1 Laptop / PC user ratio with pre-installed Microsoft Excel 2013 or higher in Windows platform</li>
                                        <li>LCD Projector and Speaker System</li>
                                        <li>Meals/snacks for workshop facilitator and assistant/s</li>
                                        <li>Workshop Reservation Fee</li>
                                   </ol>

                              </div><!-- /.entry-content -->
                         </article>

                         <section class="comments-wrapper">

                              <h2>Request for quotation</h2>
                              <form id="form" action="/workshop" method="POST">

                                   @csrf

                                   <div class="form-group">
                                        <h4>Select Course</h4>

                                        <ul>
                                             <li>
                                                  <input type="checkbox" name="course" id="access" class="course" value="MS Access"> 
                                                  <label for="access">MS Access</label>
                                             </li>

                                             <li>
                                                  <input type="checkbox" name="course" id="excel" class="course" value="MS Excel"> 
                                                  <label for="excel">MS Excel</label>
                                             </li>

                                             <li>
                                                  <input type="checkbox" name="course" id="powerpoint" class="course" value="MS Powerpoint"> 
                                                  <label for="powerpoint">MS Powerpoint</label>
                                             </li>

                                             <li>
                                                  <input type="checkbox" name="course" id="word" class="course" value="MS Word"> 
                                                  <label for="word">MS Word</label>
                                             </li>
                                        </ul>
                                        
                                   </div>

                                   <div class="form-group" id="ewan" style="display:none">
                                        <h4>Select EWAN.....</h4>

                                        <ul>
                                             <li>
                                                  <input type="checkbox" name="ewan" id="basic" class="ewan" value="Basic"> 
                                                  <label for="basic">Basic</label>
                                             </li>

                                             <li>
                                                  <input type="checkbox" name="ewan" id="inter" class="ewan" value="Intermediate & Advanced"> 
                                                  <label for="inter">Intermediate & Advanced</label>

                                                  <ul id="days" style="display:none">
                                                       <li>
                                                            <input type="checkbox" name="days" id="1" class="days" disabled="true" value="1 Day"> 
                                                            <label for="1">1 Day</label>
                                                       </li>

                                                       <li>
                                                            <input type="checkbox" name="days" id="2" class="days" disabled="true" value="2 Days"> 
                                                            <label for="2">2 Days</label>
                                                       </li>
                                                  </ul>
                                             </li>

                                             <li>
                                                  <input type="checkbox" name="ewan" id="tutorial" class="ewan" value="Tutorial"> 
                                                  <label for="tutorial">Tutorial</label>
                                             </li>

                                             <li>
                                                  <input type="checkbox" name="ewan" id="CLS" class="ewan" value="Continuous Learning Series"> 
                                                  <label for="CLS">Continuous Learning Series</label>
                                             </li>
                                        </ul>
                                        
                                   </div>

                                   <hr>

                                   <div class="form-group">
                                        <label for="company_name">Company Name *</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="8 NorthEast">
                                   </div>

                                   <div class="form-group">
                                        <label for="company_address">Complete Address *</label>
                                        <input type="text" class="form-control" id="company_address" name="company_address" placeholder="Valenzuela City">
                                   </div>

                                   <div class="form-group">
                                        <label for="company_email">Email *</label>
                                        <input type="text" class="form-control" id="company_email" name="company_email" placeholder="test@example.com">
                                   </div>

                                   <div class="form-group">
                                        <label for="company_tel">Telephone/Direct Line</label>
                                        <input type="text" class="form-control" id="company_tel" name="company_tel" placeholder="(000) 000-0000">
                                   </div>

                                   <div class="form-group">
                                        <label for="participants">Number of Participants *</label>
                                        <input type="text" class="form-control" id="participants" name="participants" placeholder="1">
                                   </div>

                                   <hr>

                                   <div class="form-group">
                                        <label for="contact_person">Contact Person *</label>
                                        <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Juan Cruz">
                                   </div>

                                   <div class="form-group">
                                        <label for="contact_number">Contact Number *</label>
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="0000-000-0000">
                                   </div>

                                   <div class="form-group">
                                        <label for="contact_designation">Designation *</label>
                                        <input type="text" class="form-control" id="contact_designation" name="contact_designation" placeholder="Designation">
                                   </div>

                                   <div class="form-group">
                                        <label for="contact_department">Department *</label>
                                        <input type="text" class="form-control" id="contact_department" name="contact_department" placeholder="Department">
                                   </div>

                                   <div class="form-group">
                                        <label for="special_instructions">Special Instructions (if any)</label>
                                        <textarea class="form-control" rows="6" id="special_instructions" name="special_instructions" placeholder="Instructions"></textarea>
                                   </div>

                                   <button type="submit" class="btn btn-primary">REQUEST</button>

                              </form>
                         </section>
                    </div><!-- /.col-md-9 -->

                    @include('partials.aside')

               </div><!-- /.row -->
          </div><!-- /.inner-content -->
     </div><!-- /.content-wrapper -->
</div><!-- /.container -->



@endsection


@section('script')
<script>
     $(function(){
          $('.course').click(function(){
               $('#ewan').show();
          });

          $('#inter').click(function(){
               $('#days').show();
          });

          $('#basic').click(function(){
               $('#days').hide();
          });

          $('#tutorial').click(function(){
               $('#days').hide();
          });

          $('#CLS').click(function(){
               $('#days').hide();
          });
     });
</script>

@endsection