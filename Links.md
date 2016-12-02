# Useful Links:

## Weather

### Darksky API

* Doku:     https://darksky.net/dev/docs/forecast

* Beispiel: https://api.darksky.net/forecast/[APIKEY]/[LATITUDE],[LONGITUDE]

* Stefan's API Key: 42a5ce0e9f589a4a0907229d69c6ccdd

## Routing

### ~~OpenRouteService~~ *down*!

### navitia.io, nur public transport

    https://api.navitia.io/v1/coverage/de/journeys?
        from=[LONG];[LAT]&
        to=[LONG];[LAT]&
        datetime=[YYYYMMDDThhmmss]

Weitere Parameter:

Beispiel:
    http://canaltp.github.io/navitia-playground/play.html?request=https%3A%2F%2Fapi.navitia.io%2Fv1%2Fcoverage%2Fde%2Fjourneys%3Ffrom%3Dstop_area%253AOBF%253ASA%253ACTP8011160%26to%3Dstop_area%253AOBF%253ASA%253ACTP8000156%26datetime%3D20161203T131506%26&token=86efcf17-2371-4a43-8be7-6d94b33c8d8c

### HERE, API Key 90 Tage gültig

    https://route.cit.api.here.com/routing/7.2/calculateroute.json
       ?app_id={YOUR_APP_ID}
       &app_code={YOUR_APP_CODE}
       &waypoint0=geo![LAT],[LON]
       &waypoint1=geo![LAT],[LON]
       &mode=fastest;car;traffic:enabled

https://developer.here.com/rest-apis/documentation/routing/topics/quick-start.html

### Bahn Links
* Bahnfahrplan(Key: DBhackFrankfurt0316)  http://data.deutschebahn.com/dataset/api-fahrplan
* VBB Fahrplan: http://www.vbb.de/de/article/fahrplan/webservices/schnittstellen-fuer-webentwickler/5070.html
* No idea:  https://github.com/dbopendata/db-fasta-api-java-client
* Karte mit verfügbaren Verbänden:  https://github.com/highsource/verbundkarte
* VRN openData: https://opendata.rnv-online.de
* Anzeigetafeln DB: http://aseier.de/bahn/a.html
