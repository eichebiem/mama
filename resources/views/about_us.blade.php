@extends('layouts.master')

@section('content')

<section class="page-header-wrapper">
     <div class="container">
          <div class="row">
               <div class="col-md-12">
                    <div class="page-header">
                         <h1>About Us</h1>
                    </div>
               </div>
          </div><!-- /.row -->
     </div><!-- /.container-fluid -->
</section>


<div class="container">
     <div class="content-wrapper">
          <section class="about-us-wrapper">

               <h2>{{ $about_us -> title }}</h2>
               <div class="row">
                    <div class="col-md-12">
                         <em>{!! $about_us -> body !!}</em>
                    </div>
               </div>

          </section><!-- /.about-us-wrapper -->

          <section class="about-us-slider-wrapper">
               <div id="about-us-slider" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                    <div class="item active">
                         <div class="row">
                         <div class="col-md-6">
                              <img class="img-responsive" src="img/abt-slider1.jpg" alt="">
                         </div>
                         <div class="col-md-6">
                              <div class="abt-slider-intro">
                                   <p>Seamlessly plagiarize professional deliverables before enterprise-wide leadership. Authoritatively transition open-source solutions for client-centered leadership skills. Proactively expedite front-end bandwidth with collaborative leadership.</p>

                                   <p>Seamlessly plagiarize professional deliverables before enterprise-wide leadership. Authoritatively transition open-source solutions for client-centered leadership skills.</p>
                              </div>
                         </div>
                         </div>
                    </div><!-- /.item -->

                    <div class="item">
                         <div class="row">
                         <div class="col-md-6">
                              <img class="img-responsive" src="img/abt-slider2.jpg" alt="">
                         </div>
                         <div class="col-md-6">
                              <div class="abt-slider-intro">
                                   <p>Seamlessly plagiarize professional deliverables before enterprise-wide leadership. Authoritatively transition open-source solutions for client-centered leadership skills. Proactively expedite front-end bandwidth with collaborative leadership.</p>

                                   <p>Seamlessly plagiarize professional deliverables before enterprise-wide leadership. Authoritatively transition open-source solutions for client-centered leadership skills.</p>
                              </div>
                         </div>
                         </div>
                    </div><!-- /.item -->
                    </div><!-- /.carousel-inner -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#about-us-slider" role="button" data-slide="prev">
                    <i class="flaticon-arrowhead4"></i>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#about-us-slider" role="button" data-slide="next">
                    <i class="flaticon-arrow437"></i>
                    <span class="sr-only">Next</span>
                    </a>
               </div>
          </section>

          <section class="team-wrapper">
               <h2 class="section-title">Our Team</h2>
               <div class="css-team">
                    <div class="row">
                         <div class="col-md-4 col-sm-4 col-xs-12">
                              <figure>
                                   <div class="css-team-avatar">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="img/team/tm1.jpg" alt="Image">
                                        <a class="readmore" href="about-me.php"><i class="flaticon-square57"></i></a>
                                   </div>
                                   <div class="css-team-info">
                                   <h3 class="css-team-heading">Bobby Webb<br> <small>Chairman</small></h3>
                                   </div>
                              </figure>
                         </div><!-- /.col-md-4 -->
                         <div class="col-md-4 col-sm-4 col-xs-12">
                              <figure>
                                   <div class="css-team-avatar">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="img/team/tm2.jpg" alt="Image">
                                        <a class="readmore" href="about-me.php"><i class="flaticon-square57"></i></a>
                                   </div>
                                   <div class="css-team-info">
                                   <h3 class="css-team-heading">BRYAN SOTO<br> <small>Managing Partner</small></h3>
                                   </div>
                              </figure>
                         </div><!-- /.col-md-4 -->
                         <div class="col-md-4 col-sm-4 col-xs-12">
                              <figure>
                                   <div class="css-team-avatar">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="img/team/tm3.jpg" alt="Image">
                                        <a class="readmore" href="about-me.php"><i class="flaticon-square57"></i></a>
                                   </div>
                                   <div class="css-team-info">
                                   <h3 class="css-team-heading">THEODORE PARKER<br> <small>General Manager</small></h3>
                                   </div>
                              </figure>
                         </div><!-- /.col-md-4 -->
                         <div class="col-md-4 col-sm-4 col-xs-12">
                              <figure>
                                   <div class="css-team-avatar">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="img/team/tm4.jpg" alt="Image">
                                        <a class="readmore" href="about-me.php"><i class="flaticon-square57"></i></a>
                                   </div>
                                   <div class="css-team-info">
                                   <h3 class="css-team-heading">WALLACE JIMENEZ<br> <small>Head Of Risk Management</small></h3>
                                   </div>
                              </figure>
                         </div><!-- /.col-md-4 -->
                         <div class="col-md-4 col-sm-4 col-xs-12">
                              <figure>
                                   <div class="css-team-avatar">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="img/team/tm5.jpg" alt="Image">
                                        <a class="readmore" href="about-me.php"><i class="flaticon-square57"></i></a>
                                   </div>
                                   <div class="css-team-info">
                                   <h3 class="css-team-heading">ERIC RICE<br> <small>Head Of Risk Management</small></h3>
                                   </div>
                              </figure>
                         </div><!-- /.col-md-4 -->
                         <div class="col-md-4 col-sm-4 col-xs-12">
                              <figure>
                                   <div class="css-team-avatar">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="img/team/tm6.jpg" alt="Image">
                                        <a class="readmore" href="about-me.php"><i class="flaticon-square57"></i></a>
                                   </div>
                                   <div class="css-team-info">
                                   <h3 class="css-team-heading">FERNANDO BLACK<br> <small>Senior Analyst</small></h3>
                                   </div>
                              </figure>
                         </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->
               </div><!-- /.css-team -->

          </section>

     </div><!-- /.content-wrapper -->
</div><!-- /.container -->



@endsection