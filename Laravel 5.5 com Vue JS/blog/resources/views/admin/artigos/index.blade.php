@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
            {{-- adicionando botão do Modal --}}
            {{-- 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meuModalTeste">Large modal</button>
            --}}

            {{-- segue abaixo meu novo button, o qual irá ser renderizado à partir de componente --}}
            {{-- 
                testando estilo Link: 
                <modallink tipo="link" nome="meuModalTeste" titulo="Criar" css=""></modallink>
            --}}
            {{-- 
                testando estilo button:
                <modallink tipo="button" nome="meuModalTeste" titulo="Criar" css=""></modallink>
            --}}
            {{-- 
                testando estilo default: 
                <modallink tipo="button3253425526" nome="meuModalTeste" titulo="Criar" css=""></modallink>
            --}}

            <tabela-lista 
                v-bind:titulos="['#','Título', 'Descrição']"
                {{-- 
                [SUBSTITUIÇÃO]: essa era a antiga forma com a qual eu estava passando minha lista de artigos,
                na linha debaixo, eu insiro minha nova, passando todos os meus artigos através da minha 
                variável $listaArtigos
                
                v-bind:itens="[[1,'PHP OO', 'C- Curso de PHP Orientado à Objetos'], [2,'Vue JS', 'A- Curso de Vue JS'], [3, 'Javascript', 'B- Ensino básico de Javascript']]" 
                --}}
                v-bind:itens="{{$listaArtigos}}"
                ordem="asc" 
                ordemcol="1"
                criar="#criar" 
                detalhe="#detalhe" 
                editar="#editar" 
                deletar="#deletar"
		token="7887522323"
                modal="sim"
            ></tabela-lista>
        </painel>
    </pagina>

    {{-- testando meu modal --}}
    {{-- 
    <modal nome="meuModalTeste">
        <painel titulo="Adicionar">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </painel>
    </modal> 
    --}}

{{-- ################################################################ Modal ADICIONAR ################################################################ --}}

    <modal nome="adicionar">
        <painel titulo="Adicionar">
            <formulario
            css=""
            action="#"
            method="put"
            enctype="multipart/form-data"
            token="12345"
            >

                {{-- TÍTULO --}}
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>

                {{-- DESCRIÇÃO --}}
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button class="btn btn-info">Adicionar</button>
            </formulario>
        </painel>
    </modal>
    
{{-- ################################################################ Modal EDITAR ################################################################ --}}

    <modal nome="editar">
        <painel titulo="Editar">
            <formulario
            css=""
            action="#"
            method="put"
            enctype="multipart/form-data"
            token="12345"
            >
                {{-- TÍTULO --}}
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" v-model="$store.state.item.titulo" placeholder="Título">
                </div>                                                                      {{--                    /\
                                                                                                                    |
                                                                                            esses nomes aqui foram os que eu defini na variável 
                                                                                            $listaArtigos em ArtigosController.php                  --}}
                {{-- DESCRIÇÃO --}}                                                       {{--                             |                        --}}
                <div class="form-group">                                                  {{--                            |                         --}}
                    <label for="descricao">Descrição</label>                              {{--                           \/                         --}}
                    <input type="text" class="form-control" id="descricao" name="descricao" v-model="$store.state.item.descricao" placeholder="Descrição">
                </div>
                <button class="btn btn-info">Atualizar</button>
            </formulario>
        </painel>
    </modal>

{{-- ################################################################ Modal DETALHE ################################################################ --}}

<modal nome="detalhe">
    <painel v-bind:titulo="$store.state.item.titulo">
        <p>@{{$store.state.item.descricao}}</p>
    </painel>
</modal>



@endsection
