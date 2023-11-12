<?php

namespace App\Controllers;

use App\Models\UserModel;
use PSpell\Config;

class Home extends BaseController
{
    public function index(): string
    {
        if(logged_in() && in_groups('admin')){
            // $users = new UserModel();

            $db = \Config\Database::connect();
            $builder = $db->table('users');
            $builder->select('users.id, users.email, users.username, pasien.id_users, pasien.nama_pasien, pasien.alamat_pasien, pasien.tanggal_lahir, pasien.nomor_kontak, pasien.validasi');
            $builder->join('pasien', 'pasien.id_users = users.id');
            $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
            $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id ');
            $query = $builder->get();
            $data = [
                'users' => $query->getResult(),
            ];
            // dd($data);
            return view('home_page',$data);

        }elseif (logged_in() && in_groups('pasien')) 
        {
            return view('home_page');
        }

        elseif (logged_in() && in_groups('dokter'))
        {
            return view('home_page');
        }else
        {
        return view('landing_page');
        }

         
    }

}
