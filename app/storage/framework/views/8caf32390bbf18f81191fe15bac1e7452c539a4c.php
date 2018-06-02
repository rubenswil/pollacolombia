<?php $__env->startSection('pagetitle'); ?>
    Register
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 title_polla">
            <img src="<?php echo e(asset('img/logo.png')); ?>" style="height: 205px;">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h4><?php echo e(__('Registro')); ?></h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('userregistration')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus placeholder="Nombres">

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="lastname" type="text" class="form-control<?php echo e($errors->has('lastname') ? ' is-invalid' : ''); ?>" name="lastname" value="<?php echo e(old('lastname')); ?>" required placeholder="Apellidos">

                                <?php if($errors->has('lastname')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="nickname" type="text" class="form-control<?php echo e($errors->has('nickname') ? ' is-invalid' : ''); ?>" name="nickname" value="<?php echo e(old('nickname')); ?>" required placeholder="Nickname">

                                <?php if($errors->has('nickname')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('nickname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>    

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required placeholder="Contraseña">
                                
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
    
                        

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required placeholder="E-Mail">
                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email-confirm" type="email" class="form-control" name="email_confirmation" required placeholder="Repetir E-Mail">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="city" type="text" class="form-control<?php echo e($errors->has('city') ? ' is-invalid' : ''); ?>" name="city" value="<?php echo e(old('city')); ?>" required placeholder="Ciudad">
                                    <?php if($errors->has('city')): ?>
                                        <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('city')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="cellphone" type="text" class="form-control<?php echo e($errors->has('cellphone') ? ' is-invalid' : ''); ?>" name="cellphone" value="<?php echo e(old('cellphone')); ?>" required placeholder="Celular">
                                    <?php if($errors->has('cellphone')): ?>
                                        <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('cellphone')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">                                
                            <div class="col-md-12">
                                <input id="referredby" type="text" class="form-control<?php echo e($errors->has('referredby') ? ' is-invalid' : ''); ?>" name="referredby" value="<?php echo e(old('referredby')); ?>" placeholder="Refererido por">
                                    <?php if($errors->has('referredby')): ?>
                                        <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('referredby')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                            </div>
                        </div>

                        

                    
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    <?php echo e(__('Registrar')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="" class="btn btn-primary" onclick="window.location='<?php echo e(route('login')); ?>'" style="width: 100%;">
                                    <?php echo e(__('Entrar')); ?>

                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script src="<?php echo e(URL::asset('js/app.js')); ?>"></script>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('addjs'); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>