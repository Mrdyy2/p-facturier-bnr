@extends('gestion_system.main')

{{-- ceci est parti re presentant les noms de pages qui seront variant en fonction du role --}}
@section('page_title')
    Dashboard - Bilan des caissieres
@endsection

@section('content')
 
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Bilan Caissieres</h3>
                <h6 class="op-7 mb-2">Admin Dashboard</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 tableau_magasin">
                <div class="card" style="width: 90%">
                  <div class="card-header">
                    <div class="card-title">Caissieres enregistres</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Prenom</th>
                          <th scope="col">Email</th>
                          <th scope="col">Nom utilisateur</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>

    </div>
  </div>   
@endsection