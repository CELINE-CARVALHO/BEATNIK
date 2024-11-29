document.getElementById('signupForm').addEventListener('submit', async (e) => {
    e.preventDefault();

    const username = document.getElementById('new-username').value;
    const password = document.getElementById('new-password').value;

    // Send form data to PHP script
    try {
        const response = await fetch('signup.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}`
        });

        const result = await response.json();

        if (result.status === "success") {
            document.getElementById('signup-success').textContent = result.message;
            document.getElementById('signup-success').classList.remove('hidden');
            document.getElementById('signup-error').classList.add('hidden');
        } else {
            document.getElementById('signup-error').textContent = result.message;
            document.getElementById('signup-error').classList.remove('hidden');
            document.getElementById('signup-success').classList.add('hidden');
        }
    } catch (error) {
        console.error("Error:", error);
        document.getElementById('signup-error').textContent = "An error occurred. Please try again.";
        document.getElementById('signup-error').classList.remove('hidden');
        document.getElementById('signup-success').classList.add('hidden');
    }
});
