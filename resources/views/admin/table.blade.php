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
                        Сторінка тфблиці
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Таблиця головної сторінки <a href="{{route('table_form')}}"><i class="fa fa-edit"></i> Додати нові дані </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Номер Id</th>
                                        <th>Титулка</th>
                                        <th>Перший стопчик</th>
                                        <th>Другий стопчик</th>
                                        <th>Третій стопчик</th>
                                        <th>Четвертий стопчик</th>
                                        <th>Активність</th>
                                        <th>Пріорітет</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                    @foreach($dataTables as $dataTable)
                                        <tr>
                                            <th scope="row">{{$dataTable->id}}</th>
                                            <td>{{$dataTable->title}}</td>
                                            <td>{{$dataTable->first_header}}</td>
                                            <td>{{$dataTable->second_header}}</td>
                                            <td>{{$dataTable->third_header}}</td>
                                            <td>{{$dataTable->quarters_header}}</td>
                                            <td>{{$dataTable->action}}</td>
                                            <td>{{$dataTable->priority}}</td>
                                            <td>
                                                <a href="{{ route('table_edit', ['id' => $dataTable->id]) }}">
                                                    edit
                                                </a>
                                                /
                                                <a href="{{ route('delete_table', ['id' => $dataTable->id]) }}">
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





