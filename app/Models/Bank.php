<?php
namespace App\Models;
class Bank extends BaseModel
{
    protected $table = 'bank';
    protected $primaryKey = 'Bcode';
   
    public function branchs()
    {
        return $this->hasMany('App\Models\BankBranch', 'Bcode');
    }
}