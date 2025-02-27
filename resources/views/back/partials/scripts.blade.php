<script>
    // Fonction pour afficher/masquer les sous-liens et changer l'icône "V"
    document.querySelectorAll('.toggle-submenu').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();  // Empêche le comportement par défaut du lien
            const submenu = item.nextElementSibling;  // Sous-menu correspondant
            const icon = item.querySelector('.submenu-toggle');  // Icône "V"

            // Toggle visibilité du sous-menu
            if (submenu.style.display === 'none' || submenu.style.display === '') {
                submenu.style.display = 'block';
                icon.classList.remove('fa-chevron-right');
                icon.classList.add('fa-chevron-down');
            } else {
                submenu.style.display = 'none';
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-right');
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>

<!-- Tagify JS -->
<!-- Script Alpine.js -->
<script>
    function tagsManager(existingTags = []) {
        return {
            tags: existingTags,
            newTag: '',

            addTag() {
                let tag = this.newTag.trim();
                if (tag !== '' && !this.tags.includes(tag)) {
                    this.tags.push(tag);
                    this.newTag = '';
                }
            },

            removeTag(index) {
                this.tags.splice(index, 1);
            },

            get tagsString() {
                return this.tags.join(',');
            }
        };
    }
</script>

