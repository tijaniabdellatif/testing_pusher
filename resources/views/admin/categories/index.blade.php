@extends('layouts.app')


@section('content')

<h2>Section title</h2>

@if(Session::has('delete'))

<p>{{Session::get('delete')}}</p>
@endif

<div class="table-responsive">
    <table class="table table-hover table-condensed">
        <thead class="thead-primary">
          <tr>
            <th>Id</th>
            <th>Categorie name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Number of attached Products</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

           
            @forelse($categories as $category) 

            <tr>
                <th scope="row" class="scope" >{{$category->id}}</th>
                <td>{{$category->category_name}}</td>
                <td>{{Str::substr($category->description,0,120).'...'}}</td>
                <td><img width="60" height="60" src="{{Storage::url($category->category_image)}}" alt="{{ $category->slug }}"/></td>
                <td>{{ $category->products_count }}</td>
               
                <td>
                    <a class="btn btn-primary" href="{{route('admin.categories.show',$category->id)}}">
                     Details
                    </a>
                    <a href="#" class="btn btn-warning">Edit</a>
                   
                    <form method="POST" class="forms" action="{{route('admin.categories.destroy',$category->id)}}">
                      @csrf
                      @method('delete')
                      <input  type="submit" class="btn btn-outline-danger" />
                    </form>
                </td>
              </tr>
            @empty
              <tr>
                No Categories YET
              </tr>

            @endforelse
       
        </tbody>
      </table>
</div>
@endsection