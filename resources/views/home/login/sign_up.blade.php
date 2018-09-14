@extends('home.layout.layout')
@section('content')
<div class="register_account">
          	<div class="wrap">
    	      <h4 class="title" style="color: #ff6600">CREATE A ACCOUNT</h4>
    		   <form>
    			 <div class="col_1_of_2 span_1_of_2" >
		   			 <div><input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"></div>
		    			<div><input type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></div>
		    			<div><input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}"></div>
		    			<div><input type="text" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2" >	
		    		<div><input type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></div>	        
		          <div><input type="text" value="City" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City';}"></div>
		          <div><input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></div>
		          </div>
		      <button class="grey">Submit</button>
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>
  @endsection