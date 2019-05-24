  @extends('layouts.app')
  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-ticket"> My Tickets</i>
            </div>
            <div class="panel-body">
            @if(count(tickets)> 0)
              <table class="table">
                <thead>
                  <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($tickets as $ticket)
                  <tr>
                  foreach($categories as $category)
                  @if(category_id == tickets->category_id)
                    <td>{{$category->name}}</td>
                  @endif
                    <td>
                      <a href="{{ur('tickets'/ .'{ticket_id}')">
                        #{{$ticket->ticket_id}} - {{$ticket->ticket_title}}
                      </a>
                    </td>
                    <td>
                    @if($ticket->status == "Open")
                    <span class="label label-success">Open</span></td>
                    else
                    <td><span class="label label-danger">Close</span></td>
                    @endif

                    <td>{{$ticket->updated_at}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              else
              <p>No Tickets Yet</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection