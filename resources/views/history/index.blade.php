@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">História</h2>
                </div>

                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="{{route('home')}}" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>
                            <li class="trail-item trail-end">
                                <span>História</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content">
            <div class="row mb-2 text-center">
                <div class="col-md-12 page-title">
                    <h2>PALÁCIO TIRADENTES</h2>
                    <h6>Através da História</h6>
                </div>
            </div>

            <div class="row">
                <div class="col texto-3-colunas">
                    <p>
                        O terreno onde está o <span class="fw-bold">Palácio Tiradentes</span>, sede histórica da Assembleia Legislativa do Estado do Rio de Janeiro (Alerj), é um sítio histórico que guarda – desde os tempos do Brasil Colônia – grande parte da memória política do Brasil. O primeiro edifício ali construído foi por volta de  1640 e serviu para abrigar os primeiros três vereadores eleitos. O voto era indireto e o mandato durava apenas um ano. Cabia a eles cuidar da cidade e das finanças públicas. Todo o dinheiro arrecadado ficava guardado em um cofre chamado “burra”, que só podia ser aberto por três chaves: cada uma ficava com um vereador.
                    </p>

                    <p>
                        No andar abaixo do cofre público ficava a cadeia da cidade que ficou conhecida como a “Cadeia Velha” ou “Cadeia da Relação”. Foi lá onde o alferes Joaquim José da Silva Xavier – Tiradentes, ficou preso durante três dias antes de ser enforcado em 21 de abril de 1792.
                    </p>
                    <p>
                        Preso de 10 de maio de 1789, numa casa na Rua dos Latoeiros, atual Rua Gonçalves Dias, Tiradentes foi imediatamente levado para uma fortaleza na Ilha das Cobras, permanecendo ali quase três anos, exatos 1.072 dias. Saiu em 17 de abril de 1792, para a “Cadeia da Relação'', demolida para dar  lugar à Câmara dos Deputados, e depois, ao <span class="fw-bold">Palácio Tiradentes</span>. Somente em 1922, já em situação muito precária, a edificação da velha cadeia é demolida para dar lugar a um grande palácio, cuja arquitetura lembra muito o Grand Palais de Paris.
                    </p>

                    <p>
                        Projetado em estilo eclético por Archimedes Memória e Francisco Couchet o <span class="fw-bold">Palácio Tiradentes</span> é inaugurado em 6 de maio de 1926, e, passa a abrigar a Câmara federal que ali funcionou de 1926 a 1960, tendo recebido para a posse todos os presidentes do período: de Washington Luiz a Juscelino Kubitscheck.
                    </p>
                    <p>
                        De 1937 a 1945, durante o Estado Novo, o Parlamento foi fechado pelo presidente Getúlio Vargas e no <span class="fw-bold">Palácio Tiradentes</span> passou a funcionar o Ministério da Justiça e o Departamento de Imprensa e Propaganda (DIP), órgão de censura do regime.
                    </p>
                    <p>
                        Em 1960, quando da transferência da capital do país para Brasília, o <span class="fw-bold">Palácio Tiradentes</span> abriga a Assembleia Legislativa do Estado da Guanabara (ALEG), que 15 anos depois, com a fusão dos estados da Guanabara e do Rio de Janeiro, passa a se chamar Assembleia Legislativa do Estado do Rio de Janeiro (ALERJ).
                    </p>

                    <p>
                        Hoje em dia, detalhes dessa rica história podem ser conhecidos através de uma Visita Guiada onde o visitante pode acompanhar passo a passo os acontecimentos que marcaram o surgimento da suntuosa edificação e descobrir que não está apenas caminhando por um importante marco arquitetônico carioca. O visitante estará conhecendo o mais importante referencial da democracia brasileira.
                    </p>
                    <p>
                        As escadarias do <span class="fw-bold">Palácio Tiradentes</span> não só abrigaram manifestações políticas e de protestos. Ao longo dos últimos anos, desde a concepção da do projeto da visita guiada (1998), esteve à disposição do público como palco para espetáculos culturais como danças, arte dramática e música.
                    </p>
                    <p>
                        Do mesmo modo, suas galerias, corredores, o plenário e o salão nobre estão abertos aos visitantes, turistas – nacionais e estrangeiros – que encontram no ali um espaço alternativo para a expressão da arte e do entretenimento.
                    </p>
                    <p class="fw-bold">
                        Visite-o!
                    </p>

                    <div class="small">
                        Fonte: Herói Brasileiro: A história dos últimos dias de Tiradentes. Robson Pereira/20.04.20100
                    </div>
                </div>
            </div>


            {{--<div class="row row-cols-3">
                <div class="col">
                    <p>
                        O terreno onde está o Palácio Tiradentes, sede histórica da Assembleia Legislativa do Estado do Rio de Janeiro (Alerj), é um sítio histórico que guarda – desde os tempos do Brasil Colônia – grande parte da memória política do Brasil. O primeiro edifício ali construído foi por volta de  1640 e serviu para abrigar os primeiros três vereadores eleitos. O voto era indireto e o mandato durava apenas um ano. Cabia a eles cuidar da cidade e das finanças públicas. Todo o dinheiro arrecadado ficava guardado em um cofre chamado “burra”, que só podia ser aberto por três chaves: cada uma ficava com um vereador.
                    </p>

                    <p>
                        No andar abaixo do cofre público ficava a cadeia da cidade que ficou conhecida como a “Cadeia Velha” ou “Cadeia da Relação”. Foi lá onde o alferes Joaquim José da Silva Xavier – Tiradentes, ficou preso durante três dias antes de ser enforcado em 21 de abril de 1792.
                    </p>
                    <p>
                        Preso de 10 de maio de 1789, numa casa na Rua dos Latoeiros, atual Rua Gonçalves Dias, Tiradentes foi imediatamente levado para uma fortaleza na Ilha das Cobras, permanecendo ali quase três anos, exatos 1.072 dias. Saiu em 17 de abril de 1792, para a “Cadeia da Relação'', demolida para dar  lugar à Câmara dos Deputados, e depois, ao Palácio Tiradentes. Somente em 1922, já em situação muito precária, a edificação da velha cadeia é demolida para dar lugar a um grande palácio, cuja arquitetura lembra muito o Grand Palais de Paris.
                    </p>
                </div>
                <div class="col">
                    <p>
                        Projetado em estilo eclético por Archimedes Memória e Francisco Couchet o Palácio Tiradentes é inaugurado em 6 de maio de 1926, e, passa a abrigar a Câmara federal que ali funcionou de 1926 a 1960, tendo recebido para a posse todos os presidentes do período: de Washington Luiz a Juscelino Kubitscheck.
                    </p>
                    <p>
                        De 1937 a 1945, durante o Estado Novo, o Parlamento foi fechado pelo presidente Getúlio Vargas e no Palácio Tiradentes passou a funcionar o Ministério da Justiça e o Departamento de Imprensa e Propaganda (DIP), órgão de censura do regime.
                    </p>
                    <p>
                        Em 1960, quando da transferência da capital do país para Brasília, o Palácio Tiradentes abriga a Assembleia Legislativa do Estado da Guanabara (ALEG), que 15 anos depois, com a fusão dos estados da Guanabara e do Rio de Janeiro, passa a se chamar Assembleia Legislativa do Estado do Rio de Janeiro (ALERJ).
                    </p>
                </div>
                <div class="col">
                    <p>
                        Hoje em dia, detalhes dessa rica história podem ser conhecidos através de uma Visita Guiada onde o visitante pode acompanhar passo a passo os acontecimentos que marcaram o surgimento da suntuosa edificação e descobrir que não está apenas caminhando por um importante marco arquitetônico carioca. O visitante estará conhecendo o mais importante referencial da democracia brasileira.
                    </p>
                    <p>
                        As escadarias do Palácio Tiradentes não só abrigaram manifestações políticas e de protestos. Ao longo dos últimos anos, desde a concepção da do projeto da visita guiada (1998), esteve à disposição do público como palco para espetáculos culturais como danças, arte dramática e música.
                    </p>
                    <p>
                        Do mesmo modo, suas galerias, corredores, o plenário e o salão nobre estão abertos aos visitantes, turistas – nacionais e estrangeiros – que encontram no ali um espaço alternativo para a expressão da arte e do entretenimento.
                    </p>
                    <p>
                        Visite-o!
                    </p>

                </div>
            </div>
--}}







{{--
            <div class="row">
                <div class="col-sm">
                    <div class="wpb_wrapper">
                        <p>
                            O local onde está hoje o Palácio Tiradentes é um sítio histórico que guarda – desde os tempos do Brasil Colônia – grande parte da memória política do Brasil. O primeiro edifício ali construído data de 1640 e serviu para abrigar os primeiros três vereadores eleitos. O voto era indireto e o durava apenas um ano. Cabia a eles cuidar da cidade e das finanças públicas. Todo o dinheiro arrecadado ficava guardado em um cofre chamado “burra”, que só podia ser aberto por três chaves: cada uma ficava com um vereador.
                        </p>
                        <p>
                            No andar abaixo do cofre público ficava a cadeia da cidade que ficou conhecida como a “cadeia velha”. Foi lá onde o alferes Joaquim José da Silva Xavier – Tiradentes, ficou preso durante três dias antes de ser enforcado em 21 de abril de 1792. Preso de 10 de maio de 1789, numa casa na Rua dos Latoeiros, atual Rua Gonçalves Dias, Tiradentes foi imediatamente levado para uma fortaleza na Ilha das Cobras. Lá permaneceu quase três anos, exatos 1.072 dias. Saiu em 17 de abril de 1792, para a “Cadeia da Relação'', demolida para dar lugar à Câmara dos Deputados, e depois, ao Palácio Tiradentes.
                        </p>
                        <p>
                            Quando a Coroa portuguesa aqui chegou, fugindo da invasão napoleônica, em 1808, e se instalou no Paço Imperial ao lado da “cadeia velha”, o Parlamento, que já contava com um número maior de representantes, foi deslocado para outro prédio deixando o paço receber todos os empregados da Corte Real. De volta a um dos andares da velha cadeia, a Câmara Imperial começara a protagonizar fatos memoráveis, como exemplo a assinatura da Lei Áurea, em 1888.
                        </p>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="wpb_wrapper">
                        <p>
                            Em 1922, já em situação precária, a edificação é demolida para dar lugar a um grande palácio, cuja arquitetura lembraria muito o Grand Palais de Paris. Projetado em estilo eclético por Archimedes Memória e Francisco Couchet o Palácio Tiradentes é inaugurado em 6 de maio de 1926, e, passa a abrigar a Câmara federal que ali funcionou de 1926 a 1960, tendo recebido para  a posse todos os presidentes do período: de Washington Luiz a Juscelino Kubitscheck.
                        </p>
                        <p>
                            De 1937 a 1945, durante o Estado Novo, o Parlamento foi fechado pelo presidente Getúlio Vargas e no Palácio Tiradentes passa a funcionar o Ministério da Justiça e o Departamento de Imprensa e Propaganda (DIP), órgão de censura do regime.
                        </p>
                        <p>
                            Em 1960, quando da transferência da capital do país para Brasília, o Palácio Tiradentes abriga a Assembleia Legislativa do Estado da Guanabara (ALEG) que 15 anos depois, com a fusão dos estados da Guanabara e do Rio de Janeiro, passa a se chamar Assembleia Legislativa do Estado do Rio de Janeiro (ALERJ).
                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="wpb_wrapper">
                        <p>
                            Hoje em dia, detalhes dessa rica história pode ser conhecida na exposição permanente “Palácio Tiradentes: Lugar de Memória do Parlamento Brasileiro” onde o visitante pode acompanhar passo a passo os acontecimentos que marcaram o surgimento da suntuosa edificação e descobrir que não está apenas caminhando por um importante marco arquitetônico carioca. O visitante estará conhecendo o mais importante referencial da democracia brasileira.
                        </p>
                        <p>
                            As escadarias do Palácio Tiradentes não só abrigaram manifestações políticas e de protestos. Ao longo dos últimos anos, desde a concepção da visita guiada (1998), esteve à disposição do público como palco para espetáculos culturais com danças, arte dramática, shows de música e até desfiles de moda.
                        </p>
                        <p>
                            Do mesmo modo, suas galerias, corredores, o plenário e o salão nobre estão abertos aos visitantes, turistas – nacionais e estrangeiros – que encontram no ali um espaço alternativo para a expressão da arte e do entretenimento.  Visite-o!
                        </p>
                        <p class="">
                            Fonte: Herói Brasileiro: A história dos últimos dias de Tiradentes. Robson Pereira/20.04.2010
                        </p>
                    </div>
                </div>
            </div>
            --}}

        </div>



        <!---------- | Comunicado da Diretoria | ------------>
        {{--
        <div class="container page-content">
            <div class="row mb-2 text-center">
                <div class="col-md-12 page-title">
                    <h2>Comunicado da Diretoria</h2>
                    <h6>Ipsum lorem qua estae</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <p>
                        <img src="images/foto_diretora_comunicacao.jpg" class="img-fluid">
                    </p>
                </div>
                <div class="col-8 texto-2-colunas ps-5">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nisl ante, lobortis id gravida vitae, faucibus sed velit.
                        </p>
                    <p>
                    Suspendisse consectetur, dui et lacinia finibus, nunc dolor efficitur ligula, ut pharetra sapien odio at risus. Curabitur leo risus, aliquam vel diam nec, sollicitudin placerat tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin ornare mauris nec pretium vehicula. Praesent consectetur arcu sit amet felis volutpat, vitae viverra neque aliquet. Nunc volutpat elit vitae tempus maximus.
                    </p>
                    <p>
                        Duis sapien est, posuere maximus semper vitae, cursus in dolor. Morbi congue leo a posuere rhoncus. Etiam enim risus, suscipit a rhoncus a, eleifend quis massa. Nulla suscipit libero dui, quis finibus justo efficitur id. Nam faucibus ligula at aliquet venenatis.
                    </p>
                    <p>
                        Ut a mauris ac dui porta mollis. Maecenas vel feugiat tortor, sed tristique ante. Ut luctus consequat diam, non fringilla magna ultrices a. Proin vitae lectus eget nulla elementum congue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sed mi justo.
                    </p>
                    <p>
                        Quisque faucibus arcu tellus, a finibus dolor sagittis non. Donec id euismod nunc. Morbi quis lorem at nisl gravida ultricies. Mauris eget dignissim quam, id congue nunc.
                    </p>
                    <p>
                        Proin ultricies, diam sit amet auctor semper, nisl lorem aliquet nibh, et porttitor nulla magna eu augue. Phasellus mattis eu mi non aliquet. Morbi vitae eros luctus, iaculis orci sit amet, interdum mauris.
                    </p>
                    <p>
                        Nam elementum porta consectetur. Morbi finibus vel arcu eu dapibus. Proin eget tortor a dui aliquam vehicula id convallis leo. Maecenas et turpis sem. Phasellus malesuada pharetra metus, id vulputate felis sodales quis. Nullam sem sem, rutrum eget gravida sed, cursus sed mi.</p>
                    <p>
                        Morbi dolor enim, ullamcorper et fermentum in, maximus mattis nibh. Nullam ac imperdiet lorem, vel condimentum elit.
                    </p>
                </div>
            </div>
        </div>
        --}}
        <!---------- | FIM - Comunicado da Diretoria | ------------>


        <div class="container-fluid mt-5">
            <div class="row">
                <div class="bg-light bg-history text-secondary px-4 py-5 text-center">
                    <div class="py-5">
                        <h1 class="display-5 fw-bold mt-3 ">Entre no Túnel do Tempo</h1>
                        <div class="col-lg-8 mx-auto mb-5">
                            <p class="fs-5 mb-5 mt-4">Desde os tempos do Brasil Colônia, o Palácio Tiradentes é um lugar
                                histórico que guarda um grande pedaço da memória política do Brasil.</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <a href="{{route('timeline')}}"><button type="button"
                                        class="btn btn-primary btn-lg px-4 me-sm-3 fw-bold">Conheça a Linha
                                        do Tempo <i class="ms-3 fa-solid fa-arrow-right"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
