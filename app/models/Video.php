<?php

class Video extends BaseModel {
	protected $fillable = ['order', 'url'];

    protected $hidden = array('created_at', 'updated_at');

    public static $rules = array(
        'order' => 'required',
        'url' => 'required',
    );
}