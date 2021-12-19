
<div class="hleft">



</div>
<div class="hright">
<a href="javascript:void(0)" class="nav-link icon right_tab"><i class="fe fe-align-right"></i></a>

</div>
</div>
</div>
    <div id="left-sidebar" class="sidebar">
    <img src="<?php echo e(asset("assetsG/images/logoMSM.png")); ?>" width="450px"
                                                        height="200px" />
        <h5 class="brand-name"><a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <ul class="nav nav-tabs">
   
            <li class="nav-item"><a class="nav-link"  >
			</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
               
                    <?php if(Auth::user()!=null): ?>       <?php if(Auth::user()->type ==1): ?>     <li><a href="<?php echo e(route('register-user')); ?>"><i class="fa fa-user-circle-o"></i><span>Gestion Des Utilisateurs</span></a></li> <?php endif; ?> <?php endif; ?>
                      
                    <li><a href="<?php echo e(route('contact.list')); ?>"><i class="fa fa-phone"></i><span>Liste des Numèros</span></a></li>
                    <li><a href="<?php echo e(route('entreprise.edit')); ?>"><i class="fa fa-list-ul"></i><span>Mise à jour entreprise</span></a></li>
						 <li><a href="<?php echo e(route('missions.list')); ?>"><i class="fa fa-bullhorn"></i><span>Nos Missions</span></a></li>
						  <li><a href="<?php echo e(route('choix.list')); ?>"><i class="fa fa-book"></i><span>Pourquoi Nous-choisir?</span></a></li>
                          <li><a href="<?php echo e(route('gallery.list')); ?>"><i class="fa fa-book"></i><span>Gallery</span></a></li>
                          <li><a href="<?php echo e(route('sections.list')); ?>"><i class="fe fe-settings"></i><span>Ajouter Section</span></a></li>
						
					
                   
                    </ul>
                </nav>
            </div>
     
        </div>
    </div><?php /**PATH C:\xampp1\htdocs\msm\resources\views/layouts/leftside.blade.php ENDPATH**/ ?>