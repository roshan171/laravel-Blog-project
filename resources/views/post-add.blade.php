<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post add Form') }}
        </h2>
    </x-slot>

    <div class="row">
    <div class="col-md-12">
      <form action="{{ route('post_create') }}" method="post">
        @csrf
        <h1> Add Your Blog </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your Basic Info</legend>
        
          <label for="name">Title:</label>
          <input type="text" id="title" name="title">
          @error('title')

         <div class="text-red-500">{{ $message }}</div>
         @enderror
          
          <label for="desc">Description:</label>
          <textarea id="desc"  name="desc"></textarea>
       @error('desc')
       <div class="text-red-500">{{ $message }}</div>
         @enderror
          
</fieldset>
        <button type="submit">Submit</button>
        
       </form>
        </div>
      </div>

</table>
</x-app-layout>
