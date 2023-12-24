<?php

namespace App\Controllers;

use App\Models\Bpsi;
use App\Models\LoginModel;
use CodeIgniter\CLI\Console;

class LoginController extends BaseController
{
   protected $LoginModel;
   public function __construct()
   {
      $this->LoginModel = new LoginModel();
   }
   public function index()
   {
      
   if (!session('id')) {
      return redirect()->to(site_url('/dashboard'));
      print_r($_SESSION);
      
      
      
      // return view('/index', [
      //    'data' => $bpsiModel,
      // ]);
   }
   return view('pages/samples/login');
}
public function logout()
{
    session()->destroy();

    // return redirect()->to('pages/samples/login');
    return view('login');
}
   public function auth()
   {
    
       $session = session();

       $model = new LoginModel();
       $bpsi   = new  Bpsi();
       $username = $this->request->getVar('username');
       $password = $this->request->getVar('password');
       $data = $model->where('username', $username)->first();
       if($data){
           $pass = $data['password'];
           $verify_pass = md5($password, $pass);
           if($verify_pass){
               $ses_data = [
                   'id'         => $data['id'],
                   'username'   => $data['username'],
                   'password'   => $data['password'],
                   'isLoggedIn'  => TRUE
               ];
               $session->set($ses_data);
                return redirect()->to('dashboard');
           }else{
               $session->setFlashdata('msg', 'Wrong Password');
               return redirect()->to('/login');
           }
       }else{
           $session->setFlashdata('msg', 'username not Found');
           return redirect()->to('/login');
       }
   }

   public function registration()
   {
      return view('pages/samples/registrasi');
   }
   public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'          => 'required|min_length[3]|max_length[20]',
            'password'      => 'required|min_length[6]|max_length[200]',
        ];
         
        if($this->validate($rules)){
            $model = new LoginModel();
            $data = [
                'username'     => $this->request->getVar('username'),
                'password' => MD5($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
  
}
