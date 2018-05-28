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
                              Current Pools
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
                            <li >
                                <a href="<?php echo e(route('assign')); ?>">User Management</a>
                            </li>
                            <li class="is-active">
                              <a href="<?php echo e(route('pollmanagement')); ?>">Pool Management</a>
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


                      <h1 class="title"><b> Current Pools </b></h1>      

                      

                        <a href="<?php echo e(route('exportexcel')); ?>" class="button is-success is-pulled-left" style="margin-bottom: 25px;">Export to Excel</a>            
                      
                      <table id="pendings" class="display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Pool Name</th>
                                    <th>E-mail</th>
                                    <th>City</th>
                                    <th>Cellphone</th>
                                    <th>Referre By</th>
                                    <th>Complete Pool</th>
                                    <th>Status</th>
                                    <th>Rep</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $allpolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($poll->name . ' '. $poll->lastname); ?></td>
                                    <td><a href="<?php echo e(route('adminprintpicks.show', $poll->iduser_poll)); ?>"><?php echo e($poll->poll_name); ?></a></td>
                                    <td><?php echo e($poll->email); ?></td>
                                    <td><?php echo e($poll->city); ?></td>
                                    <td><?php echo e($poll->cellphone); ?></td>
                                    <td><?php echo e($poll->referredby); ?></td>
                                    <td><?php echo e($poll->complete); ?></td>
                                    <td><?php echo e($poll->status); ?></td>
                                    <td><?php echo e($poll->rep); ?></td>
                                    
                                    <td>
                                        <button class="button is-primary is-pulled-left" id="showModal" data-target="modal-ter" data-id="<?php echo e($poll->iduser_poll); ?>" aria-haspopup="true">Edit</button>  
                                    </td>
                                    <td>
                                      <?php echo Form::open(['route' => ['destroypoll', $poll->iduser_poll], 'method' => 'DELETE', 'onsubmit' => 'return confirmDelete()']); ?>


                                          <?php echo Form::submit('x', ['class' => 'button is-danger', 'style' => 'margin-left:15px;']); ?>

                            
                                          <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                  </section>

    

    <div class="modal">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Change Status</p>
        </header>
        <section class="modal-card-body">
          <form class="form-horizontal" action="<?php echo e(url('/editstatus')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" id="iduser_poll" name="iduser_poll">
            <div class="select">
              <select id="status" name="status">
                <option value="Pending">Pending</option>
                <option value="Active">Active</option>
              </select>
            </div>
          </section>
          <footer class="modal-card-foot">
            <button type="submit" id="submit" class="button is-success">Save</button>
          </form>
          <button class="button" id="close">Cancel</button>
        </footer>
      </div>
    </div>


    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <?php echo $__env->make('admin.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <script>
        
        $(document).ready( function () {

          $('#pendings').DataTable();   

          // open stuff

          $(document).on('click', '#showModal', function(){

              $('#iduser_poll').val($(this).data('id'));
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
