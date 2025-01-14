// script.js
document.addEventListener('DOMContentLoaded', () => {
    const contactElements = document.querySelectorAll('.contact-info, .contact-map');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.1
    });

    contactElements.forEach(element => {
        observer.observe(element);
    });
});
/* ----------- Contact Us Specific Styles ----------- */
.contact-container {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    margin-top: 30px;
}

.contact-info {
    flex: 1;
    max-width: 50%;
}

.contact-map {
    flex: 1;
    max-width: 50%;
}

.contact-info p {
    font-size: 18px;
    margin: 10px 0;
}

.conlogo {
    width: 60%;
    margin-top: 30px;
}

/* Line Divider */
.line-divider {
    height: 2px;
    background-color: #114D9C;
    margin: 20px 0;
}

/* Responsive Design for Contact Section */
@media (max-width: 768px) {
    .contact-container {
        flex-direction: column;
    }

    .contact-info,
    .contact-map {
        max-width: 100%;
    }
}
<div class="container mt-5">
    <h2 class="fontcontract-h text-center">ติดต่อเรา</h2>
    <div class="line-divider"></div>
    
    <div class="row contact-container">
        <div class="col-md-6 contact-info">
            <p class="fontcontract-p">
                <i class="fa-solid fa-location-dot" style="color: #114D9C;"></i>&emsp;<?= nl2br($translations['address']); ?>
            </p>
            <p class="fontcontract-p">
                <i class="fa-solid fa-phone" style="color: #114D9C;"></i>&emsp;061-386-0028
            </p>
            <p class="fontcontract-p">
                <i class="fa-solid fa-envelope-open-text" style="color: #114D9C;"></i>&emsp;it_krt@kurota-th.com
            </p>
            <img class="conlogo" src="img/LOGO2.1.png" alt="Company Logo">
        </div>

        <div class="col-md-6 contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.045357696423!2d101.5619262!3d13.8962361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311cf0dd030acb1d%3A0xb0788ff0a3032540!2sKurota%20(Thailand)%20Co.%2CLtd!5e0!3m2!1sth!2sth!4v1734683475319!5m2!1sth!2sth"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <div class="line-divider"></div>
</div>
