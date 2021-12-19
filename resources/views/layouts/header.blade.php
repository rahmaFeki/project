  <div class="section-body" id="page_top">
            <div class="container-fluid" >
                <div class="page-header">
                 
                    <div class=" right " style="margin-left:70%;"> 
                       <div ></div>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" > <i class="dropdown-icon fe fe-user"></i> @if(Auth::user()!=null)   {{ Auth::user()->username}} @endif</a>
                
                            </div>
							<div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
													 <i class="dropdown-icon fe fe-log-out"></i>
                                        {{ __('Déconnecter') }}
                                    </a>

                                
                         
                            </div>
                           <form id="logout-form" action="{{ route('signout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></a>
                        </div>
                    </div>
                </div>
            </div>