@extends('template.backoffice')

@section('backoff')
<form action="/blogs"  method="post" class="container "
 style="margin-top: 5rem">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Titre</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Chemin de l'image</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  

@endsection

