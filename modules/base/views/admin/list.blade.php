@extends('dashboard.home')

@section('content')
    <style>
        td,th{
            text-align: center;
        }
        .fa{
            font-size: 20px;
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>عنوان</th>
            <th>زمان ایجاد</th>
            <th>آخرین زمان ویرایش</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
    @foreach($items as $item)
            <tr>
                <td>
                    {{ $item->title }}
                </td>
                <td>
                    {{ $item->created_at }}
                </td>
                <td>
                    {{ $item->updated_at }}
                </td>
                <td>
                    <i class="fa fa-trash" id="{{ route('dashboard.blog.delete',$item->id) }}"></i>
                    <a href="{{ route('dashboard.blog.edit',$item->id) }}"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
    @endforeach
        </tbody>
    </table>

    <script>
        $(document).on('click', '.fa-trash', function () {
            var conf = confirm("مطمئنی میخوای حذفش کنی؟");
            if(conf){
                window.location = $(this).attr("id");
            }
        });
    </script>

@endsection
