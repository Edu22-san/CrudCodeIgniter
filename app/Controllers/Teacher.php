<?php
namespace App\Controllers;
use App\Models\TeacherModel;

class Teacher extends BaseController{
    public function view(){
        $model = model(TeacherModel::class);
        $data=[
            'teacher'=> $model->paginate(4),
            'pager'=> $model->pager
        ];

        return view('teacher/viewteacher',$data);
       
    }
    public function create(){
       // $model =model(TeacherModel::class);
        return view('teacher/createteacher');
    }
    public function createaction(){
        $model = model(TeacherModel::class);
        $data = [
            'first_name' =>$this->request->getVar('first_name'),
            'last_name' =>$this->request->getVar('last_name'),
            'age' =>$this->request->getVar('age'),
            'dui' =>$this->request->getVar('dui'),
            'course' =>$this->request->getVar('course'),
            'mail' =>$this->request->getVar('mail'),
        ];
        $model->insert($data);
        return $this->response->redirect(site_url('/view'));
    }
    public function update($id = null){
        $model = model(TeacherModel::class);
        $data['user_obj']= $model->where('id',$id)->first();
        return view('teacher/editteacher', $data);
    }
    public function updateaction(){
        $model = model(TeacherModel::class);
        $id =$this->request->getVar('id');
        $data = [
            'first_name' =>$this->request->getVar('first_name'),
            'last_name' =>$this->request->getVar('last_name'),
            'age' =>$this->request->getVar('age'),
            'dui' =>$this->request->getVar('dui'),
            'course' =>$this->request->getVar('course'),
            'mail' =>$this->request->getVar('mail'),
        ];
        $model->update($id, $data);
        return $this->response->redirect(site_url('/view'));
    }
    public function delete($id = null){
        $model = model(TeacherModel::class);
        $data['delete_user'] = $model->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/view'));
    }
}
?>