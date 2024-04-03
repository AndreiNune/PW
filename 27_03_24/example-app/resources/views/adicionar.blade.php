<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar extend-lg bg-primary " data-bs-theme="dark">
                    <div class="row">
                        <div class="container-fluid">
                            <label class="navbar-brand mb-2 p-2 h1 fw-medium">SISTEMA WEB</label>
                            <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                            <a class="nav-link active" aria-current="page" href="#">Consultar</a>
                        </div>
                    </div>
                </nav>

                <div class="row">
                    <div class="col">
                        <p class="fs-1 fw-light">Cadastrar - Agendamento de Potenciais Clientes</p>
                        <p class="fs-3 fw-light">Sistema Utilizado para agendamento de serviços.</p>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="row">
                        <label for="basic-url" class="form-label">Nome:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="nome">
                        </div>
                    </div>
                    <label for="basic-url" class="form-label">Telefone:</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="telefone">
                    </div>

                    <label for="basic-url" class="form-label">Origem:</label>
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Celular</option>
                            <option value="2">Fixo</option>
                        </select>
                    </div>

                    <label for="basic-url" class="form-label">Data do Contato:</label>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="datacontato">
                    </div>

                    <label for="basic-url" class="form-label">Observação:</label>
                    <div class="input-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea name="observacao">
                    </div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Origem</th>
                    <th scope="col">Data de Contato</th>
                    <th scope="col">Observação</th>
                </tr>
            </thead>
            <tbody>
                @if (count($contato) > 0)
                    @foreach ($contato as $cont)
                    <tr>
                        <th>{{ $cont->id }}</th>
                        <th>{{ $cont->nome }}</th>
                        <th>{{ $cont->telefone }}</th>
                        <th>{{ $cont->origem }}</th>
                        <th>{{ $cont->datacontato }}</th>
                        <th>{{ $cont->obsercacao }}</th>
                        <th>
                            <a href="/editar/{{ $cont->id}}" class=""></a>
                        </th>
                    </tr>
            </tbody>
        </table>
    </div>
</body>

</html>