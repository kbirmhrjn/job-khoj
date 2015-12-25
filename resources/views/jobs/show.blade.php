@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="panel Panel">
          <div class="panel-heading Panel_heading">
                <h3><strong>{!! ucfirst($job->company) !!}</strong></h3>
          </div>
          <div class="panel-body Panel_body">
                <h3><strong>Job Details</strong></h3>
                <p class="text text-primary">
                    <ul class="list-group job-detail">
                      <li class="list-group-item">{!! $job->getPlace() !!}</li>
                      <li class="list-group-item">{!! $job->job_type !!}</li>
                    </ul>
                </p>
          </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel Panel">
          <div class="panel-heading Panel_heading">
            <h3><strong>{!! ucfirst($job->title) !!}</strong></h3>
          </div>
          <div class="panel-body Panel_body">
            <p class="text">
                {!! $job->description !!}
            </p>
          </div>
          <div class="Panel_footer">
              <h3><strong>How to Apply</strong></h3>
              <p class="text">
                  {!! $job->how_to_apply !!}
              </p>
          </div>
        </div>
    </div>
</div>
@stop