document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.view-btn').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const modalBody = document.getElementById('modelDetails');
            modalBody.innerHTML = `<p class="text-center text-muted">Loading details...</p>`;

            fetch(`/models/${id}`)
                .then(res => {
                    if (!res.ok) throw new Error('Network response was not ok');
                    return res.json();
                })
                .then(data => {
                    // Parse JSON fields if needed
                    const measurements = data.measurements ? JSON.parse(data.measurements) : {};
                    const languages = data.languages ? JSON.parse(data.languages) : [];

                    modalBody.innerHTML = `
                        <!-- Personal Info -->
                        <h6 class="mb-3">Personal Information</h6>
                        <div class="row">
                            <div class="col-sm-6"><strong>Full Name:</strong> ${data.name ?? '-'}</div>
                            <div class="col-sm-6"><strong>Father Name:</strong> ${data.father_name ?? '-'}</div>
                            <div class="col-sm-6"><strong>Date of Birth:</strong> ${data.dob ?? '-'}</div>
                            <div class="col-sm-6"><strong>Age:</strong> ${data.age ?? '-'}</div>
                            <div class="col-sm-6"><strong>Gender:</strong> ${data.gender ?? '-'}</div>
                            <div class="col-sm-6"><strong>Occupation:</strong> ${data.occupation ?? '-'}</div>
                            <div class="col-sm-6"><strong>Nationality:</strong> ${data.nationality ?? '-'}</div>
                            <div class="col-sm-6"><strong>Country:</strong> ${data.country ?? '-'}</div>
                        </div>

                        <hr>
                        <!-- Contact Info -->
                        <h6 class="mb-3">Contact Information</h6>
                        <div class="row">
                            <div class="col-sm-6"><strong>Mobile:</strong> ${data.mobile_no ?? '-'}</div>
                            <div class="col-sm-6"><strong>Home No:</strong> ${data.home_no ?? '-'}</div>
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
                                <div class="col-sm-4"><strong>${key.replace('_',' ')}:</strong> ${value ?? '-'}</div>
                            `).join('')}
                        </div>

                        <hr>
                        <!-- Languages -->
                        <h6 class="mb-3">Languages</h6>
                        <p>${languages.length ? languages.join(', ') : '-'}</p>

                        <hr>
                        <!-- NIC -->
                        <h6 class="mb-3">NIC Images</h6>
                        <div class="row text-center">
                            <div class="col-md-6 col-12 mb-3">
                                <strong>Front Side:</strong><br>
                                ${data.nic_front ? `<img src="${data.nic_front}" class="img-fluid rounded shadow mt-2 border" style="max-height:200px;object-fit:cover;">` : '-'}
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <strong>Back Side:</strong><br>
                                ${data.nic_back ? `<img src="${data.nic_back}" class="img-fluid rounded shadow mt-2 border" style="max-height:200px;object-fit:cover;">` : '-'}
                            </div>
                        </div>

                        <hr>
                        <!-- Gallery -->
                        <h6 class="mb-3">Gallery</h6>
                        <div class="row text-center">
                            ${data.assets?.map(a =>
                                a.type === 'image' ? `
                                    <div class="col-md-3 col-6 mb-3">
                                        <img src="${a.url}" class="img-fluid rounded shadow" alt="${a.name}">
                                    </div>` : ''
                            ).join('') ?? ''}
                        </div>

                        ${data.assets?.some(a => a.type === 'video') ? `
                            <hr>
                            <div class="text-center">
                                <a href="${data.assets.find(a => a.type === 'video')?.url}" target="_blank" class="btn btn-outline-primary">
                                    <i class="feather icon-video"></i> Watch Video
                                </a>
                            </div>` : ''}
                    `;
                })
                .catch(err => {
                    modalBody.innerHTML = `<p class="text-danger text-center">Failed to load details.</p>`;
                    console.error(err);
                });
        });
    });
});
