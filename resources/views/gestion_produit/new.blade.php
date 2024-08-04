@extends('layout.app')


@section('nav')
<ul class="nav nav-secondary">
  <li class="nav-item">
      <a href="{{ route('new')}}">
          <i class="fas fa-desktop"></i>
          <p>Accueil</p>
      </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('createPro')}}">
        <i class="fas fa-desktop"></i>
          <p>Ajouter produit</p>
      </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('listePro')}}">
        <i class="fas fa-desktop"></i>
          <p>liste de Produits</p>
      </a>
  </li>

  
@endsection