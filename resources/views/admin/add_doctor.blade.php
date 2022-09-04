<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        label{
            display: inline-block;
            width: 150px;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css-header')
</head>
<body>
<div class="container-scroller">
    @include('admin.sidebar')
    <!-- partial:partials/_sidebar.html -->
    <!-- partial -->
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

        <div class="container" style="margin-left: 20%">
        @if(session()->has('Message_Add'))


                <div  class="alert alert-success" id="d1" style="text-align: center">

                    {{session()->get('Message_Add')}}
                </div>
                <script>
                    function hidefiv(){
                        document.getElementById("d1").style="display:none";
                    }
                    setTimeout(hidefiv,4000);
                </script>
            @endif
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px">

                        <h1 style="margin-left: 20% ;margin-bottom: 7%">
                            Add Doctors
                        </h1>
                    <label>Doctor Name</label>
                    <input type="text" name="d_name" placeholder="Write the name " style="color: #1a202c"
                    required>
                </div>
                <div style="padding: 15px">
                    <label>Phone </label>
                    <input type="number" name="d_phone" placeholder="Write the Phone " style="color: #1a202c" required>
                </div>
                <div style="padding: 15px">
                    <label>Speciality</label>
                  <select name="d_speciality" style="color:#1a202c ; width:213px" required>
                      <option>--Select--</option>
                      <option value="skin">Skin</option>
                      <option value="heart">Heart</option>
                      <option value="eye">Eye</option>
                      <option value="nose">Nose</option>
                  </select>
                </div>
                <div style="padding: 15px">
                    <label>Room No</label>
                    <input type="number" name="d_room" placeholder="Write the Room Number" style="color: #1a202c" required>
                </div>
                <div style="padding: 15px">
                    <label>Doctor Image</label>
                    <input type="file" name="d_image" required>
                </div>
                <div style="padding: 15px;margin-left: 20% ;" >
                    <input type="submit" value="Send" class="btn btn-success lg:px-8">
                </div>
            </form>
        </div>
    </div>
    <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</div>
    <!-- partial:partials/_sidebar.html -->

    <!-- End custom js for this page -->
</body>
</html>
