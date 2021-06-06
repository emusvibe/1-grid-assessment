<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                1-grid-App
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">                
                <!-- Authentication Links -->
               
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                
                        <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="#">Posts</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="#">Dashboard</a></li>
                    </ul>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            John Doe<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <form action="#" method="POST">
                                    <a href="#" style="text-decoration:none;  color : #000000;">Logout</a>                                    
                                </form>                                   
                            </li>
                                
                        </ul>
                    </li>
               
            </ul>


        </div>
    </div>
</nav>