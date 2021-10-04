








@extends('layouts.appp')
@section('content')
        {{-- <a href="{{route('posts.create')}}" class="btn btn-success mb-2">Add Post</a>
        <a href="{{route('posts.trashed')}}" class="btn btn-danger mb-2">Trashed</a> --}}

   
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">serial number</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">User</th>
                
              </tr>
            </thead>
            <tbody>
              
                @foreach($posts as $post)
                
              <tr>
                <td scope="row">{{ $count++ }}</td>
                <td>{{$post['title']}}</td>

                <td>{{$post['description']}}</td>
                <td> <img width="60px" src= "{{ asset ('images/offers/'. $post->image_path) }}" alt='image'> </td>
                <td>{{$post->User->name}}</td>
                <td> 
                   <a  href="{{route('posts.edit',['post'=> $post->id])}}" type="button" class="btn btn-primary">Edit</a>
                   <form style="display:inline;" method="post" action="{{route('posts.destroy',['post'=> $post->id])}}">
                    @csrf
                    @method('DELETE')
                  <button   type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
                
               
            
              </tr>
              @endforeach
            </tbody>
          </table>
  


 @endsection
