<tr>
    <td valign="top" class="bodyContent">
        <div style="<?php include_partial('api2/emailsPartials/styles/bodyContentStyle') ?>">
            <h2 style="<?php include_partial('api2/emailsPartials/styles/h2Style', array('fontColor' => '006bb5')) ?>">
                ¡Felicitaciones has recibido %TAGS%!
            </h2>
            <br>
            %FULLNAME%, acabas de recibir %TAGS% en %ASSET%
            <br><br>
            Tu opinión es importante para nosotros, puedes compartir tu experiencia en %ASSET% haciendo clic 
            en el siguiente <b><a style="<?php include_partial('api2/emailsPartials/styles/linksStyle', array('fontColor' => '009ddf')) ?>"
                  href="%ROUTE%">LINK</a></b>:
        </div>
    </td>
</tr>
<tr>
    <td align="center" valign="top">
        <table border="0" cellpadding="15" cellspacing="0" class="templateButton" style="<?php include_partial('api2/emailsPartials/styles/buttonContainerStyle') ?>">
            <tr>
                <td valign="middle" class="templateButtonContent">
                    <div>
                        <a href="%ROUTE%" target="_blank" style="<?php include_partial('api2/emailsPartials/styles/buttonStyle') ?>">
                            Comparte tu experiencia
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td valign="top" class="bodyContent">
        <div style="<?php include_partial('api2/emailsPartials/styles/bodyContentStyle') ?>">
            <em>Si tienes algún inconveniente con el link anterior, copia y pega esto en la barra de direcciones de tu navegador:</em>
            <br>
            <em>
                <a href="%ROUTE%" style="<?php include_partial('api2/emailsPartials/styles/linksStyle', array('fontColor' => '009ddf')) ?>">
                    %ROUTE%
                </a>
            </em>
            <br><br>
            Para conocer el estado de tus premios descarga la aplicación de <b>LealTag</b> desde tu Blackberry, 
            iPhone o Android haciendo clic 
            <a href="www.lealtag.com/descarga" style="<?php include_partial('api2/emailsPartials/styles/linksStyle', array('fontColor' => '009ddf')) ?>">AQUÍ</a> 
            o en la tienda de aplicaciones. Si no tienes uno de estos equipos, entra a nuestra página web 
            <a style="<?php include_partial('api2/emailsPartials/styles/linksStyle', array('fontColor' => '009ddf')) ?>" 
               href="http://www.lealtag.com">LealTag.com</a> para acceder a tu cuenta, ver tus
            premios e imprimir tu 
            <a style="<?php include_partial('api2/emailsPartials/styles/linksStyle', array('fontColor' => '009ddf')) ?>" 
               href="http://www.lealtag.com/usuario/tarjeta">Tarjeta LealTag</a>.
            <br><br>
            Sigue visitando y no dejes de ganar en tus comercios favoritos con LealTag
        </div>
    </td>
</tr>
<tr>
    <td valign="top" class="bodyContent">
        <div style="<?php include_partial('api2/emailsPartials/styles/bodyFooterStyle') ?>">
            Mereces ser premiado
            <br>
            El equipo de LealTag ;)
        </div>
    </td>
</tr>