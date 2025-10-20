<!-- FilePond scripts -->
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // Register the plugin
    FilePond.registerPlugin(FilePondPluginImagePreview);

    // Initialize all .filepond inputs
    // document.addEventListener('DOMContentLoaded', () => {
    //     document.querySelectorAll('input.filepond').forEach(el => {
    //         FilePond.create(el, {
    //             allowMultiple: true,
    //             labelIdle: 'Drag & Drop or <span class="filepond--label-action">Browse</span>',
    //         });
    //     });
    // });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>


<!-- FilePond JS & Plugin -->
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // Register the image preview plugin for FilePond
    FilePond.registerPlugin(FilePondPluginImagePreview);

    // Initialize FilePond on the file input
    FilePond.create(document.querySelector('#images'), {
        allowMultiple: true,
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
    });
</script>



<script>
    const videoInput = document.getElementById("videoInput");
    const progressBar = document.querySelector(".progress");
    const progressText = document.getElementById("progressText");
    const progressContainer = document.querySelector(".progress-container");
    const videoPreview = document.querySelector(".video-preview");
    const videoPlayer = document.getElementById("videoPlayer");

    videoInput.addEventListener("change", (e) => {
        const file = e.target.files[0];
        if (file) {
            progressContainer.style.display = "block";

            let progress = 0;
            const fakeUpload = setInterval(() => {
                progress += 10;
                progressBar.style.width = progress + "%";
                progressText.textContent = progress + "%";

                if (progress >= 100) {
                    clearInterval(fakeUpload);
                    setTimeout(() => {
                        videoPreview.style.display = "block";
                        const url = URL.createObjectURL(file);
                        videoPlayer.src = url;
                        videoPlayer.play(); // ensure autoplay
                    }, 500);
                }
            }, 300);
        }
    });
</script>
<script src="{{ asset('User/assets/js/script.js') }}"></script>
