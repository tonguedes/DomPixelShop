 <h1>Listagem Dos produtos</h1>

 <ul>
     <li>{{ $produto->name }}</li>
     <li>{{ $produto->description }}</li>
     <li>{{ $produto->price }}</li>
     <li>{{ $produto->quantity }}</li>
 </ul>
 <hr>
 <form action="{{ route('products.destroy', $produto->id) }}" method="post">
     @csrf
     <input type="hidden" name="_method" value="DELETE">
     <button class="btn btn-danger" type="submit">Excluir o Produto: {{ $produto->name }}</button>
 </form>
