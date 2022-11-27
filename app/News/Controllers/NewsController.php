<?php

namespace App\News\Controllers;

use App\Models\News;
use App\Common\Controllers\Controller;
use App\News\Repositories\Interfaces\NewsRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class NewsController extends Controller{

    private $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository){
        $this->newsRepository = $newsRepository;
    }

    public function getById($id){
        $data = $this->newsRepository->getById($id);
        return Response::json(['data' => $data]);
    }

    public function getInLastThreeDays(){
        $data = $this->newsRepository->getInLastThreeDays();
        return Response::json(['data' => $data]);
    }

    public function getAll(){
        $data = $this->newsRepository->getAll();
        return Response::json(['data' => $data]);
    }
}
