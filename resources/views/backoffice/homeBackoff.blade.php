@extends('template.backoffice')
@section('backoff')
<div style="text-align: center; margin-top: 2rem;" class="container">
    <h1>BackOffice/page d'accueil</h1>
    <button class="btn btn-danger" style="margin: 0.2rem; "><a style="color:white" href="/">Retour vers le site</a></button>
</div>
<section class="container" style="display: flex; flex-wrap: wrap; justify-content:center; align-items:center ">
    <div style="border-radius: 0.5rem;background: radial-gradient(#ff5d71, #EB3349);width: 40%; border: 1px solid black;margin: 4rem; height: 19rem; padding:1.5rem">
        <h1 style="color:white">PortFolio</h1>
        <p style="font-size: 2.2rem;color:white">Crud</p>
        <button class="btn btn-primary"><a style="color:white" href="">Vers Portfolio</a></button>
    </div>
    <div style=" background: radial-gradient(#ff5d71, #EB3349);  border-radius: 0.5rem;width: 40%; border: 1px solid black; margin: 4rem; height: 19rem; padding:1.5rem">
        <h1 style="color:white">Blog</h1>
        <p style="font-size: 2.2rem;color:white">Crud</p>
        <button class="btn btn-primary"><a href="{{route("blogBack")}}" style="color:white" >Vers Blog</a></button>
    </div>
</section>

@endsection

