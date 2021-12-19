  <div class="section-body" id="page_top">
            <div class="container-fluid" >
                <div class="page-header">
                 
                    <div class=" right " style="margin-left:70%;"> 
                       <div ></div>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" > <i class="dropdown-icon fe fe-user"></i> <?php if(Auth::user()!=null): ?>   <?php echo e(Auth::user()->username); ?> <?php endif; ?></a>
                
                            </div>
							<div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
													 <i class="dropdown-icon fe fe-log-out"></i>
                                        <?php echo e(__('Déconnecter')); ?>

                                    </a>

                                
                         
                            </div>
                           <form id="logout-form" action="<?php echo e(route('signout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form></a>
                        </div>
                    </div>
                </div>
            </div><?php /**PATH C:\xampp1\htdocs\msm\resources\views/layouts/header.blade.php ENDPATH**/ ?>