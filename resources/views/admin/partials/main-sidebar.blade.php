
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		<!-- <div class="help-bt">
			<a href="tel:108" class="d-flex align-items-center">
				<div class="bg-danger rounded10 h-50 w-50 l-h-50 text-center me-15">
					<i data-feather="mic"></i>
				</div>
				<h4 class="mb-0">Emergency<br>help</h4>
			</a>
		</div> -->
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">			
				<!-- <li class="treeview">
				  <a href="{{route('dashboard')}}">
					<i data-feather="monitor"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
					<li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 2</a></li>
					<li><a href="index3.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 3</a></li>
					<li><a href="index4.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 4</a></li>
				  </ul>
				</li> -->
				<li>
				  <a href="{{route('dashboard')}}">
					<i data-feather="calendar"></i>
					<span>Dashboard</span>
				  </a>
				</li>	<!-- 
				create masters.................................. -->
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>User Managements</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('users.*'))?'active':''?>"><a href="{{route('users.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.user_management') }}</a></li>					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.attendance_management') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('attendance.*'))?'active':''?>"><a href="{{ route('attendance.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.attendance_management') }}</a></li>					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.banner_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('banners.*'))?'active':''?>"><a href="{{route('banners.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.banner_management') }}</a></li>					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.service_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('services.*'))?'active':''?>"><a href="{{route('services.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.service_managements') }}</a></li>					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.technology_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('technologies.*'))?'active':''?>"><a href="{{route('technologies.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.technology_managements') }}</a></li>					
				  </ul>
				</li>  
				
				
				
				
				
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.project_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('project.*'))?'active':''?>"><a href="{{route('project.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.project_managements') }}</a></li>					
				  </ul>
				</li>  
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.category_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('categories.*'))?'active':''?>"><a href="{{route('categories.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.category_managements') }}</a></li>					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.industry_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('industry.*'))?'active':''?>"><a href="{{route('industry.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.industry_managements') }}</a></li>					
				  </ul>
				</li>
				
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.page_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('pages.*'))?'active':''?>"><a href="{{route('pages.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.page_managements') }}</a></li>					
				  </ul>
				</li>  
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.team_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('teams.*'))?'active':''?>"><a href="{{route('teams.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.team_management') }}</a></li>					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.testimonial_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('testimonials.*'))?'active':''?>"><a href="{{route('testimonials.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.testimonial_managements') }}</a></li>					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.contectus_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('contect-us.*'))?'active':''?>"><a href="{{route('contect-us.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.contectus_managements') }}</a></li>					
				  </ul>
				</li>  
				<!--   -->
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.faq_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('faqs.*'))?'active':''?>"><a href="{{route('faqs.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.faq_managements') }}</a></li>					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="monitor"></i>
					<span>{{ __('messages.whyChoose_managements') }}</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="<?=!empty(request()->routeIs('whyChooses.*'))?'active':''?>"><a href="{{route('whyChooses.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>{{ __('messages.whyChoose_management') }}</a></li>					
				  </ul>
				</li>    
			  </ul>
			  
			  <div class="sidebar-widgets">
				  <!-- <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="{{asset('images/custom-17.svg')}}" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">Make an Appointments</h4>
						<a href="#" class="py-10 fs-14 mb-0 text-primary">
							Best Helth Care here <i class="mdi mdi-arrow-right"></i>
						</a>
					</div>
				  </div> -->
				<div class="copyright text-center m-25">
					<p><strong class="d-block">eDigillence Admin</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>
