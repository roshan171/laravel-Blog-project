<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <div class="py-5 pl-10 pr-12">
    <a href="{{ route('post_add') }}" class="inline-flex items-center justify-center rounded-md border
     border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">Add Post</a>
   </div>

    <table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
  <tr>
    <th>{{ $post->user->name }}</th>
    <th>{{ $post->title }}</th>
    <th>{{ $post->body }}</th>
    <th><a href="{{route('post_edit', ['id' => $post->id])}}">Edit</a>
    <a href="{{route('post_delete', ['id' => $post->id])}}">Delete</a></th>



</tr>
@endforeach
</tbody>
</table>

      
</x-app-layout>
