@extends('gestion_produit.new')

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
            <a href="{{route('createPro')}}" class="btn btn-label-info btn-round me-2">Ajoute un produit</a>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th>Non Du Produit</th>
                    <th>Qantite en stock</th>
                    <th>Price</th>
                    <th>Date D'entre</th>
                    <th>Option</th>

                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Non Du Produit</th>
                    <th>Qantite en stock</th>
                    <th>Price</th>
                    <th>Date D'entre</th>
                    <th>Option</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($produit as $item)
                      <tr>
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->quantiteStock}}</td>
                        <td>{{$item->date_entre}}</td>
                        <td> 
                          <form action="/gestion_produit/{{ $item->id }}" method="POST">
                            @csrf
                            <button class="btn btn-success">Update</button>  
                          </form>
                        </td>
                        <td> 
                          <form action="/gestion_produit/delete{{ $item->id }}" method="POST">
                            @method('DELETE')                              
                            @csrf
                            <button class="btn btn-danger">Cancel</button>  
                          </form>
                        </td>
                      </tr>
                  @endforeach
                  <div class="pagination justify-content-center">
                  </div>
                </tbody>
              </table>
              @if ('success')
                  <div class="alert alert-success">
                    {{session('success')}}
                  </div>
                      
              @endif
            </div>
          </div>
        </div>
      </div>

</div>

</div>
@endsection
