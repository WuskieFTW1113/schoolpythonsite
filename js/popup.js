document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('watchVideo').addEventListener('click', function(e) {
        e.preventDefault();

        // Open YouTube video in a new window
        var videoUrl = 'VIDEO_URL_HERE'; // Replace with your video URL
        window.open(videoUrl, 'YouTube Video', 'width=800,height=600');
    });
});
