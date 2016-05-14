@extends('base')

@section('content')

        <div class="form-wrapper">
          <h2 style="text-align:center ">Register</h2>
            @if(isset($_SESSION['error']))
            <div class="alert alert-success">
                @foreach($_SESSION['error'] as $error)
                    {{ $error }}
                <br>
                @endforeach
            </div>
           @endif
          <form style="width: 600px;" class="form-horizontal" role="form" action="/register" method="post">
            <div class="form-group">
              <label class="control-label col-sm-2" for="first_name">firstname:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="first_name" id="name" placeholder="first name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="last_name">last name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="last_name" id="name" placeholder="last name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">verify email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="vemail" id="email" placeholder="verify email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="password">Password:</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Verify Password:</label>
              <div class="col-sm-10">
                <input type="password"  name="vpassword" class="form-control" id="pwd" placeholder="verify password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>

@endsection
