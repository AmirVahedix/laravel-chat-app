<div>
    <div class="bg-white shadow rounded-lg mt-10">
        <div class="border-b border-gray-200 p-6">
            <h2 class="text-2xl font-bold">Public Chat Rooms</h2>
        </div>
        <div class="p-6">
            <div>
                Create Your Chat Room :
                <input type="text" placeholder="chat room name" class="rounded-md p-2 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <button class="inline-flex items-center p-3 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Create</button>
            </div>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold pb-4 border-b mb-4">Chat Rooms List</h3>
            @foreach($rooms as $room)
                <div>
                    <a href="{{ $room->path() }}" class="text-lg font-medium hover:underline">{{ $room->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
