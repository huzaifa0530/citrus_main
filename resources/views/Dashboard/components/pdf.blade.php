<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ $model->name }} - Registration Form</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #222;
            line-height: 1.4;
            margin: 0;
            padding: 10px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 80px;
            border-radius: 6px;
        }

        h2 {
            margin: 5px 0;
        }

        .section-title {
            background: #f4f4f4;
            padding: 5px 10px;
            border-left: 4px solid #007bff;
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        td {
            padding: 4px 5px;
            vertical-align: top;
        }

        .label {
            font-weight: bold;
        }

        .value {
            border-bottom: 1px solid #aaa;
            padding: 2px 0;
            min-height: 16px;
        }

        .spacer {
            width: 4%;
        }

        img.model-image {
            margin-top: 5px;
            border-radius: 6px;
            max-width: 100%;
            height: auto;
        }

        .gallery img {
            width: 100px;
            height: 120px;
            object-fit: cover;
            border: 1px solid #ddd;
            margin: 5px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('User/assets/img/logo.png') }}" alt="Logo">
        <h2>Model Registration Form</h2>
        <p>Generated on {{ now()->format('d M Y, h:i A') }}</p>
    </div>

    <!-- PERSONAL INFO -->
    <!-- PERSONAL INFO -->
    <div class="section-title">Personal Information</div>
    <table>
        <tr>
            <td>
                <span class="label">Full Name:</span>
                <div class="value">{{ $model->name ?? '-' }}</div>
            </td>
            <td class="spacer"></td>
            <td>
                <span class="label">Date of Birth:</span>
                <div class="value">{{ $model->dob ?? '-' }}</div>
            </td>
        </tr>

        <tr>
            <td>
                <span class="label">Age:</span>
                <div class="value">{{ $model->age ?? '-' }}</div>
            </td>
            <td class="spacer"></td>
            <td>
                <span class="label">Gender:</span>
                <div class="value">{{ ucfirst($model->gender ?? '-') }}</div>
            </td>
        </tr>

        <tr>
            <td>
                <span class="label">Occupation:</span>
                <div class="value">{{ $model->occupation ?? '-' }}</div>
            </td>
            <td class="spacer"></td>
            <td>
                <span class="label">Nationality:</span>
                <div class="value">{{ $model->nationality ?? '-' }}</div>
            </td>
        </tr>

        <tr>
            <td>
                <span class="label">Country:</span>
                <div class="value">{{ $model->country_of_passport ?? '-' }}</div>
            </td>
            <td class="spacer"></td>
            <td>
                <span class="label">Availability:</span>
                <div class="value">{{ $model->availability ?? '-' }}</div>
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <span class="label">Signed Date:</span>
                <div class="value">{{ $model->created_at ? $model->created_at->format('d/m/Y') : '-' }}</div>
            </td>
        </tr>
    </table>

    @if($userRole !== 'Brand')
        <!-- CONTACT -->
        <div class="section-title">Contact Information</div>
        <table>
            <tr>
                <td>
                    <span class="label">Mobile No:</span>
                    <div class="value">{{ $model->mobile_no ?? '-' }}</div>
                </td>
                <td class="spacer"></td>
                <td>
                    <span class="label">Home No:</span>
                    <div class="value">{{ $model->home_no ?? '-' }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <span class="label">Address:</span>
                    <div class="value">{{ $model->address ?? '-' }}</div>
                </td>
            </tr>
        </table>

        <!-- SOCIAL -->
        <div class="section-title">Social Media</div>
        <table>
            <tr>
                <td>
                    <span class="label">Facebook:</span>
                    <div class="value">{{ $model->facebook_id ?? '-' }}</div>
                </td>
                <td class="spacer"></td>
                <td>
                    <span class="label">Instagram:</span>
                    <div class="value">{{ $model->instagram_id ?? '-' }}</div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="label">Snapchat:</span>
                    <div class="value">{{ $model->snapchat_id ?? '-' }}</div>
                </td>
                <td class="spacer"></td>
                <td>
                    <span class="label">Tiktok:</span>
                    <div class="value">{{ $model->tiktok_id ?? '-' }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <span class="label">YouTube:</span>
                    <div class="value">{{ $model->youtube_id ?? '-' }}</div>
                </td>
            </tr>
        </table>

        <!-- IDENTIFICATION -->
        <div class="section-title">Identification</div>
        <table>
            <tr>
                <td>
                    <span class="label">Passport No:</span>
                    <div class="value">{{ $model->passport_no ?? '-' }}</div>
                </td>
                <td class="spacer"></td>
                <td>
                    <span class="label">Passport Expiry:</span>
                    <div class="value">{{ $model->passport_expiry ?? '-' }}</div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="label">CNIC:</span>
                    <div class="value">{{ $model->cnic ?? '-' }}</div>
                </td>
                <td class="spacer"></td>
                <td>
                    <span class="label">CNIC Expiry:</span>
                    <div class="value">{{ $model->cnic_expiry ?? '-' }}</div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="label">CNIC Front:</span><br>
                    <!-- CNIC Front -->
                    @if(isset($tempImages['cnic_front']))
                        <img src="{{ $tempImages['cnic_front'] }}" width="180">
                    @endif

                </td>
                <td class="spacer"></td>
                <td>
                    <span class="label">CNIC Back:</span><br>

                    <!-- CNIC Back -->
                    @if(isset($tempImages['cnic_back']))
                        <img src="{{ $tempImages['cnic_back'] }}" width="180">
                    @endif




                </td>
            </tr>
        </table>

        <!-- MEASUREMENTS -->
        <div class="section-title">Measurements</div>
        @php
            $measurements = $model->measurements ? json_decode($model->measurements, true) : [];
            $chunks = array_chunk($measurements, 2, true);
        @endphp


        <table>
            @foreach($chunks as $chunk)
                <tr>
                    @foreach($chunk as $key => $value)
                        <td>
                            <span class="label">{{ ucwords(str_replace('_', ' ', $key)) }}:</span>
                            <div class="value">{{ $value ?? '-' }}</div>
                        </td>
                        <td class="spacer"></td>
                    @endforeach
                    @if(count($chunk) < 2)
                        <td></td>
                        <td></td>
                    @endif
                </tr>
            @endforeach
        </table>

        <!-- LANGUAGES -->
        <div class="section-title">Languages</div>
        <table>
            <tr>
                <td colspan="3">{{ $model->languages ? implode(', ', json_decode($model->languages, true)) : '-' }}</td>
            </tr>
        </table>
    @endif

    <!-- GALLERY -->
    <div class="section-title">Gallery</div>

    <!-- Add spacing -->
    <div style="margin-top: 50px;" class="gallery">
        @foreach($model->assets as $asset)
            @if($asset->type === 'image' && isset($tempImages[$asset->name]) && $asset->name !== 'cnic_front' && $asset->name !== 'cnic_back')
                <img src="{{ $tempImages[$asset->name] }}" width="100" height="120">
            @endif
        @endforeach

    </div>

</body>

</html>