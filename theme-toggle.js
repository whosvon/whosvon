<script>
    const themeToggleButton = document.getElementById('theme-toggle');

    // Check if dark mode preference is saved
    if(localStorage.getItem('dark-mode') === 'enabled') {
        document.body.classList.add('dark-mode');
    }

    themeToggleButton.addEventListener('click', () => {
        // Toggle dark mode class
        document.body.classList.toggle('dark-mode');

        // Save dark mode preference in localStorage
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('dark-mode', 'enabled');
        } else {
            localStorage.removeItem('dark-mode');
        }
    });
</script>
