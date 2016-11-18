@extends('layout')

@section('content')
  <div class="links content">
    <a href="/">Home</a>
    <a href="/requests/create">New Request</a>
  </div>
  <div class="content">
    <div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <table style="width: 60vw; margin: auto;">
          <tr>
            <th>
              Name
            </th>
            <th>
              Description
            </th>
            <th>
              Cost
            </th>
            <th>
              Admin Notes
            </th>
            <th>
              Status
            </th>
          </tr>
      @foreach($requests as $request)
          <tr>
              <td class="links">
                <a href="/requests/{{$request->id}}">
                  {{ $request->name }}
                </a>
              </td>
              <td>
                {{ $request->description}}
              </td>
              <td>
                ${{ $request->cost}}
              </td>
              <td>
                {{ $request->admin_notes}}
              </td>
              <td>
                @if($request->status === 0)
                Pending
                @endif
                @if($request->status === 1)
                In Process
                @endif
                @if($request->status === 2)
                Complete
                @endif
                @if($request->status === 3)
                Rejected
                @endif
              </td>
            </tr>
      @endforeach
     </table>
   </div>
   <a href="/requests/create">
     <button>New Request</button>
   </a>
 </div>
@stop
