@csrf
<label for="Nome">Nome do produto</label>
<input type="text" name="name" id="name" placeholder="Produto" required
    class="form-control" value="{{ $produto->name ?? old('name') }}"><br>
<label for="Nome">Descrição</label>
<textarea name="description" id="description" cols="30" rows="10" placeholder="Descrição"
    class="form-control">{{ $produto->description ?? old('description') }}</textarea>
<label for="Nome">Preço</label>
<input type="number" name="price" id="price" class="form-control" required
    value={{ $produto->price ?? old('price') }}>
<label for="Nome">Quantidade</label>
<input type="number" name="quantity" id="quantity" required
    class="form-control"value={{ $produto->quantity ?? old('quantity') }}><br>
<button type="submit" class="btn btn-primary">Enviar</button>
