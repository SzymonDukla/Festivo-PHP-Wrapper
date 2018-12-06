<?php

namespace SzymonDukla\HolidayApi\HolidayApi;

use GuzzleHttp;

class HolidayApi {
    
    const BASE_URI = 'https://holidayapi.pl';
    const VERSION = 1;
    
    protected $client;
    
    public function __construct() {
        return $this;
    }
    
    public function makeClient()
    {
        try
        {
            $this->client = new GuzzleHttp\Client([
                'base_uri' => sprintf('%s/v%d/',
                    self::BASE_URI,
                    self::VERSION),
            ]);
            
            return $this;
        } catch (\Exception $exception)
        {
            return header("HTTP/1.1 " . $exception->getCode());
        }
    }
    
    public function getHolidays($country, $year = null, $month = null, $day = null, $previous = false, $upcoming = false, $pretty = false) {
        try
        {
            if($previous && $upcoming)
                return header("HTTP/1.1 400");
            
            $year 	= $year ?? date('Y');
            $month 	= $month ?? date('n');
            $day 	= $day ?? date('j');
            
            $holidays = $this->client->get('holidays',
                [
                    'query' => [
                        'country' 	=> $country,
                        'year' 		=> $year,
                        'month' 	=> $month,
                        'day' 		=> $day,
                        'previous'  => $previous,
                        'upcoming'  => $upcoming,
                        'pretty'    => $pretty
                    ],
                ]);
            
            if($holidays->getStatusCode() == 200)
            {
                $res = json_decode($holidays->getBody());
                $holidays = !empty($res->holidays) ? $res->holidays[0] : [];
            }
            
            return $holidays;
            
        } catch (\Exception $exception)
        {
            return header("HTTP/1.1 " . $exception->getCode());
        }
    }
    
}