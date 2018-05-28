<header>

        <nav class="navbar is-transparent">
                <div class="navbar-brand">
                  <a class="navbar-item" href="/home">
                    Polla World Cup
                  </a>
                </div>
              

                  
              
                  <div class="navbar-end">
                    <div class="navbar-item">
                      
                            <div class="navbar-start">
                                    <div class="navbar-item has-dropdown is-hoverable">
                                      <a class="navbar-link">
                                            <?php echo e(Auth::user()->name); ?>

                                      </a>

                                      <div class="navbar-dropdown is-boxed">

                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             <?php echo e(__('Logout')); ?>

                                         </a>
     
                                         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                             <?php echo csrf_field(); ?>
                                         </form>

                                      </div>


                                    </div>
                                  </div>

                    </div>
                  </div>

              </nav>

              
</header>