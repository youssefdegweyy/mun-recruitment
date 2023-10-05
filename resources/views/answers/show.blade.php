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
                                        <h3 class="card-label">View Interview - {{ $interview->name }}</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card card-custom">
                                        <div class="card card-custom">
                                            <!--begin::Form-->
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <div></div>
                                                    <input class="form-control" name="name" type="text"
                                                           value="{{ $interview->name }}"
                                                           autocomplete="off" disabled/>
                                                </div>

                                                <div class="form-group">
                                                    <label>University ID</label>
                                                    <div></div>
                                                    <input class="form-control" name="university_id" type="number"
                                                           value="{{ $interview->university_id }}"
                                                           autocomplete="off" disabled/>
                                                </div>

                                                @foreach($questions as $question)
                                                    <div class="form-group">
                                                        <label>{{ $loop->index+1 . '. ' . $question->question }}</label>
                                                        <div></div>
                                                        <input class="form-control"
                                                               type="text"
                                                               value="{{ $interview['answer'.$loop->index+1] ?? null }}"
                                                               disabled/>
                                                    </div>
                                                @endforeach
                                                <div class="form-group">
                                                    <label>Comment</label>
                                                    <div></div>
                                                    <input class="form-control" name="comment" type="text"
                                                           value="{{ $interview->comment }}"
                                                           autocomplete="off" disabled/>
                                                </div>

                                                <div class="form-group">
                                                    <label>Final Grade</label>
                                                    <div></div>
                                                    <select class="form-control" name="grade" disabled>
                                                        <option selected>{{ $interview->grade }}</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <div></div>
                                                    <img src="{{ asset($interview->image) }}"
                                                         style="width: 250px; height: 250px;">
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                @if(!$interview->status)
                                                    <form method="POST"
                                                          action="{{ route('accept-interview', $interview->id) }}">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-primary mr-2">Mark
                                                            Accepted
                                                        </button>
                                                    </form>
                                                @else
                                                    <form method="POST"
                                                          action="{{ route('reject-interview', $interview->id) }}">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-danger mr-2">Remove
                                                            Accepted Status
                                                        </button>
                                                    </form>
                                                @endif
                                                <br>
                                                <a href="{{ url('/answers/'. $interview->id .'/edit') }}"
                                                   class="btn btn-light-google mr-2">Edit</a>
                                                <a href="{{ url('/answers') }}"
                                                   class="btn btn-secondary">Cancel</a>
                                            </div>
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

@section('scripts')
    <script>
        $('#first_select').on('change', function () {
            var cid = this.value;
            jQuery.ajax({
                url: '/get-interviews',
                type: 'get',
                data: 'category_id=' + cid,
                success: function (data) {
                    var len = data.interviews.length;
                    var con = "<option value='0' selected disabled>Please Select Interview Time</option>";
                    if (len > 0) {
                        for (var x = 0; x < len; x++) {
                            var interviewID = data.interviews[x].id;
                            var interviewDateTime = data.interviews[x].time + ' - ' + data.interviews[x].date;
                            con = con + "<option value='" + interviewID + "'>" + interviewDateTime + "</option>";
                        }
                    } else {
                        con = "<option value='0' selected disabled>No Interviews Available</option>";
                    }
                    $("#second-select").html(con);
                }
            });
        });
    </script>
@endsection
