<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md Shaon Sheikh - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <!-- <h1 class="logo">Md Shaon.</h1> -->
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#journey">My Journey</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
                
            </ul>
            <!-- <img src="img2.jpg" class="img img-right" alt="Profile Image Right"> -->
        </nav> <br> <br>
        <!-- <img src="img1.jpg" class="img img-left" alt="Profile Image Left"> -->



        <div class="intro">
            <h2>Hi, I'm Md Shaon Sheikh</h2>
            <p class="tagline">Frontend Developer & Tech Enthusiast</p>
            <p>I build clean and functional websites with HTML, CSS, and JavaScript.</p><br> <br>
            <div class="buttons">
                <a href="#contact" class="btn">Hire Me</a>
                <a href="#contact" class="btn-outline">Let's Talk</a> 
            </div>
        </div>
    </header>

    <section id="about" class="about">
        <h2>About Me</h2>
        <div class="about-content">
            <img src="img1.jpg" alt="Profile Picture">
            <p>
                Hi, I’m Shaon, a passionate web developer with a knack for turning ideas into interactive, user-friendly digital experiences. With expertise in both front-end and back-end development, I enjoy crafting clean, efficient code and solving complex problems.

                From sleek websites to robust web applications, I strive to blend creativity with functionality. My toolkit includes modern technologies like HTML, CSS, JavaScript, and frameworks such as React and Node.js. I'm always learning, exploring new technologies, and staying ahead of the curve.

                When I’m not coding, you can find me diving into design trends, contributing to open-source projects, or experimenting with new ideas. Let’s connect and build something great together!

            </p>
        </div>
    </section>

    <section id="journey" class="journey">
        <h2>My Journey</h2>
        <div class="timeline">
            <div class="timeline-section">
                <h3>Education</h3>
                <div class="timeline-item">
                    <p><strong>2017 - 2019:</strong>SSC Completed</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
                <div class="timeline-item">
                    <p><strong>2022 -2026 :</strong>Diploma in Engineering Study running</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="timeline-section">
                <h3>Experience</h3>
                <div class="timeline-item">
                    <p><strong>2023 - 2024:</strong> Web Developer - Company</p>
                    <p>Developed and maintained various frontend features and pages.</p>
                </div>
                <div class="timeline-item">
                    <p><strong>2020 - 2022:</strong> Junior Developer - Startup</p>
                    <p>Assisted in coding projects and improving site performance.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <h2>My Skills</h2>
        <div class="skill-bars">
            <div class="skill">
                <p>HTML <span class="skill-percent">90%</span></p>
                <div class="progress-bar"><span style="width: 90%;" class="progress"></span></div>
            </div>
            <div class="skill">
                <p>CSS <span class="skill-percent">80%</span></p>
                <div class="progress-bar"><span style="width: 80%;" class="progress"></span></div>
            </div>
            <div class="skill">
                <p>JavaScript <span class="skill-percent">30%</span></p>
                <div class="progress-bar"><span style="width: 30%;" class="progress"></span></div>
            </div>
            <div class="skill">
                <p>Python <span class="skill-percent">30%</span></p>
                <div class="progress-bar"><span style="width: 30%;" class="progress"></span></div>
            </div>
            <div class="skill">
                <p>Java <span class="skill-percent">30%</span></p>
                <div class="progress-bar"><span style="width: 30%;" class="progress"></span></div>
            </div>
            <div class="skill">
                <p>Computer Setup & MS Office <span class="skill-percent">85%</span></p>
                <div class="progress-bar"><span style="width: 85%;" class="progress"></span></div>
            </div>
        </div>
    </section>
    



    <section id="contact" class="contact">
        <h2>Contact Me</h2>
        <form action="contact.php" method="POST">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="tel" name="mobile" placeholder="Mobile Number" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Submit</button>
        </form>
    </section>

        <!-- <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('formMessage').innerText = 'Your message has been sent successfully!';
            this.reset();
        }); -->
    <!-- </script>
    <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // ডিফল্ট সাবমিট বন্ধ করা
        var formData = new FormData(this); // ফর্মের ডাটা নেওয়া

        fetch('contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('formMessage').innerText = data; // মেসেজ দেখানো
            this.reset(); // ইনপুট ফিল্ড খালি করা

            // 2 সেকেন্ড পর হোমপেজে স্ক্রল করা
            setTimeout(() => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 2000);
        })
        .catch(error => console.error('Error:', error));
    });
</script> -->
<!-- <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // ডিফল্ট সাবমিট বন্ধ করা

        var formData = new FormData(this); // ফর্মের ডাটা নেওয়া

        fetch('contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('formMessage').innerText = data; // মেসেজ দেখানো
            document.getElementById('contactForm').reset(); // ইনপুট ফিল্ড খালি করা
            
            // 2 সেকেন্ড পর পৃষ্ঠার উপরে স্ক্রল করা
            setTimeout(() => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 2000);
        })
        .catch(error => console.error('Error:', error));
    });
</script> -->

<!-- SweetAlert2 CSS & JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // ডিফল্ট সাবমিট বন্ধ করা

        var formData = new FormData(this);

        fetch('contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            Swal.fire({
                title: "Success!",
                text: data,  // সার্ভার থেকে পাওয়া মেসেজ দেখাবে
                icon: "success",
                showConfirmButton: false
            }).then(() => {
                window.location.href = "index.php"; // সরাসরি হোমপেজে রিডাইরেক্ট
            });

            document.getElementById('contactForm').reset(); // ইনপুট ফিল্ড খালি করা
        })
        .catch(error => console.error('Error:', error));
    });
</script>
    <div class="contact-info">
        <div class="contact-item">
            <i class="fas fa-phone-alt"></i>
            <p><strong>Phone:</strong> <a href="tel:+8801307201070">01307201070</a></p>
        </div>
        <div class="contact-item">
            <i class="fab fa-whatsapp"></i>
            <p><strong>WhatsApp:</strong> <a href="https://wa.me/8801307201070">01307201070</a></p>
        </div>
        <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <p><strong>Email:</strong> <a href="mailto:mdshaonsheikh546@gmail.com">mdshaonsheikh546@gmail.com</a></p>
        </div>
        <div class="contact-item">
            <i class="fab fa-facebook"></i>
            <p><strong>Facebook:</strong> <a href="https://www.facebook.com/profile.php?id=61556142856082" target="_blank">View Profile</a></p>
        </div>
    </div>
    

    <footer class="footer">
        <p>&copy; 2024 Md Shaon Sheikh. All Rights Reserved.</p>
    </footer>
</body>
</html>

