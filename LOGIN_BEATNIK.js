// LOGIN BEATNIK.js

document.getElementById('loginForm').addEventListener('submit', async (e) => {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Send form data to PHP script
    try {
        const response = await fetch('login.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}`
        });

        const result = await response.json();

        if (result.status === "success") {
            alert(result.message);
            // Redirect to home or another page
            window.location.href = 'BEATNIK.HTML';
        } else {
            document.getElementById('login-error').textContent = result.message;
            document.getElementById('login-error').classList.remove('hidden');
        }
    } catch (error) {
        console.error("Error:", error);
        document.getElementById('login-error').textContent = "An error occurred. Please try again.";
        document.getElementById('login-error').classList.remove('hidden');
    }
});
