<table border="0" cellpadding="10" cellspacing="0" width="590" id="templateFooter" style="<?php include_partial('email/styles/footerContainerStyle')?>">
    <tr>
        <td valign="top" class="footerContent" style="<?php include_partial('email/styles/footerContentStyle')?>">
            <!-- // Begin Module: Transactional Footer \\ -->
            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                <tr>
                    <td valign="top">
                        <div style="<?php include_partial('email/styles/footerContentStyle')?>">
                            <em>&copy; LealTag <?php echo date("Y") ?>, todos los derechos reservados. (J-40058569-4)</em>
                            <br>
                            Puedes contactarnos a&nbsp;
                            <a style="<?php include_partial('email/styles/linksStyle', array('fontColor' => '009ddf')) ?>" 
                               href="mailto:info@lealtag.com" target="_blank">
                                info@lealtag.com
                            </a>
                            o al (0212)312-2724. Lunes a Viernes 9:00-18:00
                            <br>
                            Recibiste este correo porque estas registrado en LealTag
                        </div>
                    </td>
                </tr>
<!--                <tr>
                    <td valign="middle" id="utility" style="<?php include_partial('email/styles/utilityContainerStyle')?>">
                        <div style="<?php include_partial('email/styles/utilityContentStyle')?>">
                            <a href="%EMAIL_URL_FALLBACK%" target="_blank" style="<?php include_partial('email/styles/linksStyle') ?>">Ver éste correo en el navegador</a>
                            &nbsp;|&nbsp;
                            <a href="%USER_SETTINGS_URL%" target="_blank" style="<?php include_partial('email/styles/linksStyle') ?>">Modificar mis preferencias de notificaciones</a>&nbsp;
                        </div>
                    </td>
                </tr>-->
            </table>
            <!-- // End Module: Transactional Footer \\ -->
        </td>
    </tr>
</table>