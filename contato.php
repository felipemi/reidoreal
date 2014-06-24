<?php require_once("header.php"); ?>

<article id="main">

    <header class="special container">
        <span class="icon fa-envelope"></span>
        <h2>Mande uma Mensagem</h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container small">

        <!-- Content -->
        <div class="content">
            <form class="form" id="contat_form" method="get" action="enviar-dados.php" class="error">
                <div class="row half no-collapse-1">
                    <div class="6u">
                        <input type="text" name="nome" id="nome" placeholder="Nome" />
                    </div>
                    <div class="6u">
                        <input type="text" name="email" id="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <input type="text" name="telefone" id="telefone" placeholder="Telefone" />
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="mensagem" id="mensagem" placeholder="Messagem" rows="7"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <ul class="buttons">
                            <input type="submit" name="enviar" class="button" value="Enviar"/>
                        </ul>
                    </div>
                </div>
            </form>
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3578.883227456464!2d-51.085156528834986!3d-26.232983523809622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e661e52dc7f683%3A0xdb7790eaca2a9b09!2sRua+Matos+Costa%2C+33+-+Centro!5e0!3m2!1spt-BR!2spt!4v1402514861594" width="750" height="400" frameborder="0" style="border:0"></iframe>
            </div>
            <div>
                <p>Endereço: Rua Matos Costa, 33 - Centro - Porto União - SC</p>
                <p>Fone: (42) 3522-2341</p>
            </div>
        </div>

    </section>

</article>

<?php require_once("footer.php"); ?>