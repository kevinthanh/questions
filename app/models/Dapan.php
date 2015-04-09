<?php
class Dapan extends Eloquent {
    public $table = 'dapan';
    protected $fillable = array('tendapan','dapan_dung','cauhoi_id','user_id');
    
    public static $dapan_rules = array(
        'tendapan'      =>  'required',
        'dapan_dung'    =>  'integer'
    );
    public static $dapan_langs = array(
        'tendapan.requried'         =>  'Vui lòng nhập đáp án',
        'dapan_dung.integer'     =>  'Bạn phải nhập số 0 hoặc 1',
    );
    
    public function cauhoi() {
        return $this->belongsTo('Cauhoi','cauhoi_id');
    }
    public function users() {
        return $this->belongsTo('User','user_id');
    }
	public function baithi() {
		return $this->belongsTo('Baithi','dapan_id');
	}
    
}