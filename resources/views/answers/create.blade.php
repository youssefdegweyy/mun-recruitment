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
                                        <h3 class="card-label">Add Interview</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card card-custom">
                                        <div class="card card-custom">
                                            <!--begin::Form-->
                                            <form class="form" method="POST" action="{{ route('answers.store') }}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <div></div>
                                                        <input class="form-control" name="name" type="text"
                                                               placeholder="Full Name"
                                                               value="{{ old('name') }}"
                                                               autocomplete="off" required/>
                                                        @if ($errors->has('name'))
                                                            <span
                                                                style="color:red"><b> {{ $errors->first('name') }}</b></span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label>University ID</label>
                                                        <div></div>
                                                        <input class="form-control" name="university_id" type="number"
                                                               placeholder="University ID, example: '1920431'"
                                                               value="{{ old('university_id') }}"
                                                               autocomplete="off" required/>
                                                        @if ($errors->has('university_id'))
                                                            <span
                                                                style="color:red"><b> {{ $errors->first('university_id') }}</b></span>
                                                        @endif
                                                    </div>

                                                    @foreach($questions as $question)
                                                        <div class="form-group">
                                                            <label>{{ $loop->index+1 . '. ' . $question->question }}</label>
                                                            <div></div>
                                                            <input class="form-control"
                                                                   name="answers[{{ $loop->index+1 }}]"
                                                                   type="text"
                                                                   placeholder="Answer {{ $loop->index+1 }}"
                                                                   autocomplete="off"
                                                                   value="{{ old('answers.'.$loop->index+1) }}"/>
                                                        </div>
                                                    @endforeach
                                                    <div class="form-group">
                                                        <label>Comment</label>
                                                        <div></div>
                                                        <input class="form-control" name="comment" type="text"
                                                               placeholder="Final Comment"
                                                               value="{{ old('comment') }}"
                                                               autocomplete="off" required/>
                                                        @if ($errors->has('comment'))
                                                            <span
                                                                style="color:red"><b> {{ $errors->first('comment') }}</b></span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Final Grade</label>
                                                        <div></div>
                                                        <select class="form-control" name="grade" required>
                                                            <option disabled selected value="0">Please Select</option>
                                                            <option
                                                                value="A" {{ old('grade') == "A" ? 'selected' : '' }}>A
                                                            </option>
                                                            <option
                                                                value="B" {{ old('grade') == "B" ? 'selected' : '' }}>B
                                                            </option>
                                                            <option
                                                                value="C" {{ old('grade') == "C" ? 'selected' : '' }}>C
                                                            </option>
                                                            <option
                                                                value="D" {{ old('grade') == "D" ? 'selected' : '' }}>D
                                                            </option>
                                                        </select>
                                                        @if ($errors->has('grade'))
                                                            <span
                                                                style="color:red"><b> {{ $errors->first('grade') }}</b></span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <div></div>
                                                        <div class="custom-file">
                                                            <input type="file" name="image" class="custom-file-input"
                                                                   id="customFile"/>
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                file</label>
                                                        </div>
                                                        @if ($errors->has('image'))
                                                            <span
                                                                style="color:red"><b> {{ $errors->first('image') }}</b></span>
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                    <a href="{{ url('/answers') }}"
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
