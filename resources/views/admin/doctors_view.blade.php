<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    @include('admin.css-header')
</head>
<body>
<div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial:partials/_sidebar.html -->

    <!-- partial -->
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

        <div class="container-fluid">
            @if(session()->has('Delete'))


                <div  class="alert alert-success" id="d1" style="text-align: center">

                    {{session()->get('Delete')}}
                </div>
                <script>
                    function hidefiv(){
                        document.getElementById("d1").style="display:none";
                    }
                    setTimeout(hidefiv,4000);
                </script>
            @endif
            @if(session()->has('Update'))


                <div  class="alert alert-success" id="d1" style="text-align: center">

                    {{session()->get('Canceled')}}
                </div>
                <script>
                    function hidefiv(){
                        document.getElementById("d1").style="display:none";
                    }
                    setTimeout(hidefiv,4000);
                </script>
            @endif
            <table class="table table-light  w-80 align-content-center mt-5  " align="center" style="margin-left: -8%" >
                <tr style="text-align: center">
                    <th width="180px" >Doctor Name</th>
                    <th width="150px" >Phone</th>
                    <th width="150px" >Specialty</th>
                    <th width="100px"> Room NO</th>
{{--                    <th width="150px"> Image</th>--}}
                    <th width="100px">Delete</th>
                    <th width="100px">Update</th>
                </tr>
                @foreach($datas as $data)
                    <tr style="text-align: center" class="text-dark">
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->specialty}}</td>
                        <td>{{$data->room}}</td>
{{--                        <td> <img width="100px"height="100px"  class="img-lg rounded-circle" alt="no image" src="doctorimage/{{$data->image}}"></td>--}}
{{--                        <td style="text-align: center">{{$data->message}}</td>--}}

                        <td><a href="{{url('delete_doctor',$data->id)}}" class="btn btn-danger"
                               onclick="return confirm('are you sure to Delete this ')"> Delete</a ></td>
                        <td><a href="{{url('update_doctor',$data->id)}}" class="btn btn-success"> Update</a ></td>
{{--                        onclick="return confirm('are you sure to Update this ')"--}}
                    </tr>
                @endforeach
            </table>
        </div>

    </div>

    <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</div>

<!-- End custom js for this page -->
</body>
</html>

