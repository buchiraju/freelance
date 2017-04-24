@extends('layouts.app')
@section('content')
<div class="container">

      <div class="starter-template">
        <div  id="page-content" class="row">
            <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-sm">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#" class="active" id="login-form-link">Search Results</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">                        
                              
                              <form class="form-horizontal" method="post" action="{{URL::to('/')}}/search/getresults">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <?php if(isset($searchErr)){ ?>
                              <div class="alert alert-danger">
                                <?php echo $searchErr; ?>
                            </div>
                            <?php } ?>
                                <div class="form-group">
                                  <label class="control-label col-sm-4" for="email">Search key:</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="searchTxt" name="searchTxt">
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="control-label col-sm-4" for="pwd">Results from:</label>
                                  <div class="col-sm-8">       
                                    <label class="checkbox-inline"><input type="checkbox" name="tickets" value="tickets">Tickets</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="brands" value="brands">Brands</label>                                    
                                  </div>
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
		<div class="row">
		<?php if(isset($searchResults)){ ?>
				<div class="row">
				<table class="table table-hover" border="1" cellspacing="" cellpadding="">
					<thead>
						<th class="col-md-3">Name</th>
						<th class="col-md-3">Email</th>
						<th class="col-md-3">Text</th>
						<th class="col-md-3">Created Date</th>
					</thead>
					<tbody>
					<?php 
					foreach($searchResults as $key => $value){ ?>
						<tr>
							<td class="col-md-3"><?php echo $value->name; ?></td>
							<td class="col-md-3"><?php echo $value->email; ?></td>
							<td class="col-md-3"><?php echo $value->text; ?></td>
							<td class="col-md-3"><?php echo $value->created_at; ?></td>
						</tr>
				<?php	}
				?>
					</tbody>
				</table>
				
				</div>	
			<?php } ?>
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

