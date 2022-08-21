@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Classroom</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Classroom</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                             data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                        <span>Visitors</span>
                    </div>
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                             data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                        <span>Visits</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Class</strong> List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Class Name</th>
                                    <th>Student Name</th>
                                    <th>Teacher</th>
                                    <th>Numeric Name</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>BCA Sem1</td>
                                    <td>Christina Thomas</td>
                                    <td>Juan Freeman</td>
                                    <td>112</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>BCA Sem2</td>
                                    <td>Christina Thomas</td>
                                    <td>Juan Freeman</td>
                                    <td>321</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>BBA Sem1</td>
                                    <td>Christina Thomas</td>
                                    <td>Juan Freeman</td>
                                    <td>1323</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>164</td>
                                    <td>BCA Sem1</td>
                                    <td>Christina Thomas</td>
                                    <td>John</td>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>56</td>
                                    <td>BCA Sem2</td>
                                    <td>Christina Thomas</td>
                                    <td>Juan Freeman</td>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>BBA Sem1</td>
                                    <td>Christina Thomas</td>
                                    <td>John</td>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>MCA Sem5</td>
                                    <td>Hossein Shams</td>
                                    <td>Michael</td>
                                    <td>28</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>B.E Computar</td>
                                    <td>Maryam Amiri</td>
                                    <td>Michael</td>
                                    <td>28</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>BBA Sem1</td>
                                    <td>Tim Hank</td>
                                    <td>Juan Freeman</td>
                                    <td>18</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>BCA Sem1</td>
                                    <td>Christina Thomas</td>
                                    <td>Juan Freeman</td>
                                    <td>18</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>BCA Sem2</td>
                                    <td>Fidel Tonn</td>
                                    <td>Juan Freeman</td>
                                    <td>19</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>B.E Computer</td>
                                    <td>Gary Camara</td>
                                    <td>Juan Freeman</td>
                                    <td>19</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>MCA Sem6</td>
                                    <td>CFrank Camly</td>
                                    <td>Juan Freeman</td>
                                    <td>11</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>BCA Sem5</td>
                                    <td>Christina Thomas</td>
                                    <td>John </td>
                                    <td>11</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>B.Com Sem3</td>
                                    <td>Christina Thomas</td>
                                    <td>Juan Freeman</td>
                                    <td>11</td>
                                    <td>
                                        <a href="javascript:void(0);"><i class="fa fa-pencil m-r-15"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection