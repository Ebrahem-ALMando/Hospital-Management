<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

<!-- Back to top button -->


@include('user.header')
@if(session()->has('delete'))


    <div  class="alert alert-success" id="d1" style="text-align: center">

        {{session()->get('delete')}}
    </div>
    <script>
        function hidefiv(){
            document.getElementById("d1").style="display:none";
        }
        setTimeout(hidefiv,4000);
    </script>
@endif
<div class="container-fluid">
    <table class="table table-dark  w-75 align-content-center mt-5" align="center" >
        <tr style="text-align: center">
            <th width="200px" >Doctor Name</th>
            <th width="150px"> Date</th>
            <th> Message</th>
            <th width="150px"> Status</th>
            <th width="150px"> Cancel Appointment</th>
        </tr>
        @foreach($datas as $data)
        <tr style="text-align: center">

            <td>{{$data->doctor}}</td>
            <td>{{$data->date}}</td>
            <td style="text-align: center">{{$data->message}}</td>
            <td>{{$data->status}}</td>
            <td><a href="{{url('cancel_appointment',$data->id)}}" class="btn btn-danger"
                   onclick="return confirm('are you sure to delete this ')"> Cancel</a ></td>


        </tr>
        @endforeach
    </table>
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
