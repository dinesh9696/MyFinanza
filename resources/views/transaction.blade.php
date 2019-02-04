@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center"> 
		<div class="col-mod-12">
	<div class="card">
    <div class="card-header">Select Account</div>
      <div class="card-body">		
	<select name="ac_type">
		<option>Select your Account Type</option>
		<option>Personal</option>
		<option id="off">Official</option>
		<option id="oth">Others</option>
	</select>
</div>
</div>
	<!-- The Modal -->
  <div class="modal" id="personal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Personal Expenses</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post">
				{{csrf_field()}}
				
					
						<div class="form-group">
						<input type="date" class="form-control" name="date" value="{{date('Y-m-d')}}">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="category" placeholder="Enter category">

					</div>	
					<div class="form-group">
						<input type="text" class="form-control" name="amount" placeholder="Enter Amount">

					</div>	
					<div class="form-group">
						<input type="text" class="form-control" name="notes" placeholder="Enter Notes(Optional)">

					</div>
						
				
        
        <!-- Modal footer -->
        <div class="modal-footer">

						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Submit">

						
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>	
<!--End Modal-->
		


		</div>	
	</div>
</div>

   

	
			

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
$('select').on('change',function(){
	var ch=this.value;
	switch(ch)
	{
		case "Personal":
			$("#personal").modal();
			break;
		case "Official":
			alert("Shankar");
			break;
		case "Others":
			alert("MCA");
			break;
			
	}
});
});
</script>