$(document).ready(function() {
    // Like Post
    $('#likePost').submit(function(form) {
        form.preventDefault();
        
        axios.post("/community/like", {
            post_id: $('#post-id').val()
        })
        .then(function(response) {
            $('#post-id').val('');

            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Post Liked!",
                showConfirmButton: false,
                timer: 1500
            });
        })
        .catch(function(error) {
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Server Error!",
                showConfirmButton: false,
                timer: 1500
            });
        });
    });
});