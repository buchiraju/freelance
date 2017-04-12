@extends('layouts.app')
@section('content')
<div class="container">         
            
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <h2>Abouts Us Page </h2>          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div><?php echo $content[0]->content;?></div>
      </div>
      </div>
      
    </div>
    <div id="footer">
  <div class="container">
    <p class="text-muted credit text-center">&copy {{ date('Y') }} All Rights Resesrved </p>
  </div>
</div>
@endsection