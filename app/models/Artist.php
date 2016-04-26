<?php

class Artist extends BaseModel {

    protected $fillable = ['order', 'name', 'sound_cloud_url', 'spund_cloud_id'];

    protected $hidden = array('created_at', 'updated_at');

    public static $rules = array(
        'order' => 'required',
        'name' => 'required',
        'sound_cloud_url' => 'required',
        'sound_cloud_id' => 'required',
    );
}