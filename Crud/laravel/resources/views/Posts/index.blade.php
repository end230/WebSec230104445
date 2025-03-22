@extends('layouts.app')

@section('content')

@section('title')Index @endsection

    <div class="text-center">
      <a href="{{route('posts.create')}}" class="btn btn-success">Creat Post</a>
    </div>
        </div>

                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Posted By</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($Posts as $Post)
                        <tr>
                            <td>{{$Post['id']}}</td>
                            <td>{{$Post['title']}}</td>
                            <td>{{$Post['description']}}</td>
                            <td>{{$Post['created_at']}}</td>
                            <td>
                              <td><a href="{{route('posts.show',$Post['id'])}}"><button type="button" class="btn btn-info">View</button></td>
                              <td><a href="{{route('posts.edit',$Post['id'])}}"><button type="button" class="btn btn-primary">Edit</button></td>

                              <form method="POST" action="{{route('posts.destroy',$Post['id'])}}">
                                @csrf
                                @method('DELETE')

                                <td><button type="submit" class="btn btn-danger">Delete</button></td>                      
                                </form>
                                </td>
                            
                          </tr>
                        @endforeach
                    
                     
                      </tr>
                    </tbody>
                  </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
@endsection