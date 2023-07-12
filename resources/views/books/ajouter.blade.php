<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
 <div class="w-full min-h-screen flex items-center">

    <div class="w-96 mx-auto p-5 bg-gray-200 rounded-lg ">

        @if(session('status'))
                <div class="text-purple-600 text-center">
                    {{session('status')}}
                </div>
        @endif

            @foreach($errors ->all() as $error)

            @endforeach
        <form action="/ajouter/traitement" method="POST">
        @csrf
        
        <input placeholder="Title" name="Title" id="Title" type="text" class="w-full my-2 rounded-lg py-1.5 px-2 bg-white border-gray-400">

        
        <input placeholder="Author" name="Author" id="Author" type="text" class="w-full my-2 rounded-lg py-1.5 px-2 bg-white border-gray-400">

        
        <input  placeholder="Date" name="Date" id="Date" type="text" class="w-full my-2 rounded-lg py-1.5 px-2 bg-white border-gray-400">

         
        <input placeholder="Description" name="Description" id="Description" type="text" class="w-full my-2 rounded-lg py-1.5 px-2 bg-white border-gray-400">

        
        <input  placeholder="Cover Image" name="cover_image" id="cover_image" type="text" class="w-full my-2 rounded-lg py-1.5 px-2 bg-white border-gray-400">

        <button class="bg-purple-500 py-1.5 px-3 rounded-lg my-2">Save</button>
        <button class="bg-green-500 py-1.5 px-3 rounded-lg my-2"><a href="/books">Back</a></button>
    </form>

    </div>

 </div>
</body>
</html>
