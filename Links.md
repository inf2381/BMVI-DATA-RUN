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


### HERE, API Key 90 Tage gültig

    https://route.cit.api.here.com/routing/7.2/calculateroute.json
       ?app_id={YOUR_APP_ID}
       &app_code={YOUR_APP_CODE}
       &waypoint0=geo![LAT],[LON]
       &waypoint1=geo![LAT],[LON]
       &mode=fastest;car;traffic:enabled

https://developer.here.com/rest-apis/documentation/routing/topics/quick-start.html

