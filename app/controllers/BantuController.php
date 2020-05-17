<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Bantu;
use App\Core\FlashMessage;

class BantuController {

    public function index() {
        $bantus = Bantu::findAll();

        View::render("bantu/index.html", [
            "bantus" => $bantus
        ]);
    }
    
    public function show($params) {

        $id = $params[0];

        $bantu = Bantu::findBantuById($id);
        
        View::render("bantu/show.html", [
            "bantu" => $bantu
        ]);
    }
    
    public function add() {

        // Jika insert berhasil
        if(Bantu::insert($_POST) > 0) {
            FlashMessage::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/bantu');
        } else {
            FlashMessage::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/bantu');
        }
    }



}