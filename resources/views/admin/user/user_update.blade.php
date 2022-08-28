@extends('layouts.app')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">User Update</li>
    </ol>
</nav>

<div class="col-md-10 m-auto grid-margin stretch-card">
  <div class="card ">
      <div class="card-body">
        <h6 class="card-title">User Update</h6>
        <div class="table-responsive">
            
          <form class="forms-sample" method="POST" action="{{ route('update.post') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id}}">
                      <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">User Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name}}" required autocomplete="name" autofocus placeholder="Username">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">Profile Image</label>
                        <div class="mt-2 mb-2">
                          @if ($user->image)
                            <img id="pic" src="{{ asset('/uploads/users')}}/{{ $user->image }}" width="100"class="float-right">
                            @else
                            <img id="pic" src="{{ Avatar::create($user->name)->toBase64() }}" width="100"class="float-right">
                          @endif
                          {{--  <img id="pic" src="{{ asset('/uploads/users')}}/{{ $user->image }}" width="100" class="float-right">  --}}
                        </div>
                        <input id="profile_image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" oninput="pic.src=window.URL.createObjectURL(this.files[0])" >

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div>
                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          Update
                        </button>
                        
                      </div>
                      
                    </form>
        </div>
      </div>
      
  </div>
</div>
				
@endsection