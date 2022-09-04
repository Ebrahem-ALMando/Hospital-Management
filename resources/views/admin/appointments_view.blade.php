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
            @if(session()->has('Approved'))


                <div  class="alert alert-success" id="d1" style="text-align: center">

                    {{session()->get('Approved')}}
                </div>
                <script>
                    function hidefiv(){
                        document.getElementById("d1").style="display:none";
                    }
                    setTimeout(hidefiv,4000);
                </script>
            @endif
                @if(session()->has('Canceled'))


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
            <table class="table table-light  w-80 align-content-center mt-5  " align="center" style="margin-left: -12%" >
                <tr style="text-align: center">
                    <th width="180px" >Sick  Name</th>
                    <th width="170px" >Email</th>
                    <th width="150px" >Phone</th>
                    <th width="180px" >Doctor Name</th>
                    <th width="150px"> Date</th>
                    <th> Message</th>
                    <th width="150px"> Status</th>
                    <th width="100px"> Cancel </th>
                    <th width="100px"> Approved </th>
                    <th width="50px">Delete </th>

                </tr>
                @foreach($datas as $data)
                    <tr style="text-align: center" class="text-dark">
                        <td>{{$data->name}}</td>
                        <td>{{$data->emile}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->doctor}}</td>
                        <td>{{$data->date}}</td>
                        <td style="text-align: center">{{$data->message}}</td>
                        <td>{{$data->status}}</td>
                        <td><a href="{{url('canceled_appointment',$data->id)}}" class="btn btn-danger"
                               onclick="return confirm('are you sure to delete this ')"> Cancel</a ></td>
                        <td><a href="{{url('Approved_appointment',$data->id)}}" class="btn btn-success"
                               onclick="return confirm('are you sure to Approved this ')"> Approved</a ></td>
                        <td><a href="{{url('cancel_appointment',$data->id)}}" class="btn btn-danger"
                               onclick="return confirm('are you sure to Delete this ')">X</a ></td>

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

