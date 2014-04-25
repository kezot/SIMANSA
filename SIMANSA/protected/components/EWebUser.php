<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of EWebUser
 *
 * @author Mario
 */
class EWebUser extends CWebUser{
 
    protected $_model;
 
    function isAdmin(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::ADMIN || $user->level==LevelLookUp::SUPERUSER;
        return false;
    }
    
    function isSiswa(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::SISWA || $user->level==LevelLookUp::SUPERUSER;
        return false;
    }
    
    function isGuru(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::GURU || $user->level==LevelLookUp::SUPERUSER;
        return false;
    }
    
    function isPiket(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::PIKET || $user->level==LevelLookUp::SUPERUSER;
        return false;
    }
    
    function isTU(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::TU  || $user->level==LevelLookUp::SUPERUSER;
        return false;
    }
    
    function isOrangTua(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::ORANGTUA || $user->level==LevelLookUp::SUPERUSER;
        return false;
    }
    
    function isWaliKelas(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::WALIKELAS || $user->level==LevelLookUp::SUPERUSER;
        return false;
    }
    
    
    
    
    
 
 
    // Load user model.
    protected function loadUser()
    {
        if ( $this->_model === null ) {
                $this->_model = User::model()->findByPk( $this->id );
        }
        return $this->_model;
    }
}