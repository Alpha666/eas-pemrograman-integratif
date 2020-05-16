<?php

namespace App\Models;

use App\Core\Model;

use PDO;
use PDOException;

class Bantu extends Model
{

    public static function findAll()
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->query('SELECT * FROM penyumbang');

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;

        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }

    public static function findBantuById($id)
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->prepare('SELECT * FROM penyumbang WHERE id = :id');
            $stmt->bindParam(":id", $id);
            
            $stmt->execute();

            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            return $results;

        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }

    public static function insert($data)
    {

        try {

            $db = static::getDb();

            // $sql = "INSERT INTO barang (jenis_bantuan, nama_bantuan, jumlah_bantuan)
            //             VALUES(:bantuan2, :makan1, :jumlah1)";
            $sql = "INSERT INTO penyumbang (nama,nama_bantuan, jenis_bantuan, jumlah_bantuan)
            VALUES(:nama, :nama_bantuan, :jenis_bantuan, :jumlah_bantuan)";

            $stmt = $db->prepare($sql);
            
            $stmt->bindParam(":nama", $data['nama']);
            $stmt->bindParam(":nama_bantuan", $data['nama_bantuan']);
            $stmt->bindParam(":jenis_bantuan", $data['jenis_bantuan']);
            $stmt->bindParam(":jumlah_bantuan", $data['jumlah_bantuan']);

            $stmt->execute();

            return $stmt->rowCount();

        } catch (PDOException $e) {
            echo "Terjadi kegagalan saat menyimpan data";
        }
    }


    
}
