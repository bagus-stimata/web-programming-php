<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mahasiswa
 *
 * @author yhawin
 */
class Mahasiswa {
    var $nim;
    var $nama;
    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

            //put your code here
}

?>
