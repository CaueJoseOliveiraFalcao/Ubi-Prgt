<div class="container">

    
    <div class="row mt-4">
        @if ($sites->isNotEmpty())
            @foreach ($sites as $site)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $site->projectName }}</h5>
                        <p class="card-text">{{ $site->desc }}</p>
                        <p>Status: {{ $site->status }}</p>
                        <form action="{{ route('change_status_site', $site->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <select name="status" class="form-control" required>
                                    <option value="Em Analise" @if($site->status == 'Em Analise') selected @endif>Em Análise</option>
                                    <option value="Aprovado" @if($site->status == 'Aprovado') selected @endif>Aprovado</option>
                                    <option value="Rejeitado" @if($site->status == 'Rejeitado') selected @endif>Rejeitado</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col">
                <p>Nenhum site disponível.</p>
            </div>
        @endif
    </div>
</div>
<style>
    .container {
        margin-top: 20px;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 20px;
        text-align: center;
    }

    .card-title {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .card-text {
        color: #666;
        margin-bottom: 15px;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
