<header>

    <!-- Start Navigation -->
   <nav class="navbar navbar-default navbar-sidebar navbar-scrollspy bootsnav" data-minus-value-desktop="0" data-minus-value-mobile="0" data-speed="1000">

       <div class="container">         

           <!-- Start Header Navigation -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                   <i class="fa fa-bars"></i>
               </button>
               <!-- Start Header Navigation -->
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                   </button>
                   <ul>
                       <li class="scroll">
                           <a class="navbar-brand" href="#start"> <img src="{{ asset('images/logo-english.png') }}" class="logo logo-size-home" class="logo" alt="Logo">
                           </a>
                       </li>
                   </ul>
               </div>
               <!-- End Header Navigation -->
           </div>
           <!-- End Header Navigation -->

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="navbar-menu">
               <ul class="nav navbar-nav navbar-right" data-in="fadeInLeft">
                   <li class="scrolls"><a href="{{ route('administrator.home') }}">Dashboard</a></li>
                   <li class="scrolls"><a href="{{ route('administrator.products') }}">Products</a></li>
                   <li class="scrolls"><a href="{{ route('administrator.category') }}">Category</a></li>
                   <li class="scrolls"><a href="{{ route('administrator.contacts') }}">Contacts</a></li>
                   <li class="scrolls"><a href="{{ route('administrator.subscribe') }}">Subscribe</a></li>
                   <li class="scrolls"><a href="{{ route('administrator.logout') }}">Logout</a></li>
               </ul>
           </div><!-- /.navbar-collapse -->
       </div>   
   </nav>
   <!-- End Navigation -->

</header>