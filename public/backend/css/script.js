// siderbar dropdown code start //

document.addEventListener('DOMContentLoaded', function() {
    var navItems = document.querySelectorAll('.nav-item');

    navItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            // Check if the clicked element is a link inside the dropdown
            if (e.target.tagName === 'A' && e.target.closest('.collapse-inner')) {
                // Allow the default action for links inside the dropdown
                return;
            }

            // Prevent default action for dropdown toggles
            e.preventDefault();
            
            // Close all dropdown menus
            navItems.forEach(function(el) {
                el.classList.remove('active');
                var collapseInner = el.querySelector('.collapse-inner');
                if (collapseInner) {
                    collapseInner.style.display = 'none';
                }
            });

            // Open the clicked dropdown menu
            var collapseInner = item.querySelector('.collapse-inner');
            if (collapseInner) {
                item.classList.add('active');
                collapseInner.style.display = 'block';
            }
        });
    });
});

// siderbar dropdown code end //
