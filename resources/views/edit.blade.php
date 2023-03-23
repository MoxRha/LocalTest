<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ url('dashboard/updateuser/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Nama</label>
                                <input type="text" value="{{ $user->name }}" class="form-control" name="name">
                            </div>
                            <br>
                            <div class="col-md-6 mb-3">
                                <label for="">Email</label>
                                <input type="text" value="{{ $user->email }}" class="form-control" name="email">
                            </div>
                            <br>
                            <button type="submit" style="background-color: blue; padding: 10px; color: white;">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
