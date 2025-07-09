<!-- Scroll Progress Bar -->
<div class="scroll-progress"></div>
<style>
    #goTopBtn {
        display: none; /* Ẩn ban đầu */
        position: fixed;
        bottom: 40px;
        right: 40px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #555;
        color: white;
        cursor: pointer;
        padding: 12px 16px;
        border-radius: 50%;
        box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        transition: background-color 0.3s;
    }

    #goTopBtn:hover {
        background-color: #333;
    }
</style>
<button onclick="scrollToTop()" id="goTopBtn" title="Go to top">⬆</button>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#home">Pumin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#marketing">Marketing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#acting">Acting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
