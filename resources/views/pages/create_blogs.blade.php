@extends('template.backoffice')
@include('partials/header2')
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

  <section class="container">
      <div class="row">
          @foreach ($collection as $item)
          <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>
          @endforeach

      </div>
  </section>


@endsection

