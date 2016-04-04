<?php

use Carbon\Carbon;

class BaseModel extends Eloquent
{
    public function getCreatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }

    public function getUpdatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }

    public function toArray()
    {
        $array = parent::toArray();
        $camelArray = array();
        foreach($array as $name => $value){
            $camelArray[camel_case($name)] = $value;
        }
        return $camelArray;
    }
}