<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

    <?php echo $__env->make('admin.partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <body>

           <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                  <section class="hero is-link">
                    <div class="hero-body">
                      <div class="container">
                        <div class="columns is-vcentered">
                          <div class="column">
                            <p class="title">
                              Admin
                            </p>
                            <p class="subtitle">
                              Users
                            </p>
                          </div>
                          <div class="column is-narrow">
                            <div id="carboncontainer">
                  
                            </div>
                  
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="hero-foot">
                      <div class="container">
                        <nav class="tabs is-boxed">
                          <ul>
                            <li>
                              <a href="<?php echo e(route('admin')); ?>">Pending Approvals</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('assign')); ?>">User Management</a>
                            </li>
                            <li>
                              <a href="<?php echo e(route('pollmanagement')); ?>"> Pool Management </a>
                            </li>
                            <li class="is-active">
                              <a href="<?php echo e(route('phases')); ?>"> Phases Management</a>
                            </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                        
                        <h1 class="title"><b>Phases Management </b></h1>                  
                        <hr style="margin-bottom: 0;">

                          <header class="modal-card-head">
                            <p class="modal-card-title">Set Phase</p>
                          </header>
                          <section class="modal-card-body">
                            <form action="<?php echo e(route('assigntouser')); ?>" method="POST">
                        
                            <div class="column">
                              <div class="select">
                                <?php echo e(Form::select('id_phase', ['1' => 'Phase 1', '2' => 'Phase 2', '3' => 'Phase 3'], null, ['class' => 'form-control', 'id' => 'id_phase'])); ?>

                              </div>
                            </div>
                            </section>
                          <footer class="modal-card-foot">
                              <button type="submit" class="button is-success">Save</button>
                            </form>
                            <button class="button" id="close">Cancel</button>
                          </footer>
                        </div>

                    </div>
                  </section>
    </body>


    

    <?php echo $__env->make('admin.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script src="<?php echo e(URL::asset('js/bulma.js')); ?>"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>


    
    <script>
        
        $(document).ready( function () {

          $('#pendings').DataTable();

          
          

      
        });


        function confirmDelete() {
            var result = confirm('Are you sure you want to delete?');

            if (result) {
                    return true;
                } else {
                    return false;
                }
        }

    </script>


    
    

    

</html>
