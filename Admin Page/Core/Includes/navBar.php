<div class="container-fluid shadow-sm mb-4 bg-body-tertiary rounded fix-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <a class="navbar-brand fs-4 fw-bold mx-2" href="#" style="color: #003c3c;">Simbag sa Pag-Asenso Inc.</a>

        <!-- Notification Bell and Calendar Layout aligned horizontally and left of profile image -->
        <div class="d-flex align-items-center ms-auto">
            <!-- Bell Icon -->
            <a href="#" class="me-3">
                <i class="fas fa-bell" style="font-size: 1.2rem; color: #003c3c;"></i>
            </a>

            <!-- Calendar Layout -->
            <div class="d-flex align-items-center shadow-sm" style="height: 45px; width: 190px; background-color: #fff; border-radius: 12px; padding-left: 6px;">
                <i class="fas fa-calendar-alt me-2" style="font-size: 1.3rem; color: #003c3c;"></i> <!-- Calendar Icon -->
                <span id="currentDate" class="fs-6 fw-bold" style="color: #003c3c;"></span> <!-- Date -->
            </div>
            <!-- Profile Image -->
            <a href="#" class="ms-2">
                <img src="../../public/assets/images/profile.jpg" style="height: 40px;" class="rounded-circle" alt="profile">
            </a>
        </div>
    </nav>
</div>

<script>
    // JavaScript to dynamically display the current date
    const date = new Date();
    const options = {
        month: 'long',
        day: 'numeric',
        year: 'numeric'
    };
    document.getElementById('currentDate').innerText = date.toLocaleDateString(undefined, options);
</script>