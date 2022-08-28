@extends('layouts.app')


@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Banner</a></li>
        <li class="breadcrumb-item active" aria-current="page">Banner List</li>
    </ol>
</nav>

<div class="col-md-12 m-auto grid-margin stretch-card">
  <div class="card ">
      <div class="card-body">
        <h6 class="card-title">Add Banner </h6>
        <div class="table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('banner.create.post') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Welcome Note</label>
                            <input id="name" type="text" class="form-control @error('welcome_note') is-invalid @enderror" name="welcome_note" value="{{ old('welcome_note') }}" placeholder="welcome_note">
                                @error('welcome_note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Title</label>
                            <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputUsername1" class="form-label">Designation 1</label>
                                    <input id="name" type="text" class="form-control @error('designation1') is-invalid @enderror" name="designation1" value="{{ old('designation1') }}" placeholder="designation">
                                        @error('designation1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputUsername1" class="form-label">Designation 2</label>
                                    <input id="name" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation2" value="{{ old('designation2') }}" placeholder="designation">
                                        @error('designation1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Description</label>
                            <textarea id="name" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('decrption') }}" placeholder="decrption">
                            </textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add Banner</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 m-auto">
                    <form action="{{ route('banner.image.post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Banner Image</label>
                            <div class="mt-2">
                            <img id="pic" width="100" class="float-right">
                            </div>
                            <input id="profile_image" type="file" class=" mt-2 form-control @error('image') is-invalid @enderror" name="image" oninput="pic.src=window.URL.createObjectURL(this.files[0])" >

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add Banner Image</button>
                        </div>
                    </form>
                </div>
            </div>
          
        </div>
  </div>
</div>
@endsection