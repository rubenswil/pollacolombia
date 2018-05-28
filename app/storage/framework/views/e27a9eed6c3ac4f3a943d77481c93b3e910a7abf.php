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
                            <li class="is-active">
                                <a href="<?php echo e(route('assign')); ?>">User Management</a>
                            </li>
                            <li>
                              <a href="<?php echo e(route('pollmanagement')); ?>"> Pool Management </a>
                            </li>
                            <li>
                              <a href="<?php echo e(route('phases')); ?>"> Phases Management</a>
                            </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                    <a class="button is-success is-pulled-right" href="<?php echo e(route('addRep')); ?>">Add / Delete Reps</a>
                      <h1 class="title"><b> User Management </b></h1>                  
                      <hr style="margin-bottom: 0;">
                      <table id="pendings" class="display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Pools</th>
                                    <th>Assign</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->is_approved == 1 && $user->role != 'admin'): ?>
                                <tr>
                                    <td><?php echo e($user->name .' '. $user->lastname); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                <td> <a class="button is-danger" href="<?php echo e(route('admins.show', $user->id)); ?>"> View Pools</a> </td>
                                <td>
                                    <?php if(empty($user->id_rep)): ?>
                                    <button class="button is-primary is-pulled-left" id="showModal"
                                      data-target="modal-ter" data-id="<?php echo e($user->id); ?>" aria-haspopup="true">Assign Rep</button>
                                    <?php else: ?>
                                    <a href="<?php echo e(route('editrep', $user->id)); ?>"> <button class="button is-primary is-pulled-right">Edit Rep</button></a>
                                    <p class="is-pulled-left"><?php echo e($user->rep->name); ?></p>
                                    <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="col-md-6">
                                          <?php echo Form::open(['route' => ['admins.destroy', $user->id], 'method' => 'DELETE', 'onsubmit' => 'return confirmDelete()']); ?>


                                          <?php echo Form::submit('x', ['class' => 'button is-danger']); ?>

                            
                                          <?php echo Form::close(); ?>

                                        </div>
                                    </td>
                                </tr>
                               <?php endif; ?> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            
                        </table>


                    </div>
                  </section>

    
    </body>


    <div class="modal">
            <div class="modal-background"></div>
                <div class="modal-card">
                  <header class="modal-card-head">
                    <p class="modal-card-title">Add Rep</p>
                  </header>
                  <section class="modal-card-body">
                  <form action="<?php echo e(route('assigntouser')); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" id="id" name="id">
                      <div class="select">
                          <?php echo e(Form::select('id_rep', $reps->pluck('name', 'id_rep'), null, ['class' => 'form-control', 'id' => 'id_rep'])); ?>

                      </div>
                  </section>
                  <footer class="modal-card-foot">
                      <button type="submit" class="button is-success">Save</button>
                    </form>
                    <button class="button" id="close">Cancel</button>
                  </footer>
                </div>
      </div>

    <?php echo $__env->make('admin.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script src="<?php echo e(URL::asset('js/bulma.js')); ?>"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>


    
    <script>
        
        $(document).ready( function () {

          $('#pendings').DataTable();

          
          $(document).on('click', '#showModal', function(){

          $('#id').val($(this).data('id'));
          $(".modal").addClass("is-active");  

          });

          

          $("#close").click(function() {
              $(".modal").removeClass("is-active");
          });

      
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
