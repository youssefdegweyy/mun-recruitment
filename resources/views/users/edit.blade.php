@extends('layouts.main')
@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            @include('layouts.navigation')
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <div class="card-header py-3">
                                    <div class="card-title">
											<span class="card-icon">
												<span class="svg-icon svg-icon-md svg-icon-primary">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<rect fill="#000000" opacity="0.3" x="12" y="4" width="3"
                                                                  height="13" rx="1.5"/>
															<rect fill="#000000" opacity="0.3" x="7" y="9" width="3"
                                                                  height="8" rx="1.5"/>
															<path
                                                                d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                                fill="#000000" fill-rule="nonzero"/>
															<rect fill="#000000" opacity="0.3" x="17" y="11" width="3"
                                                                  height="6" rx="1.5"/>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
											</span>
                                        <h3 class="card-label">Edit User - {{ $user->name }}</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card card-custom">
                                        <div class="card card-custom">
                                            <!--begin::Form-->
                                            <form class="form" method="POST"
                                                  action="{{ route('users.update', $user) }}">
                                                @csrf
                                                @method('PATCH')
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <div></div>
                                                        <input class="form-control" name="name" type="text"
                                                               placeholder="User name" value="{{ $user->name }}"
                                                               autocomplete="off"/>
                                                        @if ($errors->has('name'))
                                                            <span style="color:red"><b> {{ $errors->first('name') }}</b></span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <div></div>
                                                        <input class="form-control" name="email" type="text"
                                                               placeholder="User Email"
                                                               value="{{ $user->email }}"
                                                               autocomplete="off"/>
                                                        @if ($errors->has('email'))
                                                            <span
                                                                style="color:red"><b> {{ $errors->first('email') }}</b></span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label>User Role</label>
                                                        <div></div>
                                                        <select class="form-control selectpicker"
                                                                data-size="7"
                                                                data-live-search="true"
                                                                name="role">
                                                            <option disabled selected value="0">Select Role
                                                            </option>
                                                            <option
                                                                value="1" {{ $user->role == '1' ? 'selected' : '' }}>
                                                                Booth User
                                                            </option>
                                                            <option
                                                                value="2" {{ $user->role == '2' ? 'selected' : '' }}>
                                                                Interviews User
                                                            </option>
                                                        </select>
                                                        @if ($errors->has('role'))
                                                            <span
                                                                style="color:red"><b> {{ $errors->first('role') }}</b></span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label>User Committee/Council</label>
                                                        <div></div>
                                                        <select class="form-control selectpicker"
                                                                data-size="7"
                                                                data-live-search="true"
                                                                name="category">
                                                            <option disabled selected value="0">Please Select</option>
                                                            @foreach($categories as $category)
                                                                <option
                                                                    value="{{ $category->id }}" {{ $user->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('category'))
                                                            <span
                                                                style="color:red"><b> {{ $errors->first('category') }}</b></span>
                                                        @endif
                                                    </div>


                                                    <div class="form-group">
                                                        <label>New Password (Optional)</label>
                                                        <div></div>
                                                        <input class="form-control" name="password" type="password"
                                                               placeholder="Leave blank if no changes"/>
                                                        @if ($errors->has('password'))
                                                            <span
                                                                style="color:red"><b> {{ $errors->first('password') }}</b></span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label>New Password Confirmation</label>
                                                        <div></div>
                                                        <input class="form-control" name="password_confirmation"
                                                               type="password"
                                                               placeholder="Leave blank if no changes"/>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                    <a href="{{ url('/users') }}"
                                                       class="btn btn-secondary">Cancel</a>
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                @include('layouts.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
@endsection
