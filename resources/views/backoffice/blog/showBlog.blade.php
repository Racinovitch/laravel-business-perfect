@extends('template.backoffice')

@section('backoff')
<section class="container" style="margin-top: 6rem">
    <div class="row">



        <div class="col-sm-6 col-md-4" >
          <div class="thumbnail" style="padding: 0; height:100%">

            <div class="caption" style="text-align: center; ; background-color:#FAEBD7; padding:0; height: 100%">
              <h3 style="margin-top:0; padding-top:0.4rem">{{$data->titre}}</h3>
              <p>{{$data->description}}</p>
              <form action="{{route("delete1", $data->id)}}" method="post" style="padding:0.8rem;width: 100%; margin:0; background-color:#DEB887; display:flex; justify-content:center; align-items:center; height:70%" >
                @csrf
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
            </div>
          </div>
        </div>
    </div>
</section>

@endsection

