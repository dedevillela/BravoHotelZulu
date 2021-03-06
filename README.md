# BravoHotelZulu

BravoHotelZulu é um fork de Barrie Spotter [https://github.com/barriespotter/Web_App](https://github.com/barriespotter/Web_App) e Ysurac [https://github.com/Ysurac/FlightAirMap](https://github.com/Ysurac/FlightAirMap) com mapa, espaço aéreo, METAR, PDO e suporte ADS-B.
Navegue pelos dados baseados em uma aeronave, linha aérea ou aeroporto em particular. Veja estatísticas extensivas sobre os tipos de  aeronaves, linhas aéreas, partidas e chegadas dos aeroportos e os horários mais movimentados do dia, ou simplesmente explore os voos.

Pode ser usado com Dump1090 ou qualquer fonte SBS.
Também pode ser usado com fontes da IVAO como whazzup.txt, phpvms,...

Além disso também suporta glidernet APRS como fonte.

## Demo
* ADS-B : [https://www.flightairmap.fr/](https://www.flightairmap.fr/)
* IVAO : [https://ivao.flightairmap.fr/](https://ivao.flightairmap.fr/)
* VATSIM : [https://vatsim.flightairmap.fr/](https://vatsim.flightairmap.fr/)


## Requisitos do Sistema

Para instalar o aplicativo web, você precisa cumprir os seguintes requisitos:

* PHP version 5.2.3 or greater (5.3 or greater is recommended)
* MySQL version 5.6 or greater (or MariaDB)
* SQLite 3 (if you use ADS-B as datasource)
* An HTTP Server such as:
	* Apache 2.0+
	* Nginx (include install/flightairmap-nginx-conf.include in server part of the config)

## Required Extensions

The follwing is a list of PHP extensions that must be installed on your server in order for this web app to run properly:

* cURL [http://php.net/curl](http://php.net/curl) which is used to access remote sites.
* PDO [http://php.net/pdo](http://php.net/pdo) with MySQL driver is required for database access (Maybe other databases work too, not tested). SQLite driver needed for SBS.
* JSON [http://php.net/json](http://php.net/json)
* ZIP [http://php.net/zip](http://php.net/zip) needed for SBS.
* DOM [http://php.net/dom](http://php.net/dom)
* SimpleXML [http://php.net/simplexml](http://php.net/simplexml)

## Install ##
### Web install/Update ###
(This is the recommanded way to install)

Use install/index.php

### Console install ###
* Create a mysql database.
* Populate the database with db/*.sql
* supply require/settings.php with your database credentials.
* run install/populate_all.php (You should go to http://www.virtualradarserver.co.uk/ and http://pp-sqb.mantma.co.uk/ to read the licences. If you find databases with better licences contact me) or install/populate_ivao.php if you use IVAO as datasource

## Data Sources
You can choose [FlightAware](http://www.flightaware.com) *OR* ADS-B in SBS1 (BaseStation) format AND/OR ACARS from acarsdec.
(FlightAware is no more tested, I don't have a paid API account)

### FlightAware Api Key 
* get yourself a flightAware api key http://flightaware.com/commercial/flightxml/
* supply require/settings.php with this key
* run cron.php

### ADS-B (real flights)
* You can use dump1090 [https://github.com/mutability/dump1090](https://github.com/mutability/dump1090) with a RTL dongle, Radarcape deltadb.txt or aircraftlist.json, or wazzup file, or /action.php/acars/data of phpvms...
* run cron-sbs.php (The name is not really good, this should be run one time like a daemon, use a init script or screen)

### ACARS (only messages from real flights)
* You have to use acarsdec [http://sourceforge.net/projects/acarsdec/](http://sourceforge.net/projects/acarsdec/) : acarsdec -N 127.0.0.1:9999 -r 0 131.525 131.550 131.725
* run cron-acars.php (also a daemon)

### APRS (real flights)
* You can user APRS server from glidernet like aprs.glidernet.org:10152

### IVAO (virtual flights)
* You can use as source a whazzup.txt file like : http://api.ivao.aero/getdata/whazzup/whazzup.txt

### VATSIM (virtual flights)
* You can use as source a vatsim-data.txt file like : http://info.vroute.net/vatsim-data.txt
 
