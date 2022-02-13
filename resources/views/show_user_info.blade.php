@extends('layouts.app')

@section('content')
<div class="container">
  <h2 style="text-align:center;">User Info</h2>

<!-- $data -->
<div style="position:relative;">
  <div style="overflow-x:scroll;">
    <table class="table" >
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Age</th>
          <th>Address 1</th>
          <th>Address 2</th>
          <th>Address 3</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $user_info)
        <tr>
          <td>{{$user_info->firstname}}</td>
          <td>{{$user_info->lastname}}</td>
          <td>{{$user_info->age}}</td>
           @foreach($user_info->user_addresses as $user_address)
            <td>{{$user_address->address_text}}</td>
          @endforeach
          <td><form action='delete_user_info' method="POST">
            @csrf
                  <input style="display:none;" name="user_id" type="text" value="{{$user_info->id}}"/>
                  <button class="btn btn-primary" type="submit"> Delete </button>
            </form></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

@endsection
