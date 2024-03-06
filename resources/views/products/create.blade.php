@extends('inicio')
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
                                @include('_partials.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
