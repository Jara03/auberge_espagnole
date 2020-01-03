<?php


namespace auberge_espagnole\Models;


class Participant extends \Illuminate\Database\Eloquent\Model{
    protected $table = 'participant';
    protected $primarykey = 'pseudopart';
    public $timestamps = false;

}