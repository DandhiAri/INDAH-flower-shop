@extends('layout.main')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    @section('title')
        Users | dashboard
    @endsection
  </title>
</head>
<body>
  @section('content')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"> 
    <h2>Costumers</h2>
    <div class="table-responsive">
    <a href="/create" class="btn btn-success">Create New Account</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>username</th>
            <th>telp</th>
            <th>alamat</th>
            <th>role</th>
            <th>email</th>
            <th>KIT</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($user as $item)
          <tr>
            <th>{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->telp}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->role}}</td>
            <td>{{$item->email}}</td>
            <td>
              <a class="btn btn-primary" href="{{ route('admin.edit',$item->id) }}">Edit</a>
              <form action="{{ route('admin.destroy',$item->id) }}" method="Post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </main>
  @endsection
</body>
</html>