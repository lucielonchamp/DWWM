document.addEventListener('DOMContentLoaded', function () {
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
        backdrop: 'static',
        keyboard: false
    });

    const acceptButton = document.getElementById('acceptButton');

    if (!sessionStorage.getItem('adulte')) {
        myModal.show();
    }

    acceptButton.addEventListener('click', function () {
        sessionStorage.setItem('adulte', 'true');
        window.addEventListener('storage', handleStorageChange);

        myModal.hide();
    });

    function handleStorageChange(event) {
        if (event.key === 'adulte') {
            myModal.show();
        }
    }

    window.addEventListener('storage', handleStorageChange);
});
