


    <h1>Admin Painel</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>CNPJ</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->telefone }}</td>
                <td>{{ $user->cnpj }}</td>
                <td><a href="/user-web-sites/{$user->id}">Ver Sites</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>