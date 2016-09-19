<?php

class Credit extends Illuminate\Database\Eloquent\Model
{
    protected $table = "credit";
    protected $primaryKey = "id";
    protected $fillable = ["description"];
    public $timestamps = false;
}