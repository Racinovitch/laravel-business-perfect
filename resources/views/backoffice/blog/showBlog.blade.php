@extends('template.backoffice')

@section('backoff')
<section class="container" style="margin-top: 6rem">
    <div class="row" style="max-height: 120rem;display: flex; justify-content:center; ">



        <div class="col-sm-6 col-md-4" >
          <div class="thumbnail" style="padding: 0; height:100%">

            <div class="caption" style="width: max-content;text-align: center; ; background-color:#FAEBD7; padding:0; height: 100%">
              <h3 style="text-decoration:underline;margin-top:0; padding-top:0.4rem">{{$data->titre}}</h3>

              <textarea disabled style="width: 40rem;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
                color:#EB3349;
        border:none;
        background-color: none;
        resize: none;">{{$data->description}}</textarea>
        <img style="display:block;width: 40rem; height:30rem ;padding:1rem; border-radius:4rem" src="{{asset($data->image)}}" alt="">
        <div style="height:15%;display: flex; background-color:#DEB887; justify-content:center; align-items:center">
            <form action="{{route("delete1", $data->id)}}" method="post" style="display:inline;padding:0.8rem;width:max-content; margin:0;  display:flex; justify-content:center; align-items:center; height:15%" >
                @csrf
                <button class="btn btn-primary" type="submit" >Delete</button>
            </form>
           <button  class="btn btn-primary" style="width:15%"><a style="width: 100%; height:100%; color:white; " href="{{route('edit', $data->id)}}">Edit</a></button>
        </div>

            </div>
          </div>
        </div>
    </div>
</section>

@endsection

