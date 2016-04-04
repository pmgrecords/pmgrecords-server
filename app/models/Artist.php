<?php

class Artist extends BaseModel {

    protected $fillable = [];
    
    protected $hidden = array('created_at', 'updated_at');
}