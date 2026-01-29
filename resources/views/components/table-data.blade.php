 <div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Listado de Usuarios</h2>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $headers[0] }}</td>
                        <td class="px-6 py-4">{{ $headers[1] }}</td>
                        <td class="px-6 py-4">{{ $headers[2] }}</td>
                        <td class="px-6 py-4">{{ $headers[4] }}</td>
                        <td class="px-6 py-4">Acciones</td>
                    </tr>
            </thead>

            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td colscelin=4 class="px-6 py-4">{{ $usuario->id }}</td>
                        <td class="px-6 py-4">{{ $usuario->name }}</td>
                        <td class="px-6 py-4">{{ $usuario->email }}</td>
                        <td class="px-6 py-4">{{ $usuario->created_at }}</td>
                        <td class="px-6 py-4">
                        <div style="display: flex" style="padding: 1rem">
                        <div><a href="#" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-base text-sm px-4 py-2.5 text-center leading-5">Ver más</a></div>
                        <div><a href="#" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-base text-sm px-4 py-2.5 text-center leading-5">Editar</a></div>
                        <div><a href="#" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-base text-sm px-4 py-2.5 text-center leading-5">Eliminar</a></div>
                        </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>