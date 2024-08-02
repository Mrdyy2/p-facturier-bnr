@extends('gestion_system.main')

{{-- ceci est parti re presentant les noms de pages qui seront variant en fonction du role --}}
@section('page_title')
    Dashboard - Bilan des Produits
@endsection

@section('content')
 
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Bilan Produits</h3>
                <h6 class="op-7 mb-2">Admin Dashboard</h6>
            </div>
        </div>
  
    </div>
  </div>   
@endsection