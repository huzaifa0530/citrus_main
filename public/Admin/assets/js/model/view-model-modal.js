$(document).ready(function () {
    $('#viewRequestModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget); // Button that triggered the modal
        const id = button.data('id');
        const modalBody = $(this).find('#modelDetails');

        modalBody.html('<p class="text-center text-muted">Loading details...</p>');

        fetch(`/models/${id}`)
            .then(res => {
                if (!res.ok) throw new Error('Network response was not ok');
                return res.json();
            })
            .then(data => {
                const cnicFront = data.assets?.find(a => a.name === 'cnic_front')?.path;
                const cnicBack = data.assets?.find(a => a.name === 'cnic_back')?.path;
                const videoPath = data.assets?.find(a => a.type === 'video')?.path;

                $(document).on('click', '#downloadCnic', function () {
                    const id = $(this).data('id');
                    window.location.href = `/download/cnic/${id}`;
                });

                $(document).on('click', '#downloadImages', function () {
                    const id = $(this).data('id');
                    window.location.href = `/download/images/${id}`;
                });

                $(document).on('click', '#downloadVideo', function () {
                    const id = $(this).data('id');
                    window.location.href = `/download/video/${id}`;
                });


                console.log('API data:', data); // Debug: Check API response

                const measurements = data.measurements ? JSON.parse(data.measurements) : {};
                const languages = data.languages ? JSON.parse(data.languages) : [];
                const userRole = document.querySelector('meta[name="user-role"]')?.content || 'guest';

                // Function to handle Drive vs local URLs
                const getDisplayUrl = (path) => {
                    if (!path) return '';
                    // Local storage file: prepend the app URL + /storage/
                    return `${window.location.origin}/storage/${path}`;
                };


                // Decide what content to show based on role
                if (userRole === 'admin' || (userRole === 'brand' && data.owner_id === currentUserId)) {

                    let html = `

<div class="d-flex justify-content-end gap-2 mb-4 border-bottom pb-3">
    <button class="btn btn-sm btn-success"
            id="downloadCnic"
            data-id="${data.id}">
        <i class="feather icon-download"></i> CNIC
    </button>

    <button class="btn btn-sm btn-primary"
            id="downloadImages"
            data-id="${data.id}">
        <i class="feather icon-image"></i> Images
    </button>

    <button class="btn btn-sm btn-danger"
            id="downloadVideo"
            data-id="${data.id}">
        <i class="feather icon-video"></i> Video
    </button>
</div>


                        <!-- Personal Info -->
                        <h6 class="mb-3">Personal Information</h6>
                        <div class="row">
                            <div class="col-sm-6"><strong>Full Name:</strong> ${data.name ?? '-'}</div>
                            <div class="col-sm-6"><strong>Full Name (As per CNIC):</strong> ${data.name_as_per_cnic ?? '-'}</div>
                            <div class="col-sm-6"><strong>Date of Birth:</strong> ${data.dob ?? '-'}</div>
                            <div class="col-sm-6"><strong>Age:</strong> ${data.age ?? '-'}</div>
                            <div class="col-sm-6"><strong>Gender:</strong> ${data.gender ?? '-'}</div>
                            <div class="col-sm-6"><strong>Occupation:</strong> ${data.occupation ?? '-'}</div>
                            <div class="col-sm-6"><strong>Nationality:</strong> ${data.nationality ?? '-'}</div>
                            <div class="col-sm-6"><strong>Country:</strong> ${data.country ?? '-'}</div>
                            <div class="col-sm-6"><strong>Availability:</strong> ${data.availability ?? '-'}</div>
                        </div>

                        <hr>
                        <!-- Contact Info -->
                        <h6 class="mb-3">Contact Information</h6>
                        <div class="row">
                            <div class="col-sm-6"><strong>Mobile:</strong> ${data.mobile_no ?? '-'}</div>
                            <div class="col-sm-6"><strong>Email:</strong> ${data.email ?? '-'}</div>
                            <div class="col-sm-12"><strong>Address:</strong> ${data.address ?? '-'}</div>
                        </div>

                        <hr>
                        <!-- Social -->
                        <h6 class="mb-3">Social Media</h6>
                        <div class="row">
                            <div class="col-sm-4"><strong>Facebook:</strong> ${data.facebook_id ?? '-'}</div>
                            <div class="col-sm-4"><strong>Instagram:</strong> ${data.instagram_id ?? '-'}</div>
                            <div class="col-sm-4"><strong>Snapchat:</strong> ${data.snapchat_id ?? '-'}</div>
                            <div class="col-sm-4"><strong>TikTok:</strong> ${data.tiktok_id ?? '-'}</div>
                            <div class="col-sm-4"><strong>YouTube:</strong> ${data.youtube_id ?? '-'}</div>
                        </div>

                        <hr>
                        <!-- Measurements -->
                        <h6 class="mb-3">Measurements</h6>
                        <div class="row">
                            ${Object.entries(measurements).map(([key, value]) => `
                                <div class="col-sm-4"><strong>${key.replace('_', ' ')}:</strong> ${value ?? '-'}</div>
                            `).join('')}
                        </div>

                        <hr>
                        <!-- Languages -->
                        <h6 class="mb-3">Languages</h6>
                        <p>${languages.length ? languages.join(', ') : '-'}</p>

                        <hr>
                        <!-- NIC Images -->
                        <h6 class="mb-3">NIC Images</h6>
                        <div class="row text-center">
                            <div class="col-md-6 col-12 mb-3">
                                <strong>Front Side:</strong><br>
                                ${data.assets?.find(a => a.name === 'cnic_front')
                            ? `<img src="${getDisplayUrl(data.assets.find(a => a.name === 'cnic_front').path)}"
                                           class="img-fluid rounded shadow mt-2 border"
                                           style="max-height:200px; object-fit:cover;">`
                            : '-'}
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <strong>Back Side:</strong><br>
                                ${data.assets?.find(a => a.name === 'cnic_back')
                            ? `<img src="${getDisplayUrl(data.assets.find(a => a.name === 'cnic_back').path)}"
                                           class="img-fluid rounded shadow mt-2 border"
                                           style="max-height:200px; object-fit:cover;">`
                            : '-'}
                            </div>
                        </div>

                        <hr>
                        <!-- Gallery -->
                        <h6 class="mb-3">Gallery</h6>
                        <div class="row text-center">
                            ${data.assets?.map(a =>
                                a.type === 'image' &&
                                    a.name !== 'cnic_front' &&
                                    a.name !== 'cnic_back'
                                    ? `<div class="col-md-3 col-6 mb-3">
                                           <img src="${getDisplayUrl(a.path)}"
                                                class="img-fluid rounded shadow border"
                                                style="height:200px; object-fit:cover;">
                                       </div>`
                                    : ''
                            ).join('')}
                        </div>

                        ${data.assets?.some(a => a.type === 'video') ? `
                            <hr>
                            <div class="text-center">
                                <a href="${getDisplayUrl(data.assets.find(a => a.type === 'video')?.path)}" target="_blank" class="btn btn-outline-primary">
                                    <i class="feather icon-video"></i> Watch Video
                                </a>
                            </div>` : ''}
                    `;

                    modalBody.html(html);

                } else {
                    // Guest view (limited)
                    let html = `
                        <!-- Personal Info -->
                        <h6 class="mb-3">Personal Information</h6>
                        <div class="row">
                            <div class="col-sm-6"><strong>Full Name:</strong> ${data.name ?? '-'}</div>
                            <div class="col-sm-6"><strong>Date of Birth:</strong> ${data.dob ?? '-'}</div>
                            <div class="col-sm-6"><strong>Age:</strong> ${data.age ?? '-'}</div>
                            <div class="col-sm-6"><strong>Gender:</strong> ${data.gender ?? '-'}</div>
                            <div class="col-sm-6"><strong>Occupation:</strong> ${data.occupation ?? '-'}</div>
                            <div class="col-sm-6"><strong>Nationality:</strong> ${data.nationality ?? '-'}</div>
                            <div class="col-sm-6"><strong>Country:</strong> ${data.country ?? '-'}</div>
                        </div>

                        <hr>
                        <!-- Gallery -->
                        <h6 class="mb-3">Gallery</h6>
                        <div class="row text-center">
                            ${data.assets?.map(a =>
                        a.type === 'image' && a.path && a.name !== 'cnic_front' && a.name !== 'cnic_back'
                            ? `<div class="col-md-3 col-6 mb-3">
                                           <img src="${getDisplayUrl(a.path)}"
                                                class="img-fluid rounded shadow border"
                                                style="height:200px; object-fit:cover;">
                                       </div>`
                            : ''
                    ).join('')}
                        </div>

                        ${data.assets?.some(a => a.type === 'video') ? `
                            <hr>
                            <div class="text-center">
                                <a href="${getDisplayUrl(data.assets.find(a => a.type === 'video')?.url)}" target="_blank" class="btn btn-outline-primary">
                                    <i class="feather icon-video"></i> Watch Video
                                </a>
                            </div>` : ''}
                    `;
                    modalBody.html(html);
                }

            })
            .catch(err => {
                modalBody.html('<p class="text-danger text-center">Failed to load details.</p>');
                console.error(err);
            });
    });
});

// Convert Google Drive links to preview URLs
function convertDriveUrl(url) {
    if (!url) return '';
    const match = url.match(/\/file\/d\/([a-zA-Z0-9_-]+)\//);
    if (match && match[1]) return `https://drive.google.com/file/d/${match[1]}/preview`;
    const directMatch = url.match(/\/([a-zA-Z0-9_-]{20,})/);
    if (directMatch && directMatch[1]) return `https://drive.google.com/file/d/${directMatch[1]}/preview`;
    return url; // fallback
}
