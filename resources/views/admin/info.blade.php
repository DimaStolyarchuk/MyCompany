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
                       Інформаційна сторінка
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Таблиця нової інформації<a href="{{route('info_form')}}"><i class="fa fa-edit"></i> Додати нові дані </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Номер Id</th>
                                        <th>Титулка</th>
                                        <th>Картинка</th>
                                        <th>Друга титулка</th>
                                        <th>Коментарі</th>
                                        <th>Активність</th>
                                        <th>Пріорітет</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                    @foreach($dataInfos as $dataInfo)
                                        <tr>
                                            <th scope="row">{{$dataInfo->id}}</th>
                                            <td>{{$dataInfo->title}}</td>
                                            <td>{{$dataInfo->image}}</td>
                                            <td>{{$dataInfo->second_title}}</td>
                                            <td>{{$dataInfo->description}}</td>
                                            <td>{{$dataInfo->action}}</td>
                                            <td>{{$dataInfo->priority}}</td>
                                            <td>
                                                <a href="{{ route('info_edit', ['id' => $dataInfo->id]) }}">
                                                    edit
                                                </a>
                                                /
                                                <a href="{{ route('delete_info', ['id' => $dataInfo->id]) }}">
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




