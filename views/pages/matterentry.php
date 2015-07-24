<!--form class="form-horizontal" action="?controller=mp&action=view&clnt=<?php cmurl();?>">
	<div class="col-xs-2">
		<label for="ex1">Client</label>
		<input class="form-control" id="ex1" type="text">
	</div>
	<div class="col-xs-3">
		<label for="ex2">col-xs-3</label>
		<input class="form-control" id="ex2" type="text">
	</div>
	<div class="col-xs-4">
		<label for="ex3">col-xs-4</label>
		<input class="form-control" id="ex3" type="text">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form-->

<br>
	<form class="form-horizontal" role="form" method="get" action="index.php">
	    <input type="hidden" name="controller" value="mp">
	    <input type="hidden" name="action" value="view">
	    <div class="form-group">
	        <label class="col-sm-1">Client</label>
	        <div class="col-sm-5">
	            <input type="text" class="form-control" id="clnt" name="clnt" placeholder="Enter Client" value="">
	        </div>
	    </div>
	    <div class="form-group">
	        <label class="col-sm-1">Matter</label>
	        <div class="col-sm-5">
	            <input type="text" class="form-control" id="name" name="clnt" placeholder="Enter Matter" value="">
	        </div>
	    </div>    
	    <div class="form-group">
	        <div class="col-sm-10">
	            <input name="submit" type="submit" value="Submit" class="btn btn-primary">
	        </div>
	    </div>    
	</form>
