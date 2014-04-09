<tr>
    <td valign="top" class="bodyContent">
        <div style="<?php include_partial('email/styles/bodyContentStyle') ?>">
            <h2 style="<?php include_partial('email/styles/h2Style', array('fontColor' => '006bb5')) ?>">
                ¡%WELCOME% a LealTag!
            </h2>
            <br>
            <b>%FULLNAME%<b/>,
            <br><br>
            Gracias por registrarte, a partir de este segundo empezarás a ser premiado por
            visitar los sitios que te gustan. Para validar tu cuenta ingresa en este 
            <b><a style="<?php include_partial('email/styles/linksStyle', array('fontColor' => '009ddf')) ?>"
                  href="%ROUTE%">LINK
                </a></b>:
        </div>
    </td>
</tr>
<tr>
    <td align="center" valign="top">
        <table border="0" cellpadding="15" cellspacing="0" class="templateButton" style="<?php include_partial('email/styles/buttonContainerStyle') ?>">
            <tr>
                <td valign="middle" class="templateButtonContent">
                    <div>
                        <a href="%ROUTE%" target="_blank" style="<?php include_partial('email/styles/buttonStyle') ?>">
                            Validar mi cuenta
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td valign="top" class="bodyContent">
        <div style="<?php include_partial('email/styles/bodyContentStyle') ?>">
            <em>Si tienes algún inconveniente con el link anterior, copia y pega esto en la barra de direcciones de tu navegador:</em>
            <br>
            <em>
                <a href="%ROUTE%" style="<?php include_partial('email/styles/linksStyle', array('fontColor' => '009ddf')) ?>">
                    %ROUTE%
                </a>
            </em>
            <br><br>
            Conoce el estado de tus premios y mucho más descargando la aplicación desde tu Blackberry, iPhone o Android 
            haciendo clic <a style="<?php include_partial('email/styles/linksStyle', array('fontColor' => '009ddf')) ?>" 
                             href="http://www.lealtag.com/descarga">AQUÍ</a>.
            <br><br>
            Si no tienes uno de estos equipos, pide una tarjeta LealTag en un comercio afiliado o imprímela 
            <a style="<?php include_partial('email/styles/linksStyle', array('fontColor' => '009ddf')) ?>" 
               href="https://www.lealtag.com/usuario/tarjeta">AQUÍ</a>.
            <br><br>
            Busca el regalito LealTag que identifica a los comercios y marcas afiliadas para empezar
            a ganar. Y si tus locales y marcas preferidas no forman parte de LealTag, pídeles que te
            premien.
            <br><br>
            Tus comentarios y sugerencias nos ayudan a mejorar, así que cualquier cosa
            escríbenos a 
            <a style="<?php include_partial('email/styles/linksStyle', array('fontColor' => '009ddf')) ?>" target="_blank" 
               href="mailto:info@lealtag.com">info@lealtag.com</a> 
            y síguenos en Twitter 
            <a style="<?php include_partial('email/styles/linksStyle', array('fontColor' => '009ddf')) ?>" target="_blank" 
                href="http://www.twitter.com/lealtag">@lealtag</a> 
            para enterarte de todas las cosas nuevas que vamos a traer para ti.
        </div>
    </td>
</tr>
<tr>
    <td valign="top" class="bodyContent">
        <div style="<?php include_partial('email/styles/bodyFooterStyle') ?>">
            Mereces ser premiado
            <br>
            El equipo de LealTag ;)
        </div>
    </td>
</tr>