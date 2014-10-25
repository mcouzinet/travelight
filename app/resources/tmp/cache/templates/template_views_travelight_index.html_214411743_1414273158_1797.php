<div id='header'>
	<img src="/img/logo.png">
	<h2>Travelight</h2>
	<h1>Sell, Buy, rent or swap travel products</h1>
	<h3>Save money, meet awesome people, and consume less</h3>
	<div id="btns">
	<a href="/register" class="btn btn-success">Register</a>
	<button class="btn btn-link" data-toggle="modal" data-target="#login">Login</button>
	</div>
</div>

<div id="search">

	<div class="form-group">
	  <div class="input-group">
	    <input type="text" class="form-control" placeholder="What would you like to find ?">
	    <span class="input-group-btn">
	      <button class="btn btn-default btn-success" type="button" >Search</button>
	    </span>
	  </div>
	</div>

</div>


<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" formaction="/login">
		    <legend>Legend</legend>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-10">
		        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
		      </div>
		    </div>
		    <input type="submit" value="Submit">
        
		    
		</form>
      </div>
      
    </div>
  </div>
</div>