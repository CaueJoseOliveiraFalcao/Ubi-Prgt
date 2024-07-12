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

                    <th>Status</th>
                    <th>Contagem de Acesso</th>
                    <th>Média de Público por Região</th>
                    <th>Média de Público por Idade</th>
                    <th>Criado em</th>
                    <th>Atualizado em</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $data = json_decode('[{"id":1,"user_id":1,"desc":"dafcwaedcqwaedqewfceqwde","projectName":"Ninja-Project","status":"Em Analise","acess_count":0,"average_public_region":0,"average_public_age":0,"created_at":"2024-07-12T14:09:38.000000Z","updated_at":"2024-07-12T14:09:38.000000Z"}]', true);
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item['projectName'] }}</td>
                    <td>{{ $item['desc'] }}</td>

                    <td>{{ $item['status'] }}</td>
                    <td>{{ $item['acess_count'] }}</td>
                    <td>{{ $item['average_public_region'] }}</td>
                    <td>{{ $item['average_public_age'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>{{ $item['updated_at'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
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
    </style>
    </body>
</x-app-layout>


    </style>
