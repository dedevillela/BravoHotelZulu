CREATE TABLE spotter_output (
  spotter_id serial,
  flightaware_id varchar(999) NOT NULL,
  ident varchar(999) NOT NULL,
  registration varchar(999),
  airline_name varchar(999) NOT NULL,
  airline_icao varchar(999) NOT NULL,
  airline_country varchar(999) NOT NULL,
  airline_type varchar(999) NOT NULL,
  aircraft_icao varchar(999) NOT NULL,
  aircraft_name varchar(999) NOT NULL,
  aircraft_manufacturer varchar(999) NOT NULL,
  departure_airport_icao varchar(999) NOT NULL,
  departure_airport_name varchar(999) NOT NULL,
  departure_airport_city varchar(999) NOT NULL,
  departure_airport_country varchar(999) NOT NULL,
  departure_airport_time varchar(20),
  arrival_airport_icao varchar(999) NOT NULL,
  arrival_airport_name varchar(999) NOT NULL,
  arrival_airport_city varchar(999) NOT NULL,
  arrival_airport_country varchar(999) NOT NULL,
  arrival_airport_time varchar(20),
  route_stop varchar(255) NOT NULL,
  date timestamp NOT NULL,
  latitude float NOT NULL,
  longitude float NOT NULL,
  waypoints text NOT NULL,
  altitude integer NOT NULL,
  heading integer NOT NULL,
  ground_speed integer NOT NULL,
  highlight text NOT NULL,
  squawk integer,
  ModeS varchar(255) NOT NULL,
  PRIMARY KEY (spotter_id)
);