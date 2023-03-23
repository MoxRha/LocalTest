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
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div>
                <style>
                table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
                }

                td, th {
                  border: 1px solid #dddddd;
                  text-align: left;
                  padding: 8px;
                }

                tr:nth-child(even) {
                  background-color: #dddddd;
                }
                </style>
                <h2>Tabel User</h2>
                <table>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                  </tr>
                  @foreach($user as $item)
                  <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td><a href="{{ url('/dashboard/edituser/'.$item->id) }}">Edit</a> | <a href="{{ url('/dashboard/deleteuser/'.$item->id) }}">Hapus</a></td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
