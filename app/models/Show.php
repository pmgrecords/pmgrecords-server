<?php

class Show extends BaseModel {
	protected $fillable = ['name', 'date', 'time', 'venue_name', 'address', 'city', 'state', 'zip', 'image_path', 'ticket_url'];

	protected $hidden = array('created_at', 'updated_at');
	
	public static $rules = array(
        'name' => 'required',
        'image_path' => 'required',
    );
}