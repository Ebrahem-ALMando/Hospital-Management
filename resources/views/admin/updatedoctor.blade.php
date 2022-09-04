<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <!-- Required meta tags -->
    <style>
        label{
            display: inline-block;
            width: 125px;
        }
    </style>
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

                <div class="container" style="margin-left: 20%">
                    @if(session()->has('Message_Update'))


                        <div  class="alert alert-success" id="d1" style="text-align: center">

                            {{session()->get('Message_Update')}}
                        </div>
                        <script>
                            function hidefiv(){
                                document.getElementById("d1").style="display:none";
                            }
                            setTimeout(hidefiv,4000);

                        </script>
                    @endif
                    <form action="{{url('edite_doctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="padding: 15px">

                            <h1 style="margin-left: 20% ;margin-bottom: 7%">
                                Uodate Doctors
                            </h1>

                            <label>Doctor Name</label>
                            <input type="text" name="d_name" placeholder="Write the name " style="color: #1a202c"
                                  value="{{$data->name}}"  required>
                        </div>
                        <div style="padding: 15px">
                            <label>Phone </label>
                            <input type="number" name="d_phone" placeholder="Write the Phone " style="color: #1a202c" required
                                   value="{{$data->phone}}">
                        </div>
                        <div style="padding: 15px">
                            <label>Speciality</label>
                            <select name="d_speciality" style="color:#1a202c ; width:213px" required>
                                <option>{{$data->specialty}}</option>
                                <option value="skin">Skin</option>
                                <option value="heart">Heart</option>
                                <option value="eye">Eye</option>
                                <option value="nose">Nose</option>
                            </select>
                        </div>
                        <div style="padding: 15px">
                            <label>Room No</label>
                            <input type="number" name="d_room" placeholder="Write the Room Number" style="color: #1a202c" required
                                   value="{{$data->room}}">
                        </div>

                        <div style="padding: 15px">
                            <label>Old Image</label>
                                   <img src="doctorimage/{{$data->image}}" width="200px" height="200px" style="margin-left: 18%">
                        </div>

                        <div style="padding: 15px">
                            <label>Doctor Image</label>
                            <input type="file" name="d_image" >
                        </div>
                        <div style="padding: 15px;margin-left: 20% ;" >
                            <input type="submit" value="Update" class="btn btn-success lg:px-8">
                        </div>
                    </form>
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
