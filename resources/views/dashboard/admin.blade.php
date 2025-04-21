<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Raymi Llaqta</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="m-4">
    <x-siderbar id="siderbar" />
    
    <div class="overflow-auto mt-10">
        <table border="1" class="w-full text-center">
            <thead class="bg-black text-white ">
                <tr class="whitespace-nowrap">
                    <th>ID</th>
                    <th>Nombre de usuario</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Creacion de registro</th>
                    <th>Ultima actualizacion</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($admins as $admin)
                <tr class="p-2">
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->tipo }}</td>
                    <td>{{ $admin->created_at }}</td>
                    <td>{{ $admin->updated_at }}</td>
                </tr>
                @empty
                    <div>
                        <p>No hay administradores registrados</p>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
    
</body>
</html>
