<?php

namespace App\Pipelines\Criterias;

use App\Pipelines\PipelineFactory;

class SortPipeline extends PipelineFactory
{
    private $request;
    private $columns;

    public function __construct($columns)
    {
        $this->request = request();
        $this->columns = $columns;
    }

    protected function apply($builder)
    {
        if ($this->request && $this->request->filled('sort_by') && in_array($this->request->get('sort_by'), $this->columns)) {

            if ($this->request->filled('sort_type') && in_array($this->request->get('sort_type'), ['desc', 'asc'])) {
                $sort_type = $this->request->get('sort_type');
                $sort_by = $this->request->get('sort_by');

                $builder->orderBy($sort_by, $sort_type);
            }
        }

        return $builder;
    }
}
