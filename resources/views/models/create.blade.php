@extends('layouts.model.master')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif


    <div class="container">
            @if ($errors->any())
        <div class="alert alert-danger">
            <strong>There were some problems:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10">
                <div class="card card-shadow p-4 rounded-4">
                    <img src="{{ asset('User/assets/img/logo.png') }}" alt="Logo" class="mb-3 align-self-center"
                        style="width:120px;">
                    <h3 class="text-center mb-4">Registration Form</h3>

                    <form action="{{ route('models.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your full name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Your Father Name</label>
                                    <input type="text" name="father_name" class="form-control"
                                        placeholder="Enter your father name" required>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Date Of Birth</label>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Age</label>
                                    <input type="number" name="age" class="form-control" placeholder="Enter your age" required>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select name="gender" class="form-select" required>
                                        <option value="">Select Your Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Shemale">Shemale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Occupation</label>
                                    <input type="text" name="occupation" class="form-control"
                                        placeholder="Enter your occupation">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Mobile No.</label>
                               <input type="tel" name="mobile_no" class="form-control" pattern="^03[0-9]{9}$" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Home No.</label>
                                    <input type="tel" name="home_no" class="form-control"
                                        placeholder="Enter your home number" pattern="^03[0-9]{9}$"pattern="^03[0-9]{9}$">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control"
                                        placeholder="Enter your home address" required>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Email Id.</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter your email address" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Facebook Id.</label>
                                    <input type="text" name="facebook_id" class="form-control"
                                        placeholder="Enter your profile link">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Instagram Id.</label>
                                    <input type="text" name="instagram_id" class="form-control"
                                        placeholder="Enter your profile link">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Snapchat Id.</label>
                                    <input type="text" name="snapchat_id" class="form-control"
                                        placeholder="Enter your profile link">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Tiktok Id.</label>
                                    <input type="text" name="tiktok_id" class="form-control"
                                        placeholder="Enter your profile link">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">YouTube Id.</label>
                                    <input type="text" name="youtube_id" class="form-control"
                                        placeholder="Enter your profile link">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Passport No.</label>
                                    <input type="number"  name="passport_no" class="form-control"
                                        placeholder="Enter your passport number" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Expiry</label>
                                    <input type="date" name="passport_expiry" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Nationality</label>
                                    <input type="text" name="nationality" class="form-control"
                                        placeholder="Enter your nationality" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Country Of Passport</label>
                                    <select name="country_of_passport" class="form-select" required>
                                        <option value="">Select Your Country</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">CNIC</label>
                                 <input type="text" name="cnic" class="form-control" pattern="^[0-9]{5}-?[0-9]{7}-?[0-9]$" placeholder="e.g. 4210112345678 or 42101-1234567-8" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Expiry</label>
                                    <input type="date" name="cnic_expiry" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- File Uploads -->
                        <div class="row justify-content-center my-3">
                            <div class="col-md-5">
                                <label class="form-label">Upload Your CNIC Front</label>
                                <input type="file" name="cnic_front" class="form-control filepond" accept="image/*">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Upload Your CNIC Back</label>
                                <input type="file" name="cnic_back" class="form-control filepond" accept="image/*">
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Backup Contact Name</label>
                                    <input type="text" name="backup_contact_name" class="form-control"
                                        placeholder="Enter your backup contact name">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Backup Number</label>
                                    <input type="text" name="backup_number" class="form-control"
                                        placeholder="Enter your backup number">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-3">
                            <div class="col-md-5">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 me-3">Languages :</p>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="Urdu">
                                        <label class="form-check-label">Urdu</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="English">
                                        <label class="form-check-label">English</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="other_languages" class="form-control"
                                    placeholder="Other Languages">
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label class="form-label">Special Talent</label>
                                    <input type="text" name="special_talent" class="form-control"
                                        placeholder="What's special about you?">
                                </div>
                            </div>
                        </div>

                        <!-- Measurements -->
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-2">
                                <label class="form-label">Measurements:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="measurements[hair_color]" class="form-control mb-2"
                                    placeholder="Hair Colour"   required>
                                <input type="number" name="measurements[height]" class="form-control mb-2"
                                    placeholder="Height"  required>
                                <input type="number" name="measurements[shoulder]" class="form-control mb-2"
                                    placeholder="Shoulder"  required>
                                <input type="number" name="measurements[bust]" class="form-control mb-2"
                                    placeholder="Bust/Chest"  required>
                                <input type="number" name="measurements[hip]" class="form-control mb-2" placeholder="Hip">
                                <input type="number" name="measurements[dress]" class="form-control mb-2"
                                    placeholder="Dress/Suit"  required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="measurements[eye_color]" class="form-control mb-2"
                                    placeholder="Eye Colour">
                                <input type="number" name="measurements[collar]" class="form-control mb-2"
                                    placeholder="Collar Size" required   >
                                <input type="number" name="measurements[top]" class="form-control mb-2"
                                    placeholder="Top (S/M/L)" required>
                                <input type="number" name="measurements[waist]" class="form-control mb-2" placeholder="Waist" required>
                                <input type="number" name="measurements[trouser]" class="form-control mb-2"
                                    placeholder="Trouser" required>
                                <input type="number" name="measurements[shoe]" class="form-control mb-2"
                                    placeholder="Shoe Size" required>
                            </div>
                        </div>

                        <!-- Model Images -->
                        <div class="row justify-content-center my-3">
                            <div class="col-md-5">
                                <label class="form-label">Upload Your Close Up Image</label>
                                <input type="file" name="close_up_image" class="form-control filepond" accept="image/*" required>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Upload Your Full Body Image</label>
                                <input type="file" name="full_body_image" class="form-control filepond" accept="image/*" required>
                            </div>
                        </div>

                        <div class="row justify-content-center my-3">
                            <div class="col-md-5">
                                <label class="form-label">Upload Your Half Body Image</label>
                                <input type="file" name="half_body_image" class="form-control filepond" accept="image/*" required>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Upload Your Side Body Image</label>
                                <input type="file" name="side_body_image" class="form-control filepond" accept="image/*" required>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-3">
                            <div class="col-md-5">
                                <label class="form-label">Model's Signature</label>
                                <input type="file" name="signature_image" class="form-control filepond" accept="image/*" >
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Signed Date</label>
                                <input type="date" name="signed_date" class="form-control">
                            </div>
                        </div>

                        <!-- Video -->
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-10">
                            <label class="upload-label">Click to Upload Video</label>
                            <input type="file" name="video" accept="video/*" class="form-control filepond">
                        </div>
                </div>

                <div class="row justify-content-center my-3">
                    <div class="col-md-6 text-center">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>


@endsection