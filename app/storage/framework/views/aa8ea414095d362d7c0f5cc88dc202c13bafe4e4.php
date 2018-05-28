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
                            <li class="is-active">
                              <a href="<?php echo e(route('admin')); ?>">Pending Approvals</a>
                            </li>
                            <li >
                              <a href="<?php echo e(route('assign')); ?>">User Management</a>
                            </li>
                            <li>
                              <a href="<?php echo e(route('pollmanagement')); ?>"> Pool Management</a>
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
                      <a class="button is-success is-pulled-right" href="<?php echo e(route('allusers')); ?>">All Users</a>
                      <h1 class="title"><b> Pending Approvals </b></h1>                  
                      <hr style="margin-bottom: 0;">
                      <table id="pendings" class="display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Nickname</th>
                                    <th>E-mail</th>
                                    <th>City</th>
                                    <th>Cellphone</th>
                                    <th>Referred By</th>
                                    <th>Aprove</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->is_approved == 0): ?>
                                <tr>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->lastname); ?></td>
                                    <td><?php echo e($user->nickname); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->city); ?></td>
                                    <td><?php echo e($user->cellphone); ?></td>
                                    <td><?php echo e($user->referredby); ?></td>
                                    <td><a class="button is-danger" href="<?php echo e(route('admins.edit', $user->id)); ?>"> Aprove </a></td>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <?php echo $__env->make('admin.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    
    <script>
        
        $(document).ready( function () {
            $('#pendings').DataTable();
        } );
        
    </script>


</html>
