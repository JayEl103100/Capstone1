       
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.module-header-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const content = btn.nextElementSibling; 
                    content.style.display = (content.style.display === 'none') ? 'block' : 'none'; 
                });
            });
        });