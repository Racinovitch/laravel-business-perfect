@extends('template.backoffice')

@section('backoff')
<h1 style="text-align: center;margin-top:4rem; color:orangered; text-decoration: underline; " class="container">Ajouter du contenu pour le Blog</h1>
<form action="{{route('update', $data->id)}}"  method="post" class="container "
 style="margin-top: 5rem">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Titre</label>
      <input value="{{$data->titre}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Chemin de l'image</label>
      <input value="{{$data->image}}" type="text" class="form-control" id="exampleInputPassword1" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <textarea  name="description" type="text" style="width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;">{{$data->description}}</textarea>
        {{-- <input  style="
      " type="text"  > --}}
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



@endsection
