@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 500px;">
  <h2 style="text-align: center;">User Info</h2>
  <form action="save_user_info" method="POST">
    @csrf
    <div class="form-group">
      <label for="firstname">Firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter Firstname" name="firstname" required>
    </div>
    <div class="form-group">
      <label for="lastname">Lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname" name="lastname" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" placeholder="Enter Age" name="age" required>
    </div>

    <div class="form-group">
      <label for="address_1">Address 1:</label>
      <input type="text" class="form-control" id="address_1" placeholder="Enter Address 1" name="address_1" required>
    </div>

    <div class="form-group">
      <label for="address_2">Address 2:</label>
      <input type="text" class="form-control" id="address_2" placeholder="Enter Address 2" name="address_2" required>
    </div>

    <div class="form-group">
      <label for="address_3">Address 3:</label>
      <input type="text" class="form-control" id="address_3" placeholder="Enter Address 3" name="address_3" required>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

@endsection
