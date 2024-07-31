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
          <p>Bilan de Ventes</p>
      </a>
  </li>

  <li class="nav-item">
      <a href="produits">
          <i class="fas fa-desktop"></i>
          <p>Bilan de Produits</p>
      </a>
  </li>

  <li class="nav-item">
      <a href="bUsers">
          <i class="fas fa-desktop"></i>
          <p>Gestion des Utilisteurs</p>
      </a>
  </li>
</ul>
@endsection
