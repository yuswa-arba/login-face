@extends('layouts.app')

@section('script')
    <script src="{{ url('script/face-api.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div id="wrapper" style="width:1020px; display:table;">
                                    <div id="jsonOutput" style="width:600px; display:table-cell;">
                                        <input type="text" id="urlIdentify" value="">
                                        <button type="button" onclick="addIdentify()">Image Identify</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <div class="col-md-6" id="imageDiv">
                                    Source image:
                                    <br><br>
                                    <img src="" id="sourcesIdentify" style="width: 100%;"/>
                                </div>
                                <div class="col-md-6" id="jsonOutput">
                                    Response:
                                    <br><br>

                                    <input id="email" type="hidden" class="form-control" name="email" value="hiroshi" required autofocus>

                                    <input id="password" type="hidden" class="form-control" name="password" required>

                                    <div id="responseIdentify" class="UIInput"
                                              style="width: 100%; height: 400px"></div>
                                </div>
                            </div>
                            <button id="id_login" type="submit" class="btn btn-primary pull-right" disabled>
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
