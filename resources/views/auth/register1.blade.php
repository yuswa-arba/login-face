@extends('layouts.app')

@section('script')
    <script src="{{ url('script/face-api.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <div class="form-group">
                            {{--<p>Silahkan klik (<b>Print Person</b>) setelah memasukan 1 gambar. Input 10 detik per gambar</p>--}}
                        </div>
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/register') }}">
                            <fieldset>
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <div id="wrapper" style="width:1020px; display:table;">
                                        <div id="jsonOutput" style="width:600px; display:table-cell;">
                                            <input type="text" id="personName" value="{{ old('parseName') }}" class="UIInput">
                                            <input type="text" id="personEmail" value="{{ old('parseEmail') }}" class="UIInput">
                                            <button type="button" onclick="createPerson()">Create Person</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="personId" value="{{ old('parseId') }}" placeholder="person id" readonly>
                                    <input type="text" id="urlImage" value="" placeholder="image url">
                                    <button type="button" onclick="addImage()">Image Url</button>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" onclick="addPersonFace()">Add Person</button>
                                </div>
                                <div class="form-group col-sm-12">
                                    <div class="col-md-6" id="imageDiv">
                                        Source image:
                                        <br><br>
                                        <img src="" id="sourcesPerson" width="200"/>
                                    </div>
                                    <div class="col-md-6" id="jsonOutput">
                                        Response:
                                        <br><br>
                                        <textarea id="responsePerson" class="UIInput"
                                                  style="width: 100%; height: 400px"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="pull-right" id="addPerson">Print Person
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
