{{-- auto validation errors --}}

@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4 col-md-offset-4 error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif



{{-- Success validation message--}}
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 success">
            {{Session::get('message')}}
        </div>
    </div>
@endif



{{-- Error validation message --}}

@if(Session::has('error'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 error">
            {{Session::get('error')}}
        </div>
    </div>
@endif
