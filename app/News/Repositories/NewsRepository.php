<?php

namespace App\News\Repositories;

use App\Models\News;
use App\News\Repositories\Interfaces\NewsRepositoryInterface;
use Carbon\Carbon;

class NewsRepository implements NewsRepositoryInterface{

    public function getById($id){
        return News::findOrFail($id);
    }

    public function getInLastThreeDays(){
        $lastthreedays = Carbon::now()->subDays(3)->format('Y-m-d');
        return News::where('created_at','>=', $lastthreedays)->get();
    }

    public function getAll(){
        return News::orderBy('created_at','DESC')->paginate(5);
    }

}
