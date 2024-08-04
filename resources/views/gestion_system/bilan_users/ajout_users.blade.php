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

                        @if ($errors ->any())
                          <div class="alert-danger" style="text-decoration-color: red">
                            @foreach ($errors->all() as $error)
                              <p style="color: red">{{$error}}</p>
                            @endforeach
                          </div>
                        @endif

                        <div class="form-floating form-floating-custom mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="subname" placeholder="rayan">
                            <label for="floatingInput">Prenom</label>
                        </div>
                        
                    </div>
    
                    <div class="row">
                    
                        <div class="col-md-6 col-lg-10">
                            <div class="form-floating form-floating-custom mb-3">
                              <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" >
                              <label for="floatingInput">Email address</label>
                            </div>
                            
                        </div>
    
                        <div class="col-md-6 col-lg-10">
    
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
                        </div>
                    </div>
                </div>
                <div class="card-action">
                  <button class="btn btn-success" id="displayNotif" type="submit">Submit</button>
                  <button class="btn btn-danger" type="reset">Cancel</button>
                </div>
              </div>
            </div>

        </form>

      </div>
    </div>
</div>

<div data-notify="container"  class="col-10 col-xs-11 col-sm-4 alert alert-danger" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; padding-left: 65px; position: fixed; transition: 0.5s ease-in-out; z-index: 1031; top: 20px; right: 20px;">
  <button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;"> x </button>
  <span data-notify="icon" class="fa fa-bell"></span> 
  <span data-notify="title">Ajout reussi</span> 
  <span data-notify="message">utilisateur ajoute avec success</span>
  <a href="index.html" target="_blank" data-notify="url" style="background-image: url(&quot;data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7&quot;); height: 100%; left: 0px; position: absolute; top: 0px; width: 100%; z-index: 1032;"></a>
</div>

@endsection