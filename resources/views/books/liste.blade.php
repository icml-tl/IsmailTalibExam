<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex justify-end w-[80%] mx-auto mt-10">
   <form action="{{route('logout')}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="bg-red-600 py-2 px-3 text-white rounded-lg">LogOut</button>
   </form>
</div>

<div class="relative overflow-x-auto my-32 flex ">
    <table class="w-[600px] mx-auto text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">

       
            <tr class="uppercase text-xs">
                <th  scope="col" class="px-6 py-3">
                title
                </th>
                <th scope="col" class="px-6 py-3">
                author
                </th>
                <th scope="col" class="px-6 py-3">
                    age
                </th>
                <th scope="col" class="px-6 py-3">
                published date
                </th>
                <th scope="col" class="px-6 py-3">
                description
                </th>
                <th scope="col" class="px-6 py-3">
                cover image
                </th>
                <th>
                <div><button class="bg-purple-500 text-white px-4 py-1.5  rounded-lg"><a href="/ajouter">ADD</a></button></div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)


            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{$book->nom}}
                </th>
                <td class="px-6 py-4">
                    {{$book->prenom}}
                </td>
                <td class="px-6 py-4">
                    {{$book->age}}
                </td>
                <td class="px-6  flex text-white py-4">

                    <button class="bg-yellow-500 px-4 py-1.5 mx-2 rounded-lg"><a href="/update/{{$books->id}}" >Edit</a></button>
                    <button class="bg-red-500 px-4 py-1.5  rounded-lg"><a href="/delete/{{$books->id}}" >Delete</a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>


