@extends('gestion_system.main')

{{-- ceci est parti re presentant les noms de pages qui seront variant en fonction du role --}}
@section('page_title')
    Dashboard - Bilan
@endsection

{{-- ceci est la section representant le contenu de la page qui sera variant en fonction des roles --}}
@section('content')
<div class="container">
  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
    >
      <div>
        <h3 class="fw-bold mb-3">Bilan factures</h3>
        <h6 class="op-7 mb-2">Admin Dashboard</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-secondary">
          <div class="card-body skew-shadow">
            <h1>{{ $nbre_facture }}</h1>
            <h5 class="op-8">Total Factures</h5>
            <div class="pull-right">
              <h3 class="fw-bold op-8">88%</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-secondary bg-secondary-gradient">
          <div class="card-body bubble-shadow">
            <h1>188</h1>
            <h5 class="op-8">Ventes Totales</h5>
            <div class="pull-right">
              <h3 class="fw-bold op-8">25%</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-secondary bg-secondary-gradient">
          <div class="card-body curves-shadow">
            <h1>12</h1>
            <h5 class="op-8">Banque Favorite</h5>
            <div class="pull-right">
              <h3 class="fw-bold op-8">70%</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="card card-round">
          <div class="card-header">
            <div class="card-head-row card-tools-still-right">
              <div class="card-title">Historique des Factures</div>
              <div class="card-tools">
                <div class="dropdown">
                  <button
                    class="btn btn-icon btn-clean me-0"
                    type="button"
                    id="dropdownMenuButton"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#"
                      >Something else here</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center mb-0">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"># Facture</th>
                    <th scope="col" class="text-end">Nom Client</th>
                    <th scope="col" class="text-end">Nom Bank</th>
                    <th scope="col" class="text-end">Num Compte</th>
                    <th scope="col" class="text-end">Nom Compte</th>
                    <th scope="col" class="text-end">Prix Total</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <th scope="row">
                      Paiement #10231
                    </th>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">$250.00</td>
                    <td class="text-end">
                      <span class="badge badge-success">Completed</span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      Paiement #10231
                    </th>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">$250.00</td>
                    <td class="text-end">
                      <span class="badge badge-success">Completed</span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      Paiement #10231
                    </th>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">$250.00</td>
                    <td class="text-end">
                      <span class="badge badge-success">Completed</span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      Paiement #10231
                    </th>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">$250.00</td>
                    <td class="text-end">
                      <span class="badge badge-success">Completed</span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      Paiement #10231
                    </th>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">$250.00</td>
                    <td class="text-end">
                      <span class="badge badge-success">Completed</span>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      Paiement #10231
                    </th>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                    <td class="text-end">$250.00</td>
                    <td class="text-end">
                      <span class="badge badge-success">Completed</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection