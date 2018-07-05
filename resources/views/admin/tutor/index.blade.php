@extends('layouts.app')

@section('title','Tutor')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('tutor.create') }}" class="btn btn-primary">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Tutors</h4>
                        </div>
                        <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      {{-- <form method="POST" action="{{ route('tutor.search') }}">
         {{ csrf_field() }}
         @component('layouts.search', ['title' => 'Search'])
          @component('layouts.two-cols-search-row', ['items' => ['First Name', 'Department_Name'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['fname'] : '', isset($searchingVals) ? $searchingVals['department_name'] : '']])
          @endcomponent
        @endcomponent
      </form> --}}
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="8%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Picture: activate to sort column descending" aria-sort="ascending">Picture</th>
                <th width="8%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="ID: activate to sort column descending" aria-sort="ascending">ID</th>
                <th width="10%" class="hidden-lg hidden-sm hidden-md sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column descending" aria-sort="ascending">Full Name</th>
                <th width="10%" class="sorting_asc hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="First Name: activate to sort column descending" aria-sort="ascending">First Name</th>
                <th width="10%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Last Name</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
                <th width="10%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="EnrollmentDate: activate to sort column ascending">Enrollment Date</th>
                <th width="10%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending">Department</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($tutors as $key=>$tutor)
                <tr role="row" class="odd">
                  <td><img src="/uploads/tutor/{{$tutor->image }}" class="img-circle" width="50px" height="50px"/></td>
                  <td>{{ $key + 1 }}</td>
                  <td class="hidden-lg hidden-sm hidden-md sorting_1">{{ $tutor->fname }} {{$tutor->lname}}</td>
                  <td class="hidden-xs sorting_1">{{ $tutor->fname }}</td>
                  <td class="hidden-xs sorting_1">{{ $tutor->lname }}</td>
                  <td class="hidden-xs">{{ $tutor->email }}</td>
                  <td class="hidden-xs">{{ $tutor->created_at }}</td>
                  <td class="hidden-xs">{{ $tutor->department_name }}</td>
                  <td>
                    <form class="row" method="POST" action="{{ route('tutor.destroy', ['id' => $tutor->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('tutor.edit', ['id' => $tutor->id]) }}" class="btn btn-warning col-sm-3 col-xs-5 btn-margin">
                        Update
                        </a>
                         <button type="submit" class="btn btn-danger col-sm-3 col-xs-5 btn-margin">
                          Delete
                        </button>
                    </form>
                  </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          {{-- <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($tutors)}} of {{count($tutors)}} entries</div> --}}
        </div>
        <div class="col-sm-7">
          {{-- <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $tutors->links() }}
          </div> --}}
        </div>
      </div>
    </div>
  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    
@endpush