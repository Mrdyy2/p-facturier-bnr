@extends('layout.app')

{{-- ceci est la liste representant les menus de la navbar qui seront variant en fonction du role --}}
@section('nav')
<ul class="nav nav-secondary">
  <li class="nav-item">
      <a href="index">
          <i class="fas fa-desktop"></i>
          <p>Accueil</p>
      </a>
  </li>

  <li class="nav-item">
      <a href="Bventes">
          <i class="fas fa-desktop"></i>
          <p>Ajouter produit</p>
      </a>
  </li>

  <li class="nav-item">
      <a href="produits">
          <i class="fas fa-desktop"></i>
          <p>liste de Produits</p>
      </a>
  </li>

  
@endsection
