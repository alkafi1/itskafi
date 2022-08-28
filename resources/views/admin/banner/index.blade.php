@extends('layouts.app')


@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Banner</a></li>
        <li class="breadcrumb-item active" aria-current="page">Banner List</li>
    </ol>
</nav>
<div class="row">
<div class="col-md-12 m-auto ">
  <div class="card ">
      <div class="card-body">
        <div class="card-header"> <h3>Banner List</h3></div>
        <div class="table-responsive text-center">
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
                <th >Welcome NOte</th>
                <th >Title</th>
                <th>Designation</th>
                <th >Description</th>
                <th >Status</th>
                <th >Action</th>
                
              </tr>
            </thead>
            <tbody>  
              @foreach ($banners as $key=>$banner )
              <tr class="odd">
                  <td>{{ $banner->welcome_note }}</td>
                  <td>{{ $banner->title }}</td>
                  <td>{{ $banner->designation1 }} <br>{{ $banner->designation2 }}</td>
                  <td>{{ $banner->description }}</td>
                  <td>
                    <a href="{{ route('status',$banner->id) }}"><button type="button" class="btn btn-{{ ($banner->status==0?'dark':'success') }} btn-icon">
                        <i data-feather="check-square"></i>
                      </button>
                    </a>
                  </td>
                  <td>
                    {{--  @if($user->id == Auth::user()->id)  --}}
                      {{--  <a href="{{ route('banner.update',$banner->id) }}"><button type="button" class="btn btn-primary btn-icon">
                        <i data-feather="check-square"></i>
                      </button> </a>  --}}
                    {{--  @endif  --}}
                    <a href="{{ route('banner.delete',$banner->id) }}"><button type="button" class="btn btn-danger btn-icon">
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
</div>


<div class="mt-5">
  <div class="row">
    <div class="col-md-12 ">
      <div class="card">
        <div class="card-header">
          <h3>Banner Image Here</h3>
        </div>
        <div class="card-body">
          <table class=" table table-responsive text-center">
            <tr>
              <th>Banner Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            @forelse ($banner_images as $key=>$banner_image )
            <tr>
              
                <td>
                  <img width="900" height="700" src="{{ asset('/uploads/banner_image') }}/{{ $banner_image->image }}" alt="">
                </td>
                <td>
                  <a href="{{ route('image.status',$banner_image->id) }}"><button type="button" class="btn btn-{{ ($banner_image->status==0?'dark':'success') }} btn-icon">
                        <i data-feather="check-square"></i>
                      </button>
                    </a>
                </td>
                <td>
                    {{--  @if($user->id == Auth::user()->id)  --}}
                      {{--  <a href=""><button type="button" class="btn btn-primary btn-icon">
                        <i data-feather="check-square"></i>
                      </button> </a>  --}}
                    {{--  @endif  --}}
                    
                    <a href="{{ route('banner.image.delete',$banner_image->id) }}"><button type="button" class="btn btn-danger btn-icon">
                      <i data-feather="box"></i>
                    </button></a>
                  </td>
              
              
            </tr>
            @empty
                <td colspan="3"> No Image Found</td>
            @endforelse
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection