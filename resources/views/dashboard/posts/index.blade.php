@extends('dashboard.layouts.main')

@section('content_title')
    <h1 class="h2">My Posts</h1>
@endsection

@section('main_content')
    <h3 class="display-5">List of your posts</h3>

    <div class="table-responsive  col-lg-10">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Created at</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->created_at->format('l, d M Y') }}</td>
                <td class="">
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-white">
                        <span data-feather="eye"></span>
                    </a>
                    <a href="{{ $post->id }}" class="badge bg-warning text-white">
                        <span data-feather="edit"></span>
                    </a>
                    <a href="{{ $post->id }}" class="badge bg-danger text-white">
                        <span data-feather="trash-2"></span>
                    </a>
                </td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
@endsection