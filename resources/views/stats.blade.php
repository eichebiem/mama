@extends('layouts.master')


@section('content')

<section class="page-header-wrapper">
     <div class="container">
          <div class="row">
               <div class="col-md-12">
                    <div class="page-header">
                         <h1>Statistical Analysis</h1>
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
                                        <li>Explanations and Interpretation</li>
                                        <li>Pre and Post statistical procedure consultation</li>
                                        <li>Revisions</li>
                                        <li>Certificate of Statistical Analysis</li>
                                   </ol>
               
                                   <br>

                                   <h3>REQUIREMENTS</h3>

                                   <ol>
                                        <li>Raw data in Excel format (not tallied data)</li>
                                        <li>Objectives / Statement of the Problem</li>
                                        <li>Questionnaire</li>
                                   </ol>

                              </div><!-- /.entry-content -->
                         </article>

                         <section class="comments-wrapper">

                              <h2>Request for quotation</h2>
                              <form id="form" action="/statistical_analysis" method="POST">

                                   @csrf

                                   <div class="form-group">
                                        <label for="client_name">Client Name *</label>
                                        <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Juan Cruz">
                                   </div>


                                   <div class="form-group">
                                        <label for="client_address">Complete Address *</label>
                                        <input type="text" class="form-control" id="client_address" name="client_address" placeholder="Valezuela City">
                                   </div>


                                   <div class="form-group">
                                        <label for="client_email">Email *</label>
                                        <input type="email" class="form-control" id="client_email" name="client_email" placeholder="test@example.com">
                                   </div>


                                   <div class="form-group">
                                        <label for="contact_number">Contact Number *</label>
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="0000-000-0000">
                                   </div>


                                   <div class="form-group">
                                        <label for="client_tel">Telephone Line</label>
                                        <input type="text" class="form-control" id="client_tel" name="client_tel" placeholder="(000) 000-0000">
                                   </div>


                                   <div class="form-group">
                                        <label for="research_title">Research Title</label>
                                        <input type="text" class="form-control" id="research_title" name="research_title" placeholder="My Research">
                                   </div>


                                   <div class="form-group">
                                        <label for="stats_procedure">Required Statistical procedure/s</label>
                                        <input type="text" class="form-control" id="stats_procedure" name="stats_procedure" placeholder="Procedures">
                                   </div>


                                   <hr>


                                   <div class="form-group">
                                        <label for="company_name">Company / Institution *</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="8 NorthEast">
                                   </div>


                                   <div class="form-group">
                                        <label for="company_address">Complete Address *</label>
                                        <input type="text" class="form-control" id="company_address" name="company_address" placeholder="Valenzuela City">
                                   </div>


                                   <div class="form-group">
                                        <h4>Research Class</h4>

                                        <ul>
                                             <li>
                                                  <input type="checkbox" name="research_class" id="Undergrad" class="research_class" value="Undergrad"> 
                                                  <label for="Undergrad">Undergrad</label>
                                             </li>

                                             <li>
                                                  <input type="checkbox" name="research_class" id="Post Grad" class="research_class" value="Post Grad"> 
                                                  <label for="Post Grad">Post Grad</label>
                                             </li>

                                             <li>
                                                  <input type="checkbox" name="research_class" id="Corporate / Business" class="research_class" value="Corporate / Business"> 
                                                  <label for="Corporate / Business">Corporate / Business</label>
                                             </li>

                                        </ul>
                                        
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