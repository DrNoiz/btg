<?php
    echo'
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark blue scrolling-navbar">
            <div class="container-fluid">
                 <!-- Brand -->
                    <a class="navbar-brand waves-effect waves-light">
                        <strong class="white-text">BtG</strong>
                    </a>
                    <!-- Collapse -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                         aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <!-- Links -->
                    <div class="collapse navbar-collapse" id="navbarContent">
        
                        <!-- Left -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light" href="#">Главная</a>
                             </li>
                            <li class="nav-item">
                                 <a class="nav-link waves-effect waves-light">О нас</a>
                                </li>
                            </ul>
        
                        <!-- Right -->
                        <form class="form-inline">
                             <div class="md-form my-0">
                                 <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </form>
                         <div class="text-center text-white ml-4">
                             <a class="fa fa-user waves-effect waves-light" data-toggle="modal" data-target="#modalLoginForm"></a>
                        </div>
            </div>
         </nav>
    </header>';
?>