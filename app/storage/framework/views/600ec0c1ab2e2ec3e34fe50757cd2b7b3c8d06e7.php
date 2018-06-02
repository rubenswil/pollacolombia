<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Scripts -->
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
    

    
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
                
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="<?php echo e(URL::asset('js/jquery.tablesorter.js')); ?>"></script>
    

</head>
<body style="background-image: none;" >
    <main style="background-image:none;" class="content_web">
    <div style="background-color: white;" class="tab-pane container" id="grupoRoun">
    <form name="secondstage" id="secondstage">

        <div class="closestelement">

            <?php echo csrf_field(); ?>

            <input type="hidden" name="id_poll" value="<?php echo e($poll->iduser_poll); ?>"> 
            <br>
            <div class="row">
                
                <div class="col second_sta">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><?php echo e(__('Ronda de 16')); ?> </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body flagsbody" style="text-align: left;">
                            
                            <div class="row">
                                <div class="col-md-12">

                                    <table class="display table_second_stage">
                                        <tbody>
                                           <?php if($winA == null): ?>
                                            <tr>
                                                <td style="width: 30%; height: 30px;"></td>
                                                <td style="width: 70%; height: 30px;"></td>
                                            </tr>
                                            <?php else: ?>
                                            <tr>
                                                <td style="width: 30%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winA->team_name)).'.png'); ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 70%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12" >
                                                            <label><?php echo e($winA->team_name); ?></label>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div style="height: 10px;"></div>

                            
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="display table_second_stage">
                                        <tbody>
                                            <?php if($winB == null): ?>
                                            <tr>
                                                <td style="width: 30%; height: 30px;"></td>
                                                <td style="width: 70%; height: 30px;"></td>
                                            </tr>
                                            <?php else: ?>
                                            <tr>
                                                <td style="width: 30%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winB->team_rumup)).'.png'); ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 70%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12" >
                                                            <label><?php echo e($winB->team_rumup); ?></label>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <hr>

                            
                            <div class="row">
                                <div class="col-md-12">

                                    <table class="display table_second_stage">
                                        <tbody>
                                           <?php if($winC == null): ?>
                                           <tr>
                                                <td style="width: 30%; height: 30px;"></td>
                                                <td style="width: 70%; height: 30px;"></td>
                                            </tr>
                                            <?php else: ?>
                                            <tr>
                                                <td style="width: 30%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winC->team_name)).'.png'); ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 70%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12" >
                                                            <label><?php echo e($winC->team_name); ?></label>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <div style="height: 10px;"></div>

                        
                        <div class="row">
                            <div class="col-md-12">
                                <table class="display table_second_stage">
                                    <tbody>
                                        <?php if($winD == null): ?>
                                        <tr>
                                            <td style="width: 30%; height: 30px;"></td>
                                            <td style="width: 70%; height: 30px;"></td>

                                        </tr>
                                        <?php else: ?>
                                        <tr>
                                            <td style="width: 30%; height: 30px;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winD->team_rumup)).'.png'); ?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width: 70%; height: 30px;">
                                                <div class="row">
                                                    <div class="col-md-12" >
                                                        <label><?php echo e($winD->team_rumup); ?></label>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <hr>

                        
                        <div class="row">
                            <div class="col-md-12">

                                <table class="display table_second_stage">
                                    <tbody>
                                       <?php if($winE == null): ?>
                                       <tr>
                                        <td style="width: 30%; height: 30px;"></td>
                                        <td style="width: 70%; height: 30px;"></td>
                                    </tr>
                                    <?php else: ?>
                                    <tr>
                                        <td style="width: 30%; height: 30px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winE->team_name)).'.png'); ?>">
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width: 70%; height: 30px;">
                                            <div class="row">
                                                <div class="col-md-12" >
                                                    <label><?php echo e($winE->team_name); ?></label>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div style="height: 10px;"></div>

                
                <div class="row">
                    <div class="col-md-12">
                        <table class="display table_second_stage">
                            <tbody>
                                <?php if($winF == null): ?>
                                <tr>
                                    <td style="width: 30%; height: 30px;"></td>
                                    <td style="width: 70%; height: 30px;"></td>
                                </tr>
                                <?php else: ?>
                                <tr>
                                    <td style="width: 30%; height: 30px;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winF->team_rumup)).'.png'); ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="width: 70%; height: 30px;">
                                        <div class="row">
                                            <div class="col-md-12" >
                                                <label><?php echo e($winF->team_rumup); ?></label>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <hr>

                
                <div class="row">
                    <div class="col-md-12">

                        <table class="display table_second_stage">
                            <tbody>
                               <?php if($winG == null): ?>
                               <tr>
                                <td style="width: 30%; height: 30px;"></td>
                                <td style="width: 70%; height: 30px;"></td>
                            </tr>
                            <?php else: ?>
                            <tr>
                                <td style="width: 30%; height: 30px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winG->team_name)).'.png'); ?>">
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 70%; height: 30px;">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <label><?php echo e($winG->team_name); ?></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="height: 10px;"></div>

            
            <div class="row">
                <div class="col-md-12">
                    <table class="display table_second_stage">
                        <tbody>
                            <?php if($winH == null): ?>
                            <tr>
                                <td style="width: 30%; height: 30px;"></td>
                                <td style="width: 70%; height: 30px;"></td>
                            </tr>
                            <?php else: ?>
                            <tr>
                                <td style="width: 30%; height: 30px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winH->team_rumup)).'.png'); ?>">
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 70%; height: 30px;">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <label><?php echo e($winH->team_rumup); ?></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <hr>

            
            <div class="row">
                <div class="col-md-12">

                    <table class="display table_second_stage">
                        <tbody>
                           <?php if($winB == null): ?>
                           <tr>
                            <td style="width: 30%; height: 30px;"></td>
                            <td style="width: 70%; height: 30px;"></td>
                        </tr>
                        <?php else: ?>
                        <tr>
                            <td style="width: 30%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winB->team_name)).'.png'); ?>">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 70%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <label><?php echo e($winB->team_name); ?></label>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="height: 10px;"></div>

        
        <div class="row">
            <div class="col-md-12">
                <table class="display table_second_stage">
                    <tbody>
                        <?php if($winA == null): ?>
                        <tr>
                            <td style="width: 30%; height: 30px;"></td>
                            <td style="width: 70%; height: 30px;"></td>
                        </tr>
                        <?php else: ?>
                        <tr>
                            <td style="width: 30%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winA->team_rumup)).'.png'); ?>">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 70%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <label><?php echo e($winA->team_rumup); ?></label>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <hr>

        
        <div class="row">
            <div class="col-md-12">

                <table class="display table_second_stage">
                    <tbody>
                       <?php if($winD == null): ?>
                       <tr>
                        <td style="width: 30%; height: 30px;"></td>
                        <td style="width: 70%; height: 30px;"></td>
                    </tr>
                    <?php else: ?>
                    <tr>
                        <td style="width: 30%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winD->team_name)).'.png'); ?>">
                                </div>
                            </div>
                        </td>
                        <td style="width: 70%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12" >
                                    <label><?php echo e($winD->team_name); ?></label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div style="height: 10px;"></div>

    
    <div class="row">
        <div class="col-md-12">
            <table class="display table_second_stage">
                <tbody>
                    <?php if($winC == null): ?>
                    <tr>
                        <td style="width: 30%; height: 30px;"></td>
                        <td style="width: 70%; height: 30px;"></td>
                    </tr>
                    <?php else: ?>
                    <tr>
                        <td style="width: 30%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winC->team_rumup)).'.png'); ?>">
                                </div>
                            </div>
                        </td>
                        <td style="width: 70%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12" >
                                    <label><?php echo e($winC->team_rumup); ?></label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    
    <div class="row">
        <div class="col-md-12">

            <table class="display table_second_stage">
                <tbody>
                   <?php if($winF == null): ?>
                   <tr>
                    <td style="width: 30%; height: 30px;"></td>
                    <td style="width: 70%; height: 30px;"></td>
                </tr>
                <?php else: ?>
                <tr>
                    <td style="width: 30%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winF->team_name)).'.png'); ?>">
                            </div>
                        </div>
                    </td>
                    <td style="width: 70%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12" >
                                <label><?php echo e($winF->team_name); ?></label>
                            </div>
                        </div>
                    </td>

                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div style="height: 10px;"></div>


<div class="row">
    <div class="col-md-12">
        <table class="display table_second_stage">
            <tbody>
                <?php if($winE == null): ?>
                <tr>
                    <td style="width: 30%; height: 30px;"></td>
                    <td style="width: 70%; height: 30px;"></td>
                </tr>
                <?php else: ?>
                <tr>
                    <td style="width: 30%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winE->team_rumup)).'.png'); ?>">
                            </div>
                        </div>
                    </td>
                    <td style="width: 70%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12" >
                                <label><?php echo e($winE->team_rumup); ?></label>
                            </div>
                        </div>
                    </td>

                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<hr>


<div class="row">
    <div class="col-md-12">

        <table class="display table_second_stage">
            <tbody>
               <?php if($winH == null): ?>
               <tr>
                <td style="width: 30%; height: 30px;"></td>
                <td style="width: 70%; height: 30px;"></td>
            </tr>
            <?php else: ?>
            <tr>
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winH->team_name)).'.png'); ?>">
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12" >
                            <label><?php echo e($winH->team_name); ?></label>
                        </div>
                    </div>
                </td>

            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</div>

<div style="height: 10px;"></div>


<div class="row">
    <div class="col-md-12">
        <table class="display table_second_stage">
            <tbody>
                <?php if($winG == null): ?>
                <tr>
                    <td style="width: 23%; height: 30px;"></td>
                    <td style="width: 50%; height: 30px;"></td>
                </tr>
                <?php else: ?>
                <tr>
                    <td style="width: 30%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img_flags" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($winG->team_rumup)).'.png'); ?>">
                            </div>
                        </div>
                    </td>
                    <td style="width: 70%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12" >
                                <label><?php echo e($winG->team_rumup); ?></label>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div style="height: 50px;"></div>

</div>
</div>  
</div> 


<div class="col quarters second_sta">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                    <h6><?php echo e(__('Quartos de final')); ?> </h6>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div style="height: 55px;" class="separtos"></div>
            
            <div class="row">
                <div class="col-md-12">

                    <table class="display table_second_stage">
                        <tbody>
                            <?php if($winA == null && $winA): ?>
                            <tr>
                                <td style="width: 30%; height: 30px;"></td>
                                <td style="width: 70%; height: 30px;"></td>
                            </tr>
                            <?php else: ?>
                            <tr>
                                <td style="width: 30%; height: 30px;">
                                 <div class="row">
                                    <div class="col-md-12">
                                        <?php if(isset($ss->quarter1->team_name)): ?>
                                        <img  class="img_flags iWRound1A2B" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter1->team_name)).'.png'); ?>">
                                        <?php else: ?>
                                        <img class="img_flags iWRound1A2B" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </td>

                            <td style="width: 70%; height: 30px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if(isset($ss->quarter_1)): ?>
                                        <?php echo Form::select('WRound1A2B', [
                                          '' => 'Seleccione un equipo',
                                          "$winA->id_winner_team" => "$winA->team_name",
                                          "$winB->id_runnerup" => "$winB->team_rumup",
                                          ], old('value', isset($ss->quarter_1) ? $ss->quarter_1 : null ), [ 'class' =>  'form-control WRound1A2B', 'required', 'id' => 'WRound1A2B']); ?>

                                          <?php else: ?>

                                          <select class="form-control WRound1A2B" id="WRound1A2B" name="WRound1A2B">
                                            <option>Seleccione un equipo...</option>
                                            <?php if($winA != null && $winB != null): ?>
                                            <option value="<?php echo e($winA->id_winner_team); ?>"><?php echo e($winA->team_name); ?></option>

                                            <option value="<?php echo e($winB->id_runnerup); ?>"><?php echo e($winB->team_rumup); ?></option>
                                            <?php endif; ?>
                                        </select>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="height: 10px;" ></div>

        
        <div class="row">
            <div class="col-md-12">
                <table class="display table_second_stage">
                    <tbody>
                       <?php if($winC == null && $winD): ?>
                       <tr>
                        <td style="width: 30%; height: 30px;"></td>
                        <td style="width: 70%; height: 30px;"></td>
                    </tr>
                    <?php else: ?>
                    <tr>
                        <td style="width: 30%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php if(isset($ss->quarter2->team_name)): ?>
                                    <img class="img_flags iWRound1C2D" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter2->team_name)).'.png'); ?>">
                                    <?php else: ?>
                                    <img class="img_flags iWRound1C2D" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                    <?php endif; ?>

                                </div>
                            </div>
                        </td>
                        <td style="width: 70%; height: 30px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php if(isset($ss->quarter_2)): ?>
                                    <?php echo Form::select('WRound1C2D', [
                                      '' => 'Seleccione un equipo',
                                      "$winC->id_winner_team" => "$winC->team_name",
                                      "$winD->id_runnerup" => "$winD->team_rumup",
                                      ], old('value', isset($ss->quarter_2) ? $ss->quarter_2 : null ), [ 'class' =>  'form-control WRound1C2D', 'required', 'id' => 'WRound1C2D']); ?>

                                      <?php else: ?>

                                      <select class="form-control WRound1C2D" id="WRound1C2D" name="WRound1C2D">
                                        <option>Seleccione un equipo...</option>
                                        <?php if($winC != null && $winD != null): ?>
                                        <option value="<?php echo e($winC->id_winner_team); ?>"><?php echo e($winC->team_name); ?></option>
                                        <option value="<?php echo e($winD->id_runnerup); ?>"><?php echo e($winD->team_rumup); ?></option>
                                        <?php endif; ?>
                                    </select>
                                    <?php endif; ?>


                                </div>
                            </div>
                        </td>

                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div style="height: 130px;" class="separtos"></div>

    
    <div class="row">
        <div class="col-md-12">
            <table class="display table_second_stage">
                <tbody>
                   <?php if($winE == null && $winF): ?>
                   <tr>
                    <td style="width: 30%; height: 30px;"></td>
                    <td style="width: 70%; height: 30px;"></td>
                </tr>
                <?php else: ?>
                <tr>
                    <td style="width: 30%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if(isset($ss->quarter3->team_name)): ?>
                                <img class="img_flags iWRound1E2F" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter3->team_name)).'.png'); ?>">
                                <?php else: ?>
                                <img class="img_flags iWRound1E2F" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                <?php endif; ?>

                            </div>
                        </div>
                    </td>
                    <td style="width: 70%; height: 30px;">
                        <div class="row">
                            <div class="col-md-12">

                                <?php if(isset($ss->quarter_3)): ?>
                                <?php echo Form::select('WRound1E2F', [
                                  '' => 'Seleccione un equipo',
                                  "$winE->id_winner_team" => "$winE->team_name",
                                  "$winF->id_runnerup" => "$winF->team_rumup",
                                  ], old('value', isset($ss->quarter_3) ? $ss->quarter_3 : null ), [ 'class' =>  'form-control WRound1E2F', 'required', 'id' => 'WRound1E2F']); ?>

                                  <?php else: ?>

                                  <select class="form-control WRound1E2F" id="WRound1E2F" name="WRound1E2F">
                                    <option>Seleccione un equipo...</option>
                                    <?php if($winE != null && $winF != null): ?>
                                    <option value="<?php echo e($winE->id_winner_team); ?>"><?php echo e($winE->team_name); ?></option>
                                    <option value="<?php echo e($winF->id_runnerup); ?>"><?php echo e($winF->team_rumup); ?></option>
                                    <?php endif; ?>
                                </select>
                                <?php endif; ?>


                            </div>
                        </div>
                    </td>

                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div style="height: 10px;"></div>


<div class="row">
    <div class="col-md-12">
        <table class="display table_second_stage">
            <tbody>
               <?php if($winG == null && $winH): ?>
               <tr>
                <td style="width: 30%; height: 30px;"></td>
                <td style="width: 70%; height: 30px;"></td>
            </tr>
            <?php else: ?>
            <tr>
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($ss->quarter4->team_name)): ?>
                            <img class="img_flags iWRound1G2H" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter4->team_name)).'.png'); ?>">
                            <?php else: ?>
                            <img class="img_flags iWRound1G2H" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">

                            <?php if(isset($ss->quarter_4)): ?>
                            <?php echo Form::select('WRound1G2H', [
                              '' => 'Seleccione un equipo',
                              "$winG->id_winner_team" => "$winG->team_name",
                              "$winH->id_runnerup" => "$winH->team_rumup",
                              ], old('value', isset($ss->quarter_4) ? $ss->quarter_4 : null ), [ 'class' =>  'form-control WRound1G2H', 'required', 'id' => 'WRound1G2H']); ?>

                              <?php else: ?>

                              <select class="form-control WRound1G2H" id="WRound1G2H" name="WRound1G2H">
                                <option>Seleccione un equipo...</option>
                                <?php if($winG != null && $winH != null): ?>
                                <option value="<?php echo e($winG->id_winner_team); ?>"><?php echo e($winG->team_name); ?></option>
                                <option value="<?php echo e($winH->id_runnerup); ?>"><?php echo e($winH->team_rumup); ?></option>
                                <?php endif; ?>
                            </select>
                            <?php endif; ?>


                        </div>
                    </div>
                </td>

            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</div>

<div style="height: 130px;" class="separtos"></div>


<div class="row">
    <div class="col-md-12">
        <table class="display table_second_stage">
            <tbody>
               <?php if($winB == null && $winA): ?>
               <tr>
                <td style="width: 30%; height: 30px;"></td>
                <td style="width: 70%; height: 30px;"></td>
            </tr>
            <?php else: ?>
            <tr>
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($ss->quarter5->team_name)): ?>
                            <img class="img_flags iWRound1B2A" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter5->team_name)).'.png'); ?>">
                            <?php else: ?>
                            <img class="img_flags iWRound1B2A" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">

                            <?php if(isset($ss->quarter_5)): ?>
                            <?php echo Form::select('WRound1B2A', [
                              '' => 'Seleccione un equipo',
                              "$winB->id_winner_team" => "$winB->team_name",
                              "$winA->id_runnerup" => "$winA->team_rumup",
                              ], old('value', isset($ss->quarter_5) ? $ss->quarter_5 : null ), [ 'class' =>  'form-control WRound1B2A', 'required', 'id' => 'WRound1B2A']); ?>

                              <?php else: ?>

                              <select class="form-control WRound1B2A" id="WRound1B2A" name="WRound1B2A">
                                <option>Seleccione un equipo...</option>
                                <?php if($winB != null && $winA != null): ?>
                                <option value="<?php echo e($winB->id_winner_team); ?>"><?php echo e($winB->team_name); ?></option>
                                <option value="<?php echo e($winA->id_runnerup); ?>"><?php echo e($winA->team_rumup); ?></option>
                                <?php endif; ?>
                            </select>
                            <?php endif; ?>


                        </div>
                    </div>
                </td>

            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</div>

<div style="height: 10px;"></div>


<div class="row">
    <div class="col-md-12">
        <table class="display table_second_stage">
            <tbody>
               <?php if($winD == null && $winC): ?>
               <tr>
                <td style="width: 30%; height: 30px;"></td>
                <td style="width: 70%; height: 30px;"></td>
            </tr>
            <?php else: ?>
            <tr>
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($ss->quarter6->team_name)): ?>
                            <img class="img_flags iWRound1D2C" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter6->team_name)).'.png'); ?>">
                            <?php else: ?>
                            <img class="img_flags iWRound1D2C" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($ss->quarter_6)): ?>
                            <?php echo Form::select('WRound1D2C', [
                              '' => 'Seleccione un equipo',
                              "$winD->id_winner_team" => "$winD->team_name",
                              "$winC->id_runnerup" => "$winC->team_rumup",
                              ], old('value', isset($ss->quarter_6) ? $ss->quarter_6 : null ), [ 'class' =>  'form-control WRound1D2C', 'required', 'id' => 'WRound1D2C']); ?>

                              <?php else: ?>

                              <select class="form-control WRound1D2C" id="WRound1D2C" name="WRound1D2C">
                                <option>Seleccione un equipo...</option>
                                <?php if($winD != null && $winC != null): ?>
                                <option value="<?php echo e($winD->id_winner_team); ?>"><?php echo e($winD->team_name); ?></option>
                                <option value="<?php echo e($winC->id_runnerup); ?>"><?php echo e($winC->team_rumup); ?></option>
                                <?php endif; ?>
                            </select>
                            <?php endif; ?>


                        </div>
                    </div>
                </td>

            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</div>

<div style="height: 134px;" class="separtos"></div>


<div class="row">
    <div class="col-md-12">
        <table class="display table_second_stage">
            <tbody>
               <?php if($winF == null && $winE): ?>
               <tr>
                <td style="width: 30%; height: 30px;"></td>
                <td style="width: 70%; height: 30px;"></td>
            </tr>
            <?php else: ?>
            <tr>
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($ss->quarter7->team_name)): ?>
                            <img class="img_flags iWRound1F2E" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter7->team_name)).'.png'); ?>">
                            <?php else: ?>
                            <img class="img_flags iWRound1F2E" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">

                            <?php if(isset($ss->quarter_7)): ?>
                            <?php echo Form::select('WRound1F2E', [
                              '' => 'Seleccione un equipo',
                              "$winF->id_winner_team" => "$winF->team_name",
                              "$winE->id_runnerup" => "$winE->team_rumup",
                              ], old('value', isset($ss->quarter_7) ? $ss->quarter_7 : null ), [ 'class' =>  'form-control WRound1F2E', 'required', 'id' => 'WRound1F2E']); ?>

                              <?php else: ?>

                              <select class="form-control WRound1F2E" id="WRound1F2E" name="WRound1F2E">
                                <option>Seleccione un equipo...</option>
                                <?php if($winF != null && $winE != null): ?>
                                <option value="<?php echo e($winF->id_winner_team); ?>"><?php echo e($winF->team_name); ?></option>
                                <option value="<?php echo e($winE->id_runnerup); ?>"><?php echo e($winE->team_rumup); ?></option>
                                <?php endif; ?>
                            </select>
                            <?php endif; ?>

                        </div>
                    </div>
                </td>

            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</div>

<div style="height: 10px;"></div>


<div class="row">
    <div class="col-md-12">
        <table class="display table_second_stage">
            <tbody>
               <?php if($winH == null && $winG): ?>
               <tr>
                <td style="width: 30%; height: 30px;"></td>
                <td style="width: 70%; height: 30px;"></td>
            </tr>
            <?php else: ?>
            <tr>
                <td style="width: 30%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($ss->quarter8->team_name)): ?>
                            <img class="img_flags iWRound1H2G" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->quarter8->team_name)).'.png'); ?>">
                            <?php else: ?>
                            <img class="img_flags iWRound1H2G" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </td>
                <td style="width: 70%; height: 30px;">
                    <div class="row">
                        <div class="col-md-12">

                            <?php if(isset($ss->quarter_8)): ?>
                            <?php echo Form::select('WRound1H2G', [
                              '' => 'Seleccione un equipo',
                              "$winH->id_winner_team" => "$winH->team_name",
                              "$winG->id_runnerup" => "$winG->team_rumup",
                              ], old('value', isset($ss->quarter_8) ? $ss->quarter_8 : null ), [ 'class' =>  'form-control WRound1H2G', 'required', 'id' => 'WRound1H2G']); ?>

                              <?php else: ?>

                              <select class="form-control WRound1H2G" id="WRound1H2G" name="WRound1H2G">
                                <option>Seleccione un equipo...</option>
                                <?php if($winH != null && $winG != null): ?>
                                <option value="<?php echo e($winH->id_winner_team); ?>"><?php echo e($winH->team_name); ?></option>
                                <option value="<?php echo e($winG->id_runnerup); ?>"><?php echo e($winG->team_rumup); ?></option>
                                <?php endif; ?>
                            </select>
                            <?php endif; ?>


                        </div>
                    </div>
                </td>

            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</div>

<div style="height: 69px;" class="separtos"></div>
</div>
</div>  
</div> 


<div class="col second_sta">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                    <h6><?php echo e(__('Semi-finales')); ?> </h6>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div style="height: 165px;" class="separtos"></div>
                    
                    <div class="row">
                        <div class="col-md-12">

                            <table class="display table_second_stage">
                                <tbody>
                                    <tr>
                                        <td style="width: 30%; height: 30px;">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <?php if(isset($ss->semi1->team_name)): ?>
                                                    <img class="img_flags iWquarter1_2" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->semi1->team_name)).'.png'); ?>">
                                                    <?php else: ?>
                                                    <img class="img_flags iWquarter1_2" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                        </td>
                                        <td style="width: 70%; height: 30px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php if(isset($ss->semi_1)): ?>
                                                    <?php echo Form::select('Wquarter1_2', [
                                                        '' => 'Seleccione un equipo',
                                                        "$ss->semi_1" => $ss->semi1->team_name,
                                                        ], old('value', isset($ss->semi_1) ? $ss->semi_1 : null ), [ 'class' =>  'form-control Wquarter1_2', 'required', 'id' => 'Wquarter1_2']); ?>

                                                        <?php else: ?>
                                                        <?php echo Form::select('Wquarter1_2', [
                                                            '' => 'Seleccione un equipo',
                                                            ], null, [ 'class' =>  'form-control Wquarter1_2', 'required', 'id' => 'Wquarter1_2']); ?>

                                                            <?php endif; ?>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div style="height: 10px;"></div>

                            
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="display table_second_stage">
                                        <tbody>

                                            <tr>
                                                <td style="width: 30%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <?php if(isset($ss->semi1->team_name)): ?>
                                                            <img class="img_flags iWquarter3_4" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->semi2->team_name)).'.png'); ?>">
                                                            <?php else: ?>
                                                            <img class="img_flags iWquarter3_4" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                                            <?php endif; ?>


                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 70%; height: 30px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <?php if(isset($ss->semi_2)): ?>
                                                            <?php echo Form::select('Wquarter3_4', [
                                                                '' => 'Seleccione un equipo',
                                                                "$ss->semi_2" => $ss->semi2->team_name,
                                                                ], old('value', isset($ss->semi_2) ? $ss->semi_2 : null ), [ 'class' =>  'form-control Wquarter3_4', 'required', 'id' => 'Wquarter3_4']); ?>

                                                                <?php else: ?>
                                                                <?php echo Form::select('Wquarter3_4', [
                                                                    '' => 'Seleccione un equipo',
                                                                    ], null, [ 'class' =>  'form-control Wquarter3_4', 'required', 'id' => 'Wquarter3_4']); ?>

                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div style="height: 355px;" class="separtos"></div>

                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="display table_second_stage">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 30%; height: 30px;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <?php if(isset($ss->semi3->team_name)): ?>
                                                                    <img class="img_flags iWquarter5_6" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->semi3->team_name)).'.png'); ?>">
                                                                    <?php else: ?>
                                                                    <img class="img_flags iWquarter5_6" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="width: 80%; height: 30px;">
                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <?php if(isset($ss->semi_3)): ?>
                                                                    <?php echo Form::select('Wquarter5_6', [
                                                                        '' => 'Seleccione un equipo',
                                                                        "$ss->semi_3" => $ss->semi3->team_name,
                                                                        ], old('value', isset($ss->semi_3) ? $ss->semi_3 : null ), [ 'class' =>  'form-control Wquarter5_6', 'required', 'id' => 'Wquarter5_6']); ?>

                                                                        <?php else: ?>
                                                                        <?php echo Form::select('Wquarter5_6', [
                                                                            '' => 'Seleccione un equipo',
                                                                            ],null, [ 'class' =>  'form-control Wquarter5_6', 'required', 'id' => 'Wquarter5_6']); ?>

                                                                            <?php endif; ?>

                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div style="height: 10px;"></div>

                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="display table_second_stage">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 30%; height: 30px;">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <?php if(isset($ss->semi4->team_name)): ?>
                                                                            <img class="img_flags iWquarter7_8" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->semi4->team_name)).'.png'); ?>">
                                                                            <?php else: ?>
                                                                            <img class="img_flags iWquarter7_8" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 70%; height: 30px;">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <?php if(isset($ss->semi_4)): ?>
                                                                            <?php echo Form::select('Wquarter7_8', [
                                                                                '' => 'Seleccione un equipo',
                                                                                "$ss->semi_4" => $ss->semi4->team_name,
                                                                                ], old('value', isset($ss->semi_4) ? $ss->semi_4 : null ), [ 'class' =>  'form-control Wquarter7_8', 'required', 'id' => 'Wquarter7_8']); ?>

                                                                                <?php else: ?>
                                                                                <?php echo Form::select('Wquarter7_8',[
                                                                                    '' => 'Seleccione un equipo',
                                                                                    ], null, [ 'class' =>  'form-control Wquarter7_8', 'required', 'id' => 'Wquarter7_8']); ?>

                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div style="height: 181px;" class="separtos"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div> 

                            
                            <div class="col second_sta">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6><?php echo e(__('Final')); ?> </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="height: 387px;" class="separtos"></div>
                                                
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <table class="display table_second_stage">
                                                            <tbody>
                                                                <?php if($winA == null && $winA): ?>
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;"></td>
                                                                    <td style="width: 70%; height: 30px;"></td>
                                                                </tr>
                                                                <?php else: ?>
                                                                <tr>
                                                                    <td style="width: 30%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">

                                                                                <?php if(isset($ss->final1->team_name)): ?>
                                                                                <img class="img_flags iWSemi1_2" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->final1->team_name)).'.png'); ?>">
                                                                                <?php else: ?>
                                                                                <img class="img_flags iWSemi1_2" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                                                                <?php endif; ?>

                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 70%; height: 30px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">

                                                                                <?php if(isset($ss->final_1)): ?>
                                                                                <?php echo Form::select('WSemi1_2', [
                                                                                    '' => 'Seleccione un equipo',
                                                                                    "$ss->final_1" => $ss->final1->team_name,
                                                                                    ], old('value', isset($ss->final_1) ? $ss->final_1 : null ), [ 'class' =>  'form-control WSemi1_2', 'required', 'id' => 'WSemi1_2']); ?>

                                                                                    <?php else: ?>
                                                                                    <?php echo Form::select('WSemi1_2',[
                                                                                        '' => 'Seleccione un equipo',
                                                                                        ], null, [ 'class' =>  'form-control WSemi1_2', 'required', 'id' => 'WSemi1_2']); ?>

                                                                                        <?php endif; ?>

                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <?php endif; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div style="height: 10px;" class="separtos"></div>

                                                        
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table class="display table_second_stage">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="width: 30%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">

                                                                                        <?php if(isset($ss->final2->team_name)): ?>
                                                                                        <img class="img_flags iWSemi3_4" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->final2->team_name)).'.png'); ?>">
                                                                                        <?php else: ?>
                                                                                        <img class="img_flags iWSemi3_4" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                                                                        <?php endif; ?>

                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td style="width: 80%; height: 30px;">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">

                                                                                       <?php if(isset($ss->final_2)): ?>
                                                                                       <?php echo Form::select('WSemi3_4', [
                                                                                        '' => 'Seleccione un equipo',
                                                                                        "$ss->final_2" => $ss->final2->team_name,
                                                                                        ], old('value', isset($ss->final_2) ? $ss->final_2 : null ), [ 'class' =>  'form-control WSemi3_4', 'required', 'id' => 'WSemi3_4']); ?>

                                                                                        <?php else: ?>
                                                                                        <?php echo Form::select('WSemi3_4',[
                                                                                            '' => 'Seleccione un equipo',
                                                                                            ], null, [ 'class' =>  'form-control WSemi3_4', 'required', 'id' => 'WSemi3_4']); ?>

                                                                                            <?php endif; ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div style="height: 407px;" class="separtos"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>  
                                        </div> 

                                        <div class="col second_sta">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h6>Campeon</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div style="height: 385px;" class="separtos"></div>

                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <table class="display table_second_stage">
                                                                        <tbody>
                                                                            <tr>
                                                                                <br>
                                                                                <td style="width: 30%; height: 30px;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <?php if(isset($ss->winner1->team_name)): ?>
                                                                                            <img class="img_flags iWinner1" src="<?php echo e(asset('img/flags/').'/'.str_replace(' ', '_', strtolower($ss->winner1->team_name)).'.png'); ?>">
                                                                                            <?php else: ?>
                                                                                            <img class="img_flags iWinner1" src="<?php echo e(asset('img/flags/cup2.png')); ?>">
                                                                                            <?php endif; ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="width: 70%; height: 30px;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">

                                                                                           <?php if(isset($ss->winner)): ?>
                                                                                           <?php echo Form::select('Winner1', [
                                                                                            '' => 'Seleccione un equipo',
                                                                                            "$ss->winner" => $ss->winner1->team_name,
                                                                                            ], old('value', isset($ss->winner) ? $ss->winner : null ), [ 'class' =>  'form-control Winner1', 'required', 'id' => 'Winner1']); ?>

                                                                                            <?php else: ?>
                                                                                            <?php echo Form::select('Winner1',[
                                                                                                '' => 'Seleccione un equipo',
                                                                                                ], null, [ 'class' =>  'form-control Winner1', 'required', 'id' => 'Winner1']); ?>

                                                                                                <?php endif; ?>




                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                                <div style="height: 437px;" class="separtos"></div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>  
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <input type="button" name="reset" id="reset" class="btn btn-info btn-block" value="Reset" />
                                          </button>
                                      </div>

                                      <div class="col-md-6">
                                        <input type="button" name="submitgrouph" id="submitSecondStage" class="btn btn-info btn-block" value="Guardar" />
                                    </button>
                                </div>
                            </form>
                        </div> 
                <input type="hidden" id="imgroute" value="<?php echo e(asset('img/flags')); ?>">

        </main>
    </div>
</body>

<script>

    $(document).ready(function(){
        if($('select.WRound1A2B').value == 'Seleccione un equipo'){
                // $(".iWRound1A2B").attr('src', '');
                alert($(".iWRound1A2B").val());
            }
        }); 

    var url = $("#imgroute").val();
    

    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });

    var postSECONDSTAGE = "<?php echo url('/storesecondstage'); ?>";

    $('#submitSecondStage').click(function(){

            $.ajax({  
                url:postSECONDSTAGE,  
                method:"POST",  
                data:$('#secondstage').serialize(),
                type:'json',
                success:function(data){
                    if(data.error){
                        toastr.warning(data.error);
                    }else{
                        // toastr.success('Saved');
                        // location.reload();
                        // $('#idgrupoh').removeClass( "active show" );
                        // $('#idgrupoRoun').addClass( "active show" );
                        // $('#grupoh').removeClass( "active show" );
                        // $('#grupoRoun').addClass( "active show" );
                        // location.reload();
                        toastr.success('Saved');
                        parent.location='<?php echo e(route("home")); ?>';
                        
                    }
                }  
            }); 

        });


     // RESET

        function reset(){

            

            // select quarters 

            // 1
            $("#WRound1A2B").find('option:eq(0)').prop('selected', true);
            $(".iWRound1A2B").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 2
            $("#WRound1C2D").find('option:eq(0)').prop('selected', true);
            $(".iWRound1C2D").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 3
            $("#WRound1E2F").find('option:eq(0)').prop('selected', true);
            $(".iWRound1E2F").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 4
            $("#WRound1G2H").find('option:eq(0)').prop('selected', true);
            $(".iWRound1G2H").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 5
            $("#WRound1B2A").find('option:eq(0)').prop('selected', true);
            $(".iWRound1B2A").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 6
            $("#WRound1D2C").find('option:eq(0)').prop('selected', true);
            $(".iWRound1D2C").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 7
            $("#WRound1F2E").find('option:eq(0)').prop('selected', true);
            $(".iWRound1F2E").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 8
            $("#WRound1H2G").find('option:eq(0)').prop('selected', true);
            $(".iWRound1H2G").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");


            // Semi-finals
            // 1
            $('select.Wquarter1_2').find('option').not(':first').remove();
            $(".iWquarter1_2").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 2
            $('select.Wquarter3_4').find('option').not(':first').remove();
            $(".iWquarter3_4").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 3
            $('select.Wquarter5_6').find('option').not(':first').remove();
            $(".iWquarter5_6").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 4
            $('select.Wquarter7_8').find('option').not(':first').remove();
            $(".iWquarter7_8").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");

            // Final
            // 1
            $('select.WSemi1_2').find('option').not(':first').remove();
            $(".iWSemi1_2").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");
            // 2
            $('select.WSemi3_4').find('option').not(':first').remove();
            $(".iWSemi3_4").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");

            // Champion
            // 1
            $('select.Winner1').find('option').not(':first').remove();
            $(".iWinner1").attr('src', "<?php echo e(asset('img/flags/cup2.png')); ?>");

        }  // Finish reset

        $('#reset').click(function(){
            reset();
        });

        // mahere

        

        $("#secondstage").on("change", "select.WRound1A2B, select.WRound1C2D", function(){



            var selectedTeamAvalue = $(".WRound1A2B option:selected").val();
            var selectedTeamAtext = $(".WRound1A2B option:selected").text();

            var selectedTeamBvalue = $(".WRound1C2D option:selected").val();
            var selectedTeamBtext = $(".WRound1C2D option:selected").text();

            $('select.Wquarter1_2').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter1_2').find("option:gt(0)").remove();


            $(".iWquarter1_2").attr('src', '<?php echo e(asset('img/flags/pick_a_team.png')); ?>');

            $(".iWRound1A2B").attr('src', url + '/' + selectedTeamAtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1C2D").attr('src', url + '/' + selectedTeamBtext.replace(/ /g,"_").toLowerCase() + '.png');

            
            $('select.Wquarter1_2').append($('<option/>', { 
                    value: selectedTeamAvalue,
                    text : selectedTeamAtext 
                }));
            $('select.Wquarter1_2').append($('<option/>', { 
                    value: selectedTeamBvalue,
                    text : selectedTeamBtext 
                }));

        });



        $("#secondstage").on("change", "select.WRound1E2F, select.WRound1G2H", function(){

            var selectedTeamCvalue = $(".WRound1E2F option:selected").val();
            var selectedTeamCtext = $(".WRound1E2F option:selected").text();

            var selectedTeamDvalue = $(".WRound1G2H option:selected").val();
            var selectedTeamDtext = $(".WRound1G2H option:selected").text();

            $('select.Wquarter3_4').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter3_4').find("option:gt(0)").remove();

            $(".iWquarter3_4").attr('src', '<?php echo e(asset('img/flags/pick_a_team.png')); ?>');

            $(".iWRound1E2F").attr('src', url + '/' + selectedTeamCtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1G2H").attr('src', url + '/' + selectedTeamDtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Wquarter3_4').append($('<option/>', { 
                    value: selectedTeamCvalue,
                    text : selectedTeamCtext 
                }));
            $('select.Wquarter3_4').append($('<option/>', { 
                    value: selectedTeamDvalue,
                    text : selectedTeamDtext 
                }));

        });


        $("#secondstage").on("change", "select.WRound1B2A, select.WRound1D2C", function(){

            var selectedTeamEvalue = $(".WRound1B2A option:selected").val();
            var selectedTeamEtext = $(".WRound1B2A option:selected").text();

            var selectedTeamFvalue = $(".WRound1D2C option:selected").val();
            var selectedTeamFtext = $(".WRound1D2C option:selected").text();

            $(".iWquarter5_6").attr('src', '<?php echo e(asset('img/flags/pick_a_team.png')); ?>');

            $('select.Wquarter5_6').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter5_6').find("option:gt(0)").remove();

            $(".iWRound1B2A").attr('src', url + '/' + selectedTeamEtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1D2C").attr('src', url + '/' + selectedTeamFtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Wquarter5_6').append($('<option/>', { 
                    value: selectedTeamEvalue,
                    text : selectedTeamEtext 
                }));
            $('select.Wquarter5_6').append($('<option/>', { 
                    value: selectedTeamFvalue,
                    text : selectedTeamFtext 
                }));

        });


        $(" #secondstage").on("change","select.WRound1F2E, select.WRound1H2G", function(){

            var selectedTeamGvalue = $(".WRound1F2E option:selected").val();
            var selectedTeamGtext = $(".WRound1F2E option:selected").text();

            var selectedTeamHvalue = $(".WRound1H2G option:selected").val();
            var selectedTeamHtext = $(".WRound1H2G option:selected").text();

            $(".iWquarter7_8").attr('src', '<?php echo e(asset('img/flags/pick_a_team.png')); ?>');

            $('select.Wquarter7_8').find('option:eq(0)').prop('selected', true);
            $('select.Wquarter7_8').find("option:gt(0)").remove();

            
            $(".iWRound1F2E").attr('src', url + '/' + selectedTeamGtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWRound1H2G").attr('src', url + '/' + selectedTeamHtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Wquarter7_8').append($('<option/>', { 
                    value: selectedTeamGvalue,
                    text : selectedTeamGtext 
                }));
            $('select.Wquarter7_8').append($('<option/>', { 
                    value: selectedTeamHvalue,
                    text : selectedTeamHtext 
                }));

        });



        $("#secondstage").on("change", "select.Wquarter1_2, select.Wquarter3_4", function(){

            var selectedTeamIvalue = $(".Wquarter1_2 option:selected").val();
            var selectedTeamItext = $(".Wquarter1_2 option:selected").text();

            var selectedTeamJvalue = $(".Wquarter3_4 option:selected").val();
            var selectedTeamJtext = $(".Wquarter3_4 option:selected").text();

            $(".iWSemi1_2").attr('src', '<?php echo e(asset('img/flags/pick_a_team.png')); ?>');

            $('select.WSemi1_2').find('option:eq(0)').prop('selected', true);
            $('select.WSemi1_2').find("option:gt(0)").remove();


            $(".iWquarter1_2").attr('src', url + '/' + selectedTeamItext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWquarter3_4").attr('src', url + '/' + selectedTeamJtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.WSemi1_2').append($('<option/>', { 
                    value: selectedTeamIvalue,
                    text : selectedTeamItext 
                }));
            $('select.WSemi1_2').append($('<option/>', { 
                    value: selectedTeamJvalue,
                    text : selectedTeamJtext 
                }));

        });


        $("#secondstage").on("change", "select.Wquarter5_6, select.Wquarter7_8", function(){

            var selectedTeamKvalue = $(".Wquarter5_6 option:selected").val();
            var selectedTeamKtext = $(".Wquarter5_6 option:selected").text();

            var selectedTeamLvalue = $(".Wquarter7_8 option:selected").val();
            var selectedTeamLtext = $(".Wquarter7_8 option:selected").text();

            $(".iWSemi3_4").attr('src', '<?php echo e(asset('img/flags/pick_a_team.png')); ?>');

            $('select.WSemi3_4').find('option:eq(0)').prop('selected', true);
            $('select.WSemi3_4').find("option:gt(0)").remove();

            $(".iWquarter5_6").attr('src', url + '/' + selectedTeamKtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWquarter7_8").attr('src', url + '/' + selectedTeamLtext.replace(/ /g,"_").toLowerCase() + '.png');


            $('select.WSemi3_4').append($('<option/>', { 
                    value: selectedTeamKvalue,
                    text : selectedTeamKtext 
                }));
            $('select.WSemi3_4').append($('<option/>', { 
                    value: selectedTeamLvalue,
                    text : selectedTeamLtext 
                }));

        });

        $("#secondstage").on("change", "select.WSemi1_2, select.WSemi3_4", function(){

            var selectedTeamMvalue = $(".WSemi1_2 option:selected").val();
            var selectedTeamMtext = $(".WSemi1_2 option:selected").text();

            var selectedTeamNvalue = $(".WSemi3_4 option:selected").val();
            var selectedTeamNtext = $(".WSemi3_4 option:selected").text();

            $(".iWinner1").attr('src', '<?php echo e(asset('img/flags/pick_a_team.png')); ?>');

            $('select.Winner1').find('option:eq(0)').prop('selected', true);
            $('select.Winner1').find("option:gt(0)").remove();

            $(".iWSemi1_2").attr('src', url + '/' + selectedTeamMtext.replace(/ /g,"_").toLowerCase() + '.png');

            $(".iWSemi3_4").attr('src', url + '/' + selectedTeamNtext.replace(/ /g,"_").toLowerCase() + '.png');
            

            $('select.Winner1').append($('<option/>', { 
                    value: selectedTeamMvalue,
                    text : selectedTeamMtext 
                }));
            $('select.Winner1').append($('<option/>', { 
                    value: selectedTeamNvalue,
                    text : selectedTeamNtext 
                }));

        });

        $("#secondstage").on("change", "select.Winner1", function(){

            // var selectedSemi5Value = $(".Winner1 option:selected").val();
            var selectedWinner = $(".Winner1 option:selected").text();

            $(".iWinner1").attr('src', url + '/' + selectedWinner.replace(/ /g,"_").toLowerCase() + '.png');
            
            
        });

</script>

</html>





















    
    