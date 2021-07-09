<div>
    <table class="w-full divide-y-4 divide-blue-500 ">
        <div class="flex items-center py-2 text-left justify-end">
        <x-jet-button>
            {{__('create button')}}
        </x-jet-button>
        </div>
        <thead >
        <tr>
            <th class="text-left  px-6 py-3 border-b border-gray-500">id</th>
            <th class="text-left px-6 py-3 border-b border-gray-500">image</th>
            <th class="text-left px-6 py-3 border-b border-gray-500">title</th>
            <th class="text-left px-6 py-3 border-b border-gray-500">Action</th>
        </tr>
        </thead>
        <tbody class="divide-y-4 divide-blue-500 ">
        @forelse($posts as $post)
            <tr>
                <td class="px-6 py-3 border-b border-gray-500">{{$post->id}}</td>
                <td  class="px-6 py-3 border-b border-gray-500"><img src="{{asset('images/' . $post->image )}}" alt ={{'$posts->title'}} width='80' ></td>
                <td class="px-6 py-3 border-b border-gray-500">{{$post->title}}</td>
                <td class="px-6 py-3 border-b border-gray-500 mr-1">
                    <x-jet-button>
                        {{__('Edit')}}
                    </x-jet-button>
                    <x-jet-danger-button>
                        {{__('Delete')}}
                    </x-jet-danger-button>
                </td>
            </tr>
        @empty
            <td colspan="4">no posts found</td>
        @endforelse
        </tbody>
    </table>


<div>
    {{$posts->links()}}
</div>



</div>
