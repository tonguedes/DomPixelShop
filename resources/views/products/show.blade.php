@extends('inicio')
@section('conteudo')

    <h1>Detalhes</h1>
    <div class="table-responsive">
    <table class="table table-sm  table-striped"><br>
        <tr>
            <th scope="col">Nomedo produto</th>
            <th scope="col">Descrição</th>
            <th scope="col">preço</th>
            <th scope="col">Quantidade</th>
        </tr>
        <tbody>
            <tr>
                <td>{{ $produto->name }}</td>
                <td>{{ $produto->description }}</td>
                <td>R${{ $produto->price }}</td>
                <td>{{ $produto->quantity }} </td>
        </tbody>
    </table>
</div>
    <hr>
    <form action="{{ route('products.destroy', $produto->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button class="btn btn-danger" type="submit">Excluir o Produto: {{ $produto->name }}</button>
    </form>
@endsection
