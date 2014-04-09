<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable" style="<?php include_partial('api2/emailsPartials/styles/layoutContainerStyle') ?>">
    <tr>
        <td align="center" valign="top" style="padding-top:20px;">
            <!-- // Begin Template Preheader \\ -->
            <?php include_partial('api2/emailsPartials/partials/preHeader') ?>
            <!-- // End Template Preheader \\ -->
            <!-- // Begin Template \\ -->
            <table border="0" cellpadding="0" cellspacing="0" width="590" id="templateContainer" style="<?php include_partial('api2/emailsPartials/styles/templateContainerStyle') ?>">
                <tr>
                    <td align="center" valign="top">
                        <!-- // Begin Template Header \\ -->
                        <table border="0" cellpadding="0" cellspacing="0" width="590" id="templateHeader" style="<?php include_partial('api2/emailsPartials/styles/headerContainerStyle') ?>">
                            <tr>
                                <td class="headerContent" style="<?php include_partial('api2/emailsPartials/styles/headerContentStyle') ?>">
                                    <a href="https://www.lealtag.com" target="_blank" style="<?php include_partial('api2/emailsPartials/styles/linksStyle') ?>">
                                        <img src="http://lealtag.com<?php echo Util::auto_version('/images/logoemail.png') ?>" alt="LealTag" title="LealTag" 
                                             style="<?php include_partial('api2/emailsPartials/styles/headerImageStyle') ?>" id="headerImage"/>
                                    </a>
                                </td>
                                <td class="headerSocialMediaContainer" 
                                    style="<?php include_partial('api2/emailsPartials/styles/headerContentStyle') ?>">
                                    <table border="0" cellpadding="0" cellspacing="0" align="right">
                                        <tr>
                                            <td class="headerSocialMediaContent"
                                                style="<?php include_partial('api2/emailsPartials/styles/headerSocialMediaLinkStyle') ?>">
                                                <a href="https://www.facebook.com/LealTag" target="_blank" title="Siguenos en Facebook"
                                                   style="<?php include_partial('api2/emailsPartials/styles/linksStyle') ?>">
                                                    <img src="http://lealtag.com/images/facebook.png" alt="Siguenos en Facebook" 
                                                        style="<?php include_partial('api2/emailsPartials/styles/headerImageStyle') ?>" 
                                                        class="headerSocialMediaLink" id="facebook-link"/>
                                                </a>
                                            </td>
                                            <td class="headerSocialMediaContent"
                                                style="<?php include_partial('api2/emailsPartials/styles/headerSocialMediaLinkStyle') ?>">
                                                <a href="https://www.twitter.com/lealtag" target="_blank" title="Siguenos en Twitter"
                                                   style="<?php include_partial('api2/emailsPartials/styles/linksStyle') ?>">
                                                    <img src="http://lealtag.com/images/twitter.png" alt="Siguenos en Twitter" 
                                                        style="<?php include_partial('api2/emailsPartials/styles/headerImageStyle') ?>" 
                                                        class="headerSocialMediaLink" id="twitter-link"/>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!-- // End Template Header \\ -->
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <!-- // Begin Template Body \\ -->
                        <?php include_partial('api2/emailsPartials/partials/templateBody') ?>
                        <!-- // End Template Body \\ -->
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <!-- // Begin Template Footer \\ -->
                        <?php include_partial('api2/emailsPartials/partials/templateFooter') ?>
                        <!-- // End Template Footer \\ -->
                    </td>
                </tr>
            </table>
            <!-- // End Template \\ -->
            <br />
        </td>
    </tr>
</table>