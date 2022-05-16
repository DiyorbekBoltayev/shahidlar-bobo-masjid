@extends('admin.master')
@section('content')

    @if(session()->has('xabar'))
        <div id="yashirish" class="alert alert-success flex justify-between" onclick="yashir()">

            {{session()->get('message')}}
            <button type="button" class="close " data-dismiss="alert" data-target="alert"></button>

        </div>
    @endif

    <style>
        #td{
            white-space:normal !important
        }
        #th{
            white-space:normal !important
        }
    </style>

    <div class=" container ">
        <h1 class="text text-center"> Barcha rasmlar</h1>

        <a href="{{url('photocreate')}}" class="btn btn-primary float-right mb-3"><i class="fas fa-plus"></i> Rasm qo'shish</a>

        <table class="table table-bordered border-primary ">
            <tr>
                <th>#</th>
                <th id="th">Name</th>
                <th> Rasm </th>
                <th>Harakatlar</th>

            </tr>
            @foreach($data as $d)

                <tr>
                    <td>{{$d->id}}</td>
                    <td id="td">{{$d->name}}</td>
                    <td>
                        <img style="width: 100px; height: 100px;" src="photo/{{$d->photo}}" alt="">
                    </td>
                    <td>
                        <a href="{{url('photoedit',$d->id)}}"> <button class="btn btn-warning">Tahrirlash</button></a>

                        <a href="{{url('photodelete',$d->id)}}"> <button class="btn btn-danger">O'chirish</button></a>

                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <br>
        <br>
    </div>


    {{--    <h1 class="text text-center"> Barcha maqolalar</h1>--}}

    {{--    <div  class="container" align="center">--}}

    {{--        <table class="w-75" style="border: 1px solid gray">--}}
    {{--            <tr style="background-color: gray; align-items: center;border: 1px solid gray">--}}
    {{--                <th style="padding: 20px; ">T/R</th>--}}
    {{--                <th class="text-wrap w-50" style="padding: 20px; ">Mavzu</th>--}}
    {{--                <th style="padding: 20px; ">Matni</th>--}}
    {{--                <th style="padding: 20px; ">Autor</th>--}}
    {{--                <th style="padding: 20px; ">Rasmi</th>--}}
    {{--                <th style="padding: 20px; ">Amallar</th>--}}
    {{--            </tr>--}}

    {{--            @foreach($data as $data)--}}

    {{--                <tr style="border: 1px solid gray;">--}}
    {{--                    <td style="padding: 20px; border: 1px solid gray;" >{{$data->id}}</td>--}}
    {{--                    <td class="text-wrap w-50" style="padding: 20px; border: 1px solid gray; " >{{$data->mavzu}}</td>--}}
    {{--                    <td class="text-wrap w-50" style="padding: 20px; border: 1px solid gray; " >{{$data->matn}}</td>--}}
    {{--                    <td class="text-wrap w-50" style="padding: 20px; border: 1px solid gray; " >{{$data->autor}}</td>--}}
    {{--                    <td style="padding: 20px; border: 1px solid gray; " >--}}
    {{--                        <img style="width: 100px; height: 100px;" src="maqola_rasm/{{$data->rasm}}" alt="">--}}
    {{--                    </td>--}}
    {{--                    <td style="padding: 20px;" >--}}
    {{--                        <a class="btn btn-success" href="{{url('editmaqola',$data->id)}}">Yangilash</a>--}}
    {{--                        <a class="btn btn-danger" href="{{url('deletemaqola',$data->id)}}">O'chirish</a>--}}
    {{--                    </td>--}}
    {{--                </tr>--}}

    {{--            @endforeach--}}

    {{--        </table>--}}

    {{--    </div>--}}


@endsection
