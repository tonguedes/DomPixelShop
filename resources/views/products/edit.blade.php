@extends('welcome')
@section('conteudo')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row" text-center>
                        <div class="col-sm-12">
                            <h2>Editar Produto</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('products.update', $produto->id) }}" method="post">
                                @csrf
                                @method('put')

                                <label for="Nome">Nome do produto</label>
                                <input type="text" name="name" id="name" placeholder="Produto"
                                    class="form-control" value="{{ $produto->name ?? old('name') }}"><br>
                                <label for="Nome">Descrição</label>
                                <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrição"
                                    class="form-control">{{ $produto->description ?? old('description') }}</textarea>
                                <label for="Nome">Preço</label>
                                <input type="number" name="price" id="price" class="form-control"
                                    value={{ $produto->price ?? old('price') }}>
                                <label for="Nome">Quantidade</label>
                                <input type="number" name="quantity" id="quantity"
                                    class="form-control"value={{ $produto->quantity ?? old('quantity') }}>
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
