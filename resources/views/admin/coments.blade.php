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
                        Сторінка коментарів
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Таблиця головної сторінки <a href="{{route('coments_form')}}"><i class="fa fa-edit"></i> Додати нові дані </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Номер Id</th>
                                        <th>Перший коментар</th>
                                        <th>Другий коментар</th>
                                        <th>Третій коментар</th>
                                        <th>Активність</th>
                                        <th>Пріорітет</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                    @foreach($dataComents as $dataComent)
                                        <tr>
                                            <th scope="row">{{$dataComent->id}}</th>
                                            <td>{{$dataComent->title}}</td>
                                            <td>{{$dataComent->first_coments}}</td>
                                            <td>{{$dataComent->second_coments}}</td>
                                            <td>{{$dataComent->third_coments}}</td>
                                            <td>{{$dataComent->action}}</td>
                                            <td>{{$dataComent->priority}}</td>
                                            <td>
                                                <a href="{{ route('coments_edit', ['id' => $dataComent->id]) }}">
                                                    edit
                                                </a>
                                                /
                                                <a href="{{ route('delete_coments', ['id' => $dataComent->id]) }}">
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





