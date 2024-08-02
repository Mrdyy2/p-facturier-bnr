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


  <li class="nav-item submenu">
        <a data-bs-toggle="collapse" href="#submenu" class="" aria-expanded="true">
        <i class="fas fa-bars"></i>
        <p>Gestion Utilisateurs</p>
        <span class="caret"></span>
        </a>
        <div class="collapse show" id="submenu" style="">
        <ul class="nav nav-collapse">
                <li>
                <a href="{{ route('admin.users.caisse') }}">
                    <span class="sub-item">Liste Caissieres</span>
                </a>
                </li>
                <li>
                <a href="{{ route('admin.users.magasin') }}">
                    <span class="sub-item">Liste Magasiniers</span>
                </a>
                </li>
                <li>
                <a href="{{ route('admin.users') }}">
                    <span class="sub-item">Ajouter Utilisateurs</span>
                </a>
                </li>
            </ul>
        </div>
    </li>


  
@endsection
