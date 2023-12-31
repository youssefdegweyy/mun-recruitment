<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <!--begin::Logo-->
    <a href="{{url('/dashboard')}}">
        <img alt="Logo" src="{{ asset('assets/media/logos/logo-light.png') }}"/>
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                             version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24"/>
								<path
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3"/>
								<path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero"/>
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>
        </button>
    </div>
    <!--end::Toolbar-->
</div>

<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{url('/dashboard')}}" class="brand-logo">
            <img alt="Logo" src="{{asset('assets/media/logos/logo-light.png')}}"/>
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24"/>
										<path
                                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)"/>
										<path
                                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)"/>
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
             data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{url('/dashboard')}}" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"/>
													<path
                                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                        fill="#000000" fill-rule="nonzero"/>
													<path
                                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                        fill="#000000" opacity="0.3"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                        <span class="menu-text">Home Page</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Navigation</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                @if(Auth::user()->role == \App\Models\User::SUPER_ADMIM)
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path
            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
            fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Committees/Councils</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Committees/Councils</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/categories/create')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/categories')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path
            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
            fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Users</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Users</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/users/create')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/users')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M21,10.6631844 L21,19 C21,20.1045695 20.1045695,21 19,21 L9,21 C7.8954305,21 7,20.1045695 7,19 L7,10.6631844 C5.81752633,10.1014525 5,8.89619798 5,7.5 C5,5.56700338 6.56700338,4 8.5,4 L19.5,4 C21.4329966,4 23,5.56700338 23,7.5 C23,8.89619798 22.1824737,10.1014525 21,10.6631844 Z"
            fill="#000000" opacity="0.3"/>
        <path
            d="M17,10.6631844 L17,19 C17,20.1045695 16.1045695,21 15,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,10.6631844 C1.81752633,10.1014525 1,8.89619798 1,7.5 C1,5.56700338 2.56700338,4 4.5,4 L15.5,4 C17.4329966,4 19,5.56700338 19,7.5 C19,8.89619798 18.1824737,10.1014525 17,10.6631844 Z"
            fill="#000000"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Applicants</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Applicants</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/applicants/create')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/applicants')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M21,10.6631844 L21,19 C21,20.1045695 20.1045695,21 19,21 L9,21 C7.8954305,21 7,20.1045695 7,19 L7,10.6631844 C5.81752633,10.1014525 5,8.89619798 5,7.5 C5,5.56700338 6.56700338,4 8.5,4 L19.5,4 C21.4329966,4 23,5.56700338 23,7.5 C23,8.89619798 22.1824737,10.1014525 21,10.6631844 Z"
            fill="#000000" opacity="0.3"/>
        <path
            d="M17,10.6631844 L17,19 C17,20.1045695 16.1045695,21 15,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,10.6631844 C1.81752633,10.1014525 1,8.89619798 1,7.5 C1,5.56700338 2.56700338,4 4.5,4 L15.5,4 C17.4329966,4 19,5.56700338 19,7.5 C19,8.89619798 18.1824737,10.1014525 17,10.6631844 Z"
            fill="#000000"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Timings</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Timings</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/interviews-time/create')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/interviews-time')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Book-open.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path
            d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z"
            fill="#000000"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Questions</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Questions</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/questions/create')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/questions')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M21,10.6631844 L21,19 C21,20.1045695 20.1045695,21 19,21 L9,21 C7.8954305,21 7,20.1045695 7,19 L7,10.6631844 C5.81752633,10.1014525 5,8.89619798 5,7.5 C5,5.56700338 6.56700338,4 8.5,4 L19.5,4 C21.4329966,4 23,5.56700338 23,7.5 C23,8.89619798 22.1824737,10.1014525 21,10.6631844 Z"
            fill="#000000" opacity="0.3"/>
        <path
            d="M17,10.6631844 L17,19 C17,20.1045695 16.1045695,21 15,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,10.6631844 C1.81752633,10.1014525 1,8.89619798 1,7.5 C1,5.56700338 2.56700338,4 4.5,4 L15.5,4 C17.4329966,4 19,5.56700338 19,7.5 C19,8.89619798 18.1824737,10.1014525 17,10.6631844 Z"
            fill="#000000"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Interviews</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Interviews</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/answers')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                @elseif(\Illuminate\Support\Facades\Auth::user()->role == \App\Models\User::BOOTH)
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M21,10.6631844 L21,19 C21,20.1045695 20.1045695,21 19,21 L9,21 C7.8954305,21 7,20.1045695 7,19 L7,10.6631844 C5.81752633,10.1014525 5,8.89619798 5,7.5 C5,5.56700338 6.56700338,4 8.5,4 L19.5,4 C21.4329966,4 23,5.56700338 23,7.5 C23,8.89619798 22.1824737,10.1014525 21,10.6631844 Z"
            fill="#000000" opacity="0.3"/>
        <path
            d="M17,10.6631844 L17,19 C17,20.1045695 16.1045695,21 15,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,10.6631844 C1.81752633,10.1014525 1,8.89619798 1,7.5 C1,5.56700338 2.56700338,4 4.5,4 L15.5,4 C17.4329966,4 19,5.56700338 19,7.5 C19,8.89619798 18.1824737,10.1014525 17,10.6631844 Z"
            fill="#000000"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Applicants</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Applicants</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/applicants/create')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/applicants')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                @elseif(\Illuminate\Support\Facades\Auth::user()->role == \App\Models\User::INTERVIEWS)

                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M21,10.6631844 L21,19 C21,20.1045695 20.1045695,21 19,21 L9,21 C7.8954305,21 7,20.1045695 7,19 L7,10.6631844 C5.81752633,10.1014525 5,8.89619798 5,7.5 C5,5.56700338 6.56700338,4 8.5,4 L19.5,4 C21.4329966,4 23,5.56700338 23,7.5 C23,8.89619798 22.1824737,10.1014525 21,10.6631844 Z"
            fill="#000000" opacity="0.3"/>
        <path
            d="M17,10.6631844 L17,19 C17,20.1045695 16.1045695,21 15,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,10.6631844 C1.81752633,10.1014525 1,8.89619798 1,7.5 C1,5.56700338 2.56700338,4 4.5,4 L15.5,4 C17.4329966,4 19,5.56700338 19,7.5 C19,8.89619798 18.1824737,10.1014525 17,10.6631844 Z"
            fill="#000000"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Timings</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Timings</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/interviews-time/create')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/interviews-time')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Book-open.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path
            d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z"
            fill="#000000"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Questions</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Questions</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/questions/create')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/questions')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M21,10.6631844 L21,19 C21,20.1045695 20.1045695,21 19,21 L9,21 C7.8954305,21 7,20.1045695 7,19 L7,10.6631844 C5.81752633,10.1014525 5,8.89619798 5,7.5 C5,5.56700338 6.56700338,4 8.5,4 L19.5,4 C21.4329966,4 23,5.56700338 23,7.5 C23,8.89619798 22.1824737,10.1014525 21,10.6631844 Z"
            fill="#000000" opacity="0.3"/>
        <path
            d="M17,10.6631844 L17,19 C17,20.1045695 16.1045695,21 15,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,10.6631844 C1.81752633,10.1014525 1,8.89619798 1,7.5 C1,5.56700338 2.56700338,4 4.5,4 L15.5,4 C17.4329966,4 19,5.56700338 19,7.5 C19,8.89619798 18.1824737,10.1014525 17,10.6631844 Z"
            fill="#000000"/>
    </g>
</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-text">Interviews</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Interviews</span>
												</span>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/answers/create')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('/answers')}}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{--                @elseif(\Illuminate\Support\Facades\Auth::user()->role == \App\Models\User::DIRECTOR_GENERAL)--}}

                    {{--                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">--}}
                    {{--                        <a href="javascript:;" class="menu-link menu-toggle">--}}
                    {{--										<span class="svg-icon menu-icon">--}}
                    {{--											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->--}}
                    {{--											<svg xmlns="http://www.w3.org/2000/svg"--}}
                    {{--                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                    {{--                                                 viewBox="0 0 24 24" version="1.1">--}}
                    {{--    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                    {{--        <rect x="0" y="0" width="24" height="24"/>--}}
                    {{--        <path--}}
                    {{--            d="M21,10.6631844 L21,19 C21,20.1045695 20.1045695,21 19,21 L9,21 C7.8954305,21 7,20.1045695 7,19 L7,10.6631844 C5.81752633,10.1014525 5,8.89619798 5,7.5 C5,5.56700338 6.56700338,4 8.5,4 L19.5,4 C21.4329966,4 23,5.56700338 23,7.5 C23,8.89619798 22.1824737,10.1014525 21,10.6631844 Z"--}}
                    {{--            fill="#000000" opacity="0.3"/>--}}
                    {{--        <path--}}
                    {{--            d="M17,10.6631844 L17,19 C17,20.1045695 16.1045695,21 15,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,10.6631844 C1.81752633,10.1014525 1,8.89619798 1,7.5 C1,5.56700338 2.56700338,4 4.5,4 L15.5,4 C17.4329966,4 19,5.56700338 19,7.5 C19,8.89619798 18.1824737,10.1014525 17,10.6631844 Z"--}}
                    {{--            fill="#000000"/>--}}
                    {{--    </g>--}}
                    {{--</svg>--}}
                    {{--                                            <!--end::Svg Icon-->--}}
                    {{--										</span>--}}
                    {{--                            <span class="menu-text">Applicants</span>--}}
                    {{--                            <i class="menu-arrow"></i>--}}
                    {{--                        </a>--}}
                    {{--                        <div class="menu-submenu">--}}
                    {{--                            <i class="menu-arrow"></i>--}}
                    {{--                            <ul class="menu-subnav">--}}
                    {{--                                <li class="menu-item menu-item-parent" aria-haspopup="true">--}}
                    {{--												<span class="menu-link">--}}
                    {{--													<span class="menu-text">Applicants</span>--}}
                    {{--												</span>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="menu-item" aria-haspopup="true">--}}
                    {{--                                    <a href="{{url('/applicants/create')}}" class="menu-link">--}}
                    {{--                                        <i class="menu-bullet menu-bullet-dot">--}}
                    {{--                                            <span></span>--}}
                    {{--                                        </i>--}}
                    {{--                                        <span class="menu-text">Add</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="menu-item" aria-haspopup="true">--}}
                    {{--                                    <a href="{{url('/applicants')}}" class="menu-link">--}}
                    {{--                                        <i class="menu-bullet menu-bullet-dot">--}}
                    {{--                                            <span></span>--}}
                    {{--                                        </i>--}}
                    {{--                                        <span class="menu-text">View</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

                    {{--                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">--}}
                    {{--                        <a href="javascript:;" class="menu-link menu-toggle">--}}
                    {{--										<span class="svg-icon menu-icon">--}}
                    {{--											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->--}}
                    {{--											<svg xmlns="http://www.w3.org/2000/svg"--}}
                    {{--                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                    {{--                                                 viewBox="0 0 24 24" version="1.1">--}}
                    {{--    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                    {{--        <rect x="0" y="0" width="24" height="24"/>--}}
                    {{--        <path--}}
                    {{--            d="M21,10.6631844 L21,19 C21,20.1045695 20.1045695,21 19,21 L9,21 C7.8954305,21 7,20.1045695 7,19 L7,10.6631844 C5.81752633,10.1014525 5,8.89619798 5,7.5 C5,5.56700338 6.56700338,4 8.5,4 L19.5,4 C21.4329966,4 23,5.56700338 23,7.5 C23,8.89619798 22.1824737,10.1014525 21,10.6631844 Z"--}}
                    {{--            fill="#000000" opacity="0.3"/>--}}
                    {{--        <path--}}
                    {{--            d="M17,10.6631844 L17,19 C17,20.1045695 16.1045695,21 15,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,10.6631844 C1.81752633,10.1014525 1,8.89619798 1,7.5 C1,5.56700338 2.56700338,4 4.5,4 L15.5,4 C17.4329966,4 19,5.56700338 19,7.5 C19,8.89619798 18.1824737,10.1014525 17,10.6631844 Z"--}}
                    {{--            fill="#000000"/>--}}
                    {{--    </g>--}}
                    {{--</svg>--}}
                    {{--                                            <!--end::Svg Icon-->--}}
                    {{--										</span>--}}
                    {{--                            <span class="menu-text">Interviews Timings</span>--}}
                    {{--                            <i class="menu-arrow"></i>--}}
                    {{--                        </a>--}}
                    {{--                        <div class="menu-submenu">--}}
                    {{--                            <i class="menu-arrow"></i>--}}
                    {{--                            <ul class="menu-subnav">--}}
                    {{--                                <li class="menu-item menu-item-parent" aria-haspopup="true">--}}
                    {{--												<span class="menu-link">--}}
                    {{--													<span class="menu-text">Interviews Timings</span>--}}
                    {{--												</span>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="menu-item" aria-haspopup="true">--}}
                    {{--                                    <a href="{{url('/interviews/create')}}" class="menu-link">--}}
                    {{--                                        <i class="menu-bullet menu-bullet-dot">--}}
                    {{--                                            <span></span>--}}
                    {{--                                        </i>--}}
                    {{--                                        <span class="menu-text">Add</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="menu-item" aria-haspopup="true">--}}
                    {{--                                    <a href="{{url('/interviews')}}" class="menu-link">--}}
                    {{--                                        <i class="menu-bullet menu-bullet-dot">--}}
                    {{--                                            <span></span>--}}
                    {{--                                        </i>--}}
                    {{--                                        <span class="menu-text">View</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}
                @endif
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>

<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <div class="topbar-item">
                <div
                    class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                    id="kt_quick_user_toggle">
                                <span
                                    class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ Auth::user()->name }}</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span
                                                class="symbol-label font-size-h5 font-weight-bold">{{ substr(Auth::user()->name, 0, 1) }}</span>
										</span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">User Profile</h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label"
                     style="background-image:url({{ asset('assets/media/default.png') }})"></div>
            </div>
            <div class="d-flex flex-column">
                <a class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Auth::user()->name }}</a>
                <div class="navi mt-2">
                    <a class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path
                                                        d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                        fill="#000000"/>
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
									</span>
									<span
                                        class="navi-text text-muted text-hover-primary">{{ Auth::user()->email }}</span>
								</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                        this.closest('form').submit();" role="button">
                            Logout
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content-->
</div>
<!--begin::Aside-->

