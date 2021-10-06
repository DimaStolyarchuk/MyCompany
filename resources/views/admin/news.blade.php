<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('admin.head')

<body>
<div id="wrapper">
    @include('admin.menu')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Головна сторінка
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Таблиця нових новин<a href="{{route('news_form')}}"><i class="fa fa-edit"></i> Додати нові дані </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Номер Id</th>
                                        <th>Титулка</th>
                                        <th>Картинка</th>
                                        <th>Коментарі</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                    @foreach($dataNews as $dataNew)
                                        <tr>
                                            <th scope="row">{{$dataNew->id}}</th>
                                            <td>{{$dataNew->title}}</td>
                                            <td>{{$dataNew->image}}</td>
                                            <td>{{$dataNew->description}}</td>
                                            <td>{{$dataNew->action}}</td>
                                            <td>{{$dataNew->priority}}</td>
                                            <td>
                                                <a href="{{ route('news_edit', ['id' => $dataNew->id]) }}">
                                                    edit
                                                </a>
                                                /
                                                <a href="{{ route('delete_news', ['id' => $dataNew->id]) }}">
                                                    delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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





