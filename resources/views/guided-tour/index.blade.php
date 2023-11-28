@extends('layouts.layout')
@section('main')
    <main>




        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Visita Guiada</h2>
                </div>

                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="{{ route('home') }}" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>
                            <li class="trail-item trail-end">
                                <span>Visita Guiada</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content">
            <div class="wpb_wrapper">
                <div class="row d-flex justify-content-center">
                    @include('guided-tour.partials.circle', ['icon'=> 'fa-solid fa-calendar-days'])
                </div>


                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold mb-3">
                            Agende uma Visita
                        </h1>

                        <p class="text-center">
                            O agendamento para grupos acima de 10 (dez) pessoas poderá ser feito através do endereço:  <a href="mailto:cultura@alerj.rj.gov.br" target="_blank">cultura@alerj.rj.gov.br</a>.
                        <br>
                            A visitação para grupos e/ou escolas só poderá ser realizada em dois horários: <span class="fw-bold">às 11h e 14 horas</span>.
                        </p>


                        <h4 class="text-center mt-5">
                            ATENÇÃO
                        </h4>
                        <p class="text-center">
                            Em virtude da agenda oficial da Assembleia Legislativa do Estado do Rio de Janeiro (Alerj) e de seus parlamentares a visitação ao palácio poderá ser cancelada.
                        </p>
                        <p class="text-center">
                            Para maiores informações ligar <span class="fw-bold">(21) 2588-1251</span>
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center my-5">
                    <div class="col col-lg-8 text-center">
                        <div class="card bg-light py-3">
                            <h5 class="fw-bold mt-4">
                                Funcionamento do Palácio Tiradentes
                            </h5>
                            <p>
                                De Segunda à Sexta-feira, das 10h às 17h. <br>
                                <span class="fw-bold">
                                    Tel: (21) 2588-1251
                                </span>
                            </p>
                            <p>
                                Rua Primeiro de Março, s/nº. Praça XV. Centro – RJ
                            </p>
                            <p>
                                <em>
                                    O acesso para cadeirantes é pela Rua Dom Manuel, s/nº, atrás do palácio.
                                </em>
                            </p>

                            <p class="fw-bold">
                                ENTRADA FRANCA
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>


{{--

        <p style="text-align: center;">O agendamento poderá ser feito através do seguinte endereço:<br>
            <a href="mailto:cultura@alerj.rj.gov.br" target="_blank">cultura@alerj.rj.gov.br</a></p>
        <h3 style="text-align: center;"><span style="font-family: georgia, serif; font-size: large;">Horários</span></h3>
        <p style="text-align: center;"><span style="font-family: georgia, serif; font-size: large;">De Segunda a Sexta-feira, das 10h às 17h.<br>
Tel: (21) 2588-1251</span></p>
        <h3 style="text-align: center;"><span style="font-family: georgia, serif; font-size: large;">Palácio Tiradentes</span></h3>
        <p style="text-align: center;"><span style="font-family: georgia, serif; font-size: large;">Rua Primeiro de Março, s/nº. Praça XV. Centro – RJ</span></p>
        <p style="text-align: center;"><span style="font-family: georgia, serif; font-size: large;"><br>
O acesso para cadeirantes é pela Rua Dom Manuel, s/nº, atrás do palácio.</span></p>

--}}








        <div class="row d-flex justify-content-center mb-5">
            <div class="col-12">
                <div
                    class="mt-5 vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_dotted vc_sep_pos_align_center vc_sep_color_grey vc_separator-has-text">
                    <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                    <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                </div>
            </div>
        </div>




        <div class="row mb-2 text-center">
            <div class="col-md-12 page-title">
                <h2>PALÁCIO TIRADENTES</h2>
                <h6>Lugar de memória do parlamento brasileiro.</h6>
            </div>
        </div>

        <div class="row">
            <div class="col texto-3-colunas">
                <p>
                    Visitar os corredores do <span class="fw-bold">Palácio Tiradentes</span> é fazer um passeio pela tradição parlamentar brasileira. Graças ao projeto da Visita Guiada, o público pode acompanhar passo a passo todos os acontecimentos importantes que marcaram a existência da edificação inaugurada em 06 de maio de 1926. O visitante vai descobrir que não está apenas caminhando por um respeitável marco arquitetônico da “Belle Époque” carioca, mas também pelo mais importante referencial da democracia brasileira.
                </p>
                <p>
                    A cada passo, o tour pela história prossegue, conduzindo o público até a abertura da Assembleia Geral Legislativa do Império, em 1826, quando o edifício colonial onde funcionava a cadeia pública, mais tarde denominada de “Cadeia Velha”, foi escolhido para ser a sede da Câmara dos Deputados. Porém, o tempo parece avançar pelos longos corredores em piso mosaico francês sob as narrações dos guias até a Proclamação da República (15Nov1889), e a instalação da nova Câmara dos Deputados, agora republicana, no prédio da velha cadeia.
                </p>
                <p>
                    O ano de 1922 é marcado pela demolição da Cadeia Velha, e ao visitante é apresentada a maquete da suntuosa nova sede da Câmara dos Deputados: o <span class="fw-bold">Palácio Tiradentes</span>, inaugurado em noite de gala no dia 06 de maio de 1926, cuja solenidade foi prestigiada com a visita das personalidades mais ilustres do país.
                </p>
                <p>
                    A história do <span class="fw-bold">Palácio Tiradentes</span> vai se revelando em detalhes aos olhos do público atento a narrativa sobre o ano de 1934, onde o lugar que reafirma a sua tradição democrática, abriga a Assembleia Nacional Constituinte.
                </p>
                <p>
                    O público é levado a assistir a democracia sofrer um terrível golpe, em 1937, com o fechamento do <span class="fw-bold">Palácio Tiradentes</span> e da Câmara dos Deputados durante a ditadura do presidente Getúlio Vargas.
                </p>
                <p>
                    Seguindo a história, passando pelo plenário Barbosa Lima Sobrinho, pela Sala do Café e o Salão Nobre, entre outras dependências, é possível rememorar o fim da tirania Vargas e o retorno triunfal da soberania popular, com a instalação da Constituinte de 1946. A partir desse ponto, o <span class="fw-bold">Palácio Tiradentes</span> passa a ser a sede da Câmara dos Deputados, condição que mantém até a capital do país se mudar para Brasília (21Abr1960).
                </p>
                <p>
                    O guia conduz o visitante até o surgimento do novo Estado do Rio de Janeiro, em 1975, com a fusão do estado da Guanabara, quando finalmente o <span class="fw-bold">Palácio Tiradentes</span> se transforma na sede da Assembleia Legislativa do Estado do Rio de Janeiro (Alerj), a Casa das leis e da cidadania do povo Fluminense, até que em 21 de Julho de 2021, os parlamentarem se mudam para o prédio do extinto Banco do Estado do Rio de Janeiro (Banerj), na Rua da Ajuda, nº 5, no Centro.
                </p>
            </div>
        </div>




        </div>



        <div class="bg-visitas mt-4">
            <div class="row">
                <div class="col-sm-12 mb-4 mt-4">
                    <div class="d-flex justify-content-center">
                        <div class="d-inline-flex align-items-center bg-mulled_wine rounded-circle p-4">

                            <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=qKSEoXtABUubrdA1bJC4ZeC5IlxGxd9Ig9F3BOiknppUNlIxTVc1OVJUWllZV0hJUEwxMkdERTlZVy4u">
                                @include('guided-tour.partials.circle', ['icon'=> 'fa-solid fa-calendar-days'])
                            </a>

                            <a class="vc_icon_element-link" href="https://forms.office.com/Pages/ResponsePage.aspx?id=qKSEoXtABUubrdA1bJC4ZeC5IlxGxd9Ig9F3BOiknppUNlIxTVc1OVJUWllZV0hJUEwxMkdERTlZVy4u" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-md-6">
                    <div class="text-center mt-4">
                        <div class="vc_sep_holder vc_sep_holder_l">
                            <span class="vc_sep_line bg-grey"></span>
                        </div>

                        @include('guided-tour.partials.circle', ['icon'=> 'fa-solid fa-location-dot fa-2x text-chino', 'iconSize'=>'10px', 'circleSize'=>'50px'])
                    </div>
                    <div class="text-center mt-2">
                        <strong>Endereço</strong>
                    </div>
                    <div class="text-center mt-2">
                        <p>Rua Primeiro de Março, s/n – Praça XV – Rio de Janeiro<br>
                            Informações e visitas em grupo: (21) 2588-1251</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center mt-4">
                        <div class="vc_sep_holder vc_sep_holder_l">
                            <span class="vc_sep_line bg-grey"></span>
                        </div>
                        @include('guided-tour.partials.circle', ['icon'=> 'fa-regular fa-clock', 'iconSize'=>'25px', 'circleSize'=>'50px'])
                    </div>
                    <div class="text-center mt-2">
                        <strong>Horários</strong>
                    </div>
                    <div class="text-center mt-2">
                        <p>Segunda-feira a Sexta-feira: das 10h às 17h.</p>
                        <div id="acfifjfajpekbmhmjppnmmjgmhjkildl" class="acfifjfajpekbmhmjppnmmjgmhjkildl"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
