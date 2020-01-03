<?php


namespace auberge_espagnole\Models;
class Inscrit extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'inscrit';
    protected $primarykey = 'pseudo';
    public $timestamps = false;

}