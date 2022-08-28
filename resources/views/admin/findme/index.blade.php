@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">

    </div>
    <div class="col-md-4">
        <div class="card">
            {{--  <div class="card-header"><h3>Add Find Me</h3></div>  --}}
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label"></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Social Logo</label>
                            <div class="mt-2">
                                @foreach ($icons as $icon )
                                    <i class="icon mr-5" name="<?=$icon?>" data-feather="{{ $icon }}"></i>
                                @endforeach
                            </div>
                           <div class="mt-2">
                            <input type="text" placeholder="" name="" id="icon_input">
                            <i id="icon_input" class="mr-5" data-feather="facebook"></i>
                           </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('footer_script')
<script>
    $('.icon').click(function(){
        alert('ok')
    });
    //font awsome use koren vai. ai ta auto svg koira diteca. sei jonne jquery kaj kore na....ok vai
    
</script>
@endsection

































{{--  <script>
    $('.icon').click(function(){
        var icon_class= $(this).attr('name');
        alert();
        $('#icon_input').attr('placeholder', icon_class );
        $('#icon_input2').attr('data-feather',icon_class);
    });
</script>  --}}