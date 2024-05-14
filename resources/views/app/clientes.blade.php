@extends('site.layouts.basico') 

@section('titulo', 'Clientes')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Clientes</h1>
        </div>

        <div class="informacao-pagina">
            <div class="agradecimento-clientes">
                <h2>Agradecimento aos Nossos Clientes</h2>
                <p>A equipe da nossa empresa gostaria de expressar nossa sincera gratidão a todos os nossos clientes. Obrigado por confiar em nossos produtos/serviços e por fazer parte da nossa jornada. Estamos comprometidos em fornecer continuamente o melhor atendimento e qualidade em tudo o que fazemos.</p>
                <p>Se você não é nosso cliente ainda, estamos ansiosos para recebê-lo em nossa família de clientes satisfeitos. Entre em contato conosco para começar sua jornada conosco!</p>
            </div>


        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
