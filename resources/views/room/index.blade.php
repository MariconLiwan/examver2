<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>My Website</title>
  </head>
  <body>

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

</body>
</html>

