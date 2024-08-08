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
                <h3 class="fw-bold mb-3">Bilan Magasiniers</h3>
                <h6 class="op-7 mb-2">Admin Dashboard</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 tableau_magasin">
                <div class="card" style="width: 90%">
                  <div class="card-header">
                    <div class="card-title">Magasiniers enregistres</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Prenom</th>
                          <th scope="col">Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($magasiniers as $magasinier)

                          <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $magasinier->name }}</td>
                            <td>{{ $magasinier->subname }}</td>
                            <td>{{ $magasinier->email }}</td>
                          </tr>
                          <span style="display: none">{{$i++}}</span>  
                          
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>

    </div>
  </div>   
@endsection