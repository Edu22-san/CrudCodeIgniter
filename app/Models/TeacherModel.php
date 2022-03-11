<?php
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\Teacher;

class TeacherModel extends Model{
    protected $table = 'teachers';

    protected $primarykey = 'id';
    protected $returnType= Teacher::class;

    protected$allowedFields =['first_name','last_name','age','dui','course','mail']; 
     
    public function getTeacher(){
        return $this->findAll();
    }
    
}
?>