<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-end mb-5">
                        <a class="btn" href="{{route('tags.create')}}">{{__('Create')}}</a>
                    </div>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-left w-1/12">ID</th>
                                    <th class="text-left w-3/4">Name</th>
                                    <th class="w-auto"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>
                                        <div class="flex gap-3">
                                            <a href="{{route('tags.edit', $tag)}}" class="btn">{{__('Edit')}}</a>
                                            <form method="POST" action="{{route('tags.destroy', $tag)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn">{{__('Delete')}}</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr class="text-center">
                                    <td colspan="3">{{__('No data available')}}</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
