@extends('admin.Layout')

@Section('content')

  <div class="container mt-5">
    <h2>Edit Post</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="editTitle" class="form-label">Post Title</label>
        <input type="text" class="form-control" id="editTitle" name="title" value="{{$postdata->post_title}}" required>
      </div>

      <div class="mb-3">
        <label for="editCategory" class="form-label">Category</label>
        <select class="form-select" id="editCategory" name="category" required>
        <option value="{{$category_data->id}}" selected>{{$category_data->category_name }}</option>
        @foreach($categories as $category) 
          @if($category_data->id != $category->id)
          <option value="{{$category->id}}">{{$category->category_name}}</option>
          @endif
        @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="editImage" class="form-label">Change Image (optional)</label>
        <input class="form-control" type="file" id="editImage" name="image">
        <div class="mt-2">
          <small>Current Image:</small><br>
          <img src="https://via.placeholder.com/200x100" alt="Current Image" class="img-thumbnail mt-1">
        </div>
      </div>

      <div class="mb-3">
        <label for="editContent" class="form-label">Content</label>
        <textarea class="form-control" id="editContent" name="content" rows="6" required>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.
        </textarea>
      </div>

      <button type="submit" class="btn btn-success">Update Post</button>
      <a href="dashboard.html" class="btn btn-secondary">Cancel</a>
    </form>
  </div>

@endsection