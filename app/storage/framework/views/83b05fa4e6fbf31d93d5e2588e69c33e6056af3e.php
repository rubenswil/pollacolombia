<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> Polla World Cup Colombia| <?php echo $__env->yieldContent('pagetitle'); ?> </title>
    
    <!-- Scripts -->
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/datatable.css')); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
    

    
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
                
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="<?php echo e(URL::asset('js/jquery.tablesorter.js')); ?>"></script>
    

</head>
<body>
    <div id="app">
        <?php if(auth()->guard()->guest()): ?>
        
        
        <?php else: ?>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">

            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">
                    Polla World Cup Colombia
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div style="text-align: center; margin-left: 12%;">

                    Pollas Registradas: <?php echo e(isset($countpolls) ? $countpolls : null); ?>

                </div>

                <div style="text-align: center; margin-left: 12%; padding-top:8px;">
                	<ul style="line-height:50%; list-style-type: none;">
                		<li><p style="font-size: 0.7em;">Cuenta Regresiva</p></li>
                		<li><p id="demo" style='margin-bottom: 1px;'></p></li>
                	</ul>
                </div>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
					
                    <ul class="navbar-nav mr-auto">
						
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name.' '.Auth::user()->lastname); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Salir')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php endif; ?>
        <main class="content_web">
            <?php echo $__env->yieldContent('content'); ?>
            <br><br>
        </main>
    </div>
    
</body>
</html>

<?php echo $__env->yieldContent('addjs'); ?>