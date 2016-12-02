# Useful Links:

## Weather

### Darksky API

* Doku:     https://darksky.net/dev/docs/forecast

* Beispiel: https://api.darksky.net/forecast/[APIKEY]/[LATITUDE],[LONGITUDE]

* Stefan's API Key: 42a5ce0e9f589a4a0907229d69c6ccdd

## Routing

### ~~OpenRouteService~~ *down*!

### navitia.io, (fast) nur public transport

[Dokumentation]{http://doc.navitia.io/#journeys}

    https://api.navitia.io/v1/coverage/de/journeys?
        from=[LONG];[LAT]&
        to=[LONG];[LAT]&
        datetime=[YYYYMMDDThhmmss]

Weitere Parameter, *kursiv* ist default:

    datetime_represents  = [departure|arrival]
    data_freshness       = [realtime|*base_schedule*]
    first_section_mode[] = [walking, car, bike, bss]
       Mode of transport until public transport is reached
       Inklusiv, d.h. alle gewünschten Modi müssen angegeben werden
       bss = bike sharing system
    last_section_mode[]  = siehe first_section_mode, aber für das letzte Stück

[Beispiel]{http://canaltp.github.io/navitia-playground/play.html?request=https%3A%2F%2Fapi.navitia.io%2Fv1%2Fjourneys%3Ffrom%3D13.366738%253B52.589652%26to%3D13.378643%253B52.529219%26datetime%3D20161202T071500%26&token=86efcf17-2371-4a43-8be7-6d94b33c8d8c}


### HERE, API Key 90 Tage gültig

[Quick Start]{https://developer.here.com/rest-apis/documentation/routing/topics/quick-start.html}

    https://route.cit.api.here.com/routing/7.2/calculateroute.json
       ?app_id=6mQCzaGcLs8kliojD1Ha
       &app_code=tXZEU2dLsouf_H3Ip_8yWQ
       &waypoint0=geo!51.241614,6.855883
       &waypoint1=geo!51.216973,6.767406
       &mode=fastest;car;traffic:enabled

[Parameter]{https://developer.here.com/rest-apis/documentation/routing/topics/resource-calculate-route.html}

Beispiel:

    https://developer.here.com/api-explorer/rest/routing/route-from-a-to-b



### Bahn Links
* Bahnfahrplan(Key: DBhackFrankfurt0316)  http://data.deutschebahn.com/dataset/api-fahrplan
* VBB Fahrplan: http://www.vbb.de/de/article/fahrplan/webservices/schnittstellen-fuer-webentwickler/5070.html
* No idea:  https://github.com/dbopendata/db-fasta-api-java-client
* Karte mit verfügbaren Verbänden:  https://github.com/highsource/verbundkarte
* VRN openData: https://opendata.rnv-online.de
* Anzeigetafeln DB: http://aseier.de/bahn/a.html
