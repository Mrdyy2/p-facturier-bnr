@extends('gestion_system.main')
@section('page_title')
    Gestion des Utilisateurs
@endsection

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Forms</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Forms</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Basic Form</a>
          </li>
        </ul>
      </div>
      <div class="row">

        <form method="post" action="{{ route('admin.users') }}">
          @csrf
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Ajouter des utilisateurs</div>
                </div>
                <div class="card-body" style="display: flex; flex-direction:column;align-items: center">
                    <div class="row" style="width: 70%;">
                        
                        <div class="form-floating form-floating-custom mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="amdy">
                            <label for="floatingInput">Nom</label>
                        </div>
    
                        <div class="form-floating form-floating-custom mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="subname" placeholder="rayan">
                            <label for="floatingInput">Prenom</label>
                        </div>
                        
                    </div>
    
                    <div class="row">
                    
                        <div class="col-md-6 col-lg-6">
                            <div class="form-floating form-floating-custom mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            
    
                            <div class="form-floating form-floating-custom mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="motDePass" placeholder="Motde_pass123">
                                <label for="floatingInput">Mot de Passe</label>
                              </div>
                        </div>
    
                        <div class="col-md-6 col-lg-6">
    
                            <div class="form-group">
                                <label for="defaultSelect">Role</label>
                                <select class="form-select form-control" id="defaultSelect" name="role" placeholder="Motde_pass123">
                                    <option value="1" >1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
    
                            <div class="form-floating form-floating-custom mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="motDePass_ok" placeholder="Motde_pass123">
                                <label for="floatingInput">Confirmer Mot de passe</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                  <button class="btn btn-success" type="submit">Submit</button>
                  <button class="btn btn-danger" type="reset">Cancel</button>
                </div>
              </div>
            </div>

        </form>

      </div>
    </div>
</div>

@endsection