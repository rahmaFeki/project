

<?php $__env->startSection('content'); ?>
<div class="auth option2">
    <div class="auth_left">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <a class="header-brand" href="index.html"></a>
                    <div class="card-title mt-3">Se Connecter A votre Compte</div>
                
                </div>
				<?php if(session()->has('status')): ?>
				  <div class="text-center">
				    <div class="form-group">
				  <span style="color:red;" id="error"> Mot de pass ou nom utilisateur incorrecte !</span>
				   </div>
				 
				  </div>
				  <?php endif; ?>
					  <form  name="form1" method="POST" action="<?php echo e(route('login.custom')); ?>" id="loginForm">
		   <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="username" id="username" placeholder="Entrer nom utilisateur">
                </div>
				
                <div class="form-group">
                 
                    <input type="password" id="password" class="form-control"  placeholder="Mot de pass" name="password">
					
                </div>
				 
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block" title="">Se connecter
                   
                </div>
				</form>
            </div>
        </div>        
    </div>
</div>


</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\msm\resources\views/user.blade.php ENDPATH**/ ?>