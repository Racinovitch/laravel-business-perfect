@extends ('template.backoffice');

@section('backoff')

<section class="container" style="margin-top: 5rem">



        <div class="row" style="height: max-content">
            @foreach ($dataBlog as $item)


                <div class="col-sm-6 col-md-4" style="height: 20rem margin-top: 0.5rem">
                  <div class="thumbnail" style="padding: 0; height:100%">

                    <div class="caption" style="text-align: center; ; background-color:#FAEBD7; padding:0; height: 100%">
                      <h3 style="margin-top:0; padding-top:0.4rem">{{$item->titre}}</h3>
                      <p>{{$item->description}}</p>
                      <form action="{{route("delete", $item->id)}}" method="post" style="padding:0.8rem;width: 100%; margin:0; background-color:#DEB887; display:flex; justify-content:center; align-items:center; height:70%" >
                        @csrf
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                    </div>
                  </div>
                </div>


            @endforeach


    </div>
</section>





@endsection
