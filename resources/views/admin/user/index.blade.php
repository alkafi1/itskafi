@extends('layouts.app')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">User List</li>
    </ol>
</nav>

<div class="col-md-10 m-auto grid-margin stretch-card">
  <div class="card ">
      <div class="card-body">
        <h6 class="card-title">User List</h6>
        <div class="table-responsive">
          <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="dataTableExample_length">
                   
                    <select name="dataTableExample_length" aria-controls="dataTableExample" class="form-select form-select-sm">
                      <option value="10">10</option>
                      <option value="30">30</option>
                      <option value="50">50</option>
                      <option value="-1">All</option>
                    </select> 
                  
                </div>
              </div>
              <div class="col-sm-12 col-md-6 ">
                <div id="dataTableExample_filter" class="dataTables_filter">
                  <div class="m-right">
                    <input type="search" class="form-control" placeholder="Search" aria-controls="dataTableExample">
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table id="dataTableExample" class="table dataTable no-footer" aria-describedby="dataTableExample_info">
            <thead>
              <tr>
                <th >Image</th>
                <th >Name</th>
                <th >Designation</th>
                <th >Email</th>
                <th >Start date</th>
                <th >Action</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $key=>$user )
              <tr class="odd">
                  <td>
                      @if ($user->image)
                        <img class="wd-80 ht-80 rounded-circle" src="{{ asset('/uploads/users')}}/{{ $user->image }} " alt="profile">
                        @else
                        <img class="wd-80 ht-80 rounded-circle" src=" {{ Avatar::create($user->name)->toBase64() }}" alt="profile">
                      @endif
                  </td>
                  <td class="sorting_1">{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at->diffForHumans() }}</td>
                  <td>
                    {{--  @if($user->id == Auth::user()->id)  --}}
                      <a href="{{ route('user.update',$user->id) }}"><button type="button" class="btn btn-primary btn-icon">
                        <i data-feather="check-square"></i>
                      </button> </a>
                    {{--  @endif  --}}
                    
                    <a href="{{ route('user.delete',$user->id) }}"><button type="button" class="btn btn-danger btn-icon">
                      <i data-feather="box"></i>
                    </button></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
          </table>
        </div>
      </div>
      
  </div>
</div>
				
@endsection