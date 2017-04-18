@extends('layouts.app')
@section('content')
<div class="container">            
    <div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
          <h2 class="text-center">Admin Dashboard Page </h2>
        </div>
          <div class="col-md-12">
            <div class="col-md-4">
              <ul class="nav nav-pills nav-stacked">                
                <li><a href="{{ URL::to('/') }}/adoutus">About Us</a></li>                
              </ul>
            </div>
            <div class="col-md-8">
              
              <form id="login-form" action="{{ URL::to('/') }}/admin/save_aboutus" method="post" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">                
              <div class="form-group">
                <textarea id="elm1" name="area"></textarea>
                  
              </div>
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit">
                  </div>
                </div>
              </div>
              </form>
            </div>
        </div>
      </div>
    </div>    

    </div>
    <div id="footer">
  <div class="container">
    <p class="text-muted credit text-center">&copy {{ date('Y') }} All Rights Resesrved </p>
  </div>
</div>
@endsection