<?php $__env->startSection('pagetitle'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 title_polla">
                <img src="<?php echo e(asset('img/logo.png')); ?>" style="height: 150px;">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h4><?php echo e(__('My Pools')); ?> </h4>
                            </div>
                            <div class="col-md-4">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" id="myBtn" style="width: 100%; padding-top: 0;"> Add Additional Pool <span style="font-size: 19px;     font-weight: 700;"></span></button>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="card-body">
                        <ul style="line-height:80%" >
                            <li>
                                <p>Your registered Pool is below. To enter your picks, select “Edit my Picks”.</p>
                            </li>
                            <li>
                                <p>To participate in additional Pools, please click “Add Additional Pool”.</p>
                            </li>
                            <li>
                                <p>Once a Pool is complete, you will be able to Print your Picks.</p>
                            </li>
                        </ul>

                        
                         <div class="row">
                            <div class="col-md-12 table-responsive">
                        
                                <table id="myTable" class="table table_pool">
                                        <thead>
                                            <tr>
                                                <th>Nickname</th>
                                                <th>Status</th>
                                                <th>Complete Pool</th>
                                                <th>Print Picks</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $polls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($poll->poll_name); ?></td>

                                                <?php if($poll->status == 'Pending'): ?>
                                                    <td style="color: #FF0000;"><?php echo e($poll->status); ?></td>
                                                <?php else: ?>
                                                    <td style="color: #38610B;"><?php echo e($poll->status); ?></td>
                                                <?php endif; ?>

                                                <?php if($poll->complete == 'Incomplete'): ?>
                                                    <td style="color: #FF0000;"><?php echo e($poll->complete); ?></td>
                                                <?php else: ?>
                                                    <td style="color: #38610B;"><?php echo e($poll->complete); ?></td>
                                                <?php endif; ?>

                                                <td>
                                                    <?php if($poll->complete == 'Complete'): ?>
                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-12">
                                                            <div class="control">
                                                                <button class="btn btn-primary" onclick="window.location='<?php echo e(route('printpicks.show', $poll->iduser_poll)); ?>'">Print Picks</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php else: ?>
                                                    
                                                    <?php endif; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <div class="form-group row mb-0">

                                                    
                                                        <div class="col-md-12">
                                                            <div class="control">
                                                                <button class="btn btn-primary" onclick="window.location='<?php echo e(route('picks.show', $poll->iduser_poll)); ?>'">Edit my Picks</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div></td>
                                                <td>
                                                    <?php if($poll->status == 'Pending'): ?>
                                                    <div class="col-md-12">
                                                        <div class="control">
                                                            
                                                            <?php echo Form::open(['method' => 'DELETE','route' => ['picks.destroy', $poll->iduser_poll],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']); ?>

                                                            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                                                            <?php echo Form::close(); ?>

                                                        </div>
                                                    </div>
                                                    <?php else: ?>
                                                    
                                                    <?php endif; ?>
                                                </td>
                                                
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h4><?php echo e(__('Menu')); ?></h4></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 offset-md-1 ">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" onclick="window.location='<?php echo e(route('rules')); ?>'" style="width: 100%;">
                                        <?php echo e(__('Read the Rules')); ?>

                                    </button>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1 ">
                                <div class="form-group">
                                    <button type="" class="btn btn-primary" style="width: 100%;">
                                        <?php echo e(__('Worldcup Results (starts June 12th)')); ?>

                                    </button>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1 ">
                                 <div class="form-group">
                                    <button type="" class="btn btn-primary" style="width: 100%;">
                                        <?php echo e(__('Ranking and Poolwide picks')); ?>

                                        <br>
                                        <?php echo e((__('(starts June 12th)'))); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    




     </div>

     

      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Create pool</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <form name="poll" id="poll">
                    <?php echo csrf_field(); ?>

            <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="user_id">

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="poll_name" type="text" class="form-control<?php echo e($errors->has('poll_name') ? ' is-invalid' : ''); ?>" name="poll_name" value="<?php echo e(old('poll_name')); ?>" required placeholder="Pool Name">

                                <?php if($errors->has('poll_name')): ?>
                                    <span class="invalid-feFFedback">
                                        <strong><?php echo e($errors->first('poll_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-2">
                            
                            <input type="button" name="submitPolla" id="submitPolla" class="btn btn-info btn-block" value="Save" />

                            
                        </div>
                    </div>
                </form>
            </div>
            
            
            
          </div>
        </div>
      </div>


<?php $__env->stopSection(); ?>


 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="<?php echo e(URL::asset('js/app.js')); ?>"></script>
<script src="<?php echo e(URL::asset('scripts/countdown.js')); ?>"></script>
<?php echo $__env->make('admin.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>

    $(window).bind("load", function() {
       <?php if($errors->has('poll_name')): ?>
            $('#myModal').modal('show');
            console.log('hola');
        <?php endif; ?>
    });


    function confirmDelete() {
        var result = confirm('Are you sure you want to delete?');

        if (result) {
                return true;
            } else {
                return false;
            }
       
    }



    $(document).ready(function(){


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var postURLPOLLA = "<?php echo url('/pollregistration'); ?>";

        $('#submitPolla').click(function(){            
           $.ajax({  
              url:postURLPOLLA,  
              method:"POST",
              beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
              }
          },  
          data:$('#poll').serialize(),
          type:'json',
          success:function(data)  
          {
            if(data.error){
              // toastr.warning(data.error);
              $.each( data.error, function( key, value ) {
                toastr.warning(value);
      // $(".print-error-msg-gestioncalidadsi").find("ul").append('<li>'+value+'</li>');
                });
            }else{
              location.reload();
            }
          } 
        });  
        });  


    });

    

</script>





<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>