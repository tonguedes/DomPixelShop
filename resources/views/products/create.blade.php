@extends('welcome')

@section('conteudo')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row" text-center>
                        <div class="col-sm-12">
                            <h2>Adicionar Novo produto</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('products.store') }}" method="post">
                                @csrf
                                <label for="Nome">Nome do produto</label>
                                <input type="text" name="name" id="name" placeholder="Produto"
                                    class="form-control"><br>
                                <label for="Nome">Descrição</label>
                                <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrição"
                                    class="form-control"></textarea>
                                <label for="Nome">Preço</label>
                                <input type="number" name="price" id="price" class="form-control">
                                <label for="Nome">Quantidade</label>
                                <input type="number" name="quantity" id="quantity" class="form-control">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
