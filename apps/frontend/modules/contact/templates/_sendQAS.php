<?php use_helper('I18N', 'Url') ?>
<?php echo __(<<<EOM
<p>
    <a href="http://www.lealtag.com"><img alt="LealTag" src="http://lealtag.com/images/logo_slogan.png"/></a>
</p>   
<p>
    <h1>¡Un usuario ha planteado una pregunta o sugerencia!</h1>
</p>
<p>
    <b>Nombre del usuario:</b> %name%
</p>
<p>
    <b>Email del usuario:</b> %email%
</p>
<p>
    <b>Mensaje del usuario:</b> %message%
</p>
<p>
    Correo enviado automáticamente por el sistema LealTag
</p>
EOM
, array(
        "%name%" => $name,
        "%email%" => $email,
        '%message%' => $message,
    )
) ?>
