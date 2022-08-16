@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Linha do Tempo</h2>
                </div>

                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="/" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>
                            <li class="trail-item trail-end">
                                <span>Linha do Tempo</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content">
            <div class="row">
                <div class="cool_timeline">
                    <h1 class="timeline-main-title center-block">Através da História</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline cooltimeline_cont">
                                <dl>
                                    <dt>2016</dt>
                                    <dd id="1" class="pos-right clearfix even full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">O Palácio Tiradentes</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Muito antes da construção&nbsp;do Palácio Tiradentes,&nbsp;o local
                                                        onde hoje está a sede&nbsp;do Poder Legislativo do Estado&nbsp;do
                                                        Rio de Janeiro abrigava&nbsp;um edifício conhecido como&nbsp;CASA DE
                                                        CÂMARA E CADEIA.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="2" class="pos-left clearfix odd full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1631</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p><img src="/images/CADEIA-VELHA-1.jpg" class="img-fluid mb-3"
                                                            alt="CADEIA-VELHA">
                                                        A origem da Casa de Câmara e Cadeia remonta ao ano de 1631, quando
                                                        os membros do Senado e da Câmara do Rio de Janeiro solicitaram a
                                                        construção de um edifício especialmente projetado&nbsp;para servir
                                                        aos TRABALHOS DO LEGISLATIVO. Mas, na época, era comum nas cidades
                                                        coloniais da América portuguesa que esses prédios também abrigassem
                                                        prisões. Com o passar dos anos,&nbsp;a Casa de Câmara e Cadeia ficou
                                                        mais conhecida como Cadeia Velha.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="3" class="pos-right clearfix even full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1782</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Tiradentes fica preso durante três anos na Cadeia Velha antes se ser
                                                        levado à forca na manhã de sábado, 21 de abril. Ele caminhou em
                                                        procissão até a Praça da Lampadosa (atual Tiradentes), onde foi
                                                        morto. A leitura da sentença estendeu-se por dezoito horas, após a
                                                        qual houve discursos de aclamação à rainha.
                                                        &nbsp;
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="1" class="pos-left clearfix odd full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1808</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Em 1808, quando a CORTE PORTUGUESA TRANSFERIU-SE PARA O BRASIL,
                                                        fugindo das invasões napoleônicas na Península Ibérica, a família
                                                        real se estabeleceu no Paço Real (hoje Paço Imperial) e seus
                                                        empregados foram instalados no prédio ao lado, na chamada Cadeia
                                                        Velha. Essas construções ficavam no centro político e econômico do
                                                        Rio de Janeiro da época, o Largo do Carmo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="2" class="pos-right clearfix even full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1822</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Na época do Império, o Rio de Janeiro era a capital do Brasil e, após
                                                        a independência do país, em 1822, o prédio da Cadeia Velha abrigou a
                                                        Assembleia Constituinte. Durante todo o período em que o Brasil foi
                                                        governado sob um regime monárquico, a Cadeia Velha foi um lugar
                                                        privilegiado de importantes acontecimentos políticos e legislativos,
                                                        como a VOTAÇÃO E APROVAÇÃO DA LEI ÁUREA, que viria a ser assinada em
                                                        13 de maio de 1888, promovendo, oficialmente, a abolição da
                                                        escravidão no Brasil.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="3" class="pos-left clearfix odd full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1902</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Em 1902, o engenheiro Francisco Pereira Passos assumiu a Prefeitura
                                                        do Rio de Janeiro, a convite do presidente Rodrigues Alves, e pôs em
                                                        prática um antigo plano: TRANSFORMAR O RIO DE JANEIRO EM UMA CIDADE
                                                        MODERNA, elegante, sintonizada com o modelo de capitais europeias,
                                                        como Paris. Assim, Pereira Passos transformou a cidade em um enorme
                                                        canteiro de obras, removendo cortiços, alargando ruas e decretando
                                                        leis sobre os costumes. O prefeito queria fazer da cidade um lugar
                                                        mais civilizado e passou a coibir modos considerados grosseiros ou
                                                        insalubres. Proibiu, por exemplo, o ato de cuspir no chão; a
                                                        mendicância; a condução de vacas pelas ruas para a venda de leite
                                                        fresco; e a venda de pedaços de carne em tabuleiros, que eram
                                                        montados no meio das calçadas.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="1" class="pos-right clearfix even full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1914</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p><img class="img-fluid mb-3" src="/images/PalacioMonroe.jpg"
                                                            alt="PalacioMonroe" width="1000" height="759">Em 1914, o
                                                        prédio da Cadeia Velha se encontrava em péssimas condições. Havia
                                                        infiltrações e rachaduras nas estruturas.
                                                        Era impraticável trabalhar ali e a CÂMARA FOI TRANSFERIDA PARA O
                                                        PALÁCIO MONROE, que ficava na Cinelândia. A fachada deteriorada da
                                                        Cadeia Velha era o símbolo da perda de importância do poder
                                                        Legislativo na República Velha.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="2" class="pos-left clearfix odd full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1921</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p><img class="img-fluid mb-3" src="/images/desenho_Couchet-300x191.png"
                                                            alt="desenho_Couchet" width="532" height="339">
                                                        Sob a alegação de que a Cadeia Velha era um triste retrato de nosso
                                                        passado colonial, que não condizia com a face moderna da cidade que
                                                        se projetava para o mundo, em 25 de dezembro de 1921, foi aprovado
                                                        um projeto dos arquitetos Archimedes Memória e Francisco Couchet
                                                        para demoli-la e construir no seu lugar a nova sede do Legislativo.
                                                        No ano seguinte, o prédio da Cadeia Velha veio abaixo e, quatro anos
                                                        depois, em 6 de maio de 1926, foi INAUGURADO O PALÁCIO TIRADENTES,
                                                        na mesma data em que se comemorava o centenário da instalação da
                                                        primeira Câmara Legislativa do Império. O prédio foi assim batizado
                                                        em homenagem à memória de Joaquim José da Silva Xavier, o
                                                        Tiradentes, condenado à morte por lutar contra a opressão da coroa
                                                        portuguesa, defendendo ideais republicanos.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="3" class="pos-right clearfix even full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1922</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p><img class="img-fluid mb-3" src="/images/Biblioteca-Nacional-1.jpg"
                                                            alt="Biblioteca Nacional" width="1513" height="997">Em
                                                        1922, no centenário de nossa Independência, o Rio de Janeiro se
                                                        propôs a receber um grande evento internacional, a chamada Exposição
                                                        Universal. Nesse contexto, o Palácio Monroe, onde estavam
                                                        trabalhando os deputados, foi requisitado para abrigar parte da
                                                        enorme exposição que estava sendo organizada. Os deputados tiveram
                                                        de se mudar mais uma vez e A CÂMARA FOI INSTALADA NA BIBLIOTECA
                                                        NACIONAL. Tendo em vista as constantes mudanças da sede do
                                                        Parlamento brasileiro, os deputados conseguiram a aprovação do
                                                        governo federal para a construção de uma sede definitiva do Poder
                                                        Legislativo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="1" class="pos-left clearfix odd full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1926</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p><img class="img-fluid mb-3"
                                                            src="/images/inauguracao-do-palacio.jpg"
                                                            alt="INAUGURAÇÃO DO PALÁCIO" width="960"
                                                            height="825">É inaugurado o Palácio Tiradentes, ao custo de
                                                        15 mil réis – a metade do custo do Palácio Pedro Ernesto, atual
                                                        Câmara dos Vereadores, na Cinelândia. O então presidente da Câmara,
                                                        Arnolfo de Azevedo, ordenou economia: toda a estrutura é de concreto
                                                        e tijolo. Até as estátuas são de massa. Muitos dos móveis foram
                                                        doados pelo estado de São Paulo e pelos ricos cafeicultores da
                                                        época.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="2" class="pos-right clearfix even full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1934</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Após a Revolução de 30, é feita a Constituição que menos durou na
                                                        nossa história: apenas três anos. A ideia era promulgar uma Carta
                                                        mais adequada aos novos tempos, que conferisse maior poder de
                                                        participação às camadas antes excluídas pelo poder exercido pelas
                                                        oligarquias de Minas e São Paulo (política do Café com leite).</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="3" class="pos-left clearfix odd full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1937</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Em 1937, às vésperas das eleições, o então presidente do Brasil,
                                                        Getúlio Vargas, FECHOU O CONGRESSO e estabeleceu um regime
                                                        autoritário, o Estado Novo. Em lugar dos debates e da produção de
                                                        leis, o Palácio Tiradentes passou a abrigar o Departamento de
                                                        Imprensa e Propaganda (DIP), órgão responsável pelo controle da
                                                        informação nos meios de comunicação.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="1" class="pos-right clearfix even full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1945</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Com a saída de Vargas, em 1945, o Palácio Tiradentes novamente pôde
                                                        abrigar uma Assembleia Constituinte, que permitiria ao Brasil
                                                        construir uma NOVA FASE POLÍTICA, com a formação de partidos
                                                        políticos e a estruturação de instituições democráticas.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="2" class="pos-left clearfix odd full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1960</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Sob o argumento de que era preciso desenvolver o interior do País,
                                                        Juscelino Kubitscheck transfere a capital para Brasília e o Palácio
                                                        Tiradentes passa a abrigar a Assembleia Legislativa do Estado da
                                                        Guanabara.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="3" class="pos-right clearfix even full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1968</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p><img class="img-fluid mb-3"
                                                            src="/images/passeata-100mil-300x161.jpg"
                                                            alt="passeata-100mil" width="532" height="286">
                                                        Mesmo após a transferência da ALEG para o antigo edifício da Câmara
                                                        Municipal, o Palácio&nbsp;Tiradentes permaneceu como uma das
                                                        principais referências da política na cidade.&nbsp;Na foto, os
                                                        manifestantes da Passeata dos Cem Mil, realizada no dia 26 de
                                                        junho&nbsp;de 1968, concentram-se nas proximidades do Palácio.
                                                        Foto Arquivo Nacional -&nbsp;Arquivo do Correio da Manhã.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="1" class="pos-left clearfix odd full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">1975</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>O Parlamento do Brasil permaneceu no Palácio Tiradentes até 1960,
                                                        quando a capital do país foi transferida para Brasília. Com isso, o
                                                        Palácio se tornou a sede da ASSEMBLEIA LEGISLATIVA DO ESTADO DA
                                                        GUANABARA (ALEG) e, no ano de 1975, com a fusão dos estados da
                                                        Guanabara e do Rio de Janeiro, passou a abrigar a Assembleia
                                                        Legislativa do Estado do Rio de Janeiro (Alerj), onde funciona até
                                                        hoje.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="2" class="pos-right clearfix even full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">Anos 2000</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>É feita a primeira grande restauração do Palácio Tiradentes e
                                                        inaugurada a Exposição Permanente: Palácio Tiradentes, lugar de
                                                        memória do parlamento Brasileiro. Inicia-se, nesta fase, um processo
                                                        de maior abertura das portas do Palácio para a sociedade que perdura
                                                        até os dias atuais. A Cultura passa a ocupar mais espaço, com
                                                        encenação de peças nas escadarias, concertos e exposições gratuitas.
                                                        É criado o número 0800 do Alô, Alerj!; vantagens e super salários de
                                                        servidores são cortados e o site da casa vira uma agênbcia de
                                                        notícias.
                                                        O Parlamento fluminense passa a ser destacar como de vanguarda: é o
                                                        primeiro do Brasil a aprovar leis como o passe livre para estudantes
                                                        (1999); fim do voto secreto (2001); cotas raciais em universidades
                                                        públicas (2003), proibição de contratação de parentes nos três
                                                        poderes (2005) e cria um aplicativo de celular (Carteirada do Bem)
                                                        onde o cidadão pode conhecer leis que fazem parte do seu dia a dia e
                                                        cobrar seu direito (2015).
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dd id="3" class="pos-left clearfix odd full">
                                        <div class="circ"></div>
                                        <div class="events">
                                            <h4 class="events-heading">2016</h4>
                                            <div class="ctl_info event-description full">
                                                <div class="events-body">
                                                    <p>Nos 90 anos do Palácio, a Alerj promove, com recursos economizados
                                                        durante quatro anos do seu orçamento, a segunda grande reforma
                                                        externa do prédio, castigado pelo tempo e por depredações. A
                                                        intenção é fazer do Palácio um Museu Vivo, onde a história acontece
                                                        todos os dias.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                    <dl>
                                        <dt>2022</dt>
                                        <dd id="1" class="pos-right clearfix even full">
                                            <div class="circ"></div>
                                            <div class="events">
                                                <h4 class="events-heading">2021</h4>
                                                <div class="ctl_info event-description full">
                                                    <div class="events-body">
                                                        <p><img src="/images/2021-timeline-palacio.jpeg"
                                                                class="img-fluid mb-3" alt="2021-timeline-palacio">
                                                        </p>
                                                        <p>Para celebrar os 95 anos do Palácio Tiradentes, uma parceria
                                                            entre as subdiretorias de Cultura e Comunicação Social da ALERJ
                                                            apresenta a exposição virtual “Meu Palácio Tiradentes”.
                                                            Programada inicialmente para ser exibida no Salão Nobre, ela
                                                            precisou ser readaptada em respeito às normas sanitárias de
                                                            distanciamento social. A apresentação completa está disponível
                                                            em&nbsp;<a href="http://www.alerj.rj.gov.br/" target="_blank"
                                                                rel="noreferrer"
                                                                data-saferedirecturl="https://www.google.com/url?q=http://www.alerj.rj.gov.br/&amp;source=gmail&amp;ust=1648127424177000&amp;usg=AOvVaw1H3mbV0-cpenRyvo968Xe9"><b>www.alerj.rj.gov.br</b></a><u></u>
                                                        </p>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="bg-light bg-timeline text-secondary px-4 py-5 text-center">
                    <div class="py-5">
                        <h1 class="display-5 fw-bold mt-3 ">Confira como tudo começou</h1>
                        <div class="col-lg-8 mx-auto mb-5">
                            <p class="fs-5 mb-5 mt-4"> Venha mergulhar na nossa história e descubra um grande pedaço da
                                memória política do Brasil.</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <a href="/history"><button type="button" class="btn btn-primary btn-lg px-4 me-sm-3 fw-bold">Conheça a Nossa
                                    História <i class="ms-3 fa-solid fa-arrow-right"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
