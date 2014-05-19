<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LevelLookUp
 *
 * @author Mario
 */
class LevelLookUp {

    //const MEMBER = 0;
    const SISWA = 1;
    const GURU = 2;
    const PIKET = 3;
    const TU = 4;
    const ORANGTUA = 5;
    const WALIKELAS = 6;
    const ADMIN = 9;
    const SUPERUSER = 10;

    // For CGridView, CListView Purposes
    public static function getLabel($level) {
        //if($level == self::MEMBER)
        // return 'Member';
        if ($level == self::SISWA)
            return 'Siswa';
        if ($level == self::GURU)
            return 'Guru';
        if ($level == self::PIKET)
            return 'Piket';
        if ($level == self::TU)
            return 'TU';
        if ($level == self::ORANGTUA)
            return 'Orang Tua';
        if ($level == self::WALIKELAS)
            return 'Wali Kelas';
        if ($level == self::ADMIN)
            return 'Administrator';
        if ($level == self::SUPERUSER)
            return 'Super User';
        return false;
    }

    // for dropdown lists purposes
    public static function getLevelList() {
        return array(
            //self::MEMBER=>'Member',
            self::SISWA => 'Siswa',
            self::GURU => 'Guru',
            self::PIKET => 'Piket',
            self::TU => 'TU',
            self::ORANGTUA => 'Orang Tua',
            self::WALIKELAS => 'Wali Kelas',
            self::ADMIN => 'Administrator',
            self::SUPERUSER => 'Super User',
        );
    }

}
