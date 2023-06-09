@if ($errors->any())
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
    <ul class="list-disc ml-5">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form  class="max-w-md mx-auto">
    @csrf
    <div class="mb-4">
      <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
      <input type="text" name="name" id="name" placeholder="Nombre" value="{{$user->name ?? old('name')}}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <div class="mb-4">
      <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
      <input type="email" name="email" id="email" placeholder="Email" value="{{$user->email ?? old('email')}}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <div class="mb-4">
      <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña:</label>
      <input type="password" name="password" id="password" placeholder="Contraseña" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <div class="text-center">
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
    </div>
  </form>



