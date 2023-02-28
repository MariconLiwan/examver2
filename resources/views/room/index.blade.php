@include('partials.header')

  <h1 class="text-center">Room Table</h1>
<br>
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">RoomID</th>
<th scope="col">Room Description</th>
<th scope="col">Room Capacity</th>
<th scope="col">Date From</th>
<th scope="col">Date To</th>


</tr>

<tbody>
<tr>
@foreach ($rooms as $room)
<tr>
<td>{{$room->id}}</td>
<td>{{$room->roomDescription}}</td>
<td>{{$room->roomCapacity}}</td>
<td>{{$room->dateFrom}}</td>
<td>{{$room->dateTo}}</td>

<tr>
@endforeach
</thead>
</tbody>
</table>

@include('partials.footer')

