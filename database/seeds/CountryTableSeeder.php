<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;

class CountryTableSeeder extends BaseSeeder
{

    protected function getTable(): string
    {
        return config('country.country_table_name');
    }

    protected function  seeds():array
    {
        return [
            ['id' => 1, 'code' => 'AF', 'name' => 'Afghanistan'],
            ['id' => 2, 'code' => 'AX', 'name' => 'Aland'],
            ['id' => 3, 'code' => 'AL', 'name' => 'Albanië'],
            ['id' => 4, 'code' => 'DZ', 'name' => 'Algerije'],
            ['id' => 5, 'code' => 'VI', 'name' => 'Amerikaanse Maagdeneilanden'],
            ['id' => 6, 'code' => 'AS', 'name' => 'Amerikaans-Samoa'],
            ['id' => 7, 'code' => 'AD', 'name' => 'Andorra'],
            ['id' => 8, 'code' => 'AO', 'name' => 'Angola'],
            ['id' => 9, 'code' => 'AI', 'name' => 'Anguilla'],
            ['id' => 10, 'code' => 'AQ', 'name' => 'Antarctica'],
            ['id' => 11, 'code' => 'AG', 'name' => 'Antigua en Barbuda'],
            ['id' => 12, 'code' => 'AR', 'name' => 'Argentinië'],
            ['id' => 13, 'code' => 'AM', 'name' => 'Armenië'],
            ['id' => 14, 'code' => 'AW', 'name' => 'Aruba'],
            ['id' => 15, 'code' => 'AU', 'name' => 'Australië'],
            ['id' => 16, 'code' => 'AZ', 'name' => 'Azerbeidzjan'],
            ['id' => 17, 'code' => 'BS', 'name' => 'Bahama\'s'],
            ['id' => 18, 'code' => 'BH', 'name' => 'Bahrein'],
            ['id' => 19, 'code' => 'BD', 'name' => 'Bangladesh'],
            ['id' => 20, 'code' => 'BB', 'name' => 'Barbados'],
            ['id' => 21, 'code' => 'BE', 'name' => 'België'],
            ['id' => 22, 'code' => 'BZ', 'name' => 'Belize'],
            ['id' => 23, 'code' => 'BJ', 'name' => 'Benin'],
            ['id' => 24, 'code' => 'BM', 'name' => 'Bermuda'],
            ['id' => 25, 'code' => 'BT', 'name' => 'Bhutan'],
            ['id' => 26, 'code' => 'BO', 'name' => 'Bolivia'],
            ['id' => 27, 'code' => 'BQ', 'name' => 'Bonaire, Sint Eustatius en Saba'],
            ['id' => 28, 'code' => 'BA', 'name' => 'Bosnië en Herzegovina'],
            ['id' => 29, 'code' => 'BW', 'name' => 'Botswana'],
            ['id' => 30, 'code' => 'BV', 'name' => 'Bouveteiland'],
            ['id' => 31, 'code' => 'BR', 'name' => 'Brazilië'],
            ['id' => 32, 'code' => 'VG', 'name' => 'Britse Maagdeneilanden'],
            ['id' => 33, 'code' => 'IO', 'name' => 'Brits Indische Oceaanterritorium'],
            ['id' => 34, 'code' => 'BN', 'name' => 'Brunei'],
            ['id' => 35, 'code' => 'BG', 'name' => 'Bulgarije'],
            ['id' => 36, 'code' => 'BF', 'name' => 'Burkina Faso'],
            ['id' => 37, 'code' => 'BI', 'name' => 'Burundi'],
            ['id' => 38, 'code' => 'KH', 'name' => 'Cambodja'],
            ['id' => 39, 'code' => 'CA', 'name' => 'Canada'],
            ['id' => 40, 'code' => 'CF', 'name' => 'Centraal-Afrikaanse Republiek'],
            ['id' => 41, 'code' => 'CL', 'name' => 'Chili'],
            ['id' => 42, 'code' => 'CN', 'name' => 'China'],
            ['id' => 43, 'code' => 'CX', 'name' => 'Christmaseiland'],
            ['id' => 44, 'code' => 'CC', 'name' => 'Cocoseilanden'],
            ['id' => 45, 'code' => 'CO', 'name' => 'Colombia'],
            ['id' => 46, 'code' => 'KM', 'name' => 'Comoren'],
            ['id' => 47, 'code' => 'CG', 'name' => 'Congo-Brazzaville'],
            ['id' => 48, 'code' => 'CD', 'name' => 'Congo-Kinshasa'],
            ['id' => 49, 'code' => 'CK', 'name' => 'Cookeilanden'],
            ['id' => 50, 'code' => 'CR', 'name' => 'Costa Rica'],
            ['id' => 51, 'code' => 'CU', 'name' => 'Cuba'],
            ['id' => 52, 'code' => 'CW', 'name' => 'Curaçao'],
            ['id' => 53, 'code' => 'CY', 'name' => 'Cyprus'],
            ['id' => 54, 'code' => 'DK', 'name' => 'Denemarken'],
            ['id' => 55, 'code' => 'DJ', 'name' => 'Djibouti'],
            ['id' => 56, 'code' => 'DM', 'name' => 'Dominica'],
            ['id' => 57, 'code' => 'DO', 'name' => 'Dominicaanse Republiek'],
            ['id' => 58, 'code' => 'DE', 'name' => 'Duitsland'],
            ['id' => 59, 'code' => 'EC', 'name' => 'Ecuador'],
            ['id' => 60, 'code' => 'EG', 'name' => 'Egypte'],
            ['id' => 61, 'code' => 'SV', 'name' => 'El Salvador'],
            ['id' => 62, 'code' => 'GQ', 'name' => 'Equatoriaal-Guinea'],
            ['id' => 63, 'code' => 'ER', 'name' => 'Eritrea'],
            ['id' => 64, 'code' => 'EE', 'name' => 'Estland'],
            ['id' => 65, 'code' => 'ET', 'name' => 'Ethiopië'],
            ['id' => 66, 'code' => 'FO', 'name' => 'Faeröer'],
            ['id' => 67, 'code' => 'FK', 'name' => 'Falklandeilanden'],
            ['id' => 68, 'code' => 'FJ', 'name' => 'Fiji'],
            ['id' => 69, 'code' => 'PH', 'name' => 'Filipijnen'],
            ['id' => 70, 'code' => 'FI', 'name' => 'Finland'],
            ['id' => 71, 'code' => 'FR', 'name' => 'Frankrijk'],
            ['id' => 72, 'code' => 'TF', 'name' => 'Franse Zuidelijke en Antarctische Gebieden'],
            ['id' => 73, 'code' => 'GF', 'name' => 'Frans-Guyana'],
            ['id' => 74, 'code' => 'PF', 'name' => 'Frans-Polynesië'],
            ['id' => 75, 'code' => 'GA', 'name' => 'Gabon'],
            ['id' => 76, 'code' => 'GM', 'name' => 'Gambia'],
            ['id' => 77, 'code' => 'GE', 'name' => 'Georgië'],
            ['id' => 78, 'code' => 'GH', 'name' => 'Ghana'],
            ['id' => 79, 'code' => 'GI', 'name' => 'Gibraltar'],
            ['id' => 80, 'code' => 'GD', 'name' => 'Grenada'],
            ['id' => 81, 'code' => 'GR', 'name' => 'Griekenland'],
            ['id' => 82, 'code' => 'GL', 'name' => 'Groenland'],
            ['id' => 83, 'code' => 'GP', 'name' => 'Guadeloupe'],
            ['id' => 84, 'code' => 'GU', 'name' => 'Guam'],
            ['id' => 85, 'code' => 'GT', 'name' => 'Guatemala'],
            ['id' => 86, 'code' => 'GG', 'name' => 'Guernsey'],
            ['id' => 87, 'code' => 'GN', 'name' => 'Guinee'],
            ['id' => 88, 'code' => 'GW', 'name' => 'Guinee-Bissau'],
            ['id' => 89, 'code' => 'GY', 'name' => 'Guyana'],
            ['id' => 90, 'code' => 'HT', 'name' => 'Haïti'],
            ['id' => 91, 'code' => 'HM', 'name' => 'Heard en McDonaldeilanden'],
            ['id' => 92, 'code' => 'HN', 'name' => 'Honduras'],
            ['id' => 93, 'code' => 'HU', 'name' => 'Hongarije'],
            ['id' => 94, 'code' => 'HK', 'name' => 'Hongkong'],
            ['id' => 95, 'code' => 'IE', 'name' => 'Ierland'],
            ['id' => 96, 'code' => 'IS', 'name' => 'IJsland'],
            ['id' => 97, 'code' => 'IN', 'name' => 'India'],
            ['id' => 98, 'code' => 'ID', 'name' => 'Indonesië'],
            ['id' => 99, 'code' => 'IQ', 'name' => 'Irak'],
            ['id' => 100, 'code' => 'IR', 'name' => 'Iran'],
            ['id' => 101, 'code' => 'IL', 'name' => 'Israël'],
            ['id' => 102, 'code' => 'IT', 'name' => 'Italië'],
            ['id' => 103, 'code' => 'CI', 'name' => 'Ivoorkust'],
            ['id' => 104, 'code' => 'JM', 'name' => 'Jamaica'],
            ['id' => 105, 'code' => 'JP', 'name' => 'Japan'],
            ['id' => 106, 'code' => 'YE', 'name' => 'Jemen'],
            ['id' => 107, 'code' => 'JE', 'name' => 'Jersey'],
            ['id' => 108, 'code' => 'JO', 'name' => 'Jordanië'],
            ['id' => 109, 'code' => 'KY', 'name' => 'Kaaimaneilanden'],
            ['id' => 100, 'code' => 'CV', 'name' => 'Kaapverdië'],
            ['id' => 101, 'code' => 'CM', 'name' => 'Kameroen'],
            ['id' => 102, 'code' => 'KZ', 'name' => 'Kazachstan'],
            ['id' => 103, 'code' => 'KE', 'name' => 'Kenia'],
            ['id' => 104, 'code' => 'KG', 'name' => 'Kirgizië'],
            ['id' => 105, 'code' => 'KI', 'name' => 'Kiribati'],
            ['id' => 106, 'code' => 'UM', 'name' => 'Kleine afgelegen eilanden van de Verenigde Staten'],
            ['id' => 107, 'code' => 'KW', 'name' => 'Koeweit'],
            ['id' => 108, 'code' => 'HR', 'name' => 'Kroatië'],
            ['id' => 109, 'code' => 'LA', 'name' => 'Laos'],
            ['id' => 110, 'code' => 'LS', 'name' => 'Lesotho'],
            ['id' => 111, 'code' => 'LV', 'name' => 'Letland'],
            ['id' => 112, 'code' => 'LB', 'name' => 'Libanon'],
            ['id' => 113, 'code' => 'LR', 'name' => 'Liberia'],
            ['id' => 114, 'code' => 'LY', 'name' => 'Libië'],
            ['id' => 115, 'code' => 'LI', 'name' => 'Liechtenstein'],
            ['id' => 116, 'code' => 'LT', 'name' => 'Litouwen'],
            ['id' => 117, 'code' => 'LU', 'name' => 'Luxemburg'],
            ['id' => 118, 'code' => 'MO', 'name' => 'Macau'],
            ['id' => 119, 'code' => 'MK', 'name' => 'Macedonië'],
            ['id' => 120, 'code' => 'MG', 'name' => 'Madagaskar'],
            ['id' => 121, 'code' => 'MW', 'name' => 'Malawi'],
            ['id' => 122, 'code' => 'MV', 'name' => 'Maladiven'],
            ['id' => 123, 'code' => 'MY', 'name' => 'Maleisië'],
            ['id' => 124, 'code' => 'ML', 'name' => 'Mali'],
            ['id' => 125, 'code' => 'MT', 'name' => 'Malta'],
            ['id' => 126, 'code' => 'IM', 'name' => 'Man'],
            ['id' => 127, 'code' => 'MA', 'name' => 'Marokko'],
            ['id' => 128, 'code' => 'MH', 'name' => 'Marshalleilanden'],
            ['id' => 129, 'code' => 'MQ', 'name' => 'Martinique'],
            ['id' => 130, 'code' => 'MR', 'name' => 'Mauritanië'],
            ['id' => 131, 'code' => 'MU', 'name' => 'Mauritius'],
            ['id' => 132, 'code' => 'YT', 'name' => 'Mayotte'],
            ['id' => 133, 'code' => 'MX', 'name' => 'Mexico'],
            ['id' => 134, 'code' => 'FM', 'name' => 'Micronesia'],
            ['id' => 135, 'code' => 'MD', 'name' => 'Moldavië'],
            ['id' => 136, 'code' => 'MC', 'name' => 'Monaco'],
            ['id' => 137, 'code' => 'MN', 'name' => 'Mongolië'],
            ['id' => 138, 'code' => 'ME', 'name' => 'Montenegro'],
            ['id' => 139, 'code' => 'MS', 'name' => 'Montserrat'],
            ['id' => 140, 'code' => 'MZ', 'name' => 'Mozambique'],
            ['id' => 141, 'code' => 'MM', 'name' => 'Myanmar'],
            ['id' => 142, 'code' => 'NA', 'name' => 'Namibië'],
            ['id' => 143, 'code' => 'NR', 'name' => 'Nauru'],
            ['id' => 144, 'code' => 'NL', 'name' => 'Nederland'],
            ['id' => 145, 'code' => 'NP', 'name' => 'Nepal'],
            ['id' => 146, 'code' => 'NI', 'name' => 'Nicaragua'],
            ['id' => 147, 'code' => 'NC', 'name' => 'Nieuw-Caledonië'],
            ['id' => 148, 'code' => 'NZ', 'name' => 'Nieuw-Zeeland'],
            ['id' => 149, 'code' => 'NE', 'name' => 'Niger'],
            ['id' => 150, 'code' => 'NG', 'name' => 'Nigeria'],
            ['id' => 151, 'code' => 'NU', 'name' => 'Niue'],
            ['id' => 152, 'code' => 'MP', 'name' => 'Noordelijke Marianen'],
            ['id' => 153, 'code' => 'KP', 'name' => 'Noord-Korea'],
            ['id' => 154, 'code' => 'NO', 'name' => 'Noorwegen'],
            ['id' => 155, 'code' => 'NF', 'name' => 'Norfolk'],
            ['id' => 156, 'code' => 'UG', 'name' => 'Oeganda'],
            ['id' => 157, 'code' => 'UA', 'name' => 'Oekraïne'],
            ['id' => 158, 'code' => 'UZ', 'name' => 'Oezbekistan'],
            ['id' => 159, 'code' => 'OM', 'name' => 'Oman'],
            ['id' => 160, 'code' => 'AT', 'name' => 'Oostenrijk'],
            ['id' => 161, 'code' => 'TL', 'name' => 'Oost-Timor'],
            ['id' => 162, 'code' => 'PK', 'name' => 'Pakistan'],
            ['id' => 163, 'code' => 'PW', 'name' => 'Palau'],
            ['id' => 164, 'code' => 'PS', 'name' => 'Palestina'],
            ['id' => 165, 'code' => 'PA', 'name' => 'Panama'],
            ['id' => 166, 'code' => 'PG', 'name' => 'Papoea-Nieuw-Guinea'],
            ['id' => 167, 'code' => 'PY', 'name' => 'Paraguay'],
            ['id' => 168, 'code' => 'PE', 'name' => 'Peru'],
            ['id' => 169, 'code' => 'PN', 'name' => 'Pitcairneilanden'],
            ['id' => 170, 'code' => 'PL', 'name' => 'Polen'],
            ['id' => 171, 'code' => 'PT', 'name' => 'Portugal'],
            ['id' => 172, 'code' => 'PR', 'name' => 'Puerto Rico'],
            ['id' => 173, 'code' => 'QA', 'name' => 'Qatar'],
            ['id' => 174, 'code' => 'RE', 'name' => 'Réunion'],
            ['id' => 175, 'code' => 'RO', 'name' => 'Roemenië'],
            ['id' => 176, 'code' => 'RU', 'name' => 'Rusland'],
            ['id' => 177, 'code' => 'RW', 'name' => 'Rwanda'],
            ['id' => 178, 'code' => 'BL', 'name' => 'Saint-Barthélemy'],
            ['id' => 179, 'code' => 'KN', 'name' => 'Saint Kitts en Nevis'],
            ['id' => 180, 'code' => 'LC', 'name' => 'Saint Lucia'],
            ['id' => 181, 'code' => 'PM', 'name' => 'Saint-Pierre en Miquelon'],
            ['id' => 182, 'code' => 'VC', 'name' => 'Saint Vincent en de Grenadines'],
            ['id' => 183, 'code' => 'SB', 'name' => 'Salomonseilanden'],
            ['id' => 184, 'code' => 'WS', 'name' => 'Samoa'],
            ['id' => 185, 'code' => 'SM', 'name' => 'San Marino'],
            ['id' => 186, 'code' => 'SA', 'name' => 'Saoedi-Arabië'],
            ['id' => 187, 'code' => 'ST', 'name' => 'Sao Tomé en Principe'],
            ['id' => 188, 'code' => 'SN', 'name' => 'Senegal'],
            ['id' => 189, 'code' => 'RS', 'name' => 'Servië'],
            ['id' => 190, 'code' => 'SC', 'name' => 'Seychellen'],
            ['id' => 191, 'code' => 'SL', 'name' => 'Sierra Leone'],
            ['id' => 192, 'code' => 'SG', 'name' => 'Singapore'],
            ['id' => 193, 'code' => 'SH', 'name' => 'Sint-Helena, Ascension en Tristan da Cunha'],
            ['id' => 194, 'code' => 'MF', 'name' => 'Sint-Maarten'],
            ['id' => 195, 'code' => 'SI', 'name' => 'Slovenië'],
            ['id' => 196, 'code' => 'SK', 'name' => 'Slowakije'],
            ['id' => 197, 'code' => 'SD', 'name' => 'Soedan'],
            ['id' => 198, 'code' => 'SO', 'name' => 'Somalië'],
            ['id' => 199, 'code' => 'ES', 'name' => 'Spanje'],
            ['id' => 200, 'code' => 'SJ', 'name' => 'Spitsbergen en Jan Mayen'],
            ['id' => 201, 'code' => 'LK', 'name' => 'Sri Lanka'],
            ['id' => 202, 'code' => 'SR', 'name' => 'Suriname'],
            ['id' => 203, 'code' => 'SZ', 'name' => 'Swaziland'],
            ['id' => 204, 'code' => 'SY', 'name' => 'Syrië'],
            ['id' => 205, 'code' => 'TJ', 'name' => 'Tadzjikistan'],
            ['id' => 206, 'code' => 'TW', 'name' => 'Taiwan'],
            ['id' => 207, 'code' => 'TZ', 'name' => 'Tanzania'],
            ['id' => 206, 'code' => 'TH', 'name' => 'Thailand'],
            ['id' => 209, 'code' => 'TG', 'name' => 'Togo'],
            ['id' => 210, 'code' => 'TK', 'name' => 'Tokelau'],
            ['id' => 211, 'code' => 'TO', 'name' => 'Tonga'],
            ['id' => 212, 'code' => 'TT', 'name' => 'Trinidad en Tobago'],
            ['id' => 213, 'code' => 'TD', 'name' => 'Tsjaad'],
            ['id' => 214, 'code' => 'CZ', 'name' => 'Tsjechië'],
            ['id' => 215, 'code' => 'TN', 'name' => 'Tunesië'],
            ['id' => 216, 'code' => 'TR', 'name' => 'Turkije'],
            ['id' => 217, 'code' => 'TM', 'name' => 'Turkmenistan'],
            ['id' => 218, 'code' => 'TC', 'name' => 'Turks- en Caicoseilanden'],
            ['id' => 219, 'code' => 'TV', 'name' => 'Tuvalu'],
            ['id' => 220, 'code' => 'UY', 'name' => 'Uruguay'],
            ['id' => 221, 'code' => 'VU', 'name' => 'Vanuatu'],
            ['id' => 222, 'code' => 'VA', 'name' => 'Vaticaanstad'],
            ['id' => 223, 'code' => 'VE', 'name' => 'Venezuela'],
            ['id' => 224, 'code' => 'AE', 'name' => 'Verenigde Arabische Emiraten'],
            ['id' => 225, 'code' => 'US', 'name' => 'Verenigde Staten'],
            ['id' => 226, 'code' => 'GB', 'name' => 'Verenigd Koninkrijk'],
            ['id' => 227, 'code' => 'VN', 'name' => 'Vietnam'],
            ['id' => 228, 'code' => 'WF', 'name' => 'Wallis en Futuna'],
            ['id' => 229, 'code' => 'EH', 'name' => 'Westelijke Sahara'],
            ['id' => 230, 'code' => 'BY', 'name' => 'Wit-Rusland'],
            ['id' => 231, 'code' => 'ZM', 'name' => 'Zambia'],
            ['id' => 232, 'code' => 'ZW', 'name' => 'Zimbabwe'],
            ['id' => 233, 'code' => 'ZA', 'name' => 'Zuid-Afrika'],
            ['id' => 234, 'code' => 'GS', 'name' => 'Zuid-Georgia en de Zuidelijke Sandwicheilanden'],
            ['id' => 235, 'code' => 'KR', 'name' => 'Zuid-Korea'],
            ['id' => 236, 'code' => 'SS', 'name' => 'Zuid-Soedan'],
            ['id' => 237, 'code' => 'SE', 'name' => 'Zweden'],
            ['id' => 238, 'code' => 'CH', 'name' => 'Zwitserland'],
        ];
    }

}