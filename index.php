<?php 

include_once '_header.php';
include_once '_menu.php';

?>

<!-- Home -->
        <section id="templatemo_home">
            <div class="container">
                <div class="templatemo_home_inner_wapper">
                    <h1 class="text-center"><img src="images/sqlcreator_logo.png" width="46" height="46"> SQLCreator</h1>
                </div>
                <div class="templatemo_home_inner_wapper">
                    <h2 class="text-center">Sejam Bem-vindos!</h2>
                    <p class="text-center">
                        SQLCreator é um aplicativo online que permite você criar o seu próprio banco de dados SQL em segundos. <br>
                        Tudo que você precisa é de uma planílha. É muito simples e fácil. <br>
                        A iniciativa do SQLCreator é possibilitar a conversão de planilhas XLS para banco de dados SQL. <br> 
                        O aplicativo é opensource e desenvolvido para acelerar e facilitar a criação de bancos de dados simples. <br> 
                        Experimente já, basta preencher com o seu e-mail e utilizar. Vale lembrar que ainda estamos em fase de testes, então qualquer problema indentificado, favor envie um e-mail para <a href="mailto:info@sqlcreator.com">info@sqlcreator.com</a>.
                    </p>
                </div>
                <div class="templatemo_home_inner_wapper btn_wapper">
                    <div class="col-sm-6">
                        <a href="#templatemo_features" class="btn col-xs-12 scroll_effect shadow-top-down">
                            <i class="fa fa-align-justify"></i> Como funciona?
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#templatemo_download" class="btn col-xs-12 scroll_effect shadow-top-down">
                            <i class="fa fa-download"></i> Começar agora!
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features -->
        <section id="templatemo_features">
            <div class="container-fluid">
                <header class="template_header">
                    <h1 class="text-center"><span>...</span> Como funciona? <span>...</span></h1>
                </header>
                <div class="col-sm-12">
                    <div class="col-sm-6 col-lg-3 feature-box">
                        <div class="feature-box-inner">
                            <div class="feature-box-icon">
                                <img src="images/cadastro.png" width="50" height="50">
            </div>
                            <p>
                                Primeiro você deve iniciar pelo botão "Começar agora!" e enviar o seu e-mail para cadastro e receber atualizações do sistema.
                          </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 feature-box">
                        <div class="feature-box-inner">
                            <div class="feature-box-icon">
                                <img src="images/upload.png" width="50" height="50">
                            </div>
                            <p>
                                Após cadastrado o seu e-mail, você terá acesso a uma tela onde efetuará o upload de sua planilha em formato xls. Certifique-se de que ela esteja no formato xls e siga os padrões de uma tabela comum, onde a primeira linha representa os atributos de cada tabela, e as linhas seguintes os dados inseridos na tabela.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 feature-box">
                        <div class="feature-box-inner">
                            <div class="feature-box-icon">
                                <img src="images/check.png" width="50" height="50">
                            </div>
                            <p>
                                Após feito o upload da tabela, o sistema identificará o modelo e demonstrará na tela uyma previsão de como será inserido os dados no banco de dados. Caso esteja correto o usuário deverá finalizar a criação do banco de dados. 
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 feature-box">
                        <div class="feature-box-inner">
                            <div class="feature-box-icon">
                                <img src="images/download.png" width="50" height="50">
                            </div>
                            <p>
                                Após finalizado, o usuário tem a possibilidade de fazer o download da querry do sql, ou até mesmo utilizar o banco de dados de maneira que preferir. Entre em contato para sugerir novas possbilidades e usos através do <a href="mailto:info@sqlcreator.com">info@sqlcreator.com</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Download -->
        <section id="templatemo_download">
            <div class="container">
                <header class="template_header">
                    <h1 class="text-center"><span>...</span> Começar agora! <span>...</span></h1>
                </header>
                <div class="templatemo_download_text_wapper">
                    <p>
                        Insira seu nome e seu e-mail abaixo e comece já a criar o seu banco de dados.
                    </p>
                </div>
                <form id="form_cadastro" action="perCadastro.php" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-6 col-xs-offset-6">
                            <button type="submit" id="submit" class="form-control">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Contact -->
        <section id="templatemo_contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <header class="template_header">
                            <h1 class="text-center"><span>...</span> Contato <span>...</span></h1>
                        </header>
                        <p class="text-center">
                            <i class="fa fa-envelope"></i> Email: <a href="mailto:info@sqlcreator.com">info@sqlcreator.com</a><br />
                            <i class="fa fa-phone"></i> Telefone: <a href="tel:010-020-0340">(21) 98056-9549</a>
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        


<?php

include_once '_footer.php';

?>