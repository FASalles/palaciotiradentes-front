<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('timeline_chapters')->insert([
            [
                'title' => 'O PALÁCIO TIRADENTES',
                'text' => '<p>Muito antes da construção do Palácio Tiradentes, o local onde hoje está a sede do Poder Legislativo do Estado do Rio de Janeiro abrigava um edifício conhecido como CASA DE CÂMARA E CADEIA.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),

            ],
            [
                'title' => '1631',
                'text' => '<p>A origem da Casa de Câmara e Cadeia remonta ao ano de 1631, quando os membros do Senado e da Câmara do Rio de Janeiro solicitaram a construção de um edifício especialmente projetado para servir aos TRABALHOS DO LEGISLATIVO. Mas, na época, era comum nas cidades coloniais da América portuguesa que esses prédios também abrigassem prisões. Com o passar dos anos, a Casa de Câmara e Cadeia ficou mais conhecida como Cadeia Velha.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1782',
                'text' => '<p>Tiradentes fica preso durante três anos na Cadeia Velha antes se ser levado à forca na manhã de sábado, 21 de abril. Ele caminhou em procissão até a Praça da Lampadosa (atual Tiradentes), onde foi morto. A leitura da sentença estendeu-se por dezoito horas, após a qual houve discursos de aclamação à rainha.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1808',
                'text' => '<p>Em 1808, quando a CORTE PORTUGUESA TRANSFERIU-SE PARA O BRASIL, fugindo das invasões napoleônicas na Península Ibérica, a família real se estabeleceu no Paço Real (hoje Paço Imperial) e seus empregados foram instalados no prédio ao lado, na chamada Cadeia Velha. Essas construções ficavam no centro político e econômico do Rio de Janeiro da época, o Largo do Carmo.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1822',
                'text' => '<p>Na época do Império, o Rio de Janeiro era a capital do Brasil e, após a independência do país, em 1822, o prédio da Cadeia Velha abrigou a Assembleia Constituinte. Durante todo o período em que o Brasil foi governado sob um regime monárquico, a Cadeia Velha foi um lugar privilegiado de importantes acontecimentos políticos e legislativos, como a VOTAÇÃO E APROVAÇÃO DA LEI ÁUREA, que viria a ser assinada em 13 de maio de 1888, promovendo, oficialmente, a abolição da escravidão no Brasil.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1902',
                'text' => '<p>Em 1902, o engenheiro Francisco Pereira Passos assumiu a Prefeitura do Rio de Janeiro, a convite do presidente Rodrigues Alves, e pôs em prática um antigo plano: TRANSFORMAR O RIO DE JANEIRO EM UMA CIDADE MODERNA, elegante, sintonizada com o modelo de capitais europeias, como Paris. Assim, Pereira Passos transformou a cidade em um enorme canteiro de obras, removendo cortiços, alargando ruas e decretando leis sobre os costumes. O prefeito queria fazer da cidade um lugar mais civilizado e passou a coibir modos considerados grosseiros ou insalubres. Proibiu, por exemplo, o ato de cuspir no chão; a mendicância; a condução de vacas pelas ruas para a venda de leite fresco; e a venda de pedaços de carne em tabuleiros, que eram montados no meio das calçadas.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1914',
                'text' => '<p>Em 1914, o prédio da Cadeia Velha se encontrava em péssimas condições. Havia infiltrações e rachaduras nas estruturas. Era impraticável trabalhar ali e a CÂMARA FOI TRANSFERIDA PARA O PALÁCIO MONROE, que ficava na Cinelândia. A fachada deteriorada da Cadeia Velha era o símbolo da perda de importância do poder Legislativo na República Velha.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1921',
                'text' => '<p>Sob a alegação de que a Cadeia Velha era um triste retrato de nosso passado colonial, que não condizia com a face moderna da cidade que se projetava para o mundo, em 25 de dezembro de 1921, foi aprovado um projeto dos arquitetos Archimedes Memória e Francisco Couchet para demoli-la e construir no seu lugar a nova sede do Legislativo. No ano seguinte, o prédio da Cadeia Velha veio abaixo e, quatro anos depois, em 6 de maio de 1926, foi INAUGURADO O PALÁCIO TIRADENTES, na mesma data em que se comemorava o centenário da instalação da primeira Câmara Legislativa do Império. O prédio foi assim batizado em homenagem à memória de Joaquim José da Silva Xavier, o Tiradentes, condenado à morte por lutar contra a opressão da coroa portuguesa, defendendo ideais republicanos.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1922',
                'text' => '<p>Em 1922, no centenário de nossa Independência, o Rio de Janeiro se propôs a receber um grande evento internacional, a chamada Exposição Universal. Nesse contexto, o Palácio Monroe, onde estavam trabalhando os deputados, foi requisitado para abrigar parte da enorme exposição que estava sendo organizada. Os deputados tiveram de se mudar mais uma vez e A CÂMARA FOI INSTALADA NA BIBLIOTECA NACIONAL. Tendo em vista as constantes mudanças da sede do Parlamento brasileiro, os deputados conseguiram a aprovação do governo federal para a construção de uma sede definitiva do Poder Legislativo.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1926',
                'text' => '<p>É inaugurado o Palácio Tiradentes, ao custo de 15 mil réis – a metade do custo do Palácio Pedro Ernesto, atual Câmara dos Vereadores, na Cinelândia. O então presidente da Câmara, Arnolfo de Azevedo, ordenou economia: toda a estrutura é de concreto e tijolo. Até as estátuas são de massa. Muitos dos móveis foram doados pelo estado de São Paulo e pelos ricos cafeicultores da época.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1934',
                'text' => '<p>Após a Revolução de 30, é feita a Constituição que menos durou na nossa história: apenas três anos. A ideia era promulgar uma Carta mais adequada aos novos tempos, que conferisse maior poder de participação às camadas antes excluídas pelo poder exercido pelas oligarquias de Minas e São Paulo (política do Café com leite).</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1937',
                'text' => '<p>Em 1937, às vésperas das eleições, o então presidente do Brasil, Getúlio Vargas, FECHOU O CONGRESSO e estabeleceu um regime autoritário, o Estado Novo. Em lugar dos debates e da produção de leis, o Palácio Tiradentes passou a abrigar o Departamento de Imprensa e Propaganda (DIP), órgão responsável pelo controle da informação nos meios de comunicação.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1945',
                'text' => '<p>Com a saída de Vargas, em 1945, o Palácio Tiradentes novamente pôde abrigar uma Assembleia Constituinte, que permitiria ao Brasil construir uma NOVA FASE POLÍTICA, com a formação de partidos políticos e a estruturação de instituições democráticas.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1960',
                'text' => '<p>Sob o argumento de que era preciso desenvolver o interior do País, Juscelino Kubitscheck transfere a capital para Brasília e o Palácio Tiradentes passa a abrigar a Assembleia Legislativa do Estado da Guanabara.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1968',
                'text' => '<p>Mesmo após a transferência da ALEG para o antigo edifício da Câmara Municipal, o Palácio Tiradentes permaneceu como uma das principais referências da política na cidade. Na foto, os manifestantes da Passeata dos Cem Mil, realizada no dia 26 de junho de 1968, concentram-se nas proximidades do Palácio. Foto Arquivo Nacional - Arquivo do Correio da Manhã.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '1975',
                'text' => '<p>O Parlamento do Brasil permaneceu no Palácio Tiradentes até 1960, quando a capital do país foi transferida para Brasília. Com isso, o Palácio se tornou a sede da ASSEMBLEIA LEGISLATIVA DO ESTADO DA GUANABARA (ALEG) e, no ano de 1975, com a fusão dos estados da Guanabara e do Rio de Janeiro, passou a abrigar a Assembleia Legislativa do Estado do Rio de Janeiro (Alerj), onde funciona até hoje.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => 'ANOS 2000',
                'text' => '<p>É feita a primeira grande restauração do Palácio Tiradentes e inaugurada a Exposição Permanente: Palácio Tiradentes, lugar de memória do parlamento Brasileiro. Inicia-se, nesta fase, um processo de maior abertura das portas do Palácio para a sociedade que perdura até os dias atuais. A Cultura passa a ocupar mais espaço, com encenação de peças nas escadarias, concertos e exposições gratuitas. É criado o número 0800 do Alô, Alerj!; vantagens e super salários de servidores são cortados e o site da casa vira uma agênbcia de notícias. O Parlamento fluminense passa a ser destacar como de vanguarda: é o primeiro do Brasil a aprovar leis como o passe livre para estudantes (1999); fim do voto secreto (2001); cotas raciais em universidades públicas (2003), proibição de contratação de parentes nos três poderes (2005) e cria um aplicativo de celular (Carteirada do Bem) onde o cidadão pode conhecer leis que fazem parte do seu dia a dia e cobrar seu direito (2015).</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '2016',
                'text' => '<p>Nos 90 anos do Palácio, a Alerj promove, com recursos economizados durante quatro anos do seu orçamento, a segunda grande reforma externa do prédio, castigado pelo tempo e por depredações. A intenção é fazer do Palácio um Museu Vivo, onde a história acontece todos os dias.</p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
            [
                'title' => '2021',
                'text' => '<p>Para celebrar os 95 anos do Palácio Tiradentes, uma parceria
                entre as subdiretorias de Cultura e Comunicação Social da ALERJ
                apresenta a exposição virtual “Meu Palácio Tiradentes”.
                Programada inicialmente para ser exibida no Salão Nobre, ela
                precisou ser readaptada em respeito às normas sanitárias de
                distanciamento social. A apresentação completa está disponível
                em&nbsp;<a href="http://www.alerj.rj.gov.br/" target="_blank" rel="noreferrer" data-saferedirecturl="https://www.google.com/url?q=http://www.alerj.rj.gov.br/&amp;source=gmail&amp;ust=1648127424177000&amp;usg=AOvVaw1H3mbV0-cpenRyvo968Xe9"><b>www.alerj.rj.gov.br</b></a><u></u>
            </p>',
                'published' => true,
                'created_at' => now(),
                'publish_start_date' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('timeline_chapters')->whereIn('title', ['O PALÁCIO TIRADENTES', '1631', '1782', '1808', '1822', '1902', '1914', '1921', '1922', '1926', '1934', '1937', '1945', '1960', '1968', '1975', 'ANOS 2000', '2016', '2021'])->delete();
    }
};
