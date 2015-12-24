@extends('layouts.master')
@section('content')
<div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-8">
        <div class="well">
            <form>
            <div class="form-group no_margin">
                <input type="text" class="form-control" placeholder="Find title, company, job, type anything.">
            </div>
            </form>
            <!-- /.input-group -->
        </div
        <ul class="list-group">
            @foreach($jobs as $job)
                <li class="list-group-item job_listing">
                    <div class="content clearfix">
                        <span class="list-group-item-heading clearfix">
                            <strong class="pull-left">{!! ucfirst($job->title)!!}</strong>
                            <span class="pull-right">{!! $job->job_type !!}</span>
                        </span>
                        <p class="list-group-item-text clearfix">
                            <strong class="pull-left">{{$job->company}}</strong>
                            <span class="pull-right">{{ $job->getPlace() }}</span>
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    @include('layouts.right-sidebar')
</div>
<!-- /.row -->
@stop