@extends('layouts.app')

@section('title','Dashboard')

@push('css')

    @endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="card-content">
                            <p class="category"><b>Pathway / Projects</b></p>
                            <h3 class="title">{{ $pathwayCount }}/ {{ $projectsCount }}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">info</i>
                                <a href="{{ route('pathway.index') }}">Total Pathways and Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">person_pin</i>
                        </div>
                        <div class="card-content">
                            <p class="category"><b>Tutor Count</b></p>
                            <h3 class="title">{{ $tutorCount }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> <a href="{{ route('tutor.index') }}">Click for More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">assignment_ind</i>
                        </div>
                        <div class="card-content">
                            <p class="category"><b>Student Count</b></p>
                            <h3 class="title">{{ $studentCount }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">details</i> <a href="{{ route('student.index') }}">Get More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="card-content">
                            <p class="category"><b>Tech Admin Count</b></p>
                            <h3 class="title">{{ $techadminCount }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">details</i> <a href="{{ route('techadmin.index') }}">Details Of Tech Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@push('scripts')

    @endpush

