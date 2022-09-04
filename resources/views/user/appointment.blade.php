
<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form" method="POST" action="{{url('appointment')}}">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" placeholder="Full name" name="name" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" placeholder="Email address.."name="emile" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control" name="date" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">

                    <select name="doctor" id="departement" class="custom-select" required>
                    <option>---Select Doctor ---</option>
                        @foreach($doctors as$doctor )
                        <option value="{{$doctor->name}}"> {{$doctor->name}}--- speciality---{{$doctor->speciality}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" placeholder="Number.."name="number"required>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>
            <a class="btn btn-primary" style="height: 50px"> <button type="submit" class="btn-primary mt-3 wow zoomIn">Submit Request</button> </a>

        </form>
    </div>
</div>
