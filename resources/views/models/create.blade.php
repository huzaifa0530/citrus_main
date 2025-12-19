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
                                    <label class="form-label">Your Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your full name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Date Of Birth</label>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">

                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Age</label>
                                    <input type="number" name="age" class="form-control" placeholder="Enter your age"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select name="gender" class="form-select" required>
                                        <option value="">Select Your Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">

                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Occupation</label>
                                    <input type="text" name="occupation" class="form-control"
                                        placeholder="Enter your occupation">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Mobile No.</label>
                                    <input type="tel" name="mobile_no" class="form-control" pattern="^03[0-9]{9}$"
                                        placeholder="Enter your phone number" required>
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
                                        placeholder="Enter your email address" required
                                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
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
                                        placeholder="Enter your profile link" required>
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

                        <div class="row justify-content-center mb-3">
                            <div class="col-md-10">

                                <!-- Checkbox -->
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="havePassport" />
                                    <label class="form-check-label" for="havePassport">
                                        Do you have a passport?
                                    </label>
                                </div>

                            </div>
                        </div>

                        <!-- Passport Fields (Hidden by Default) -->
                        <div class="row justify-content-center passport-section" style="display:none;">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Passport No.</label>
                                    <input type="text" name="passport_no" id="passport_no" class="form-control"
                                        placeholder="Enter your passport number">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Expiry of Passport</label>
                                    <input type="date" name="passport_expiry" id="passport_expiry" class="form-control">
                                </div>
                            </div>
                        </div>



                        <div class="row justify-content-center">
                            <!-- all country -->
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Country Of Passport</label>
                                    <select name="country_of_passport" class="form-select" id="countryOfPassport" required>
                                        <option value="">Select Your Country</option>
                                    </select>
                                </div>
                            </div>

                       

                                <!-- this input change to dropdown then show all country in that dropdown -->
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Nationality</label>
                                        <select name="nationality" class="form-select" id="nationalityDropdown" required>
                                            <option value="">Select Your Nationality</option>
                                        </select>
                                    </div>
                                </div>
                         

                        </div>
                        <div class="row justify-content-center">

                            <!-- simple line before CNIC -->
                            <div class="col-md-10 mb-2">
                                <small class="text-muted">
                                    If you are below 18 or don't have a CNIC, please enter your parent's CNIC.
                                </small>
                            </div>

                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">CNIC</label>
                                    <input type="text" name="cnic" class="form-control"
                                        pattern="^[0-9]{5}-?[0-9]{7}-?[0-9]$"
                                        placeholder="e.g. 4210112345678 or 42101-1234567-8" required>
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
                                        placeholder="Enter your backup contact name" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Backup Number</label>
                                    <input type="text" name="backup_number" class="form-control"
                                        placeholder="Enter your backup number" required>
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
                        <!-- when you are availble ? as input -->

                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label class="form-label">When are you available?</label>
                                    <input type="text" name="availability" class="form-control"
                                        placeholder="e.g. Weekends, Evenings, Anytime">
                                </div>
                            </div>
                        </div>

                        <!-- Measurements -->
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-2">
                                <label class="form-label">Measurements:</label>
                            </div>
                            <div class="col-md-4">

                                <input type="number" name="measurements[height]" class="form-control mb-2"
                                    placeholder="Height">
                                <input type="number" name="measurements[shoulder]" class="form-control mb-2"
                                    placeholder="Shoulder">
                                <input type="number" name="measurements[bust]" class="form-control mb-2"
                                    placeholder="Bust/Chest">
                                <input type="number" name="measurements[hip]" class="form-control mb-2" placeholder="Hip">
                                <!-- as text -->
                                <input type="text" name="measurements[dress]" class="form-control mb-2"
                                    placeholder="Dress/Suit">
                            </div>
                            <div class="col-md-4">

                                <input type="number" name="measurements[collar]" class="form-control mb-2"
                                    placeholder="Collar Size">

                                <!-- this input as dropdown small medium large xl -->
                                <select name="measurements[top]" class="form-control mb-2">
                                    <option value="" disabled selected>Select Top Size</option>
                                    <option value="S">Small (S)</option>
                                    <option value="M">Medium (M)</option>
                                    <option value="L">Large (L)</option>
                                    <option value="XL">Extra Large (XL)</option>
                                </select>
                                <input type="number" name="measurements[waist]" class="form-control mb-2"
                                    placeholder="Waist">
                                <input type="number" name="measurements[trouser]" class="form-control mb-2"
                                    placeholder="Trouser">
                                <input type="number" name="measurements[shoe]" class="form-control mb-2"
                                    placeholder="Shoe Size">
                            </div>
                        </div>

                        <!-- Model Images -->
                        <div class="row justify-content-center my-3">
                            <div class="col-md-5">
                                <label class="form-label">Upload Your Close Shot Image</label>
                                <input type="file" name="close_up_image" class="form-control filepond" accept="image/*"
                                    required>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Upload Your Full Shot Image</label>
                                <input type="file" name="full_body_image" class="form-control filepond" accept="image/*"
                                    required>
                            </div>
                        </div>

                        <div class="row justify-content-center my-3">
                            <div class="col-md-5">
                                <label class="form-label">Upload Your Mid Shot Image</label>
                                <input type="file" name="half_body_image" class="form-control filepond" accept="image/*"
                                    required>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Upload Your Side Profile Image</label>
                                <input type="file" name="side_body_image" class="form-control filepond" accept="image/*"
                                    required>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-3">

                            <!-- filed change -->
                            <div class="col-md-5">
                                <label class="form-label">Full Name (As per CNIC)</label>
                                <input type="text" name="name_as_per_cnic" class="form-control"
                                    placeholder="Enter Your Full Name (As per CNIC)" required>
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Signed Date</label>
                                <input type="date" name="signed_date" class="form-control">
                            </div>
                        </div>

                        <!-- Video -->
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-10">
                                <label class="">Click to Upload Video</label>
                                <p class="form-text text-muted">Upload your short introduction video (10 to 20 seconds)</p>
                                <input type="file" name="video" accept="video/*" class="form-control filepond"
                                    placeholder="">
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
    <script>
        document.getElementById('havePassport').addEventListener('change', function () {
            let section = document.querySelector('.passport-section');
            let passNo = document.getElementById('passport_no');
            let passExp = document.getElementById('passport_expiry');

            if (this.checked) {
                // show
                section.style.display = 'flex';
                // make required
                passNo.setAttribute('required', true);
                passExp.setAttribute('required', true);
            } else {
                // hide
                section.style.display = 'none';
                // remove required
                passNo.removeAttribute('required');
                passExp.removeAttribute('required');
                // clear values
                passNo.value = "";
                passExp.value = "";
            }
        });
    </script>

    <script>
        // Load countries from JSON
        fetch('{{ asset("Admin/assets/js/countries.json") }}')
            .then(response => response.json())
            .then(data => {
                const countryPassport = document.getElementById('countryOfPassport');
                const nationality = document.getElementById('nationalityDropdown');

                Object.keys(data).forEach(country => {
                    const option1 = document.createElement('option');
                    option1.value = country;
                    option1.text = country;
                    countryPassport.appendChild(option1);

                    const option2 = document.createElement('option');
                    option2.value = country;
                    option2.text = country;
                    nationality.appendChild(option2);
                });
            })
            .catch(error => console.error('Error loading countries:', error));
    </script>
@endsection