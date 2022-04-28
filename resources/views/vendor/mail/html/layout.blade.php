<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <title>Document</title>
    <style>
        @media only screen and (max-width: 600px) {
        .inner-body {
        width: 100% !important;
        }
        
        .footer {
        width: 100% !important;
        }
        }
        
        @media only screen and (max-width: 500px) {
        .button {
        width: 100% !important;
        }
        }
    </style>
</head>
<body>
    <table class="wrapper" role="presentation" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table class="content" role="presentation" width="570" cellpadding="0" cellspacing="0">

                    {{ $header ?? '' }}

                    <!-- Email Body -->
                    
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" role="presentation" align="center" width="570" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-cell">
                                        {{-- Body content --}}

                                        {{ Illuminate\Mail\Markdown::parse($slot) }}
                                        
                                        {{ $subcopy ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 32px; padding-right: 32px; ">
                                        <hr>
                                        <div style="display: flex;">
                                            <p>
                                                <span style="font-size: 14px;">Temukan kami: </span>
                                                <div style="margin-left: 8px;">
                                                    <a href="" style="text-decoration: none; margin-left: 8px;">
                                                        <img width="24" src="https://ananta-putra.000webhostapp.com/img/icons/facebook.svg" alt="">
                                                    </a>
                                                    <a href="" style="text-decoration: none; margin-left: 8px;">
                                                        <img width="24" src="https://ananta-putra.000webhostapp.com/img/icons/instagram.svg" alt="">
                                                    </a>
                                                    <a href="" style="text-decoration: none; margin-left: 8px;">
                                                        <img width="24" src="https://ananta-putra.000webhostapp.com/img/icons/twitter.svg" alt="">
                                                    </a>
                                                </div>
                                            </p>
                                        </div>
                                        <div style="margin-top: -4px">
                                            <p style="font-size: 14px;"><span>Email Support: </span><a href="mailto:">nasywasnack@gmail.com</a></p>
                                            <p style="font-size: 14px; margin-top: -8px;"><span>Telepon: </span>081325776688</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    {{ $footer ?? '' }}
                </table>
            </td>
        </tr>
    </table>
</body>
</html>