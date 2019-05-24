@extends('layouts.app')
  @section('content')
    <div class="container">
        	<div class="row">
		<div class="col-md-10 col-md-offset-1">
	        <div class="panel panel-default">
	        	<div class="panel-heading">
	        		#{{$ticket->ticket_id}} - {{$ticket->title}}
	        	</div>

	        	<div class="panel-body">
	        			        		
	        		<div class="ticket-info">
	        	<p>Ticket no. {{$ticket->id}}</p>
				foreach($categories as $category)
                @if(category_id == tickets->category_id)
		        <p>Categry: {{$category->name}}</p>
				@endif
		        		
						@if($ticket->status == "Open")
						<p>Status: <span class="label label-success">Open</span></p>
                    else
                    <p>Status: <span class="label label-danger">Close</span></p>
                    @endif
		        		<p>Created on: {{$ticket->created_at}}</p>
	        		</div>

	        		<hr>

	        		<div class="comments">
	        				        		</div>

	        		<div class="comment-form">
		        		<form action="http://localhost:8000/comment" method="POST" class="form">
		        			<input type="hidden" name="_token" value="zOBdREu0F12XsUrYS9S3vHrlAamHCBGoZV1Zf9C9">

		        			<input type="hidden" name="ticket_id" value="1">

		        			<div class="form-group">
                                <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                                	                        </div>

	                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
	                        </div>
		        		</form>
	        	</div>
	        </div>
	    </div>
	</div>
    </div>
    @endsection