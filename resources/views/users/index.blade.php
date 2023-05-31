@extends('layout.app')
@section('title') Home @endsection
@section('contents')

@if(session()->has('msg'))
<div class="alert bg-danger text-white p-2 m-2 text-center">{{ session('msg') }}</div>
@endif


<div class="container">
    <div class="row">

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col"> name</th>
                    <th scope="col">email</th>
                    <th scope="col">Permissions</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->getDirectPermissions() as $permission)
                            <span class="badge text-sm bg-info text-dark">{{ $permission->name }}</span>
                        @endforeach
                    </td>
                    <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</button></td>
                    <td>
                        <form action="{{ route('user.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onClick="return confirm('Are You Sure?')">Delete</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              <div>{{ $users->links()  }}</div>

        </div>
    </div>
</div>
@endsection