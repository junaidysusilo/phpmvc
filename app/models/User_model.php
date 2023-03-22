<?php

class User_model extends Controller
{
    private $nama = 'Junaidy';

    public function getUser()
    {
        return $this->nama;
    }
}
