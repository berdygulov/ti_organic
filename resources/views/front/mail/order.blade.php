<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        body {
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
            line-height: 100%;
        }

        [style*="Open Sans"] {
            font-family: 'Open Sans', arial, sans-serif !important;
        }

        img {
            outline: none;
            text-decoration: none;
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100% !important;
            margin: 0;
            padding: 0;
            display: block;
        }

        table td {
            border-collapse: collapse;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        table.border {
            border-width: 1px;
            border-color: #D9D9D9;
            border-style: solid;
        }

        td.customized,
        th.customized {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 8px;
            padding-left: 8px;
            text-align: left;
        }

        td.border,
        th.border {
            border-width: 1px;
            border-color: #F2F2F2;
            border-style: solid;
        }
    </style>
</head>

<body style="margin: 0; padding: 0;">
<div style="font-size:0px;font-color:#ffffff;opacity:0;visibility:hidden;width:0;height:0;display:none;">Письмо с сайта
</div>
<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>
            <table class="main table" cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td height="20">
                    </td>
                </tr>
                <!-- Header -->
                <tr>
                    <td class="customized">
                        <span style="display:inline-block;font-size:18px">Информация о клиенте</span>
                    </td>
                </tr>
                <!-- Gap -->
                <tr>
                    <td height="10">
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- New Table -->
                        <table cellpadding="0" cellspacing="0">
                            <!-- New Row -->
                            <tr>
                                <td class="customized">
                                    <span style="display:inline-block;font-size:14px;font-weight:bold;">ФИО</span>
                                </td>
                                <td class="customized">
                                    <span
                                        style="display:inline-block;font-size:16px;">{{ $formData['surname'] . ' ' . $formData['name'] . ' ' . $formData['patronymic'] }}</span>
                                </td>
                            </tr>
                            <!-- New Row -->
                            <tr>
                                <td class="customized">
                                    <span style="display:inline-block;font-size:14px;font-weight:bold;">Телефон</span>
                                </td>
                                <td class="customized">
                                    <span
                                        style="display:inline-block;font-size:16px;">{{ $formData['phone'] }}</span>
                                </td>
                            </tr>
                            <!-- New Row -->
                            <tr>
                                <td class="customized">
                                    <span style="display:inline-block;font-size:14px;font-weight:bold;">Email</span>
                                </td>
                                <td class="customized">
                                    <span
                                        style="display:inline-block;font-size:16px;">{{ $formData['email'] }}</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Gap -->
                <tr>
                    <td height="30">
                    </td>
                </tr>
                <!-- Header -->
                <tr>
                    <td class="customized">
                        <span style="display:inline-block;font-size:18px">Адрес доставки</span>
                    </td>
                </tr>
                <!-- Gap -->
                <tr>
                    <td height="10">
                    </td>
                </tr>
                <!-- New Row -->
                <tr>
                    <td>
                        <!-- New Table -->
                        <table cellpadding="0" cellspacing="0">
                            <!-- New Row -->
                            <tr>
                                <td class="customized">
                                    <span style="display:inline-block;font-size:14px;font-weight: bold">Город</span>
                                </td>
                                <td class="customized">
                                    <span
                                        style="display:inline-block;font-size:16px;">{{ $formData['city'] }}</span>
                                </td>
                            </tr>
                            <!-- New Row -->
                            <tr>
                                <td class="customized">
                                    <span style="display:inline-block;font-size:14px;font-weight: bold">Адрес</span>
                                </td>
                                <td class="customized">
                                    <span
                                        style="display:inline-block;font-size:16px;">{{ $formData['address'] }}</span>
                                </td>
                            </tr>
                            <!-- New Row -->
                            <tr>
                                <td class="customized">
                                    <span style="display:inline-block;font-size:14px;font-weight: bold">Индекс</span>
                                </td>
                                <td class="customized">
                                    <span
                                        style="display:inline-block;font-size:16px;">{{ $formData['postcode'] }}</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Gap -->
                <tr>
                    <td height="30">
                    </td>
                </tr>
                <!-- Header -->
                <tr>
                    <td class="customized">
                        <span style="display:inline-block;font-size:18px">Корзина</span>
                    </td>
                </tr>
                <!-- Gap -->
                <tr>
                    <td height="10">
                    </td>
                </tr>
                <!-- New Table -->
                <tr>
                    <td>
                        <!-- New Table -->
                        <table class="border" cellpadding="0" cellspacing="0">
                            <!-- Header of cart -->
                            <tr>
                                <th class="customized border" style="font-size: 14px">Id</th>
                                <th class="customized border" style="font-size: 14px">Наименование</th>
                                <th class="customized border" style="font-size: 14px">Количество</th>
                                <th class="customized border" style="font-size: 14px">Цена</th>
                                <th class="customized border" style="font-size: 14px">Сумма</th>
                            </tr>
                            <!-- New row -->
                            @foreach($products as $p)
                                <tr>
                                    <td class="customized border">
                                        <span>{{ $p->id }}</span>
                                    </td>
                                    <td class="customized border">
                                        <span>{{ $p->title }}</span>
                                    </td>
                                    <td class="customized border">
                                        <span>{{ session("basket.$p->id") }} шт</span>
                                    </td>
                                    <td class="customized border">
                                        <span>{{ currencyFormat($p->price) }}</span>
                                    </td>
                                    <td class="customized border">
                                        <span>{{ currencyFormat($p->price * (int) session("basket.$p->id"))  }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <!-- Gap -->
                <tr>
                    <td height="20">
                    </td>
                </tr>
                <!-- Total -->
                <tr>
                    <td>
                        <span style="font-weight:bold;font-size:14px;">Итого</span>
                        <p style="margin-left:5px;display:inline-block;">{{ currencyFormat($total) }}</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>
