@extends('layouts.main')
@section('title', __('Portfolio'))
@section('content')
    <section class="site-hero"
             style="background-image: url({{asset('assets/images/software-developer.jpg')}});"
             id="section-home"
             data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row intro-text align-items-center justify-content-center">
                <div class="col-md-10 text-center pt-5">

                    <h1 class="site-heading site-animate">Hello, I'm <strong class="d-block">George Ayman</strong>
                    </h1>
                    <strong class="d-block text-white text-uppercase letter-spacing">and this is My Portfolio</strong>

                </div>
            </div>
        </div>
    </section>

    <section class="site-section " id="section-resume">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>My <strong>Resume</strong></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-5">Education</h2>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> Jan 2024</span>
                        <h3>Agile Software Development Course</h3>
                        <p>Scrum (Software Development) <br/>
                            Software Development Kit (SDK) <br/>
                            Agile Software Development</p>
                        <span class="school">Coursera</span>
                    </div>
                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> June 2021</span>
                        <h3>Bachelor’s Degree in Computer Engineering</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <span class="school">ALEXANDRIA UNIVERSITY</span>
                    </div>

                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> October 2020 </span>
                        <h3>PHP with Laravel Course</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <span class="school">Udemy</span>
                    </div>

                </div>
                <div class="col-md-6">
                    <h2 class="mb-5">Experience</h2>
                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> Jan 2023 - Present</span>
                        <h3>Full stack developer</h3>
                        <p>
                            Spearheaded the development of robust solutions, including
                            the creation of an efficient management system (LG project)
                            for promoters, shops, and sellouts, integrating attendance
                            tracking for promoters and merchandisers.
                        </p>
                        <p>
                            Utilized Laravel, Filament, and Fabricator to drive innovation
                            and optimize performance in various projects, showcasing
                            versatility and expertise as a Full Stack Developer.
                        </p>
                        <a href="https://www.linkedin.com/company/intcore/mycompany/verification/"
                           class="alert-link"><span
                                class="school">IntCore</span></a>
                    </div>
                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> March 2020 - Jan 2023</span>
                        <h3>Full stack developer</h3>
                        <p>Played a pivotal role in the development of a comprehen-
                            sive ERP system, focusing on managing movements, gen-
                            erating Bills of Lading (BL), and overseeing containers and
                            customer relationships. various system integration.
                        </p>
                        <p>
                            Contributed significantly to a two-year tenure as a Software
                            Developer, demonstrating expertise in crafting and refining
                            complex systems for Middle East Line Shipping.
                        </p>
                        <a href="https://www.linkedin.com/in/middle-east-shipping-line-msl-the-middle-east-carrier-05179317a/?originalSubdomain=eg"
                           class="alert-link"><span
                                class="school">Middle East shipping Line</span>
                        </a>
                    </div>
                    <div class="resume-item mb-4">
                        <span class="date"><span class="icon-calendar"></span> Aug 2019 - Nov 2019</span>
                        <h3>Back-end developer Internship</h3>
                        <p>Learned how to Query data efficiently from tables in the
                            SQL Server database.
                        </p>
                        <p>
                            Learned the fundamentals of C# and .NET Framework.
                        </p>
                        <p>
                            C# ASP.NET SQL Server
                        </p>
                        <a href="https://www.linkedin.com/in/middle-east-shipping-line-msl-the-middle-east-carrier-05179317a/?originalSubdomain=eg"
                           class="alert-link"><span
                                class="school">Link dot Net</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" id="section-about">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/images/software-engineer-digital-avatar.png') }}" alt="Image placeholder"
                         class="img-fluid">
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <div class="section-heading">
                        <h2>About <strong>Me</strong></h2>
                    </div>
                    <p class="lead">I am a passionate software engineer, graduated from the Faculty of Engineering at
                        Alexandria University, Egypt. With a strong foundation in engineering principles, I've embarked
                        on a journey into the dynamic world of full-stack development.</p>
                    <p class="mb-5">Currently, I specialize in PHP and Laravel for backend development, crafting robust
                        and scalable web applications. My frontend expertise includes crafting beautiful and responsive
                        user interfaces using Bootstrap and Tailwind CSS.</p>
                    <p class="mb-5">In addition to my technical skills, I am adept at Shopify development, leveraging
                        its powerful platform to create seamless e-commerce experiences. I am also well-versed in Docker
                        for containerization and Git for version control.</p>
                    <p class="mb-5">Driven by a thirst for knowledge, I am currently expanding my skill set by diving
                        into Node.js. Additionally, I have a keen interest in SEO practices and Agile methodologies,
                        which I have successfully applied in my professional endeavors.</p>
                    <p>With a solid foundation in Agile and DevOps practices, I thrive in collaborative environments,
                        constantly seeking to improve processes and deliver high-quality solutions that exceed
                        expectations.</p>


                    <p>
                        <a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Contact Me</a>
                        <a href="{{ asset('assets/cv/George_Attalla_CV.pdf') }}"
                           class="btn btn-secondary px-4 py-2 btn-sm">Download CV</a>
                    </p>
                </div>
            </div>


        </div>
    </section>

    <section class="site-section pb-0" id="section-skills">
        <div class="container">

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>My <strong>Skills</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($skills as $skill)
                    <div class="col-md-6 col-lg-4 text-center mb-5">
                        <div class="site-service-item site-animate" data-animate-effect="fadeIn">
                            <img src="{{ $skill?->getFirstMediaUrl('logo') }}" width="100" height="100"
                                 class="rounded-circle border-none"
                                 alt="{{ $skill->name }}">
                            <h3 class="mb-4">{{ $skill->name }}</h3>
                            <p>{{ $skill->proficiency_level }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="site-section" id="section-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>My <strong>Projects</strong></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($projects as $project)
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="blog-entry">
                            <a href="#"><img src="{{ $project?->getFirstMediaUrl('main_image') }}"
                                             alt="Image placeholder"
                                             class="img-fluid"></a>
                            <div class="blog-entry-text">
                                <h3>{{ $project->title }}</h3>
                                <p class="mb-4">{{ $project->description }}</p>

                                <div class="meta">
                                    @foreach($project->skills as $skill)
                                        <span class="badge">{{ $skill->name }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="site-section" id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>Get <strong>In Touch</strong></h2>
                    </div>
                </div>

                <div class="col-md-7 mb-5 mb-md-0">
                    <form method="POST" action="{{ route('contact-us.store') }}" class="site-form">
                        @csrf
                        <h3 class="mb-5">Get In Touch</h3>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control px-3 py-4" placeholder="Your Name"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control px-3 py-4" placeholder="Your Email"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control px-3 py-4" placeholder="Your Phone">
                        </div>
                        <div class="form-group mb-5">
                        <textarea class="form-control px-3 py-4" name="message" cols="30" rows="10"
                                  placeholder="Write a Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary  px-4 py-3" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 pl-md-5">
                    <h3 class="mb-5">My Contact Details</h3>
                    <ul class="site-contact-details">
                        <li>
                            <span class="text-uppercase">Email</span>
                            george.ayman97@gmail.com
                        </li>
                        <li>
                            <span class="text-uppercase">Phone</span>
                            +971 58 2374123
                        </li>
                        <li>
                            <span class="text-uppercase">Whats</span>
                            +20 10 94733457
                        </li>
                        <li>
                            <span class="text-uppercase">Address</span>
                            AL Furjan, Dubai <br>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
