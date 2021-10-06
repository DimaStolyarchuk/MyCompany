<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('admin.head')

<body>
<div id="wrapper">
    @include('admin.menu')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Заповнити таблицю новими даними
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Таблиці коментарів
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal" role="form" action="{{ route('save_coments') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ isset($dataComents->id) ? $dataComents->id : '' }}">

                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="fname" >Титулка</label>
                                                <div class="col-sm-9">
                                                    <input name="title" type="text" class="form-control"
                                                           placeholder="Титулка">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" >Перший коментар</label>
                                                <div class="col-sm-9">
                                                    <input name="first_coments" type="text" class="form-control"
                                                           placeholder="Перший коментар">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" >Другий коментар</label>
                                                <div class="col-sm-9">
                                                    <input name="second_coments" type="text" class="form-control"
                                                           placeholder="Другий коментар">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" >Третій коментар</label>
                                                <div class="col-sm-9">
                                                    <input name="third_coments" type="text" class="form-control"
                                                           placeholder="Третій коментар">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email1">Активність</label>
                                                <div class="col-sm-9">
                                                    <select name="action">
                                                        <option value="0" @if( isset($dataComents->action) && $dataComents->action == 0) selected @endif>No</option>
                                                        <option value="1" @if( isset($dataComents->action) && $dataComents->action == 1) selected @endif>Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1">Преорітет</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="priority" value="{{ $dataComents->priority ?? '' }}" class="form-control" id="cono1"
                                                           placeholder="Для кого?">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-primary">Відправити</button>
                                            </div>
                                        </div>
                                    </form>
                                    <a href="{{ route('admin_coments') }}" >НАЗАД</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.scripts')
</body>
</html>






