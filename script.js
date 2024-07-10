document.getElementById('loginForm').addEventListener('submit', function(event) {
    var username = document.querySelector('input[name="username"]').value;
    var password = document.querySelector('input[name="password"]').value;

    if (username.trim() === '' || password.trim() === '') {
        alert('Please fill in both fields.');
        event.preventDefault();
    }
});
