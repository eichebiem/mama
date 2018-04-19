@extends('layouts.master')


@section('content')
<section class="page-header-wrapper">

     <div class="container">
          <div class="row">
               <div class="col-md-12">
                    <div class="page-header">
                         <h1>About Me</h1>
                    </div>
               </div>
          </div><!-- /.row -->
     </div><!-- /.container-fluid -->
</section>


<div class="container">
     <div class="content-wrapper">
          <section class="about-us-wrapper">
               <div class="row margin-bottom-60"> 
                    <div class="col-md-8">
                         
                         <p>{!! $about_me -> body !!}</p>

                    </div><!-- /.col-md-8 -->

                    <div class="col-md-4">
                         <div class="info-in-short">
                              <img class="img-responsive" src="img/team/tm1.jpg" alt="">
                              <div class="member-info">
                                   Born: 19th May, 1979<br> 
                                   Height: 175 c.m<br> 
                                   Experience: 5 years<br> 
                                   Hobbies: Fishing, Driving, Reading<br> 
                                   Nationality: American
                              </div>

                              <div class="info-address">
                                   <h2>Contact Info:</h2>
                                   <address>
                                        Email: <a href="mailto:email@me.com">email@me.com</a><br> 
                                        Phone:+124 09467 335<br>
                                        Website: <a href="#">Example.com</a><br>
                                        Box 564, Disneyland<br> 
                                        USA
                                   </address>
                                   <div class="social-link">
                                        <ul class="list-inline">
                                             <li><a title="Facebook" href="#" target="_blank"><i style="" class="fa fa-facebook "></i></a></li>
                                             <li><a title="Twitter" href="#" target="_blank"><i style="" class="fa fa-twitter "></i></a></li>
                                             <li><a title="Linkedin" href="#" target="_blank"><i style="" class="fa fa-linkedin "></i></a></li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div><!-- /.col-md-4 -->
               </div><!-- /.row -->
          </section><!-- /.about-us-wrapper -->
     </div><!-- /.content-wrapper -->
</div><!-- /.container -->

@endsection