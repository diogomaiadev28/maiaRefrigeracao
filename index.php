<?php

require_once __DIR__ . '/Controller/EmailController.php';
use Controller\EmailController;
$emailController = new EmailController();

if(isset($_POST['sendMail'])) {
    $emailController->send();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maia Refrigeração</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="templates/assets/css/index.css">
        <link rel="shortcut icon" href="templates/assets/img/logo.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <div class="upperHeader">
                <div class="contact">
                    <div class="unit">
                        <img src="templates/assets/img/telefone.png" alt="Telephone icon linking to Maia Refrigeração contact number">
                        <p>(71) 99698-4571</p>
                    </div>
                    <div class="unit">
                        <img src="templates/assets/img/email.png" alt="Email icon linking to Maia Refrigeração commercial contact">
                        <p>comercialmaiarefrigeracao@gmail.com</p>
                    </div>
                </div>
                <div class="queue">
                    <button class="queuePage"><a href="View/servicesQueue.php">Ver Serviços Em Andamento</a></button>
                    <button class="instagram"><a href="https://www.instagram.com/maiarefrigeracaooficial/" target="_blank"><img src="templates/assets/img/instagram.png" alt="Instagram social media icon linking to Maia Refrigeração Instagram profile"></a></button>
                </div>
            </div>
            <div class="lowerHeader">
                <img src="templates/assets/img/logo2.png" alt="Maia Refrigeração logo featuring red and blue text with a stylized refrigeration symbol">
                <nav>
                    <ul>
                        <li class="textLi"><a href="index.php#inicio">INÍCIO</a></li>
                        <li class="textLi"><a href="index.php#services">SERVIÇOS</a></li>
                        <li class="textLi"><a href="index.php#quote">ORÇAMENTO</a></li>
                        <li class="textLi"><a href="index.php#contacts">CONTATOS</a></li>
                        <li class="buttonLi"><a href="https://wa.me/5571996984571?text=Ol%C3%A1!%20Estava%20navegando%20no%20seu%20site%2C%20pode%20me%20ajudar%3F" target="_blank">Falar Com Técnico</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main id="inicio">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="templates/assets/img/foto1.jpg" alt="Slide 1"></div>
                    <div class="swiper-slide"><img src="templates/assets/img/foto2.jpg" alt="Slide 2"></div>
                    <div class="swiper-slide"><img src="templates/assets/img/foto3.jpg" alt="Slide 3"></div>
                </div>
                
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <img class="phoneLogo" src="templates/assets/img/logo2.png" alt="Maia Refrigeração logo featuring red and blue text with a stylized refrigeration symbol">
            <div class="getQuote">
                <h1>Peça o seu <br> orçamento</h1>
                <p>Entre em contato conosco, e solicite já seu orçamento <br> (71) 99698-4571</p>
                <a class="quoteBtn2" href="index.php#quote">Solicitar Orçamento</a>
            </div>
            <div class="main1">
                <h1>A Maia Refrigeração é referência no mercado de Refrigeradores e Climatizadores</h1>
                <p>A nossa empresa está inserida no mercado Refrigeração fornecendo soluções profissionais para empresas e famílias. Temos profissionais qualificados e profissionais que podem atender a todos os requisitos de forma oportuna e eficaz.</p>
                <div class="main2">
                    <img src="templates/assets/img/logo2.png" alt="Maia Refrigeração logo featuring red and blue text with a stylized refrigeration symbol">
                    <div class="main2Text">
                        <p>A Maia Refrigeração realiza todos os serviços relacionados com a Refrigeração moderna de forma personalizada e eficiente. Contamos com uma equipa técnica, qualificada e credenciada pelos setores de segurança e ambiental.</p>
                        <br>
                        <p>Nossa equipe de profissionais pode assegurar o desenvolvimento de soluções eficazes e rentáveis para o desenvolvimento de serviços de instalações e reparos de aparelhos refrigeradores estabelecendo assim uma parceria duradoura com os clientes. Realizamos instalações e assistências de Climatizadores como Ares-Condicionados e Refrigeradores como, manutenção e limpeza de geladeiras, frigobares, freezers, bebedouros, câmaras frias, balcões frigoríficos, ilhas de congelados e Maquinas produtoras de Sorvetes e Açaí.</p>
                    </div>
                </div>
            </div>
        </main>
        <section id="services">
            <div class="services">
                <div class="red">
                    <img src="templates/assets/img/manPointing.png" alt="A man pointing to the right, indicating direction, in a bright and inviting environment that suggests a welcoming atmosphere.">
                    <div class="blue2">
                        <h2>Serviços</h2>
                        <p>A nossa empresa fornece instalação, manutenção e serviços técnicos na área da Refrigeração em ambientes domésticos.</p>
                        <p>Para a prestação desses serviços, a empresa conta com parceiros técnicos treinados, que estão em constante aquisição de conhecimentos para aprimorar a credibilidade, segurança e confiabilidade do cliente.</p>
                    </div>
                </div>
                <div class="blue">
                    <h2>Serviços</h2>
                    <p>A nossa empresa fornece instalação, manutenção e serviços técnicos na área da Refrigeração em ambientes domésticos.</p>
                    <p>Para a prestação desses serviços, a empresa conta com parceiros técnicos treinados, que estão em constante aquisição de conhecimentos para aprimorar a credibilidade, segurança e confiabilidade do cliente.</p>
                </div>
            </div>
            <div class="servicesContainer">
                <div class="servicesDiv">
                    <div class="tablet">
                        <img src="templates/assets/img/camara.png" alt="Commercial refrigeration chamber with stainless steel exterior and glass doors, displaying internal shelving units in a bright, professional kitchen or storage environment, conveying reliability and food safety standards.">
                        <h2>Assistência em Câmera Frias, Balcão Frigorifico, Ilha de Congelados</h2>
                    </div>
                    <div class="content">
                        <div class="separator">
                            <h2>Assistência em Câmera Frias, Balcão Frigorifico, Ilha de Congelados</h2>
                            <p>Realizamos reparos e limpeza especializada em Câmaras Frias, Balcões Frigoríficos e em Ilha de congelados de todos os seguimentos comerciais como Açougues, Supermercados, padarias, distribuidoras, residenciais, pequenos comércios, etc. Para as manutenções e reparos dos Balcões Frigoríficos, também utilizando peças e ferramentas de última geração. Nossos profissionais atuam com ferramentas e maquinários próprias para a realização dos devidos serviços. Para prestação dos nossos serviços com qualidade e segurança, disponibilizamos de uma equipe de técnicos formados e qualificados, totalmente preparados para atender com eficácia e confiança cada cliente. Nossos processos, para contratação de nossos serviços, são os mais rápidos e eficientes do mercado, com agendamento de visita técnica e orçamentária sem custo.</p>
                        </div>
                        <a class="quoteBtn" href="index.php#quote">Solicitar Orçamento</a>
                    </div>
                </div>
                <div class="servicesDiv2">
                    <div class="tablet2">
                        <img src="templates/assets/img/geladeira.png" alt="Technician performing maintenance on a refrigerator unit in a bright, professional service environment, demonstrating hands-on repair and diagnostic work with tools and equipment.">
                        <h2>Manutenção de Geladeiras e Frigobar</h2>
                    </div>
                    <div class="content">
                        <div class="separator">
                            <h2>Manutenção de Geladeiras e Frigobar</h2>
                            <p>Nós da Mais Refrigeração, aplicamos peças originais para geladeiras e em frigobar em todos as instalações, consertos, reparos, reformas e manutenções em seu aparelho de todas as marcas e modelos, com garantia de fábrica de todas as peças, garantia de 3 meses em toda a mão-de-obra e leva até sua geladeira as melhores soluções.<br>Se você tem geladeira Lg, geladeira Samsung, geladeira side by side, geladeira Brastemp, geladeira Electrolux, geladeira Bosch, geladeira Consul, geladeira Continental, geladeira importada, geladeira Ge, geladeira Frigidaire, geladeira Sub Zero, geladeira U-line, você pode resolver todos os seus problemas numa única Assistência Técnica.</p>
                        </div>
                        <a class="quoteBtn2" href="index.php#quote">Solicitar Orçamento</a>
                    </div>
                </div>
                <div class="servicesDiv">
                    <div class="tablet">
                        <img src="templates/assets/img/freezer.png" alt="Commercial freezer unit with stainless steel exterior and transparent glass doors, displaying multiple frozen food items on internal shelving in a bright professional kitchen or storage environment, conveying food preservation and commercial refrigeration reliability.">
                        <h2>Manutenção em Freezers e Expositores</h2>
                    </div>
                    <div class="content">
                        <div class="separator">
                            <h2>Manutenção em Freezers e Expositores</h2>
                            <p>Assim como os serviços de manutenção, limpeza e reparo de Geladeiras, também realizamos reparos e limpeza especializada em Freezers e em Balcões Frigoríficos de todos os seguimentos comerciais como Açougues, Supermercados, padarias, distribuidoras, residenciais, pequenos comércios, etc. Para as manutenções e reparos dos Balcões Frigoríficos, também utilizando peças e ferramentas de última geração.<br>Nossos profissionais atuam com ferramentas e maquinários próprias para a realização dos devidos serviços. Para prestação dos nossos serviços com qualidade e segurança, disponibilizamos de uma equipe de técnicos formados e qualificados, totalmente preparados para atender com eficácia e confiança cada cliente. Nossos processos, para contratação de nossos serviços, são os mais rápidos e eficientes do mercado,com agendamento de visita técnica e orçamentária sem custo.</p>
                        </div>
                        <a class="quoteBtn" href="index.php#quote">Solicitar Orçamento</a>
                    </div>
                </div>
                <div class="servicesDiv2">
                    <div class="tablet2">
                        <img src="templates/assets/img/bebedouro.png" alt="Commercial freezer unit with stainless steel exterior and transparent glass doors, displaying multiple frozen food items on internal shelving in a bright professional kitchen or storage environment, conveying food preservation and commercial refrigeration reliability.">
                        <h2>Manutenção em Bebedouros e Purificadores</h2>
                    </div>
                    <div class="content">
                        <div class="separator">
                            <h2>Manutenção em Bebedouros e Purificadores</h2>
                            <p>Nós realizamos conserto em bebedouros . Buscamos oferecer um diferencial no mercado, com serviços de alta qualidade e mão especializa atendendo as expectativas dos nossos clientes. Com experiência no mercado a Maia Refrigeração tem a experiência e o conhecimento para oferecer um atendimento de qualidade priorizando totalmente a satisfação dos seus clientes e colaboradores com intuito de prestarmos os melhores serviços de higienização e manutenção em bebedouros de água e purificadores de água do mercado.</p>
                        </div>
                        <a class="quoteBtn2" href="index.php#quote">Solicitar Orçamento</a>
                    </div>
                </div>
                <div class="servicesDiv">
                    <div class="tablet">
                        <img src="templates/assets/img/ar.png" alt="Commercial freezer unit with stainless steel exterior and transparent glass doors, displaying multiple frozen food items on internal shelving in a bright professional kitchen or storage environment, conveying food preservation and commercial refrigeration reliability.">
                        <h2>Instalação de Ares-Condicionados</h2>
                    </div>
                    <div class="content">
                        <div class="separator">
                            <h2>Instalação de Ares-Condicionados</h2>
                            <p>Os serviços de instalação de ar condicionado  são utilizados para diversos modelos e marcas importantes do mercado. Além de oferecer segurança integral e resultados de alta qualidade, na Maia Refrigeração você também encontrará serviços ágeis adequados para sua casa ou empresa. A instalação do ar condicionado é do tipo split convencional, split de cabeça para baixo, tipo caixa, teto de piso, ACJ, etc. Muitos clientes não sabem por onde começar ao decidir comprar um produto Por isso, temos profissionais bem treinados e experientes para escolher os melhores equipamentos para o seu ambiente, tendo sempre o conforto e a economia como parâmetros. Para verificar a viabilidade de uma instalação segura, inicialmente realizamos uma visita de orçamento para avaliar a localização e / ou realizar cálculos de carga de calor.</p>
                        </div>
                        <a class="quoteBtn" href="index.php#quote">Solicitar Orçamento</a>
                    </div>
                </div>
                <div class="servicesDiv2">
                    <div class="tablet2">
                        <img src="templates/assets/img/limpeza.png" alt="Commercial freezer unit with stainless steel exterior and transparent glass doors, displaying multiple frozen food items on internal shelving in a bright professional kitchen or storage environment, conveying food preservation and commercial refrigeration reliability.">
                        <h2>Limpeza e Higienização</h2>
                    </div>
                    <div class="content">
                        <div class="separator">
                            <h2>Limpeza e Higienização</h2>
                            <p>Fazemos limpeza e manutenção preventiva de projetos de ar condicionado trimestral ou mensalmente. Limpamos completamente todos os modelos de ar condicionado. O aparelho de ar condicionado deve ser limpo regularmente para evitar os ácaros que podem causar doenças respiratórias. O fabricante exige que os equipamentos de ar condicionado passem por manutenções preventivas de última geração, caso contrário o equipamento perderá a garantia.</p>
                        </div>
                        <a class="quoteBtn2" href="index.php#quote">Solicitar Orçamento</a>
                    </div>
                </div>
                <div class="servicesDiv">
                    <div class="tablet">
                        <img src="templates/assets/img/manutencao.png" alt="Commercial freezer unit with stainless steel exterior and transparent glass doors, displaying multiple frozen food items on internal shelving in a bright professional kitchen or storage environment, conveying food preservation and commercial refrigeration reliability.">
                        <h2>Manutenção e assistência de Ares-Condicionados</h2>
                    </div>
                    <div class="content">
                        <div class="separator">
                            <h2>Manutenção e assistência de Ares-Condicionados</h2>
                            <p>O serviço de manutenção do ar condicionado é uma tarefa muito importante, pois não só evita perdas, mas também garante a eficiência e desempenho do equipamento. Existem dois tipos de manutenção: preventiva e corretiva. Serviço de manutenção preventiva de climatização: visa a fiscalização, análise e fiscalização de todo o equipamento e seu sistema operacional. Todo o processo tem a função de prevenir e detectar qualquer tipo de defeitos, falhas ou falhas que façam com que o equipamento não funcione normalmente. Serviço de reparação corretiva de ar condicionado visa resolver qualquer tipo de problema (incluindo defeitos, colisões ou avarias) e reparar equipamentos.</p>
                        </div>
                        <a class="quoteBtn" href="index.php#quote">Solicitar Orçamento</a>
                    </div>
                </div>
                <div class="servicesDiv2">
                    <div class="tablet2">
                        <img src="templates/assets/img/maquina.png" alt="Commercial freezer unit with stainless steel exterior and transparent glass doors, displaying multiple frozen food items on internal shelving in a bright professional kitchen or storage environment, conveying food preservation and commercial refrigeration reliability.">
                        <h2>Maquinas produtoras de Sorvetes e Açaí</h2>
                    </div>
                    <div class="content">
                        <div class="separator">
                            <h2>Maquinas produtoras de Sorvetes e Açaí</h2>
                            <p>Caso sua sorveteira falhe, entre em contato com o suporte técnico da Maia Refrigeração e tenha um atendimento diferenciado e preciso. Contamos com técnicos de refrigeração especialmente treinados e rica experiência nas melhores instituições, para fornecer à sua máquina o tratamento, diagnóstico e manutenção adequados a um preço razoável! Além do profissionalismo e eficiência no diagnóstico e manutenção, também nos destacamos na pontualidade e no atendimento a você e seu equipamento.</p>
                        </div>
                        <a class="quoteBtn2" href="index.php#quote">Solicitar Orçamento</a>
                    </div>
                </div>
            </div>
            <div class="marcas">
                <h2>Assistência Técnica Para as Grandes Marcas e Modelos do Mercado</h2>
                <p>Somos especializados em diversas marcas e modelos, para melhor atendimento de todas as demandas!</p>
                <div class="grid">
                    <img src="templates/assets/img/elgin.png" alt="Elgin logo featuring blue text, representing a major refrigeration and air conditioning equipment manufacturer supported by Maia Refrigeração technical services">
                    <img src="templates/assets/img/samsung.png" alt="Samsung logo featuring bold blue text, representing a leading brand in electronics and home appliances, symbolizing innovation and quality in refrigeration technology.">
                    <img src="templates/assets/img/rheem.png" alt="Rheem logo featuring bold red and white text, representing a prominent brand in water heating and HVAC systems, symbolizing reliability and innovation in home comfort solutions.">
                    <img src="templates/assets/img/fujitsu.png" alt="Fujitsu logo featuring stylized text in blue and white, representing a leading brand in air conditioning and heating solutions, symbolizing innovation and quality in climate control technology.">
                    <img src="templates/assets/img/hitachi.png" alt="Hitachi logo featuring bold text, representing a well-known brand in air conditioning and refrigeration technology, symbolizing innovation and reliability in climate control solutions.">
                    <img src="templates/assets/img/carel.png" alt="Carel logo featuring stylized text, representing a prominent brand in refrigeration and air conditioning control solutions, symbolizing innovation and reliability in climate management technology.">
                    <img src="templates/assets/img/midea.png" alt="Midea logo featuring stylized text in blue and white, representing a leading brand in home appliances and air conditioning solutions, symbolizing innovation and quality in climate control technology.">
                    <img src="templates/assets/img/panasonic.png" alt="Panasonic logo featuring stylized text in blue and white, representing a leading brand in electronics and home appliances, symbolizing innovation and quality in refrigeration technology.">
                    <img src="templates/assets/img/consul.png" alt="Consul logo featuring stylized text, representing a well-known brand in home appliances and refrigeration technology, symbolizing quality and reliability in cooling solutions.">
                    <img src="templates/assets/img/daikin.png" alt="Daikin logo featuring stylized text in blue and white, representing a leading brand in air conditioning and refrigeration technology, symbolizing innovation and quality in climate control solutions.">
                    <img src="templates/assets/img/springer.png" alt="Springer logo featuring blue stylized text, representing a prominent brand in air conditioning and refrigeration solutions, symbolizing innovation and quality in climate control technology.">
                    <img src="templates/assets/img/carrier.png" alt="Carrier logo featuring blue oval shape with white stylized text, representing a leading brand in air conditioning and refrigeration solutions, symbolizing innovation and reliability in climate control technology.">
                    <img src="templates/assets/img/electrolux.png" alt="Electrolux logo featuring blue text and geometric design, representing a leading brand in home appliances and refrigeration technology, symbolizing innovation and quality in cooling solutions.">
                    <img src="templates/assets/img/bosch.png" alt="Bosch logo featuring stylized text in red and white, representing a leading global brand in home appliances and refrigeration technology, symbolizing innovation and quality in cooling solutions.">
                    <img src="templates/assets/img/lg.png" alt="LG logo featuring a red circular design with white stylized text, representing a major global brand in home appliances and air conditioning technology, symbolizing innovation and quality in refrigeration solutions.">
                </div>
            </div>
        </section>
        <section id="quote">
            <form method="POST">
                <h2>Solicite seu orçamento!!</h2>
                <div class="input">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Escreva seu nome.">
                </div>
                <div class="contactForm">
                    <div class="input">
                        <label for="phone">DDD + Telefone</label>
                        <input type="text" name="phone" id="phone" placeholder="Digite seu telefone.">
                    </div>
                    <div class="input">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" placeholder="Digite seu e-mail.">
                    </div>
                </div>
                <div class="input">
                    <label for="doubts">Como podemos te ajudar?</label>
                    <textarea name="doubts" id="doubts" placeholder="Tire suas dúvidas, solicite orçamentos ou deixe uma mensagem para entrarmos em contato."></textarea>
                </div>
                <button type="submit" name="sendMail">Enviar</button>
            </form>
        </section>
        <section id="contacts">
            <div class="left">
                <img class="leftLogo" src="templates/assets/img/logo2.png" alt="Maia Refrigeração logo featuring red and blue text with a stylized refrigeration symbol">
                <p>A Maia Refrigeração é uma empresa especializada em prestação de serviços de Refrigeração e Climatização.</p>
                <div class="buttons">
                    <button><a href="https://www.instagram.com/maiarefrigeracaooficial/" target="_blank"><img src="templates/assets/img/whiteInstagram.png" alt="Instagram social media icon linking to Maia Refrigeração Instagram profile"></a></button>
                    <button><a href="https://wa.me/5571996984571?text=Ol%C3%A1!%20Estava%20navegando%20no%20seu%20site%2C%20pode%20me%20ajudar%3F" target="_blank"><img src="templates/assets/img/whatsapp.png" alt="WhatsApp icon linking to chat with Maia Refrigeração technician"></a></button>
                    <button><a href="mailto:comercialmaiarefrigeracao@gmail.com" target="_blank"><img src="templates/assets/img/whiteEmail.png" alt="Email icon linking to Maia Refrigeração commercial contact"></a></button>
                </div>
            </div>
            <div class="right">
                <h2>Contato</h2>
                <div class="tiny"><img src="templates/assets/img/telefone.png" alt="">Tel: (71) 99698-4571</div>
                <div class="tiny"><img src="templates/assets/img/email.png" alt="">E-mail: comercialmaiarefrigeracao@gmail.com</div>
            </div>
        </section>
        <footer>
            <p>&copy; 2026 Maia Refrigeração. Todos os direitos reservados.</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="templates/assets/js/index.js"></script>
    </body>
</html>