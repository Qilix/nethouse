<?php

namespace App\News\Repositories\Interfaces;

interface NewsRepositoryInterface
{
    public function getById($id);
    public function getInLastThreeDays();
    public function getAll();
}
