<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Rekap;
use App\Core\FlashMessage;

class RekapController {

    public function index() {
        $rekaps = Rekap::findAll();

        View::render("rekap/index.html", [
            "rekaps" => $rekaps
        ]);
    }
    
    public function show($params) {

        $id = $params[0];

        $rekap = Rekap::findRekapById($id);
        
        View::render("rekap/show.html", [
            "rekap" => $rekap
        ]);
    }
    
    public function add() {

        // Jika insert berhasil
        if(Agenda::insert($_POST) > 0) {
            FlashMessage::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/agenda');
        } else {
            FlashMessage::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/agenda');
        }
    }

}