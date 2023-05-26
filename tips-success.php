<?php
require_once('functions/connection.php');
?>

<!doctype html>
<html lang="zxx">
    <head>
    <?php include('includes/head.php') ?>
    </head>

    <body>
        
        <!-- Pre-loader Start -->
		<div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
					<div class="sk-circle">
						<div class="sk-circle1 sk-child"></div>
						<div class="sk-circle2 sk-child"></div>
						<div class="sk-circle3 sk-child"></div>
						<div class="sk-circle4 sk-child"></div>
						<div class="sk-circle5 sk-child"></div>
						<div class="sk-circle6 sk-child"></div>
						<div class="sk-circle7 sk-child"></div>
						<div class="sk-circle8 sk-child"></div>
						<div class="sk-circle9 sk-child"></div>
						<div class="sk-circle10 sk-child"></div>
						<div class="sk-circle11 sk-child"></div>
						<div class="sk-circle12 sk-child"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pre-loader End -->

        <!-- Navbar Area Start -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.php" class="logo">
                    <img src="assetss/img/logo.png" alt="logo" height="45px">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index-four.html">
                            <img src="assetss/img/logo.png" alt="logo" class="img-fluid">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                <a href="index.php" class="nav-link ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">About</a>
                                </li>     
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">services</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="events.php" class="nav-link">events</a>
                                            </li>
                                           
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">advisor consultent</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="adv.html" class="nav-link">advisors</a>
                                                    </li>
                                                    
                                                    <li class="nav-item">
                                                        <a href="resg-adv.html" class="nav-link">registration advisor</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Majors</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="majors.php" class="nav-link">Career path</a>
                                        </li>
                                       <!-- <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Job titles</a>
                                        </li>-->
                                        <li class="nav-item">
                                            <a href="faculty.php" class="nav-link">Faculty</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact Us</a>
                                </li>
                                </li>
                            </ul>
                            <div class="other-option">
                                <a href="sign-up.php" class="signup-btn">Sign Up</a>
                                <a href="sign-in.php" class="signin-btn">Sign In</a>
                            </div>
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar Area End -->
<!-- Page Title Start -->
<section class="page-title title-bg24" >
    <div class="d-table">
        <div class="d-table-cell">
            <h2> Student Work-Life </h2>
            <ul>
                <li>
                    <a href="index.phpii">Home</a>
                </li>
                <li>Student Work-Life</li>
            </ul>
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- Page Title End -->
<!-- Blog Details Section Start -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-widget blog-search">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <button>
                                <i class='bx bx-search-alt-2'></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="blog-widget">
                    <h3>Popular Post</h3><!--dih 7od fihaa courses aw links lel other blogs-->

                    <article class="popular-post">
                        <a href="blog-details.html" class="blog-thumb">
                            <img src="assetss/img/blog/popular-post1.jpg" alt="blog image">
                        </a>

                        <div class="info">
                            <time datetime="2021-04-08">May 8, 2021</time>
                            <h4>
                                <a href="blog-details.html">Looking for Highly Motivated Product to Build</a>
                            </h4>                                
                        </div>
                    </article>

                    <article class="popular-post">
                        <a href="blog-details.html" class="blog-thumb">
                            <img src="assetss/img/blog/popular-post2.jpg" alt="blog image">
                        </a>

                        <div class="info">
                            <time datetime="2021-04-08">May 5, 2023</time>
                            <h4>
                                <a href="blog-details.html">
                                    How to Indroduce in Yourself in Job Interview?
                                </a>
                            </h4>                                
                        </div>
                    </article>

                    <article class="popular-post">
                        <a href="blog-details.html" class="blog-thumb">
                            <img src="assetss/img/blog/popular-post3.jpg" alt="blog image">
                        </a>

                        <div class="info">
                            <time datetime="2021-04-08">April 20, 2023</time>
                            <h4>
                                <a href="blog-details.html">
                                    most wanted IT careers
                                </a>
                            </h4>                                
                        </div>
                    </article>

                    <article class="popular-post">
                        <a href="blog-details.html" class="blog-thumb">
                            <img src="assetss/img/blog/popular-post4.jpg" alt="blog image">
                        </a>

                        <div class="info">
                            <time datetime="2021-04-08">April 28, 2023</time>
                            <h4>
                                <a href="blog-details.html">
                                    highest salary out of all it majors
                                </a>
                            </h4>                                
                        </div>
                    </article>
                </div>
                
                
                <div class="blog-widget blog-category">
                    
                </div>

            </div>
                <div class="col-lg-8">
                    <div class="blog-dedails-text">
                        <div class="blog-details-img">
                            <img src="assetss/img/blog/5.jpg" alt="blog details image"  height="400">
                        </div>

                        
                            
                <h3 class="post-title">Tips For Success That Will Help You Accomplish Your Career Goals:</h3>
                <span>
                    Everyone wants to be successful, but not everyone has what it takes. Whether it's with regard to your career or your life, taking advice from those who have achieved what you want is a great way to get where you want to be. Those who achieve success in their careers are more than willing to help others become successful through guidance, advice, and mentorship. Learn some tips for success that have helped others advance their careers, so you can make it straight to the top in yours.

                </span>
                    
                <h3 class="post-title" id="p1">7 tips for success in your career</h3>
                <p>
                    No matter where you are on your career path, these seven tips for success will motivate you to advance yourself into a position that makes you feel fulfilled and happy — in your career and in your personal life.</p>

                <h3 class="post-title" id="p2">Stay positive</h3>
                <p>
                    It’s easy to have doubts, especially where your career is involved. If you have a boss that doesn’t appreciate you or find yourself in a new position, you might fall prey to negativity. Don’t get down on yourself. Keep a positive mindset. Staying positive is the best way to succeed. When you have a positive outlook, you can easily get past the negativity brought on by others, and this can actually influence those around you to be more positive as well. One way to do this is to change your thought process. For example, people often get down thinking, “I have to do this job.” Instead, trade the “I have to” thought with an “I get to” frame of mind. This small change can make a big difference. With this thought change, you’ll tell yourself, “I get to try something new at work today.” This simple tip for success can make a big difference where your career is concerned.
                </p>
                <h3 class="post-title">Motivate yourself</h3>
                <p>Relying on others to motivate you won’t get you into a better position in your career. The only one who can motivate you is you. Your boss may push you to get a task completed or a coworker may want you to help them with their project. However, in the end, the only one who can get you excited about completing a job is yourself. Life offers many distractions and things that can take you away from your career goals. When you don’t let these distractions get in your way, you’ll find you can accomplish your goals and go beyond whatever you expect to achieve. Write your goals down and pursue them. Constantly reevaluate your failures as well as your successes in order to keep yourself motivated. When you accomplish a challenging task, you’ll gain confidence in your abilities. Oftentimes, completing challenging tasks is what motivates people to keep reaching for success. The things that keep you motivated won’t necessarily motivate those around you, so stay focused on your own goals. You’ll have trouble succeeding if you try to do your job in a way that doesn’t keep you motivated. If you start to lose track of your goals or where you’re heading with your career, try the following things:

                    <ul><li>Take time out for yourself.</li> 
                    <li>Consider the reason you enjoy your work.</li>
                    <li>Complete a task in a new way.</li>
                    <li> Talk to others who support you and share your ideas.</li></ul></p>
                
                    <h3 class="post-title" id="p1">Keep learning</h3>
                <p>Another great piece of advice to succeed in life and in your career is to never stop learning. When you learn new things every day, you’ll have an advantage over others. Just because you’ve been at your career for a long time doesn’t mean you can’t continue to learn. Gaining knowledge in your field or industry will give you an edge that others may not have. Always challenge yourself mentally; this is a success tip shared by many entrepreneurs who are very accomplished in their industry. Whether it’s taking a course on a subject you’ve always been interested in, reading an article about a modern breakthrough in your field, or just finding out a tidbit of information you didn’t know before, learning is the way to advancement in any job. Even if the subject you’re learning isn’t relevant to your field, having knowledge on a wide range of topics can open up opportunities you might not have thought about. Having the ability to share knowledge with others can lead to great things, both in your career and your daily life.

                </p>
                
                <h3 class="post-title" id="p1">Accept criticism</h3>
                <p>Success tips like accept criticism can be hard to tackle. No one likes to be criticized, especially at work. Don’t let criticism drag you down though. Consider what others say that you don’t do well, and use it to your advantage. Instead of avoiding the person at work who said you weren’t doing your job efficiently, reach out to them, and ask how you could do it better. Think about what your boss or coworkers are saying, and take action. When you’re constantly trying to improve in your career, others will see it as a positive thing. This will help you make advancements in your position. If, for example, someone complains that you’re always late, whether you are or not, try harder to show up earlier. On the same note, when someone suggests that you’re turning work in late or that it’s not done to company standards, motivate yourself to do a better job. Those who don’t let criticism affect them in a negative way are sure to succeed in their career.

                </p>
                <h3>Get creative</h3>
                <p>
                    You don’t have to be an artist to get creative. When you want to be successful, you sometimes need to look at things a little differently than your coworkers. This will develop your problem-solving skills. By coming up with effective solutions to common or recurring problems at your workplace, you’ll prove to be a valuable member of the team. If you have coworkers that are struggling with a task, think of a unique way to help them get it done. If people in your field seem to be getting burnt out with their job, come up with something that will make it fun again. Use your creative ideas to help you stand out in the workplace. By keeping an open mind to the ideas presented to you by coworkers, you demonstrate the ability to be flexible and show that you’re a team player. Effective communication is also important. Don’t just send emails; schedule one-on-one meetings, set up group conferences, and make phone calls. These are creative ways of communicating that won’t just help you succeed, they’ll help those around you enjoy work more too.
                </p>
                <h3>Move forward</h3>
                <p>
                    When searching for success tips, you’ll find many successful people saying that moving forward is key. You can’t get hung up on a single problem and let it stop you from achieving your goals. Too many people allow things like criticism and negative thinking stop them from moving forward with their goals and ultimately, toward their success. Everyone makes mistakes, but those who choose to keep moving forward will have more success than those who let these hiccups in life stop them. Sometimes, getting past an obstacle is just a matter of evaluating where you are compared to where you’d like to be. Having steps written down that will help you achieve your goals is a simple way to keep things in perspective. In addition, moving toward success can be risky, but without risks, there’s little room for growth. Taking calculated risks often results in success, but regardless, it always makes for a great opportunity to learn.
                </p>
                
                <h3>Have fun</h3>
                <p>
                    While you probably take your success very seriously, you need to make time for having fun. Constantly focusing on your achievements and your failures is a sure fire way to get burnt out in your career. Stay focused on your goals, but don’t lose sight of why you’re doing the job you set out to succeed at originally. You have to make time in your life for things other than your career. Your family, hobbies, and projects around the house or yard are just a few examples of things you can spend your time on to allow you to reset and stay focused on your success. You can also have fun in your career. If you’re not having fun at work and you don’t enjoy your job, it will be very difficult to succeed. 
                </p>
                <p>Use these tips for success to achieve your goals and accomplish the things in life you set out to do. You'll always find excuses as to why you shouldn't do something, but no one ever said being successful is easy.</p>
                
        
            </div></div></div></section>

</body>
</html>


        