<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ListadoDePaises extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $variable = array(  array('a', '0', 'AD', 'Andorra'),
                            array('a', '0', 'AE', 'United Arab Emirates'),
                            array('a', '0', 'AF', 'Afghanistan'),
                            array('a', '0', 'AG', 'Antigua and Barbuda'),
                            array('a', '0', 'AI', 'Anguilla'),
                            array('a', '0', 'AL', 'Albania'),
                            array('a', '0', 'AM', 'Armenia'),
                            array('a', '0', 'AN', 'Netherlands Antilles'),
                            array('a', '0', 'AO', 'Angola'),
                            array('a', '0', 'AQ', 'Antarctica'),
                            array('a', '0', 'AR', 'Argentina'),
                            array('a', '0', 'AS', 'American Samoa'),
                            array('a', '0', 'AT', 'Austria'),
                            array('a', '0', 'AU', 'Australia'),
                            array('a', '0', 'AW', 'Aruba'),
                            array('a', '0', 'AZ', 'Azerbaijan'),
                            array('a', '0', 'BA', 'Bosnia and Herzegovina'),
                            array('a', '0', 'BB', 'Barbados'),
                            array('a', '0', 'BD', 'Bangladesh'),
                            array('a', '0', 'BE', 'Belgium'),
                            array('a', '0', 'BF', 'Burkina Faso'),
                            array('a', '0', 'BG', 'Bulgaria'),
                            array('a', '0', 'BH', 'Bahrain'),
                            array('a', '0', 'BI', 'Burundi'),
                            array('a', '0', 'BJ', 'Benin'),
                            array('a', '0', 'BL', 'Saint Barthelemy'),
                            array('a', '0', 'BM', 'Bermuda'),
                            array('a', '0', 'BN', 'Brunei Darussalam'),
                            array('a', '0', 'BO', 'Bolivia'),
                            array('a', '0', 'BQ', 'Bonaire, Sint Eustatius and Saba'),
                            array('a', '0', 'BR', 'Brazil'),
                            array('a', '0', 'BS', 'Bahamas'),
                            array('a', '0', 'BT', 'Bhutan'),
                            array('a', '0', 'BW', 'Botswana'),
                            array('a', '0', 'BY', 'Belarus'),
                            array('a', '0', 'BZ', 'Belize'),
                            array('a', '0', 'CA', 'Canada'),
                            array('a', '0', 'CC', 'Cocos (Keeling) Islands'),
                            array('a', '0', 'CD', 'Congo, The Democratic Republic of the'),
                            array('a', '0', 'CF', 'Central African Republic'),
                            array('a', '0', 'CG', 'Congo'),
                            array('a', '0', 'CH', 'Switzerland'),
                            array('a', '0', 'CI', 'C??te d\'Ivoire'),
                            array('a', '0', 'CK', 'Cook Islands'),
                            array('a', '0', 'CL', 'Chile'),
                            array('a', '0', 'CM', 'Cameroon'),
                            array('a', '0', 'CN', 'China'),
                            array('a', '0', 'CO', 'Colombia'),
                            array('a', '0', 'CR', 'Costa Rica'),
                            array('a', '0', 'CS', 'Serbia and Montenegro'),
                            array('a', '0', 'CU', 'Cuba'),
                            array('a', '0', 'CV', 'Cape Verde'),
                            array('a', '0', 'CW', 'Cura??ao'),
                            array('a', '0', 'CX', 'Christmas Island'),
                            array('a', '0', 'CY', 'Cyprus'),
                            array('a', '0', 'CZ', 'Czech Republic'),
                            array('a', '0', 'DE', 'Germany'),
                            array('a', '0', 'DJ', 'Djibouti'),
                            array('a', '0', 'DK', 'Denmark'),
                            array('a', '0', 'DM', 'Dominica'),
                            array('a', '0', 'DO', 'Dominican Republic'),
                            array('a', '0', 'DZ', 'Algeria'),
                            array('a', '0', 'EC', 'Ecuador'),
                            array('a', '0', 'EE', 'Estonia'),
                            array('a', '0', 'EG', 'Egypt'),
                            array('a', '0', 'EH', 'Western Sahara'),
                            array('a', '0', 'ER', 'Eritrea'),
                            array('a', '0', 'ES', 'Spain'),
                            array('a', '0', 'ET', 'Ethiopia'),
                            array('a', '0', 'FI', 'Finland'),
                            array('a', '0', 'FJ', 'Fiji'),
                            array('a', '0', 'FK', 'Falkland Islands (Malvinas)'),
                            array('a', '0', 'FM', 'Micronesia, Federated States of'),
                            array('a', '0', 'FO', 'Faroe Islands'),
                            array('a', '0', 'FR', 'France'),
                            array('a', '0', 'GA', 'Gabon'),
                            array('a', '0', 'GB', 'United Kingdom'),
                            array('a', '0', 'GD', 'Grenada'),
                            array('a', '0', 'GE', 'Georgia'),
                            array('a', '0', 'GF', 'French Guiana'),
                            array('a', '0', 'GG', 'Guernsey'),
                            array('a', '0', 'GH', 'Ghana'),
                            array('a', '0', 'GI', 'Gibraltar'),
                            array('a', '0', 'GL', 'Greenland'),
                            array('a', '0', 'GM', 'Gambia'),
                            array('a', '0', 'GN', 'Guinea'),
                            array('a', '0', 'GP', 'Guadeloupe'),
                            array('a', '0', 'GQ', 'Equatorial Guinea'),
                            array('a', '0', 'GR', 'Greece'),
                            array('a', '0', 'GS', 'South Georgia and the South Sandwich Islands'),
                            array('a', '0', 'GT', 'Guatemala'),
                            array('a', '0', 'GU', 'Guam'),
                            array('a', '0', 'GW', 'Guinea-Bissau'),
                            array('a', '0', 'GY', 'Guyana'),
                            array('a', '0', 'HK', 'Hong Kong '),
                            array('a', '0', 'HM', 'Heard Island and McDonald Islands'),
                            array('a', '0', 'HN', 'Honduras'),
                            array('a', '0', 'HR', 'Croatia'),
                            array('a', '0', 'HT', 'Haiti'),
                            array('a', '0', 'HU', 'Hungary'),
                            array('a', '0', 'ID', 'Indonesia'),
                            array('a', '0', 'IE', 'Ireland'),
                            array('a', '0', 'IL', 'Israel'),
                            array('a', '0', 'IM', 'Isle of Man'),
                            array('a', '0', 'IN', 'India'),
                            array('a', '0', 'IO', 'British Indian Ocean Territory'),
                            array('a', '0', 'IQ', 'Iraq'),
                            array('a', '0', 'IR', 'Iran, Islamic Republic of'),
                            array('a', '0', 'IS', 'Iceland'),
                            array('a', '0', 'IT', 'Italy'),
                            array('a', '0', 'JE', 'Jersey'),
                            array('a', '0', 'JM', 'Jamaica'),
                            array('a', '0', 'JO', 'Jordan'),
                            array('a', '0', 'JP', 'Japan'),
                            array('a', '0', 'KE', 'Kenya'),
                            array('a', '0', 'KG', 'Kyrgyzstan'),
                            array('a', '0', 'KH', 'Cambodia'),
                            array('a', '0', 'KI', 'Kiribati'),
                            array('a', '0', 'KM', 'Comoros'),
                            array('a', '0', 'KN', 'Saint Kitts and Nevis'),
                            array('a', '0', 'KP', 'Korea, Democratic People\'s Republic of'),
                            array('a', '0', 'KR', 'Korea, Republic of'),
                            array('a', '0', 'KW', 'Kuwait'),
                            array('a', '0', 'KY', 'Cayman Islands'),
                            array('a', '0', 'KZ', 'Kazakhstan'),
                            array('a', '0', 'LA', 'Lao People\'s Democratic Republic'),
                            array('a', '0', 'LB', 'Lebanon'),
                            array('a', '0', 'LC', 'Saint Lucia'),
                            array('a', '0', 'LI', 'Liechtenstein'),
                            array('a', '0', 'LK', 'Sri Lanka'),
                            array('a', '0', 'LR', 'Liberia'),
                            array('a', '0', 'LS', 'Lesotho'),
                            array('a', '0', 'LT', 'Lithuania'),
                            array('a', '0', 'LU', 'Luxembourg'),
                            array('a', '0', 'LV', 'Latvia'),
                            array('a', '0', 'LY', 'Libyan Arab Jamahiriya'),
                            array('a', '0', 'MA', 'Morocco'),
                            array('a', '0', 'MC', 'Monaco'),
                            array('a', '0', 'MD', 'Moldova'),
                            array('a', '0', 'ME', 'Montenegro'),
                            array('a', '0', 'MF', 'Saint Martin (French Part)'),
                            array('a', '0', 'MG', 'Madagascar'),
                            array('a', '0', 'MH', 'Marshall Islands'),
                            array('a', '0', 'MK', 'Macedonia, The former Yugoslav Republic of'),
                            array('a', '0', 'ML', 'Mali'),
                            array('a', '0', 'MM', 'Myanmar'),
                            array('a', '0', 'MN', 'Mongolia'),
                            array('a', '0', 'MO', 'Macao'),
                            array('a', '0', 'MP', 'Northern Mariana Islands'),
                            array('a', '0', 'MQ', 'Martinique'),
                            array('a', '0', 'MR', 'Mauritania'),
                            array('a', '0', 'MS', 'Montserrat'),
                            array('a', '0', 'MT', 'Malta'),
                            array('a', '0', 'MU', 'Mauritius'),
                            array('a', '0', 'MV', 'Maldives'),
                            array('a', '0', 'MW', 'Malawi'),
                            array('a', '0', 'MX', 'Mexico'),
                            array('a', '0', 'MY', 'Malaysia'),
                            array('a', '0', 'MZ', 'Mozambique'),
                            array('a', '0', 'NA', 'Namibia'),
                            array('a', '0', 'NC', 'New Caledonia'),
                            array('a', '0', 'NE', 'Niger'),
                            array('a', '0', 'NF', 'Norfolk Island'),
                            array('a', '0', 'NG', 'Nigeria'),
                            array('a', '0', 'NI', 'Nicaragua'),
                            array('a', '0', 'NL', 'Netherlands'),
                            array('a', '0', 'NO', 'Norway'),
                            array('a', '0', 'NP', 'Nepal'),
                            array('a', '0', 'NR', 'Nauru'),
                            array('a', '0', 'NU', 'Niue'),
                            array('a', '0', 'NZ', 'New Zealand'),
                            array('a', '0', 'OM', 'Oman'),
                            array('a', '0', 'PA', 'Panama'),
                            array('a', '0', 'PE', 'Peru'),
                            array('a', '0', 'PF', 'French Polynesia'),
                            array('a', '0', 'PG', 'Papua New Guinea'),
                            array('a', '0', 'PH', 'Philippines'),
                            array('a', '0', 'PK', 'Pakistan'),
                            array('a', '0', 'PL', 'Poland'),
                            array('a', '0', 'PM', 'Saint Pierre and Miquelon'),
                            array('a', '0', 'PN', 'Pitcairn'),
                            array('a', '0', 'PR', 'Puerto Rico'),
                            array('a', '0', 'PS', 'Palestinian Territory, Occupied'),
                            array('a', '0', 'PT', 'Portugal'),
                            array('a', '0', 'PW', 'Palau'),
                            array('a', '0', 'PY', 'Paraguay'),
                            array('a', '0', 'QA', 'Qatar'),
                            array('a', '0', 'RE', 'R??union'),
                            array('a', '0', 'RO', 'Romania'),
                            array('a', '0', 'RS', 'Serbia'),
                            array('a', '0', 'RU', 'Russian Federation'),
                            array('a', '0', 'RW', 'Rwanda'),
                            array('a', '0', 'SA', 'Saudi Arabia'),
                            array('a', '0', 'SB', 'Solomon Islands'),
                            array('a', '0', 'SC', 'Seychelles'),
                            array('a', '0', 'SD', 'Sudan'),
                            array('a', '0', 'SE', 'Sweden'),
                            array('a', '0', 'SG', 'Singapore'),
                            array('a', '0', 'SH', 'Saint Helena, Ascension and Tristan Da Cunha'),
                            array('a', '0', 'SI', 'Slovenia'),
                            array('a', '0', 'SJ', 'Svalbard and Jan Mayen'),
                            array('a', '0', 'SK', 'Slovakia'),
                            array('a', '0', 'SL', 'Sierra Leone'),
                            array('a', '0', 'SM', 'San Marino'),
                            array('a', '0', 'SN', 'Senegal'),
                            array('a', '0', 'SO', 'Somalia'),
                            array('a', '0', 'SR', 'Suriname'),
                            array('a', '0', 'SS', 'South Sudan'),
                            array('a', '0', 'ST', 'Sao Tome and Principe'),
                            array('a', '0', 'SV', 'El Salvador'),
                            array('a', '0', 'SX', 'Sint Maarten (Dutch Part)'),
                            array('a', '0', 'SY', 'Syrian Arab Republic'),
                            array('a', '0', 'SZ', 'Swaziland'),
                            array('a', '0', 'TC', 'Turks and Caicos Islands'),
                            array('a', '0', 'TD', 'Chad'),
                            array('a', '0', 'TF', 'French Southern Territories'),
                            array('a', '0', 'TG', 'Togo'),
                            array('a', '0', 'TH', 'Thailand'),
                            array('a', '0', 'TJ', 'Tajikistan'),
                            array('a', '0', 'TK', 'Tokelau'),
                            array('a', '0', 'TL', 'Timor-Leste'),
                            array('a', '0', 'TM', 'Turkmenistan'),
                            array('a', '0', 'TN', 'Tunisia'),
                            array('a', '0', 'TO', 'Tonga'),
                            array('a', '0', 'TR', 'Turkey'),
                            array('a', '0', 'TT', 'Trinidad and Tobago'),
                            array('a', '0', 'TV', 'Tuvalu'),
                            array('a', '0', 'TW', 'Taiwan, Province of China'),
                            array('a', '0', 'TZ', 'Tanzania, United Republic of'),
                            array('a', '0', 'UA', 'Ukraine'),
                            array('a', '0', 'UG', 'Uganda'),
                            array('a', '0', 'UM', 'United States Minor Outlying Islands'),
                            array('a', '0', 'US', 'United States'),
                            array('a', '0', 'UY', 'Uruguay'),
                            array('a', '0', 'UZ', 'Uzbekistan'),
                            array('a', '0', 'VA', 'Holy See (Vatican City State)'),
                            array('a', '0', 'VC', 'Saint Vincent and the Grenadines'),
                            array('a', '0', 'VE', 'Venezuela'),
                            array('a', '0', 'VG', 'Virgin Islands, British'),
                            array('a', '0', 'VI', 'Virgin Islands, U.S.'),
                            array('a', '0', 'VN', 'Viet Nam'),
                            array('a', '0', 'VU', 'Vanuatu'),
                            array('a', '0', 'WF', 'Wallis and Futuna'),
                            array('a', '0', 'WS', 'Samoa'),
                            array('a', '0', 'XZ', 'Installations in International Waters'),
                            array('a', '0', 'YE', 'Yemen'),
                            array('a', '0', 'YT', 'Mayotte'),
                            array('a', '0', 'ZA', 'South Africa'),
                            array('a', '0', 'ZM', 'Zambia'),
                            array('a', '0', 'ZW', 'Zimbabwe')
                        );                             	 	 	
                            	  	 	
        for ($i = 0; $i < count($variable); $i++) {

            $ISO = $variable[$i][0];
            $Numero = $variable[$i][1];
            $CodigoPais = $variable[$i][2];
            $Pais = $variable[$i][3];

            DB::table('c_paises')->insert([
                'CodigoPais' => $CodigoPais,
                'ISO' => $ISO,
                'Numero' => $Numero,
                'Pais' => $Pais
            ]);
        }



        
    }
}
