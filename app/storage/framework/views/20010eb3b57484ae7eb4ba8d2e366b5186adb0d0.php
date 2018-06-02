<?php $__env->startSection('content'); ?>
<div class="container" style="padding-bottom: 16.5rem!important;">
     <div class="row">
        <div class="col-md-12 title_polla">
            <img src="<?php echo e(asset('img/logo.png')); ?>" style="height: 205px;">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4><?php echo e(__('Recordar Contraseña')); ?></h4></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    <?php echo e(__('Enviar Contraseña')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>