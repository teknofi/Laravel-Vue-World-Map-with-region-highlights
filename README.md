
# Laravel-Vue-World-Map-with-region-highlights

A drop in custom vue component to display a detailed SVG world map with highlightable countries from any country codes passed through an array.




![App Screenshot](https://i.ibb.co/Q6xZ55y/world-map.png)


## Authors

- [@teknofi](https://www.github.com/teknofi)


## Documentation

[Documentation](https://linktodocumentation)

This component was made for laravel projects with vue installed and uses tailwind for styling.

The component can be called like this and expects an array of uppercase country codes. As with any vue component include it in your app.js file.

```
<WorldMap :countryIDs="@js($distLocationCodes)" />
```
Use the table below for country codes used in the map.

| Country  | Code |
| ------------- | ------------- |
| Afghanistan  | AF  |
| Albania  | AL  |
| Algeria  | DZ  |
| Andorra  | AD  |
| Angola  | AO  |
| Antigua and Barbuda  | AG  |
| Argentina  | AR  |
| Armenia  | AM  |
| Australia  | AU  |
| Austria  | AT  |
| Azerbaijan  | AZ  |
| Bahrain  | BH  |
| Bangladesh  | BD  |
| Barbados  | BB  |
| Belarus  | BY  |
| Belgium  | BE  |
| Belize  | BZ  |
| Benin  | BJ  |
| Bhutan  | BT  |
| Bolivia  | BO  |
| Bosnia and Herzegovina  | BA  |
| Botswana  | BW  |
| Brazil  | BR  |
| Brunei  | BN  |
| Bulgaria  | BG  |
| Burkina Faso  | BF  |
| Burundi  | BI  |
| Cabo Verde  | CV  |
| Cambodia  | KH  |
| Cameroon  | CM  |
| Canada  | CA  |
| Central African Republic  | CF  |
| Chad  | TD  |
| Chile  | CL  |
| China  | CN  |
| Colombia  | CO  |
| Comoros  | KM  |
| Congo, Democratic Republic of the  | CD  |
| Congo, Republic of the  | CG  |
| Costa Rica  | CR  |
| C?te d?Ivoire  | CI  |
| Croatia  | HR  |
| Cuba  | CU  |
| Cyprus  | CY  |
| Czech Republic  | CZ  |
| Denmark  | DK  |
| Djibouti  | DJ  |
| Dominica  | DM  |
| Dominican Republic  | DO  |
| East Timor?(Timor-Leste)  | TL  |
| Ecuador  | EC  |
| Egypt  | EG  |
| El Salvador  | SV  |
| Equatorial Guinea  | GQ  |
| Eritrea  | ER  |
| Estonia  | EE  |
| Eswatini  | SZ  |
| Ethiopia  | ET  |
| Fiji  | FJ  |
| Finland  | FI  |
| France  | FR  |
| Gabon  | GA  |
| Georgia  | GE  |
| Germany  | DE  |
| Ghana  | GH  |
| Greece  | GR  |
| Grenada  | GD  |
| Guatemala  | GT  |
| Guinea  | GN  |
| Guinea-Bissau  | GW  |
| Guyana  | GY  |
| Haiti  | HT  |
| Honduras  | HN  |
| Hungary  | HU  |
| Iceland  | IS  |
| India  | IN  |
| Indonesia  | ID  |
| Iran  | IR  |
| Iraq  | IQ  |
| Ireland  | IE  |
| Israel  | IL  |
| Italy  | IT  |
| Jamaica  | JM  |
| Japan  | JP  |
| Jordan  | JO  |
| Kazakhstan  | KZ  |
| Kenya  | KE  |
| Kiribati  | KI  |
| Korea, North  | KP  |
| Korea, South  | KR  |
| Kosovo  | XK  |
| Kuwait  | KW  |
| Kyrgyzstan  | KG  |
| Laos  | LA  |
| Latvia  | LV  |
| Lebanon  | LB  |
| Lesotho  | LS  |
| Liberia  | LR  |
| Libya  | LY  |
| Liechtenstein  | LI  |
| Lithuania  | LT  |
| Luxembourg  | LU  |
| Madagascar  | MG  |
| Malawi  | MW  |
| Malaysia  | MY  |
| Maldives  | MV  |
| Mali  | ML  |
| Malta  | MT  |
| Marshall Islands  | MH  |
| Mauritania  | MR  |
| Mauritius  | MU  |
| Mexico  | MX  |
| Micronesia, Federated States of  | FM  |
| Moldova  | MD  |
| Monaco  | MC  |
| Mongolia  | MN  |
| Montenegro  | ME  |
| Morocco  | MA  |
| Mozambique  | MZ  |
| Myanmar?(Burma)  | MM  |
| Namibia  | NA  |
| Nauru  | NR  |
| Nepal  | NP  |
| Netherlands  | NL  |
| New Zealand  | NZ  |
| Nicaragua  | NI  |
| Niger  | NE  |
| Nigeria  | NG  |
| North Macedonia  | MK  |
| Norway  | NO  |
| Oman  | OM  |
| Pakistan  | PK  |
| Palau  | PW  |
| Panama  | PA  |
| Papua New Guinea  | PG  |
| Paraguay  | PY  |
| Peru  | PE  |
| Philippines  | PH  |
| Poland  | PL  |
| Portugal  | PT  |
| Qatar  | QA  |
| Romania  | RO  |
| Russia  | RU  |
| Rwanda  | RW  |
| Saint Kitts and Nevis  | KN  |
| Saint Lucia  | LC  |
| Saint Vincent and the Grenadines  | VC  |
| Samoa  | WS  |
| San Marino  | SM  |
| Sao Tome and Principe  | ST  |
| Saudi Arabia  | SA  |
| Senegal  | SN  |
| Serbia  | RS  |
| Seychelles  | SC  |
| Sierra Leone  | SL  |
| Singapore  | SG  |
| Slovakia  | SK  |
| Slovenia  | SI  |
| Solomon Islands  | SB  |
| Somalia  | SO  |
| South Africa  | ZA  |
| Spain  | ES  |
| Sri Lanka  | LK  |
| Sudan  | SD  |
| Sudan, South  | SS  |
| Suriname  | SR  |
| Sweden  | SE  |
| Switzerland  | CH  |
| Syria  | SY  |
| Taiwan  | TW  |
| Tajikistan  | TJ  |
| Tanzania  | TZ  |
| Thailand  | TH  |
| The Bahamas  | BS  |
| The Gambia  | GM  |
| Togo  | TG  |
| Tonga  | TO  |
| Trinidad and Tobago  | TT  |
| Tunisia  | TN  |
| Turkey  | TR  |
| Turkmenistan  | TM  |
| Tuvalu  | TV  |
| Uganda  | UG  |
| Ukraine  | UA  |
| United Arab Emirates  | AE  |
| United Kingdom  | GB  |
| United States  | US  |
| Uruguay  | UY  |
| Uzbekistan  | UZ  |
| Vanuatu  | VU  |
| Vatican City  | VA  |
| Venezuela  | VE  |
| Vietnam  | VN  |
| Yemen  | YE  |
| Zambia  | ZM  |
| Zimbabwe  | ZW  |

To change colour stylings amend the following code within the SVG of the vue component:

```
<svg width="1012px" height="667px" viewBox="0 0 1012 667" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            class="text-blue-600 flex mr-2 w-full h-full object-contain">
            <title>world-map-sketch-svg-vector</title>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="World-Map" transform="translate(-94.000000, -116.000000)" fill="#c0e0ff" fill-rule="nonzero"
                    stroke="#9CC0F9" stroke-width="0.1">
```

To change the highlighted colour change the svg text colour class, by default it's set to the tailwind class blue-600:

```
text-blue-600
```

To change the default colour, stroke width and stroke colour change the id="World-Map" line and amend the colours with your preferred hex colour codes and numeric value for stroke width:

```
fill="#c0e0ff" stroke="#9CC0F9" stroke-width="0.1"
```


## Support me

If this code has helped you consider buying me a coffee, no worries if not though!

[Buy me a Coffee](https://buymeacoffee.com/teknofi)
![App Screenshot](https://media0.giphy.com/media/o7RZbs4KAA6tvM4H6j/200w.webp)

