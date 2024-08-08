@extends('gestion_produit.new')

{{-- ceci est parti re presentant les noms de pages qui seront variant en fonction du role --}}
@section('page_title')
    Dashboard - create produit
@endsection

{{-- ceci est la section representant le contenu de la page qui sera variant en fonction des roles --}}
@section('content')
<div class="container">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Enregistre Un Produit</div>
            </div>
            <div class="card-body">
              <div class="row">
                <form action="{{route('createProStore')}}" method="post">
                  @csrf
                  @method('post')
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="nomProduit">Nom Du Produit</label>
                      <input type="text" name="nomProduit" class="form-control" id="nomProduit" placeholder=""/>
                    </div> 
                    <div class="form-group">
                      <label for="quantiteStock"> Qantite en stock</label>
                      <input
                        type="text" name="quantiteStock" class="form-control" id="quantiteStock" placeholder=""
                      />
                    </div> 
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" name="price"  class="form-control" aria-label="Amount (to the nearest dollar)"   />
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="date">Date D'entre</label>
                      <input type="date" name="date" class="form-control" id="date"  >
                    </div>                   
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">  
                    
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">  
                    
                            Votre contenu ici...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                          </div>
                        </div>
                      </div>  
                    
                    </div> 
                  </div> 
                </form>
              </div>
            </div>
            
          </div>
      </div>             
 @endsection