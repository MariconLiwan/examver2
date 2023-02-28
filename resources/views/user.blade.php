@include('partials.header')


  <h1 class="text-center">User Table</h1>
<br>
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">User ID</th>
<th scope="col">name</th>
<th scope="col">email</th>

</tr>

<tbody>
<tr>
@foreach ($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>


<tr>
@endforeach
</thead>
</tbody>
</table>

@include('partials.footer')


