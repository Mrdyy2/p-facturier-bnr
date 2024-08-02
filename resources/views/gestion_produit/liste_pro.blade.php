@extends('gestion_system.main')

{{-- ceci est parti re presentant les noms de pages qui seront variant en fonction du role --}}
@section('page_title')
    Dashboard - liste produit
@endsection

{{-- ceci est la section representant le contenu de la page qui sera variant en fonction des roles --}}
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Basic</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Price</th>
                    <th>Start date</th>
                    <th></th>

                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Price</th>
                    <th>Start date</th>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td> <button class="btn btn-danger">Cancel</button>
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
@endsection
