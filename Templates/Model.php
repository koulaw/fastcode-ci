@php namespace {namespace}\Models;

use CodeIgniter\Model;

class {! nameModel !} extends Model
{
    protected $table      = '{! table !}';
    protected $primaryKey = '{! primaryKey !}';
    protected $allowedFields = [{! allowedFields !}];
    protected $returnType    = '{! returnType !}';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
