<!DOCTYPE html>
<span style="display:none;font-size:1px;color:#ffffff;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;" />
</span>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
    <title>Orçamento</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
        }

        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
        }

        p {
            line-height: inherit
        }

        @media (max-width:645px) {
            .row-content {
                width: 100% !important;
            }

            .image_block img.big {
                width: auto !important;
            }

            .column .border {
                display: none;
            }

            table {
                table-layout: fixed !important;
            }

            .stack .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body style="background-color: transparent; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;" bgcolor="#FFFFFF">
    <div class="preheader" style="display:none;font-size:1px;color:#333333;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
        Uma solicitação de orçamento foi feita.
    </div>
    <table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: transparent;">
        <tbody>
            <tr>
                <td>
                    <table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #f9f9f9;">
                        <tbody>
                            <tr>
                                <td>
                                    <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #ffffff; color: #000000; width: 625px;" width="625">
                                        <tbody>
                                            <tr>
                                                <td class="column column-1" width="100%" style="font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                    <table class="image_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-rspace: 0pt;">
                                                        <tr>
                                                            <td style="width:100%;padding-right:0px;padding-left:0px;">
                                                                <div align="center" style="line-height:10px">
                                                                    <img class="big" src="{{ asset('img/engine/banner-email.png') }}" style="display: block; height: auto; border: 0; width: 625px; max-width: 100%;" width="625" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #f9f9f9;">
                        <tbody>
                            <tr>
                                <td>
                                    <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #ffffff; color: #000000; width: 625px;" width="625">
                                        <tbody>
                                            <tr>
                                                <td class="column column-1" width="100%" style="font-weight: 400; text-align: left; vertical-align: top; border-bottom: 0px solid #FF9932; border-left: 0px solid #FF9932; border-right: 0px solid #FF9932; border-top: 0px solid #FF9932; padding-top: 0px; padding-bottom: 0px;">
                                                    <table class="text_block" width="100%" border="0" cellpadding="25" cellspacing="0" role="presentation" style="word-break: break-word;">
                                                        <tr>
                                                            <td>
                                                                <div style="font-family: Arial, sans-serif">
                                                                    <div class="txtTinyMce-wrapper" style="font-size: 12px; color: #555555; line-height: 1.2; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                        <p style="margin: 0; font-size: 18px; text-align: left;" />
                                                                        </p>
                                                                        <p style="margin: 0; font-size: 18px; text-align: left;" />
                                                                        <span style="color:#017dd3;">
                                                                            <strong>
                                                                                <span style="font-size:20px;"> {{ $data['name'] }} solicitou um orçamento
                                                                                </span>
                                                                            </strong>
                                                                        </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table class="text_block" width="100%" border="0" cellpadding="25" cellspacing="0" role="presentation" style="word-break: break-word;">
                                                        <tr>
                                                            <td>
                                                                <div style="font-family: Arial, sans-serif">
                                                                    <div class="txtTinyMce-wrapper" style="font-size: 12px; color: #555555; line-height: 1.5; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                        <p style="margin: 0; text-align: left; mso-line-height-alt: 22.5px;" />
                                                                        <span style="font-size:15px;color:#000000;margin-bottom:20px;">Nome: {{ $data['name'] }}
                                                                        </span>
                                                                        <br>
                                                                        <span style="font-size:15px;color:#000000;margin-bottom:20px;">Telefone: {{ $data['phone'] }}
                                                                        </span>
                                                                        <br>
                                                                        <span style="font-size:15px;color:#000000;margin-bottom:20px;">E-mail: {{ $data['email'] }}
                                                                        </span>
                                                                        <br>
                                                                        <span style="font-size:15px;color:#000000;margin-bottom:20px;">Cidade: {{ $data['city'] }}
                                                                        </span>
                                                                        <br>
                                                                        <span style="font-size:15px;color:#000000;margin-bottom:20px;">Estado: {{ $data['state'] }}
                                                                        </span>
                                                                        <br>
                                                                        @if ($data['product'])
                                                                            <span style="font-size:15px;color:#000000;margin-bottom:20px;">Produto: {{ $data['product'] }}
                                                                            </span>
                                                                            <br>
                                                                        @endif
                                                                        <span style="font-size:15px;color:#000000;margin-bottom:20px;">Mensagem: {{ $data['message'] }}
                                                                        </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="row row-3" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #f9f9f9;">
                        <tbody>
                            <tr>
                                <td>
                                    <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #ffffff; color: #000000; width: 625px;" width="625">
                                        <tbody>
                                            <tr>
                                                <td class="column column-1" width="100%" style="font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                    <div align="center">
                                                        <a href="mailto:{{ $data['email'] }}" style="padding:2rem;text-decoration:none;display:inline-block;color:#ffffff;background-color:#017dd3;border-radius:14px;width:auto;border-top:1px solid #017dd3;font-weight:400;border-right:1px solid #017dd3;border-bottom:1px solid #017dd3;border-left:1px solid #017dd3;padding-top:5px;padding-bottom:5px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;">
                                                            <strong>Responder</strong>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="row row-4" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #f9f9f9;">
                        <tbody>
                            <tr>
                                <td>
                                    <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #ffffff; color: #000000; width: 625px;" width="625">
                                        <tbody>
                                            <tr>
                                                <td class="column column-1" width="100%" style="font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                    <table class="text_block" width="100%" border="0" cellpadding="25" cellspacing="0" role="presentation" style="word-break: break-word;">
                                                        <tr>
                                                            <td>
                                                                <div style="font-family: Arial, sans-serif">
                                                                    <div class="txtTinyMce-wrapper" style="font-size: 12px; color: #555555; line-height: 1.5; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                        <p style="margin: 0; font-size: 15px; mso-line-height-alt: 18px;" />
                                                                        </p>
                                                                        <p style="margin: 0; font-size: 15px; mso-line-height-alt: 22.5px;" />
                                                                        </p>
                                                                        <p style="margin: 0; font-size: 15px; mso-line-height-alt: 18px;" />
                                                                        </p>
                                                                        <p style="margin: 0; font-size: 15px; mso-line-height-alt: 18px;" />
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="10" bgcolor="#FFFFFF" class="render_area footer" data-target="footer">
        <tr>
            <td align="center" valign="top">
                <p style="color:#888888;font-size:80%;font-family:Helvetica,Arial,sans-serif;line-height:16px;text-align:center" />
                <span class="js-footer-preview">
                    Enviado por
                    <b>Sistema Sim Piscinas
                    </b>
                    <br />sistema@simpiscinas.com
                </span>
                </p>
            </td>
        </tr>
    </table>
</body>

</html>
