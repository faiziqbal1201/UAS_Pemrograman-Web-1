<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    /* Animation styles */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        0% {
            opacity: 0;
            transform: translateX(-20px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        0% {
            opacity: 0;
            transform: translateX(20px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-in-out;
    }

    .animate-fadeInLeft {
        animation: fadeInLeft 1s ease-in-out;
    }

    .animate-fadeInRight {
        animation: fadeInRight 1s ease-in-out;
    }
    </style>
</head>

<body>
    <div class="max-w-6xl mx-auto px-4">
        <!-- About Us Section -->
        <section class="mb-16 animate-fadeIn">
            <h1 class="text-5xl font-bold mb-8">ABOUT US.</h1>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-1">
                    <ul class="space-y-2">
                        <li class="text-gray-600">About us.</li>
                        <li class="text-gray-600">Our team.</li>
                        <li class="text-gray-600">Press.</li>
                    </ul>
                </div>

                <div class="md:col-span-3">
                    <?php
                    $about_text = "Studio Marani, communication agency based in Milan, has been created in 2011 from Maurizio
                        Marani after his long term experience with the uberfamous McCann Erickson. Many of his
                        clients, like L'Espresso Group and Radio Deejay, will follow him in this new adventure and many
                        others such as Radio Capital.";
                    
                    $about_text_2 = "After a fortunate encounter with the copywriter and content manager Anna Scardovelli, Studio
                        Marani gains another fundamental pillar of his creative team. Anna, at that time, was already
                        collaborating with big international brands like Barilla, Volkswagen, Campari, Vodafone, Philips,
                        Kraft, Intesa San Paolo and on top of this a TV / Theatre author and founder of the film
                        'SotttoMiSto' in 2000. Valentina De Franco, Project Manager, completes Studio Marani creative
                        team.";
                    ?>

                    <p class="text-gray-600 mb-6 animate-fadeInLeft"><?php echo $about_text; ?></p>
                    <p class="text-gray-600 animate-fadeInRight"><?php echo $about_text_2; ?></p>
                </div>
            </div>
        </section>

        <!-- Work Image -->
        <div class="mb-16 animate-fadeIn">
            <img src="image/kantor.jpg" alt="Team working" class="w-full object-cover">
        </div>

        <!-- Quote Section -->
        <section class="mb-16 grid grid-cols-1 md:grid-cols-2 gap-8 items-center animate-fadeIn">
            <blockquote class="text-2xl italic animate-fadeInLeft">
                "Our work does make sense only if it is a faithful witness of his time."
                <footer class="text-sm mt-4">— Jean-Philippe Rual, Director</footer>
            </blockquote>
            <img src="image/tempat 2.jpg" alt="Person working" class="w-full animate-fadeInRight">
        </section>

        <!-- Team Section -->
        <section class="animate-fadeIn">
            <h2 class="text-5xl font-bold mb-8">THE TEAM.</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <img src="image/tim 3.jpg" alt="Team member" class="w-full animate-fadeInLeft">
                        <img src="image/tim 2.jpg" alt="Team member" class="w-full animate-fadeInRight">
                    </div>

                    <?php
                    $team_text = "All art is quite useless, one can never consent to creep when
                        one feels an impulse to soar. Words do not express thoughts
                        very well. they always become a little different immediately after
                        they are expressed, a little distorted, a little foolish.";
                    
                    $team_text_2 = "He had a word, too. love, he called it. but i had been used to
                        words for a long time. i knew that that word was like the others:
                        just a shape to fill a lack; that when the right time came, you
                        wouldn't need a word for that any more than for pride or fear.";
                    ?>

                    <p class="text-gray-600 mb-8 animate-fadeInLeft"><?php echo $team_text; ?></p>
                    <p class="text-gray-600 animate-fadeInRight"><?php echo $team_text_2; ?></p>
                </div>

                <div>
                    <?php
                    $stats = [
                        ['value' => '600', 'label' => 'million sq ft of sustainable work'],
                        ['value' => '700', 'label' => 'billion gallons of water saved annually'],
                        ['value' => '1.2', 'label' => 'million sq ft of LEED certified spaces'],
                        ['value' => '110', 'label' => 'USGBC certified projects']
                    ];
                    ?>

                    <div class="grid grid-cols-2 gap-8 mb-8 animate-fadeIn">
                        <?php foreach ($stats as $stat): ?>
                        <div class="text-center">
                            <div class="text-4xl font-bold mb-2"><?php echo $stat['value']; ?></div>
                            <div class="text-sm text-gray-600"><?php echo $stat['label']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="flex justify-end space-x-4 text-sm text-gray-600 animate-fadeIn">
                        <a href="http://t.me/+6289673825738"><i class="fab fa-telegram"></i></a>
                        <a href="https://x.com/Faiz_ball"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/faiz.ball/profilecard/?igsh=MXhrNjEzNjNlM21ncQ=="><i
                                class="fab fa-instagram"></i></a>
                        <a
                            href="https://www.linkedin.com/in/muhammad-iqbal-18781a304?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>