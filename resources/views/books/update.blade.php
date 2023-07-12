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
                <div class="">
                    {{session('status')}}
                </div>
        @endif

            @foreach($errors ->all() as $error)

            @endforeach
        <form action="/update/traitement" method="POST">
        @csrf
        <input type="text" class="hidden"  name="id" id="id"  value="{{$books->id}}" >
        <label>First name</label><br>
        <input
        name="nom"
        id="nom"
        type="text"
        value="{{$books->nom}}"
        class="w-full rounded-lg py-1.5 px-2 bg-white border-gray-400">

        <label>Last name</label><br>
        <input name="prenom"
        value="{{$books->prenom}}"
        id="prenom" type="text" class="w-full rounded-lg py-1.5 px-2 bg-white border-gray-400">

        <label>Age</label><br>
        <input name="age"
        value="{{$books->age}}"
        id="age" type="text" class="w-full rounded-lg py-1.5 px-2 bg-white border-gray-400">

        <button class="bg-purple-500 py-1.5 px-3 rounded-lg my-2">Update</button>
        <button class="bg-green-500 py-1.5 px-3 rounded-lg my-2"><a href="/books">Back</a></button>
    </form>

    </div>

 </div>
</body>
</html>
