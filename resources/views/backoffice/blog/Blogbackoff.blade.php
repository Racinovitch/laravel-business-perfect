@extends('template.backoffice')
@section('backoff')
<section class="container" style="margin-top: 6rem">


    <h1>Blogs</h1>
    <button class="btn btn-danger" style="margin: 0.2rem; "><a style="color:white" href="{{route('blogBackAll')}}">More</a></button>
    <button class="btn btn-danger" style="margin: 0.2rem; "><a style="color:white" href="/">Retour vers le site</a></button>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Delete</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($dataBlog as $item)
            <tr>
                <th scope="row"><a href="{{route("show", $item->id)}}">{{$item->titre}}</a></th>
                <td> <form action="{{route('delete1', $item->id)}}" method="post"> @csrf<button type="submit" class="btn btn-primary">Delete</button></form></td>
                 
            </tr>
            @endforeach

        </tbody>
      </table>
</section>
@endsection
