@extends('welcome')
@section('conteudo')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row" text-center>
                        <div class="col-sm-12">
                            <h2>Produtos</h2>
                            <a href="{{ route('products.create') }}" class="btn btn-primary">Adicionar Produto</a>
                        </div>
                        <div class="row ">
                            <div class="col-sm-12">
                                <table class="table table-sm col-sm-12 table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nomedo produto</th>
                                            <th scope="col">Descrição</th>
                                            <th scope="col">preço</th>
                                            <th scope="col">Quantidade</th>
                                        </tr>
                                    </thead>
                                    @foreach ($produtos as $produto)
                                        <tbody>
                                            <tr>
                                                <td>{{ $produto->name }}</td>
                                                <td>{{ $produto->description }}</td>
                                                <td>R${{ $produto->price }}</td>
                                                <td>{{ $produto->quantity }}

                                                </td>
                                                <td>
                                                    <a type="button"class="btn btn-primary btn-sm"
                                                        href="{{ route('products.show', $produto->id) }}">Ver</a>
                                                </td>
                                                <td> <a type="button" class="btn btn-secondary btn-sm"
                                                        href="{{ route('products.edit', $produto->id) }}">Editar</a></td>
                                                <td>
                                                    <form action="{{ route('products.destroy', $produto->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger btn-sm"
                                                            type="submit">Excluir</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
