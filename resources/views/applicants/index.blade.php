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
                            <!--begin::Notice-->
                            <!--end::Notice-->
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <div class="card-header">
                                    <div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-favourite text-primary"></i>
											</span>
                                        <h3 class="card-label">Applicants</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <!--begin::Button-->
                                        <a href="{{ url('/applicants/create') }}"
                                           class="btn btn-primary font-weight-bolder">
                                            <i class="la la-plus"></i>New Applicant</a>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!--begin: Datatable-->
                                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable"
                                           style="margin-top: 13px !important">
                                        <thead>
                                        <tr>
                                            <th>Committee/Council</th>
                                            <th>Name</th>
                                            <th>University ID</th>
                                            <th>Mobile Number</th>
                                            <th>Faculty</th>
                                            <th>Interview</th>
                                            <th>Created By</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($applicants as $applicant)
                                            <tr>
                                                <td>{{ $applicant->category?->name }}</td>
                                                <td>{{ $applicant->first_name . ' ' . $applicant->last_name }}</td>
                                                <td>{{ $applicant->university_id }}</td>
                                                <td>{{ $applicant->mobile }}</td>
                                                <td>{{ $applicant->faculty }}</td>
                                                <td>{{ $applicant->interview ? $applicant->interview->time . ' - ' .  $applicant->interview->date : 'Not available.'}}</td>
                                                <td>{{ $applicant->user?->name }}</td>
                                                <td>
                                                    <a href="{{url('/applicants/'.$applicant->id . '/edit')}}"
                                                       class="btn btn-primary font-weight-bold mr-2">
                                                        Edit
                                                    </a>
                                                    <a href="#"
                                                       class="btn btn-danger font-weight-bolder font-size-sm"
                                                       data-toggle="modal"
                                                       data-target="#delete{{$applicant->id}}">
                                                        Delete
                                                    </a>

                                                    <div class="modal fade" id="delete{{$applicant->id}}" tabindex="-1"
                                                         role="dialog" aria-labelledby="exampleModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered"
                                                             role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        {{ $applicant->name }}</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" style="text-align: left">
                                                                    Are you sure you want to delete this applicant?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form style="display: inline-block;"
                                                                          method="POST"
                                                                          action="{{ route('applicants.destroy', $applicant->id) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <input
                                                                            type="submit"
                                                                            class="btn btn-danger font-weight-bolder font-size-sm"
                                                                            value="Delete">
                                                                    </form>
                                                                    <button type="button"
                                                                            class="btn btn-light-primary font-weight-bold"
                                                                            data-dismiss="modal">Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
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
