<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <form id="mainForm" method="POST"
                            action="{{$isUpdate ? route('tags.update', $tag ?? '') : route('tags.store')}}">
                            @if($isUpdate)
                            @method('PATCH')
                            @endif
                            @csrf
                            <label for="name">{{__('Name: ')}}</label>
                            <input type="text" id="name" name="name"
                                value="{{$isUpdate ? $tag->name ?? '' : old('name')}}" autofocus required>
                            <div class="flex justify-end">
                                <button class="btn">{{$title}}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
