<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>{{ (isset($title)) ? $title.' - '.config('app.name') : config('app.name') }}</title>
        
        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
        
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/css/foundation.min.css" />
        
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    </head>
    <body>
        <div id="main-wrapper">
            <div id="topbar" class="row full-width">
                <a href="{{ route('dashboard') }}" id="app-logo" class="left">
                    {{ config('app.name') }}
                </a>
                
                <div class="right">
                    <div id="user-notifications">
                        <a href="#" id="system-notifications">
                            <i class="fa fa-bell"></i>
                        </a>
                        <a href="#" id="mail-notifications">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>
                    
                    <a href="#" id="user">
                        <span class="name">J. Doe</span>
                        <i class="fa fa-caret-down dropdown-icon"></i>
                    </a>
                </div>
            </div>
            
            <div id="sidebar">
                <div class="new-ticket-container">
                    <a href="#"
                       id="new-ticket-button"
                       class="button"
                    >{{ trans('tickets.new') }}</a>
                </div>
                
                <nav class="main">
                    <h5>{{ trans('nav.title') }}</h5>
                    
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="fa fa-list-ul menu-icon"></i>
                                {{ trans('tickets.title') }}
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star menu-icon"></i>
                                {{ trans('tickets.assigned_to_me') }}
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-check menu-icon"></i>
                                {{ trans('tickets.closed') }}
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bar-chart menu-icon"></i>
                                {{ trans('graphs.title') }}
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cog menu-icon"></i>
                                {{ trans('settings.title') }}
                            </a>
                        </li>
                    </ul>
                </nav>
                
                <nav class="labels">
                    <h5>{{ trans('tickets.labels.title') }}</h5>
                    
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle-o red-color menu-icon"></i>
                                {{ trans('tickets.labels.bug') }}
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle-o orange-color menu-icon"></i>
                                label 2
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle-o yellow-color menu-icon"></i>
                                label 3
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle-o blue-color menu-icon"></i>
                                label 4
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle-o green-color menu-icon"></i>
                                label 5
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            
            <div id="main-container">
                <main class="row full-width">
                    <div class="small-12 columns">
                        @yield('content')
                    </div>
                </main>
                
                <footer class="main">
                    <div class="row full-width">
                        <div id="copyright" class="small-12 columns">
                            Copyright &copy; LaraTicket {{ date('Y') }}
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/js/foundation.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
