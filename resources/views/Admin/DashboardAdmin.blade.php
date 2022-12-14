@extends('layouts.head')

@section('head')
    
@extends('layouts.contentAdmin')

@section('contentAdmin')


<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">SCM Dashboard</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-12">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                                <iframe width="100%" height="700" src="https://app.powerbi.com/reportEmbed?reportId=938985ee-8a47-43ef-9a43-9ecbccb6d727&autoAuth=true&ctid=da5fec72-8d71-407a-b49a-16212f2ea986"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @extends('layouts.footer')

    @section('footer')

    @extends('layouts.script')

    @section('script')

@endsection