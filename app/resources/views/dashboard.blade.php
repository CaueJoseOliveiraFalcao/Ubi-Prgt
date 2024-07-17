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
        </div>
    </div>
    @can('admin')
        <a href="/users-painel">Admin Painel</a>
    @endcan
    <a href="/site-creator">Criação do Site</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
    {{$sites->isEmpty()}}
    @if ($sites->isEmpty())
        <h1>Você nao tem nehum site no ar</h1>
        
    @else
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome do Projeto</th>
                    <th>Descrição</th>
                    <th>Contagem de Acesso</th>
                    <th>Média de Público por Região</th>
                    <th>Média de Público por Idade</th>
                    <th>Criado em</th>
                    <th>Atualizado em</th>
                    <th>Ver Projeto</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $data = json_decode('[{"id":1,"user_id":1,"desc":"dafcwaedcqwaedqewfceqwde","projectName":"Ninja-Project","status":"Em Analise","acess_count":0,"average_public_region":0,"average_public_age":0,"created_at":"2024-07-12T14:09:38.000000Z","updated_at":"2024-07-12T14:09:38.000000Z"}]', true);
                @endphp
                @foreach ($sites as $site)
                <tr>
                    <td>{{ $site['projectName'] }}</td>
                    <td>{{ $site['desc'] }}</td>
                    <td>{{ $site['acess_count'] }}</td>
                    <td>{{ $site['average_public_region'] }}</td>
                    <td>{{ $site['average_public_age'] }}</td>
                    <td>{{ $site['created_at'] }}</td>
                    <td>{{ $site['updated_at'] }}</td>
                    <td><a href="#">Acessar Site</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    <div class="whatsapp-button">
        <a href="https://wa.me/559298113525" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        </a>
    </div>
    <style>
        .container {
            margin-top: 20px;
        }
    
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
    
        .table th, .table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    
        .table th {
            background-color: #f2f2f2;
        }
    
        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .whatsapp-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 60px;
    height: 60px;
    z-index: 1000;
}

.whatsapp-button a {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.whatsapp-button a:hover {
    transform: scale(1.1);
}

.whatsapp-button img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
    </style>
    </body>
</x-app-layout>


    </style>
