@extends('layout.app')

{{-- ceci est la liste representant les menus de la navbar qui seront variant en fonction du role --}}
@section('nav')
<ul class="nav nav-secondary">
  <li class="nav-item">
      <a href="{{ route('admin.index')}} ">
          <i class="fas fa-desktop"></i>
          <p>Accueil</p>
      </a>
  </li>

  <li class="nav-item">
      <a href="{{ route('admin.ventes')}} ">
          <i class="fas fa-desktop"></i>
          <p>Bilan ventes</p>
      </a>
  </li>

  <li class="nav-item">
      <a href="{{ route('admin.produits') }}">
          <i class="fas fa-desktop"></i>
          <p>Bilan de Produits</p>
      </a>
  </li>

  <li class="nav-item">
      <a href="{{ route('admin.users') }}">
          <i class="fas fa-desktop"></i>
          <p>Gestion Utilisateurs</p>
      </a>
  </li>

  
@endsection
