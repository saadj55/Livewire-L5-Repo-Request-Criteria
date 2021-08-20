<?php

namespace Saadj55\Traits;

use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;

trait WithRequestCriteria{

    public $search;
    public $searchFields;
    public $filter;
    public $orderBy;
    public $sortedBy;
    public $with;
    public $withCount;
    public $searchJoin;

    protected $queryStringsForCriteria =  [
        'search'=>['except'=>''],
        'searchFields'=>['except'=>''],
        'filter'=>['except'=>''],
        'orderBy'=>['except'=>''],
        'sortedBy'=>['except'=>''],
        'with'=>['except'=>''],
        'withCount'=>['except'=>''],
        'searchJoin'=>['except'=>''],
    ];

    public function queryString(){
        return $this->queryStringsForCriteria;
    }

    public function getRequestCriteria(){


        $request = new Request();

        $request->query->set('search', $this->search);
        $request->query->set('searchFields', $this->searchFields);
        $request->query->set('filter', $this->filter);
        $request->query->set('orderBy', $this->orderBy);
        $request->query->set('sortedBy', $this->sortedBy);
        $request->query->set('with', $this->with);
        $request->query->set('withCount', $this->withCount);
        $request->query->set('searchJoin', $this->searchJoin);

        return new RequestCriteria($request);
    }

}
