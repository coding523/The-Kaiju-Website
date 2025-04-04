<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Kaiju Restaurant</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="assets/js/theme.js"></script>
    <style>
        .about-header {
            height: 50vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("assets/images/about-bg.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .story-section {
            padding: 6rem 5%;
            position: relative;
            overflow: hidden;
        }

        .story-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .story-image {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            transform: translateX(-100%);
            opacity: 0;
            animation: slideInLeft 1s ease-out forwards;
        }

        .story-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .story-image:hover img {
            transform: scale(1.1);
        }

        .story-content {
            transform: translateX(100%);
            opacity: 0;
            animation: slideInRight 1s ease-out 0.3s forwards;
        }

        .story-content h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .story-content h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--accent-color);
            animation: expandWidth 0.8s ease-out 1s forwards;
        }

        @keyframes expandWidth {
            from {
                width: 0;
            }

            to {
                width: 50px;
            }
        }

        .team-section {
            padding: 6rem 5%;
            background: var(--bg-secondary);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .team-member {
            text-align: center;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .team-member:nth-child(2) {
            animation-delay: 0.2s;
        }

        .team-member:nth-child(3) {
            animation-delay: 0.4s;
        }

        .team-member:nth-child(4) {
            animation-delay: 0.6s;
        }

        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 1.5rem;
            border: 3px solid var(--accent-color);
            transition: transform 0.3s ease;
        }

        .team-member:hover img {
            transform: scale(1.1) rotate(5deg);
        }

        .values-section {
            padding: 6rem 5%;
            position: relative;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .value-card {
            padding: 2rem;
            border-radius: 10px;
            background: var(--bg-secondary);
            text-align: center;
            transform: scale(0.8);
            opacity: 0;
            animation: scaleIn 0.6s ease-out forwards;
        }

        .value-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .value-card:nth-child(3) {
            animation-delay: 0.4s;
        }

        .value-card i {
            font-size: 3rem;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .story-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php">KAIJU</a>
            </div>
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav-links">
                <a href="menu.php">Menu</a>
                <a href="about.php" class="active">About</a>
                <a href="location.php">Location</a>
                <a href="contact.php">Contact</a>
            </div>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </div>
        </nav>
    </header>

    <!-- About Header -->
    <section class="about-header">
        <div class="hero-content">
            <h1>OUR STORY</h1>
            <p>A journey of flavors and passion</p>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="story-grid">
            <div class="story-image">
                <img src="https://cdnb.artstation.com/p/assets/covers/images/075/290/019/large/nicholas-crescenzo-nicholas-crescenzo-scene-1-background-10047.jpg?1714177163" alt="Our Restaurant Story">
            </div>
            <div class="story-content">
                <h2>The KAIJU Journey</h2>
                <p>Founded in 2020, KAIJU emerged from a passion for combining the best of Thai and Japanese cuisines. Our journey began with a simple idea: create a dining experience that transcends traditional boundaries.</p>
                <p>Today, we continue to push culinary boundaries while honoring the authentic flavors and techniques of both cultures.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <h2 class="section-title">Our Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCADAAIkDASIAAhEBAxEB/8QAHAAAAgMBAQEBAAAAAAAAAAAAAwQBAgUGAAcI/8QAPRAAAQMDAgQEBAQEBQMFAAAAAQIDEQAEIRIxBUFRYRNxgZEGIjKhFEJisSNygsEzUlPR8JLh8QcVJEOy/8QAGQEAAgMBAAAAAAAAAAAAAAAAAgMAAQQF/8QAIxEAAgICAgICAwEAAAAAAAAAAAECEQMxEiEiQQQTMkJRYf/aAAwDAQACEQMRAD8ARecUHFn1Fe8VSigTvE+lVuiAnP1SQPKlUr+mD+Uek0FFmoh3keVbDDoKZ3kAeUVzPi7GeUVq2b0oBJ2x5UEkWjZD2MH7miJuCFEjoJ/7Vl+MgFOYn2iiB7UFBKszHfO29LoM00PjTKfzEiCe+aIFk5mOmTB96zErSAOe/oaOlyARMgChog/MnBkb0RJEHO8DnSSXsY6CPP0oqXJG+Tv61CDY0pgTjnJ2o+pJASDzPlWeHOQkyDPM0ZLg3NUQaSsJmSN8b1VRSZiSDtvS/ipMdufOatrwSTMdNqolhdUQY7R26UJaQRkjbmelQpwCRO9UU4Ik53irIJut6iSZ54NB8E9P3plSwSkcuvevY7+4qFnG3gnTH1EqpfSIBSJMAqHemr1MJSo4gkelLgaY1T9IOPbNa0KBLxgTG/enrBRIUmTmPtSjoGPPejWBIdx/lzyqnoiH1kSCTGJG1HbKQwVSBOk5B3ON6TuyElBESc9xUpKtGnUdBSExODzoK6CsdS7IidhkikuIcf4dwwobcK3rkAFNswRr2n+ITgT6mgXl2uxsbu4Qoa2kANTsHFqDaCR2JB9K0OB8GsUq8QJSu4dhT1w/87zqzJKiVde1Lk1HY7HjeTRgM/G6Q4tN5w91pvV8vguEqSCR9QcA/cV1NjxOxv2vEtHUup+VKgQUrQoiQlxJyD/yaav+CWbjKgtphe5KVITk9dq4nRb8D45woWktMX2q1fa1EoOtUJUJ6GD/AOauk/Rc8TiruztvxJSrCYTtM9+dHRcSMcjWU46nIkTMlPruas26RJJgnMftQ0KNIPErEEwBmYk+dFDwOAdx1rI8dQOonBmee9WTcSqcwnB58qnElmoHpKQVAY1DB+9SH0SApQyYjt1xWWl8khWwkj5qsXJjOSRntVUQd1BKhndRSM4iavrH6ftSviQAd8mAe9R4yv8AKPaoWYV8IaSRtkx3pAElIJ6AfetG7ksmORMR13rO1AFISZEk5HWtSFEKIKRJHajWJAcOJJH96XciUxGKYswoKKgYgHf2qEDvguKOwImPSiIV8iAIgYz1ihrOomMAzMneKqkJA1Tz57D1oGWB4u34vCr5ASSsi3UnTuNL7ajWvZ3dzaKKW1MKU2sgtLt7srKMAaXkjwp2waRWtpxstmBKUgmJIKVBX9q3EXqF26Q1ZJccSkpU7CPFyPpbBgz6ikzas3fGVpl7ziV6HWW3JaaWgqJatfxC1ak6vqWpKE+v/jkeNWbj73AXUQl78ejQ5cIKIEFxKVpT1IrsBeOFfy2q0oCUSb0IQNSEwQkJUT5GIrL4i+m6ubdSm9HhueLp3KlBsgD3Mmii31YzJFUz06oyNSkgqjqdxMcq8lRSYjrkbevOqIUSoQQMQOY9qOllCwVByDzBEHzq9HP3oBrBVg+43oreFTmScCOdR4YIgmBOTGSR0NW1stglJACBmcZjvVMKiHCQdJKUjUSASAfvXkEnE46ZzPSKzH7hTi1K25JmAY9KbtbrSgeIoqkHMAmdqtxaVlWm6NNsgpSAeSpPMRV9J/1D7VnpeKRqRBxsCZPnNW/FO/6Q96DiyWLuAKZWCQD9QztHWspLCjqVICZOT5TT1x4oZWpOSN+hH71nocWW1IUoc5x6VpQsooGVH0xtTFu5pBESYgedLgFUBJPznb96d0Ib8MYBSCe8moy0UKXFKUZOM/emEMQlSlEDBx5c6Tcf6d55e9O2FtxTigDNjbOvBIguCEsJ/meV8n3J7UqV+g1QPSkfm6j1p6zbZu0BtxKSUq1MrUDBKSUGORGCDvz6V0PDvgttAQvir/jL38C1K0NDspzCz6BNO8a4Iyu1Q5aJSwbJgoQhpISjwEyrSkDAKcn3oZY5VbG4sijKjEc4ciELuGbRLDRC9KENaVFOQVBDaRjcTNYry3bi58ZIlCA+6sRJhRSgGeiZj1FM/hrx4kvXK1tpxBJrqfh/hduWLi4cbQtFyF2yUqAUk26FEKBG3zEZ/lFHjXNjM8uMWck2lSwUgAHSQpRUMd4oV5cKtWWG21DUr5iZBUAPKuzu/hO1V4i7B9dsoj/Dc1OsT7+IPc+VcLxbg3HrF1xV5ZuhkHFwxL1sQOYWgSB/MBTPrafZi5Kugarx9xASMKEyU75M0FbjgJSSZwTNesylSZkKE6ZBB5TVnBrWoDdGKrpOidg51b785NXS7oHPG1CG5nlVwiSJO+0VdEGmH90Awd5JOOwFG8T9f/PelUsgAmSDt617wl9aBpF9jjhhpydu3nisogF06TCRIII/qrRup8MIEyo/MOwM0g4ppBbEHWScD8w2yaZHQLKtHQ6mTgKke+9NufNIBmeYpNYJk8xnFTa+K44hpH+I84hloDfW6oIT9zVSQSOz+Evh6yu0OcS4hboeR4hTYNPDU1CMLdUjY5wmZ2J513iW0ISlKUpSlIhKUgBIHQAYpWzYatGLa3aENW6U26R+lKQkGnOQ7GKalSFt2egdK8UJIiMRU1OCBvVkEjYcOKjrs7VWZBLLe/tTLbTTaAhtCUIAhKEAJSkdAE4qFpWMo33yJFDCr7UP4bBTzysH9yKi60RtvYaM+lejfpUzUE4qyjnviHgltc2T79pasovWNVwCy2hC7gAHU2opAkkZTPMd6+YeKdTq0xCwI64r7cTJAE7xPcCvk3xPw4cN4q8ltOm3ux+LtwBhIWopWgfyqmOxFDKPstP0ZCDJz1FPtDUkqSEwDjqBtis4HSR6RTto4kBaZAlRUATECOU0mSDQVxMAnt70H/m5phS2jOrYHIwDHaqa7Por3qkWy92sJKBOYjyrLJWFrVJWVmPIbCmrtxt10FBJSkECefekiSAobKB+oTj+1NQBdS1aSJORHtWx8IWf4rjvDdSZTa+Nfrnb+CnSif6lJ9qwHFw60kmEnSCT3rv/AIAtBq45fEGB4Fi0fIeO5Huiqrss7VAJSBzVKR2WiYnzFXbcBKkHCgZjtUIjI5LyD0cTSt444y7ZrSBK3fBWnMnUhSgR5R7U0A0BV6Ay826kKGDsoHcGigmMj71RZ41O1eqDOIjvUIQaXfeQ2gqUYGpAkmBJMAe9FWoBJJOBk1icSuUJ/AFwkNL4latqx8upQc8MKPTVppkI2A2bDckIJ5kn7VzHxrYC54Wu6SmXeHOi4BG5Yd0tuj0OlXoa6hBmD0TVLhpl9pxp4Sy824w8OrTqShX70O+iz4ckkmjJQcUO5t3rC8vLJ7/EtH3bdZ66FEBQ88H1oiHEhTRiY3Ctp7UloYXCflUSQCNgRvnrVYX+n70RbmoZiQDskST1NC1HqfahIESlBzqBJmIqFNykgJBBgqzG1DYLgwoJ+XO+R6jFNK1qSoDE7bE0RDOuWgclQgDmY2r6j8EucLRwW0tWby3dvHFPXV2wlxPjIddM6PDMKOkBImDtXzB5CtRSoiCMDc450o4kpKdJOrUnwyJBCpxBGaBz4sJRs/QARBUIMSD5Gs/ijzLTvBEOyDd8TTatxzWbS5dz/wBP3rGtb7i1taMFNy46UISFh/8AizA6uSr71j8U43ecQ+IPgXhuloIF+7xNwoQpKiphlxCfmKjsNcjvRQyqQU8Eods7QthlQKJCVfYjIrRSZSk9QDSm6MjlORTLZOhB5aRyzNNEl6g7Hyr2ahcwo52j1qygawCkjtFcj8crRb/DV1oUUuu3lghtQ+oLS74oUPLTPpXXKkivnf8A6kvOiz4NbgK8Jd7cOOHlqbZAQk/9Sj6UxdIF7O14NeKv+F8Ku1IUld1aWz6gY+pbYUdqffWww0py5eaYbG67haGkDzUsgV8c+HeM8ecV/wC2i+uzbtsJ8JIecAZQhSWwhOkjGcCeVb3EuHWgYU6sFTumVLcUVrk4nUsk1lnm4yqjVjwc48rMj4ru+DX3Fnbnh7xd1tNJuXAkpacebHh6mirJBATmOXesZMEDoMUqjTkycRvR0x13omxNDQKYI7CPMVWe33qUpBGxHpU6B39jQWWVK0o2Hnyq4W6lJURvEBJpziDKEoSsIQlQOkiIEb4rP8QET/Tj3otkKKK15UMjA5Gl1Al1iRkPteeFppy3cSl3SqIVyI3oq22i6hcZC0mCZEg70rJ0Mhs+gsFKmEc5ANZRabX8a/B0xKbHjRE9RbrAA75JpzhzhVbtydkgH0rGv7osfFfwU4kwpNzdNnuh1JaI9aDD6NeddM+jaYHPaDR2pDaAeQiqmFJCk7Kgj1q6cAb46c/OtpzS81VZhPPcD+9T3iqLwE9yTuai2UVnFcr8Y8P/AB3AeLlKZdslM8QbjeGJDkf0qV7V1WOdUSyh4XDTiQpt9K2Vg5BS4koUD70z0yj5H8HWwKr25I/O2wk9kjWf3HtW/wAbXptnlk4bacUB1VphP3NL/DFsq34agKEKU/cqP9LhbH/5oHxDcBSPACo1kpMbwnNc6XeQ6kfDEcYnUAQOcUdCVkj0OKYbtBqJUqAcpjf1p1phkYj1NOkzChZsLCef1J9jRoX0P3pzw0JIGkR251OlP+maXYdAL9bilJSoAp+Yiduk5pBITOTsNhtTN044p4F4yYxCQPl9KDrb2EAETOkmnrQoGVfxGwI+rJjIFFdcQfqVBB5dtqEpQ1ggyMHAP7GjKA0jAM5BpOQbBnYcJc8W2Bn8qSI6xmKXsre3vPi/h/4gahw/hj92wjq+p4tJUf5QSfY8qB8P3B0ra5zA7RJrW4FbFfxNxC5iUscKtG5j8zrzu3tQYV3Rrzu4WdnofCQlGjQNoMmPWrtqWJCgeprwhO0z0qwUpUfLtnNbjmF5AzVFyopjoatA/N8x+3oKgpMylRTAAA3FRbIyAirp0pI6Agn0qhUREgSdooN6+3a2d5cOrCdDKwmebigUoSI5kkAVbZEv4cS481ZW6QICghSwOQBJVJ9a4u6uV3L6nJJSDpSP0jnWlxy8KgGm1zMIMckoEH7z7VkNDAxyrJjj+zN2ef6IYSjUlIU4oEZhIHnRkNwAdalDG5H+1DR70YBREftRMzDTKkCST2zRvEa7Up9KRgYjao19qW0EK33yvQf8gnnSRKeR5U3eLbccUpOcRv060nODlKQElWTG3IVoWhZUKhUchGCKfWEqQlSYgicdazEfMVScTvWikw0ADI6jnSZoOLNHgTiQ8pMqCvESoEchEV23CElPEnnRMP2qG1CQAVNKKgc84JrheByX3HCMatAnyn+4rsmniw5baSNcpKO5Tj2oMT4zNso88SR1oKBuY7GJqdfJInvWM18U/CL0RxJlpUwU3TbzBSqYIJcRp+9altdWF2nVZ3Ntcp62zzbv2QSa3NNbOZYYHrU6dUnUfIVCtQwUkdJxSF1f8PsCs3nELG2BKj/8q5ZaUO2lStX2qkQ0EpAzMmuO+NOJNNfg7YLClM+Lcupn5UkgNoKo5/V/w1TiXx7we2QpFgp3iDxSoJ8BtTLGrlqfeAVH8qD5185uX+J8Qeurq9fK1vKKykEhpsThLaNoGwn9zNNWBzRSzLG7PKdW8srXvIjsNgKMgiY5ZmlB+Q8sHzptBRExvWZ9dB77DtqlXPtNMJJE77wfLtSqYgYI33owUBHOKUw0MTIA671GkdT96hKsbZivav0n7f70AVmU5qSpU460u4oKj/m1P3iQFJIEhUiR26Ul4cKMkGZ2rShR5lI1NpUYClST22p9YS2lSRsJJmkCQkpHIYxy8qccCi3MH6QDPM0mYcRrg7zoS9oSFFtYXA3AOTt5H2p68vX2/iHgjC9X4a7sn1BMYL0k4M/pHvWDZ3blk4pxAScjWgnCgJ/71N3fWvEm7N3xnGb3hytVspKVJKka0nSCDAUDBHl3xWOPJ0a/tUYL/AbrAQ7coWh2EXD4A1lJA8QnZe1JPNoSStsPpUM6gpMg9inNaD1wpS3nXluuuOqU446sgqWtW5MYrKelwncAnAkn98V20k40zhOXlaCI+JPiixIRbcc4mgflQbt1aRH6HCpNJKfeu7m4urlwvXNy4t951ZTrW4sypRwBS1wgeOUp/wDrCUesajRGwUKB3SdgZrEpLm0amnxRpsmBhaU+80zBIkGeckEif6sfak2FnEBcfpg49afSEYIWvbKHK2xZkaBtZSZ5KVE/vTSFgaRGaAkfXyhR27waO2lPyzuK52ZebN2N+KDg9jE0VHLPKqhsEEif7VZAIIHaszGBkgnfpUwOhrwJ5ftU57VRYteJ0eGlShP7CYpBRQCczE8qYulKUvM46n3pQgHMiAPenoCzxMgxTyfmZQeqU7zO1Z8995p5ghTCQJkDSfSlzQSEHWk68gAiTjnQrZKcYzmnLiBsJI5xSNuYKe0zTfi7Yr5GkNOQUiaTcKEyoCSnPtTToIEx1rOcKlA/qUftXUk+MWzFFcpJCgSSVKVlSiVHzOaKkQEjpVwjGN5q2kQJ8jXIxyqZ0ZrxD25gpB9/960cBO3LEVnW/wAx0K33SetPNrJSUHK04zua6kTnyPNiSo8pphv1gQD50BkqhWBJJ8t6OgBPqREHBrBm/NmzH+KH204iN6koE96lklQAgVZRyMbYzWYaSkAY5xFTHYVIGxBirSev7UDZZ//Z" alt="Head Chef">
                <h3>Chef Tanaka</h3>
                <p>Head Chef</p>
            </div>
            <div class="team-member">
                <img src="https://th.bing.com/th/id/OIP.De_XaNXqyejPh194k6XThAHaHa?rs=1&pid=ImgDetMain" alt="Sous Chef">
                <h3>Chef Somchai</h3>
                <p>Sous Chef</p>
            </div>
            <div class="team-member">
                <img src="https://th.bing.com/th/id/OIP.cfHsa26j7a5ytG5vMmO05wAAAA?w=170&h=180&c=7&r=0&o=5&pid=1.7" alt="Pastry Chef">
                <h3>Chef Lisa</h3>
                <p>Pastry Chef</p>
            </div>
            <div class="team-member">
                <img src="https://th.bing.com/th/id/OIP.45HPgh7IPrl7_8qZO8ymFwAAAA?w=192&h=193&c=7&r=0&o=5&pid=1.7" alt="Restaurant Manager">
                <h3>Sarah Chen</h3>
                <p>Restaurant Manager</p>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <h2 class="section-title">Our Values</h2>
        <div class="values-grid">
            <div class="value-card">
                <i class="fas fa-heart"></i>
                <h3>Passion</h3>
                <p>We pour our hearts into every dish we create</p>
            </div>
            <div class="value-card">
                <i class="fas fa-star"></i>
                <h3>Quality</h3>
                <p>Only the finest ingredients make it to your plate</p>
            </div>
            <div class="value-card">
                <i class="fas fa-hands"></i>
                <h3>Tradition</h3>
                <p>Respecting culinary heritage while embracing innovation</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-links">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
        <p>&copy; 2024 Kaiju. All rights reserved.</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>

</html>