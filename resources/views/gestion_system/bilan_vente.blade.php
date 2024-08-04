@extends('gestion_system.main')

{{-- ceci est parti re presentant les noms de pages qui seront variant en fonction du role --}}
@section('page_title')
    Dashboard - Bilan des Ventes
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

    <div class="row stats-vente-row">
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-info card-round">
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="fas fa-user-check"></i>
                </div>
              </div>
              <div class="col-7 col-stats">
                <div class="numbers">
                  <p class="card-category">Subscribers</p>
                  <h4 class="card-title">1303</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-success card-round">
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="fas fa-chart-pie"></i>
                </div>
              </div>
              <div class="col-7 col-stats">
                <div class="numbers">
                  <p class="card-category">Ventes</p>
                  <h4 class="card-title">$ 1,345</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-secondary card-round">
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="far fa-check-circle"></i>
                </div>
              </div>
              <div class="col-7 col-stats">
                <div class="numbers">
                  <p class="card-category">Commandes</p>
                  <h4 class="card-title">576</h4>
                </div>
              </div>
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