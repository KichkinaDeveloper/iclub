<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- start course content container -->
                <div class="mu-course-container mu-course-details">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <video id="my-video" class="video-js fa-file-video-o/" data-setup='{}' autoplay="true"></video>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        if (navigator.mediaDevices === undefined) {
            navigator.mediaDevices = {};
        }

        // Some browsers partially implement mediaDevices. We can't just assign an object
        // with getUserMedia as it would overwrite existing properties.
        // Here, we will just add the getUserMedia property if it's missing.
        if (navigator.mediaDevices.getUserMedia === undefined) {
            navigator.mediaDevices.getUserMedia = function(constraints) {

                // First get ahold of the legacy getUserMedia, if present
                var getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

                // Some browsers just don't implement it - return a rejected promise with an error
                // to keep a consistent interface
                if (!getUserMedia) {
                    return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
                }

                // Otherwise, wrap the call to the old navigator.getUserMedia with a Promise
                return new Promise(function(resolve, reject) {
                    getUserMedia.call(navigator, constraints, resolve, reject);
                });
            }
        }

        navigator.mediaDevices.getUserMedia({ audio: true, video: true })
            .then(function(stream) {
                var video = document.querySelector('video');
                // Older browsers may not have srcObject
                if ("srcObject" in video) {
                    video.srcObject = stream;
                } else {
                    // Avoid using this in new browsers, as it is going away.
                    video.src = window.URL.createObjectURL(stream);
                }
                video.onloadedmetadata = function(e) {
                    video.play();
                };
            })
            .catch(function(err) {
                console.log(err.name + ": " + err.message);
            });
    </script>
</section>