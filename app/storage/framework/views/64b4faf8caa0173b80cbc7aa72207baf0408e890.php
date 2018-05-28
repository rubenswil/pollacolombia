<?php $__env->startSection('pagetitle'); ?>
    Print my picks
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header-print">
                        <div class="row">
                            <div class="col-md-6">
                                <a style="float: left; margin-right: 15px;" href="<?php echo e(route('home')); ?>"><button class="btn btn-primary" id="close"> < Home </button></a>
                                <h5><?php echo e(__('Printable Verision of my Picks')); ?> </h5>
                            </div>
                           <div class="col-md-6" style="text-align: right;">
                                <h5><?php echo e(__('Nickname: ').$poll->poll_name); ?> </h5>
                            </div>
                        </div>
                    </div>

                    
                    <div class="card-body-print">
                    	<div class="row">
	                    	<div class="col-md-6">
	                    		
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6><?php echo e(__('Group A')); ?> </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                    <thead>
                                                        <tr>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="A1-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                     6/14/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Russia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A1" onblur="match_games()" value="<?php echo e(old('M1A1',  isset($ga->M1A1) ? $ga->M1A1 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1A2" onblur="match_games()" value="<?php echo e(old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Saudi Arabia</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A3-A4">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/15/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Egypt</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A3" onblur="match_games()" value="<?php echo e(old('M2A3',  isset($ga->M2A3) ? $ga->M2A3 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2A4" onblur="match_games()" value="<?php echo e(old('M1A2',  isset($ga->M1A2) ? $ga->M1A2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Uruguay</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A1-A3">
                                                            </td>
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/19/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Russia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A1" onblur="match_games()" value="<?php echo e(old('M3A1',  isset($ga->M3A1) ? $ga->M3A1 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3A3" onblur="match_games()" value="<?php echo e(old('M3A3',  isset($ga->M3A3) ? $ga->M3A3 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Egypt</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/20/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Uruguay</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A4" onblur="match_games()" value="<?php echo e(old('M4A4',  isset($ga->M4A4) ? $ga->M4A4 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4A2" onblur="match_games()" value="<?php echo e(old('M4A2',  isset($ga->M4A2) ? $ga->M4A2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Saudi Arabia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A1">
                                                            <td class="td-date"> 
                                                                <div class="col-md-12">
                                                                    6/25/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Uruguay</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5A4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A4" onblur="match_games()" value="<?php echo e(old('M5A4',  isset($ga->M5A4) ? $ga->M5A4 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5A1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5A1" onblur="match_games()" value="<?php echo e(old('M5A1',  isset($ga->M5A1) ? $ga->M5A1 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Russia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A2-A3">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/25/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Saudi Arabia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6A2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A2" onblur="match_games()" value="<?php echo e(old('M6A2',  isset($ga->M6A2) ? $ga->M6A2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6A3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6A3" onblur="match_games()" value="<?php echo e(old('M6A3',  isset($ga->M6A3) ? $ga->M6A3 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Egypt</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        
                                                    </tbody>
                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
	                        </div>

	                        <div class="col-md-6">
	                        	
			                    <div class="card">
			                        <div class="card-header-print">
			                            <div class="row">
			                                <div class="col-md-4">
			                                    <h6><?php echo e(__('Group B')); ?> </h6>
			                                </div>
			                            </div>
			                        </div>

			                        <div class="card-body-print">
			                            <div class="row">
			                                <div class="col-md-12 table-responsive">
			                                    
			                                        <table id="myTable" class="display table_picks-print" style="width: 100%;">
			                                                <thead>
			                                                    <tr>
			                                                    </tr>
			                                                </thead>
			                                                <tbody>
			                                                    <tr class="A1-A2">
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                 6/15/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Portugal</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M1B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B1" onblur="match_games_B()" value="<?php echo e(old('M1B1',  isset($gb->M1B1) ? $gb->M1B1 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                       
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M1B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1B2" onblur="match_games_B()" value="<?php echo e(old('M1B2',  isset($gb->M1B2) ? $gb->M1B2 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Spain</label>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A3-A4">
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                6/15/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Morocco</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M2B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B3" onblur="match_games_B()" value="<?php echo e(old('M2B3',  isset($gb->M2B3) ? $gb->M2B3 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>

			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M2B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2B4" onblur="match_games_B()" value="<?php echo e(old('M2B4',  isset($gb->M2B4) ? $gb->M2B4 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Iran</label>
			                                                                </div>
			                                                                
			                                                                
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A1-A3">
			                                                        </td>
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                6/20/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Portugal</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M3B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B1" onblur="match_games_B()" value="<?php echo e(old('M3B1',  isset($gb->M3B1) ? $gb->M3B1 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M3B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3B3" onblur="match_games_B()" value="<?php echo e(old('M3B3',  isset($gb->M3B3) ? $gb->M3B3 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Morocco</label>
			                                                                </div>
			                                                                
			                                                                
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A4-A2">
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                6/20/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Iran</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M4B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B4" onblur="match_games_B()" value="<?php echo e(old('M4B4',  isset($gb->M4B4) ? $gb->M4B4 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M4B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4B2" onblur="match_games_B()" value="<?php echo e(old('M4B2',  isset($gb->M4B2) ? $gb->M4B2 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Spain</label>
			                                                                </div>
			                                                                
			                                                                
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A4-A1">
			                                                        <td class="td-date"> 
			                                                            <div class="col-md-12">
			                                                                6/25/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Iran</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M5B4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B4" onblur="match_games_B()" value="<?php echo e(old('M5B4',  isset($gb->M5B4) ? $gb->M5B4 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M5B1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5B1" onblur="match_games_B()" value="<?php echo e(old('M5B1',  isset($gb->M5B1) ? $gb->M5B1 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Portugal</label>
			                                                                </div>
			                                                                
			                                                                
			                                                            </div>
			                                                        </td>
			                                                    </tr>

			                                                    <tr class="A2-A3">
			                                                        <td class="td-date">
			                                                            <div class="col-md-12">
			                                                                6/25/2018
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-8 team_left">
			                                                                    <label class="label_team_print">Spain</label>
			                                                                </div>
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M6B2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B2" onblur="match_games_B()" value="<?php echo e(old('M6B2',  isset($gb->M6B2) ? $gb->M6B2 : null)); ?>">
			                                                                    </div>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                        <td>
			                                                            <div class="row">
			                                                                <div class="col-md-4">
			                                                                    <div class="pikcs-print">
			                                                                        <input type="text" readonly name="M6B3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6B3" onblur="match_games_B()" value="<?php echo e(old('M6B3',  isset($gb->M6B3) ? $gb->M6B3 : null)); ?>"> 
			                                                                    </div>
			                                                                </div>
			                                                                <div class="col-md-8 team_right">
			                                                                    <label class="label_team_print">Morocco</label>
			                                                                </div>
			                                                            </div>
			                                                        </td>
			                                                    </tr>
			                                                </tbody>
			                                        </table> 

			                                </div>
			                            </div>
			                        </div>
			                    </div>
	                        </div>
                        </div>

                        <div class="row">
                        	<div class="col-md-6">
                        		
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6><?php echo e(__('Group C')); ?> </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                    <thead>
                                                        <tr>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="A1-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                     6/16/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">France</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1C1" onblur="match_games_C()" value="<?php echo e(old('M1C1',  isset($gc->M1C1) ? $gc->M1C1 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                           
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1C2" onblur="match_games_C()" value="<?php echo e(old('M1C2',  isset($gc->M1C2) ? $gc->M1C2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Australia</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A3-A4">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/16/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Peru</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2C3" onblur="match_games_C()" value="<?php echo e(old('M2C3',  isset($gc->M2C3) ? $gc->M2C3 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2C4" onblur="match_games_C()" value="<?php echo e(old('M2C4',  isset($gc->M2C4) ? $gc->M2C4 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Denmark</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A1-A3">
                                                            </td>
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/21/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">France</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3C1" onblur="match_games_C()" value="<?php echo e(old('M3C1',  isset($gc->M3C1) ? $gc->M3C1 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3C3" onblur="match_games_C()" value="<?php echo e(old('M3C3',  isset($gc->M3C3) ? $gc->M3C3 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Peru</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/21/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Denmark</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4C4" onblur="match_games_C()" value="<?php echo e(old('M4C4',  isset($gc->M4C4) ? $gc->M4C4 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4C2" onblur="match_games_C()" value="<?php echo e(old('M4C2',  isset($gc->M4C2) ? $gc->M4C2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Australia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A1">
                                                            <td class="td-date"> 
                                                                <div class="col-md-12">
                                                                    6/26/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Denmark</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5C4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5C4" onblur="match_games_C()" value="<?php echo e(old('M5C4',  isset($gc->M5C4) ? $gc->M5C4 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5C1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5C1" onblur="match_games_C()" value="<?php echo e(old('M5C1',  isset($gc->M5C1) ? $gc->M5C1 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">France</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A2-A3">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/26/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Australia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6C2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6C2" onblur="match_games_C()" value="<?php echo e(old('M6C2',  isset($gc->M6C2) ? $gc->M6C2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6C3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6C3" onblur="match_games_C()" value="<?php echo e(old('M6C3',  isset($gc->M6C3) ? $gc->M6C3 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Peru</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        
                                                    </tbody>
                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                        	<div class="col-md-6">
                        		
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6><?php echo e(__('Group D')); ?> </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                    <thead>
                                                        <tr>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="A1-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                     6/16/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Argentina</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1D1" onblur="match_games_D()" value="<?php echo e(old('M1D1',  isset($gd->M1D1) ? $gd->M1D1 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                           
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M1D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1D2" onblur="match_games_D()" value="<?php echo e(old('M1D2',  isset($gd->M1D2) ? $gd->M1D2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Iceland</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A3-A4">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/16/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Croatia</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2D3" onblur="match_games_D()" value="<?php echo e(old('M2D3',  isset($gd->M2D3) ? $gd->M2D3 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M2D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2D4" onblur="match_games_D()" value="<?php echo e(old('M2D4',  isset($gd->M2D4) ? $gd->M2D4 : null)); ?>">
                                                                        </div>
                                                                    </div>        
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Nigeria</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A1-A3">
                                                            </td>
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/21/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Argentina</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3D1" onblur="match_games_D()" value="<?php echo e(old('M3D1',  isset($gd->M3D1) ? $gd->M3D1 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M3D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3D3" onblur="match_games_D()" value="<?php echo e(old('M3D3',  isset($gd->M3D3) ? $gd->M3D3 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Croatia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A2">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/22/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Nigeria</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4D4" onblur="match_games_D()" value="<?php echo e(old('M4D4',  isset($gd->M4D4) ? $gd->M4D4 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M4D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4D2" onblur="match_games_D()" value="<?php echo e(old('M4D2',  isset($gd->M4D2) ? $gd->M4D2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Iceland</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A4-A1">
                                                            <td class="td-date"> 
                                                                <div class="col-md-12">
                                                                    6/26/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Nigeria</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5D4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5D4" onblur="match_games_D()" value="<?php echo e(old('M5D4',  isset($gd->M5D4) ? $gd->M5D4 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M5D1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5D1" onblur="match_games_D()" value="<?php echo e(old('M5D1',  isset($gd->M5D1) ? $gd->M5D1 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Argentina</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="A2-A3">
                                                            <td class="td-date">
                                                                <div class="col-md-12">
                                                                    6/26/2018
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-8 team_left">
                                                                        <label class="label_team_print">Iceland</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6D2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6D2" onblur="match_games_D()" value="<?php echo e(old('M6D2',  isset($gd->M6D2) ? $gd->M6D2 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pikcs-print">
                                                                            <input type="text" readonly name="M6D3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6D3" onblur="match_games_D()" value="<?php echo e(old('M6D3',  isset($gd->M6D3) ? $gd->M6D3 : null)); ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 team_right">
                                                                        <label class="label_team_print">Croatia</label>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        
                                                    </tbody>
                                                </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                    	</div>

                    	<div class="row">
                        	<div class="col-md-6">
                        		
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6><?php echo e(__('Group E')); ?> </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                                    <thead>
                                                                        <tr>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                     6/17/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Brazil</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1E1" onblur="match_games_E()" value="<?php echo e(old('M1E1',  isset($ge->M1E1) ? $ge->M1E1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1E2" onblur="match_games_E()" value="<?php echo e(old('M1E2',  isset($ge->M1E2) ? $ge->M1E2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Switzerland</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/17/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Costa Rica</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2E3" onblur="match_games_E()" value="<?php echo e(old('M2E3',  isset($ge->M2E3) ? $ge->M2E3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2E4" onblur="match_games_E()" value="<?php echo e(old('M2E4',  isset($ge->M2E4) ? $ge->M2E4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Serbia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/22/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Brazil</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3E1" onblur="match_games_E()" value="<?php echo e(old('M3E1',  isset($ge->M3E1) ? $ge->M3E1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3E3" onblur="match_games_E()" value="<?php echo e(old('M3E3',  isset($ge->M3E3) ? $ge->M3E3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Costa Rica</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/22/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Serbia</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4E4" onblur="match_games_E()" value="<?php echo e(old('M4E4',  isset($ge->M4E4) ? $ge->M4E4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4E2" onblur="match_games_E()" value="<?php echo e(old('M4E2',  isset($ge->M4E2) ? $ge->M4E2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Switzerland</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Serbia</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5E4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5E4" onblur="match_games_E()" value="<?php echo e(old('M5E4',  isset($ge->M5E4) ? $ge->M5E4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5E1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5E1" onblur="match_games_E()" value="<?php echo e(old('M5E1',  isset($ge->M5E1) ? $ge->M5E1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Brazil</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Switzerland</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6E2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6E2" onblur="match_games_E()" value="<?php echo e(old('M6E2',  isset($ge->M6E2) ? $ge->M6E2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6E3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6E3" onblur="match_games_E()" value="<?php echo e(old('M6E3',  isset($ge->M6E3) ? $ge->M6E3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Costa Rica</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                        	<div class="col-md-6">
                        		
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6><?php echo e(__('Group F')); ?> </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                                    <thead>
                                                                        <tr>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                     6/17/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Germany</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1F1" onblur="match_games_F()" value="<?php echo e(old('M1F1',  isset($gf->M1F1) ? $gf->M1F1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1F2" onblur="match_games_F()" value="<?php echo e(old('M1F2',  isset($gf->M1F2) ? $gf->M1F2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Mexico</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/18/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Sweden</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2F3" onblur="match_games_F()" value="<?php echo e(old('M2F3',  isset($gf->M2F3) ? $gf->M2F3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2F4" onblur="match_games_F()" value="<?php echo e(old('M2F4',  isset($gf->M2F4) ? $gf->M2F4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">South Korea</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/23/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Germany</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3F1" onblur="match_games_F()" value="<?php echo e(old('M3F1',  isset($gf->M3F1) ? $gf->M3F1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3F3" onblur="match_games_F()" value="<?php echo e(old('M3F3',  isset($gf->M3F3) ? $gf->M3F3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Sweden</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/23/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">South Korea</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4F4" onblur="match_games_F()" value="<?php echo e(old('M4F4',  isset($gf->M4F4) ? $gf->M4F4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4F2" onblur="match_games_F()" value="<?php echo e(old('M4F2',  isset($gf->M4F2) ? $gf->M4F2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Mexico</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">South Korea</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5F4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5F4" onblur="match_games_F()" value="<?php echo e(old('M5F4',  isset($gf->M5F4) ? $gf->M5F4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5F1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5F1" onblur="match_games_F()" value="<?php echo e(old('M5F1',  isset($gf->M5F1) ? $gf->M5F1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Germany</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/27/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Mexico</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6F2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6F2" onblur="match_games_F()" value="<?php echo e(old('M6F2',  isset($gf->M6F2) ? $gf->M6F2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6F3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6F3" onblur="match_games_F()" value="<?php echo e(old('M6F3',  isset($gf->M6F3) ? $gf->M6F3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Sweden</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                    	</div>

                    	<div class="row">
                        	<div class="col-md-6">
                        		
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6><?php echo e(__('Group G')); ?> </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                                    <thead>
                                                                        <tr>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                     6/18/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Belgium</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1G1" onblur="match_games_G()" value="<?php echo e(old('M1G1',  isset($gg->M1G1) ? $gg->M1G1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1G2" onblur="match_games_G()" value="<?php echo e(old('M1G2',  isset($gg->M1G2) ? $gg->M1G2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Panama</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/18/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Tunisia</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2G3" onblur="match_games_G()" value="<?php echo e(old('M2G3',  isset($gg->M2G3) ? $gg->M2G3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2G4" onblur="match_games_G()" value="<?php echo e(old('M2G4',  isset($gg->M2G4) ? $gg->M2G4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">England</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/23/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Belgium</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3G1" onblur="match_games_G()" value="<?php echo e(old('M3G1',  isset($gg->M3G1) ? $gg->M3G1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3G3" onblur="match_games_G()" value="<?php echo e(old('M3G3',  isset($gg->M3G3) ? $gg->M3G3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Tunisia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/24/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">England</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4G4" onblur="match_games_G()" value="<?php echo e(old('M4G4',  isset($gg->M4G4) ? $gg->M4G4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4G2" onblur="match_games_G()" value="<?php echo e(old('M4G2',  isset($gg->M4G2) ? $gg->M4G2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Panama</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">England</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5G4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5G4" onblur="match_games_G()" value="<?php echo e(old('M5G4',  isset($gg->M5G4) ? $gg->M5G4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5G1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5G1" onblur="match_games_G()" value="<?php echo e(old('M5G1',  isset($gg->M5G1) ? $gg->M5G1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Belgium</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Panama</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6G2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6G2" onblur="match_games_G()" value="<?php echo e(old('M6G2',  isset($gg->M6G2) ? $gg->M6G2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6G3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6G3" onblur="match_games_G()" value="<?php echo e(old('M6G3',  isset($gg->M6G3) ? $gg->M6G3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Tunisia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                        	<div class="col-md-6">
                        		
		                        <div class="card">
		                            <div class="card-header-print">
		                                <div class="row">
		                                    <div class="col-md-4">
		                                        <h6><?php echo e(__('Group H')); ?> </h6>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12 table-responsive">
		                                    	<table id="myTable" class="display table_picks-print">
                                                                    <thead>
                                                                        <tr>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="A1-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                     6/19/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Poland</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1H1" onblur="match_games_H()" value="<?php echo e(old('M1H1',  isset($gh->M1H1) ? $gh->M1H1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M1H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M1H2" onblur="match_games_H()" value="<?php echo e(old('M1H2',  isset($gh->M1H2) ? $gh->M1H2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>                                      
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Senegal</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A3-A4">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/19/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Colombia</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2H3" onblur="match_games_H()" value="<?php echo e(old('M2H3',  isset($gh->M2H3) ? $gh->M2H3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M2H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M2H4" onblur="match_games_H()" value="<?php echo e(old('M2H4',  isset($gh->M2H4) ? $gh->M2H4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Japan</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A1-A3">
                                                                            </td>
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/24/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Poland</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3H1" onblur="match_games_H()" value="<?php echo e(old('M3H1',  isset($gh->M3H1) ? $gh->M3H1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M3H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M3H3" onblur="match_games_H()" value="<?php echo e(old('M3H3',  isset($gh->M3H3) ? $gh->M3H3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Colombia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A2">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/24/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Japan</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4H4" onblur="match_games_H()" value="<?php echo e(old('M4H4',  isset($gh->M4H4) ? $gh->M4H4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M4H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M4H2" onblur="match_games_H()" value="<?php echo e(old('M4H2',  isset($gh->M4H2) ? $gh->M4H2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Senegal</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A4-A1">
                                                                            <td class="td-date"> 
                                                                                <div class="col-md-12">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Japan</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5H4" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5H4" onblur="match_games_H()" value="<?php echo e(old('M5H4',  isset($gh->M5H4) ? $gh->M5H4 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M5H1" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M5H1" onblur="match_games_H()" value="<?php echo e(old('M5H1',  isset($gh->M5H1) ? $gh->M5H1 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Poland</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="A2-A3">
                                                                            <td class="td-date">
                                                                                <div class="col-md-12">
                                                                                    6/28/2018
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-8 team_left">
                                                                                        <label class="label_team_print">Senegal</label>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6H2" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6H2" onblur="match_games_H()" value="<?php echo e(old('M6H2',  isset($gh->M6H2) ? $gh->M6H2 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="pikcs-print">
                                                                                            <input type="text" readonly name="M6H3" class="form-control" onKeyPress="return soloNumeros(event)" maxlength="2" id="M6H3" onblur="match_games_H()" value="<?php echo e(old('M6H3',  isset($gh->M6H3) ? $gh->M6H3 : null)); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-8 team_right">
                                                                                        <label class="label_team_print">Colombia</label>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        
                                                                    </tbody>
                                                            </table> 
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        	</div>
                    	</div>

                    	<div style="margin-left: 7%;" class="row">
                    		
		                        <div class="card">
		                            
		                        
		                            <div class="card-body-print">
		                                <div class="row">
		                                    <div class="col-md-12">
		                                    	<div class="row">
			                                    	
				                                    <div class="col-md-2 second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6><?php echo e(__('Round of 16')); ?> </h6>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            <div class="card-body-print flagsbody" style="text-align: left; line-height: 50%">
				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 <?php if($winA == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                    
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;">
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

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                <?php if($winB == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 <?php if($winC == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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
				                                                
				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                <?php if($winD == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                    
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 <?php if($winE == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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
				                                                
				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                <?php if($winF == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 <?php if($winG == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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
				                                                
				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                <?php if($winH == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 <?php if($winB == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                <?php if($winA == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 <?php if($winD == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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
				                                                
				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                <?php if($winC == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 <?php if($winF == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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
				                                                
				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                <?php if($winE == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                 <?php if($winH == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 70%;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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
				                                                
				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <table class="display table_second_stage">
				                                                            <tbody>
				                                                                <?php if($winG == null): ?>
				                                                                <tr>
				                                                                    
				                                                                    <td style="width: 50%; height: 30px;"></td>
				                                                                </tr>
				                                                                <?php else: ?>
				                                                                <tr>
				                                                                    <td style="width: 70%;">
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

				                                            </div>
				                                        </div>  
				                                    </div> 

				                                    
				                                    <div class="col-md-2 quarters second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6><?php echo e(__('Quarter-finals')); ?> </h6>
				                                                    </div>
				                                                </div>
				                                            </div>

				                                            <div class="card-body-print">
				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
                                                                        <table class="display table_second_stage">
                                                                            <tbody>
                                                                                 <?php if($ss->quarter1 == null): ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;"></td>
                                                                                    
                                                                                </tr>
                                                                                <?php else: ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" >
                                                                                                <label><?php echo e($ss->quarter1->team_name); ?></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
                                                                       
				                                                    </div>
				                                                </div>

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
                                                                        <table class="display table_second_stage">
                                                                            <tbody>
                                                                                 <?php if($ss->quarter2 == null): ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;"></td>
                                                                                    
                                                                                </tr>
                                                                                <?php else: ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" >
                                                                                                <label><label><?php echo e($ss->quarter2->team_name); ?></label></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
				                                                        
				                                                    </div>
				                                                </div>


				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
                                                                        <table class="display table_second_stage">
                                                                            <tbody>
                                                                                 <?php if($ss->quarter3 == null): ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;"></td>
                                                                                    
                                                                                </tr>
                                                                                <?php else: ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" >
                                                                                                <label><?php echo e($ss->quarter3->team_name); ?></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
				                                                    </div>
				                                                </div>

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
                                                                        <table class="display table_second_stage">
                                                                            <tbody>
                                                                                 <?php if($ss->quarter4 == null): ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;"></td>
                                                                                    
                                                                                </tr>
                                                                                <?php else: ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" >
                                                                                                <label><?php echo e($ss->quarter4->team_name); ?></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
				                                                        
				                                                    </div>
				                                                </div>

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
                                                                        <table class="display table_second_stage">
                                                                            <tbody>
                                                                                 <?php if($ss->quarter5 == null): ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;"></td>
                                                                                    
                                                                                </tr>
                                                                                <?php else: ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" >
                                                                                                <label><?php echo e($ss->quarter5->team_name); ?></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
				                                                        
				                                                    </div>
				                                                </div>

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
                                                                        <table class="display table_second_stage">
                                                                            <tbody>
                                                                                 <?php if($ss->quarter6 == null): ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;"></td>
                                                                                    
                                                                                </tr>
                                                                                <?php else: ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" >
                                                                                                <label><?php echo e($ss->quarter6->team_name); ?></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
				                                                    </div>
				                                                </div>

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
                                                                        <table class="display table_second_stage">
                                                                            <tbody>
                                                                                 <?php if($ss->quarter7 == null): ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;"></td>
                                                                                    
                                                                                </tr>
                                                                                <?php else: ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" >
                                                                                                <label><?php echo e($ss->quarter7->team_name); ?></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
				                                                    </div>
				                                                </div>

				                                                
				                                                <div class="row">
				                                                    <div class="col-md-12">
                                                                        <table class="display table_second_stage">
                                                                            <tbody>
                                                                                 <?php if($ss->quarter8 == null): ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;"></td>
                                                                                    
                                                                                </tr>
                                                                                <?php else: ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" >
                                                                                                <label><?php echo e($ss->quarter8->team_name); ?></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
				                                                    </div>
				                                                </div>

				                                            </div>
				                                        </div>  
				                                    </div> 

				                                    
				                                    <div class="col-md-2 second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6><?php echo e(__('Semi-finals')); ?> </h6>
				                                                    </div>
				                                                </div>
				                                            </div>

				                                            <div class="card-body-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        

                                                                        <table class="display table_second_stage">
                                                                            <tbody>
                                                                                 <?php if($ss->semi1 == null): ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;"></td>
                                                                                    
                                                                                </tr>
                                                                                <?php else: ?>
                                                                                <tr>
                                                                                    
                                                                                    <td style="width: 70%;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" >
                                                                                                <?php echo e($ss->semi1->team_name); ?>

                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
				                                                        

				                                                        
				                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <table class="display table_second_stage">
                                                                                    <tbody>
                                                                                       <?php if($ss->semi2 == null): ?>
                                                                                       <tr>

                                                                                        <td style="width: 70%;"></td>

                                                                                    </tr>
                                                                                    <?php else: ?>
                                                                                    <tr>

                                                                                        <td style="width: 70%;">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12" >
                                                                                                    <?php echo e($ss->semi2->team_name); ?>

                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php endif; ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>

				                                                        
				                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <table class="display table_second_stage">
                                                                                    <tbody>
                                                                                     <?php if($ss->semi3 == null): ?>
                                                                                     <tr>

                                                                                        <td style="width: 70%;"></td>

                                                                                    </tr>
                                                                                    <?php else: ?>
                                                                                    <tr>

                                                                                        <td style="width: 70%;">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12" >
                                                                                                    <?php echo e($ss->semi3->team_name); ?>

                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php endif; ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>

				                                                        
				                                                        <div class="row">
				                                                            <div class="col-md-12">
                                                                                <table class="display table_second_stage">
                                                                                    <tbody>
                                                                                     <?php if($ss->semi4 == null): ?>
                                                                                     <tr>

                                                                                        <td style="width: 70%;"></td>

                                                                                    </tr>
                                                                                    <?php else: ?>
                                                                                    <tr>

                                                                                        <td style="width: 70%;">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12" >
                                                                                                    <?php echo e($ss->semi4->team_name); ?>

                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php endif; ?>
                                                                                </tbody>
                                                                            </table>
				                                                            </div>
				                                                        </div>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                        </div>  
				                                    </div> 

				                                    
				                                    <div class="col-md-2 second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6><?php echo e(__('Final')); ?> </h6>
				                                                    </div>
				                                                </div>
				                                            </div>

				                                            <div class="card-body-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <div class="row">
				                                                            <div class="col-md-12">
                                                                                <table class="display table_second_stage">
                                                                                    <tbody>
                                                                                     <?php if($ss->final1 == null): ?>
                                                                                     <tr>

                                                                                        <td style="width: 70%;"></td>

                                                                                    </tr>
                                                                                    <?php else: ?>
                                                                                    <tr>

                                                                                        <td style="width: 70%;">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12" >
                                                                                                    <?php echo e($ss->final1->team_name); ?>

                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php endif; ?>
                                                                                </tbody>
                                                                            </table>
				                                                            </div>
				                                                        </div>

				                                                        
				                                                        <div class="row">
				                                                            <div class="col-md-12">
                                                                                <table class="display table_second_stage">
                                                                                    <tbody>
                                                                                     <?php if($ss->final2 == null): ?>
                                                                                     <tr>
                                                                                        <td style="width: 70%;"></td>
                                                                                    </tr>
                                                                                    <?php else: ?>
                                                                                    <tr>
                                                                                        <td style="width: 70%;">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12" >
                                                                                                    <?php echo e($ss->final2->team_name); ?>

                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php endif; ?>
                                                                                </tbody>
                                                                            </table>
				                                                                
				                                                            </div>
				                                                        </div>
				                                                    </div>
				                                                </div>
				                                            </div>
				                                            
				                                        </div>  
				                                    </div> 

				                                    <div class="col-md-2 second_sta">
				                                        <div class="card">
				                                            <div class="card-header-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        <h6>Champion</h6>
				                                                    </div>
				                                                </div>
				                                            </div>

				                                            <div class="card-body-print">
				                                                <div class="row">
				                                                    <div class="col-md-12">
				                                                        
				                                                        <div class="row">
				                                                            <div class="col-md-12">
				                                                                <table class="display table_second_stage">
                                                                                    <tbody>
                                                                                     <?php if($ss->winner1 == null): ?>
                                                                                     <tr>
                                                                                        <td style="width: 70%;"></td>
                                                                                    </tr>
                                                                                    <?php else: ?>
                                                                                    <tr>
                                                                                        <td style="width: 70%;">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12" >
                                                                                                    <?php echo e($ss->winner1->team_name); ?>

                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php endif; ?>
                                                                                </tbody>
                                                                            </table>
				                                                            </div>
				                                                        </div>


				                                                    </div>
				                                                </div>
				                                            </div>
				                                            
				                                        </div>  
				                                    </div>
			                                    </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                    	</div>
                    </div>

                   
                </div>
            </div>
        </div>
        <br>
     </div>
<?php $__env->stopSection(); ?>


 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"> </script>
<script src="<?php echo e(URL::asset('js/app.js')); ?>"></script>
<script src="<?php echo e(URL::asset('scripts/countdown.js')); ?>"></script>
<?php echo $__env->make('admin.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>