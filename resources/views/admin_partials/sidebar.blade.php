<aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
          <div class="pull-left image">
               <img src="/admins/img/img_avatar1.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
               <p>{{ auth()->user()->name }}</p>
               <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
               <input type="text" name="q" class="form-control" placeholder="Search...">
               <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
               </span>
          </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
               <li class="header">MAIN NAVIGATION</li>


               <li>
                    <a href="/admin/home">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                    <span class="pull-right-container">
                    </span>
                    </a>
               </li>


               <li>
                    <a href="/admin/training_workshops">
                    <i class="fa fa-file-o"></i>
                    <span>Training Workshop Lists</span>
                    <span class="pull-right-container">
                    </span>
                    </a>
               </li>


               <li>
                    <a href="/admin/statistical_analysis">
                    <i class="fa fa-file-o"></i>
                    <span>Statistical Analysis Lists</span>
                    <span class="pull-right-container">
                    </span>
                    </a>
               </li>

               <li class="treeview">
                    <a href="#">
                         <i class="fa fa-bank"></i>
                         <span>About</span>
                         <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">

                         <li><a href="/admin/about/about_us"><i class="fa fa-users"></i> About Us</a></li>

                         <li><a href="/admin/about/about_me"><i class="fa fa-user"></i> About Me</a></li>

                    </ul>
               </li>

          </ul>
     </section>
     <!-- /.sidebar -->
     </aside>