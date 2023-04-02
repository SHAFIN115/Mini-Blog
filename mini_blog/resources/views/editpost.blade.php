<!DOCTYPE html>
<html>
<div style="text-align: center; background-color: #196;">
  <h1>Mini Blog</h1>
</div>
  <head>
    <link rel="stylesheet" href="css\app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="w-full max-w-xs mx-auto mt-10">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-14">
          <label class="block text-gray-700 font-bold mb-2" for="title">Title:</label>
          <input type="text" name="title" value="{{$post->title}}">
            
          
        </div>

        <div class="mb-29">
          <label class="block text-gray-1900 font-bold mb-2" for="body">Body:</label>
          <textarea name="body">{{$post->body}}</textarea>
        </div>

        <div class="flex items-center justify-center">
        <input type="submit" class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-red-500 font-bold py-2 px-4 rounded"
        value="Update This">

        </div>
      </form>
    </div>
  </body>
</html>
