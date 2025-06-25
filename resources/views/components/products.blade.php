<style>
/* Initially hide the div and position it off-screen */
.slide-in-left, .slide-in-right {
    opacity: 0;
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

/* Move left elements off-screen */
.slide-in-left {
    transform: translateX(-150px);
}

/* Move right elements off-screen */
.slide-in-right {
    transform: translateX(150px);
}

/* When scrolled into view, animate it into position */
.show {
    opacity: 1;
    transform: translateX(0);
}

</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card slide-in-left">
                <div class="card-body">
                    <h5 class="card-title">Service 1</h5>
                    <p class="card-text">Description of Service 1.</p>
                </div>
            </div>

            <div class="card slide-in-left mt-4">
                <div class="card-body">
                    <h5 class="card-title">Service 2</h5>
                    <p class="card-text">Description of Service 2.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card slide-in-right">
                <div class="card-body">
                    <h5 class="card-title">Service 3</h5>
                    <p class="card-text">Description of Service 3.</p>
                </div>
            </div>

            <div class="card slide-in-right mt-4">
                <div class="card-body">
                    <h5 class="card-title">Service 4</h5>
                    <p class="card-text">Description of Service 4.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                } else {
                    // Remove the class when the element leaves the viewport
                    entry.target.classList.remove("show");
                }
            });
        },
        {
            root: null, // Viewport is the root
            threshold: 0.2 // Trigger animation when 20% visible
        }
    );

    // Observe all elements that should animate
    document.querySelectorAll(".slide-in-left, .slide-in-right").forEach(element => {
        observer.observe(element);
    });
});

</script>