<?php
namespace App\Models;
class BankBranch extends BaseModel
{
    protected $table = 'bank_branch';
    protected $primaryKey = 'Bnumber';
   
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank','Bcode');
    }
}