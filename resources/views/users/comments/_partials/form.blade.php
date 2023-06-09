

<form class="max-w-md mx-auto bg-white p-8 rounded shadow">
    @csrf
    <div class="mb-4">
      <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Comentario:</label>
      <textarea name="body" id="body" cols="30" rows="10" placeholder="Comentario" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $comment->body ?? old('body')}}</textarea>
    </div>

    <div class="mb-4">
      <label for="visible" class="flex items-center">
        <input type="checkbox" name="visible" id="visible" class="form-checkbox"
            @if (isset($comment) && $comment->visible)
                checked="checked"
            @endif
        >
        <span class="ml-2 text-gray-700">Visible?</span>
      </label>
    </div>

    <div class="text-center">
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
    </div>
  </form>



