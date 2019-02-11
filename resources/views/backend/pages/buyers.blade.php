@extends('backend.layouts.app',['title'=>'Buyers'])

@section('content')

   <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
      	<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Add Buyer</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
	            <!-- form start -->
	            <form role="form" method="POST" action="{{route('buyers.store')}}">
	            	@csrf
	              	<div class="col-md-6">
		                <div class="form-group">
		                  <label for="b_first_name">First Name *</label>
		                  <input type="text" name="first_name" class="form-control" id="b_first_name" placeholder="Enter First Name" required>
		                </div>
		            </div>
		            <div class="col-md-6">
		                <div class="form-group">
		                  <label for="b_last_name">Last Name *</label>
		                  <input type="text" name="last_name" class="form-control" id="b_last_name" placeholder="Enter Last Name" required>
		                </div>
		            </div>
		            <div class="col-md-4">
		                <div class="form-group">
		                  <label for="b_contact_type">Contact Type</label>
		                  <input type="text" name="contact_type" class="form-control" id="b_contact_type" placeholder="Contact Type" required>
		                </div>
		            </div>
		            <div class="col-md-2">
		                <div class="form-group">
		                  	<label for="b_buyers_premium">Buyers Premium</label>
		                  	<div class="row" style="padding: 5px 0px 0px 30px;">
			                  	<label>
			                  		Yes
				                	<input type="radio" class="b_buyers_premium_yes" value="1" name="buyers_premium" onclick="show1();">
				                </label>
				                <label>
				                	No
				                  	<input type="radio" class="b_buyers_premium_no" value="2" name="buyers_premium" onclick="hide1();" checked>
				                </label>
				            </div>
		                </div>
		            </div>
		            <div class="col-md-4">
		                <div class="form-group b_buyers_premium_rate" style="display: none;">
		                  <label for="b_buyers_premium_rate">Buyers Premium Rate</label>
		                  <input type="number" name="buyers_premium_rate" class="form-control" id="b_buyers_premium_rate" placeholder="Buyers Premium Rate" >
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="form-group">
		                  <label for="b_address">Address *</label>
		                  <input type="text" name="address" class="form-control" id="b_address" placeholder="Address" required>
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="form-group">
		                  <label for="b_suburb">Suburb *</label>
		                  <input type="text" name="suburb" class="form-control" id="b_suburb" placeholder="Suburb" required>
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="form-group">
		                  <label for="b_state">State *</label>
		                  {{-- <input type="text" name="state" class="form-control" id="b_state" placeholder="State" required> --}}
		                  <select name="state" class="form-control select2" id="b_state" style="width: 100%;" required>
			                  <option selected="selected" disabled>Select State</option>
			                  <option value="new york">New York</option>
			                  <option value="Los Angelos">Los Angelos</option>
			                  <option value="Chicago">Chicago</option>
			                  <option value="Iowa">Iowa</option>
			                  <option value="Minessota">Minessota</option>
			                  <option value="Melbourne">Melbourne</option>
			                </select>
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="form-group">
		                  <label for="b_postcode">Postcode *</label>
		                  <input type="number" name="postcode" class="form-control" id="b_postcode" placeholder="Postcode" required>
		                </div>
		            </div>
		           	<div class="col-md-3">
		                <div class="form-group">
		                  <label for="b_telephone_home">Telephone Home </label>
		                  <input type="text" name="telephone_home" class="form-control" id="b_telephone_home" placeholder="Telephone Home ">
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="form-group">
		                  <label for="b_telephone_work">Telephone Work </label>
		                  <input type="text" name="telephone_work" class="form-control" id="b_telephone_work" placeholder="Telephone Work ">
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="form-group">
		                  <label for="b_mobile">Mobile </label>
		                  <input type="text" name="mobile" class="form-control" id="b_mobile" placeholder="Mobile">
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="form-group">
		                  <label for="b_email">Email </label>
		                  <input type="email" name="email" class="form-control" id="b_email" placeholder="Email">
		                </div>
		            </div>
		            <div class="col-md-12">
		                <div class="form-group">
		                  <label for="b_comments">Comments</label>
		                  <textarea type="text" name="comments" class="form-control" id="b_comments" placeholder="Comments"></textarea>
		                </div>
		            </div>
		            <div class="col-md-12">
			            <div class="box-footer">
			                <button type="submit" class="btn btn-primary">Submit</button>
			            </div>
		            </div>
	            </form>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">List of buyers</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
	                <tr>
	                  <th>Buyer Code</th>
	                  <th>Buyer Name</th>
	                  <th>Address</th>
	                  <th>Mobile</th>
	                  <th>comments</th>
	                </tr>
                @foreach($buyers as $buyer)
	                <tr>
	                  <td>{{$buyer->buyer_code}}</td>
	                  <td>{{$buyer->first_name}} {{$buyer->last_name}}</td>
	                  <td>{{$buyer->address}}</td>
	                  <td><span class="label label-success">{{$buyer->mobile}}</span></td>
	                  <td>{{$buyer->comments}}</td>
	                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->

@endsection
@push('scripts')
    <script type="text/javascript">
    	  function show1(){
		    $('.b_buyers_premium_rate').show();
		  }
		  function hide1(){
		    $('.b_buyers_premium_rate').hide();
		  }
		  
    </script>
@endpush