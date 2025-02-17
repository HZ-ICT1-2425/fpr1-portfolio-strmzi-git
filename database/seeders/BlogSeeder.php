<?php

namespace Database\Seeders;

use App\Models\BlogModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                "title" => "My programming experience",
                "content" => "I was first introduced to coding in 2022, when NFT's were at their peak. I dabbled in the crypto space for a couple months until my friend asked me whether I wanted to help him run up a couple NFT projects. Unfortunately I had no skills that could have been of help, so I had to learn something. \n\n" . "I decided to go with web development as every NFT project needed a website and I thought it couldn't be too hard to put some text on a page. So I went ahead an learned HTML, CSS, javascript and Solidity (smart contracts on Ethereum)\n\n"."Unfortunately once I reached an acceptable level of competence, NFT's had crashed and I wasn't able to make anything worthwhile.\n\n"."Skip forward until after graduation, I decided to apply for a finance program but due to lack of housing in the netherlands at the time, I wasn't able to find an affordable place to live. So I was forced to take a gap year.\n\n"."During this gap year I decided it would be a good idea to use my free time to learn something, so I chose to stick with programming and develop my skills gradually over the next couple of months.\n\n"."I eventually ended up getting into a finance course(International Finance & Control), but it was falsely advertised and my dream (not really) of becoming an investment banker was crushed.\n\n"." had to do something else with my life so I decided to pursue ICT (because comp sci was too much math). Which leads me to today.",
                "content_description" => "Learn about my programming experience prior to joining the ICT program at HZ."
            ],
            ["title" => "Profession", "content" => "I have not made any plans and don't intend to come up with any plans for after graduation as I think 4 years are quite some time and I will most definitely be exploring multiple interests.\n\n"."Ideally, by the time I graduate I hope to have been able to explore most/all my tech-related interests, both those that I have now and any to be discovered, to then hopefully have landed on a profession I will enjoy doing until I decide to move to another.", "content_description" => "Learn about my unconventional 'plan' for the future"],
            ["title" => "Swot Analysis", "content" => "What is your name?\nTimo Storny\n\n"."What isi your age?\n20\n\n"."Where do you live?\n"."Redacted\n\n"."What is your living situation?\n"."Student dorm\n\n"."What prior education have you completed?\n"."International Baccalaureate\n\n"."Which subjects have you studied?\n"."English A (SL), German A (SL), Mathematics SL, Biology HL, Economics HL, Psychology HL, TOK (Theory of knowledge)\n\n"."Have you followed a programme on a university of applied sciences or a university before?\n"."Yes\n\n"."Do you have a part-time job?\n"."No\n\n". "Strengths?\n"."When given study material i'm able to learn it myself and don't necessarily require assistance from teacher or peers. If i've got questions I can usually find the answer to them myself, but i'm not afraid to ask for help if necessary. I'm generally quite good at working alone with little external intervention.\n"."Given an interesting topic I think i'm quite good at expressing my opinions and can work/communicate well with others.\n\n"."Weaknesses?\n"."When working on something that I don't necessarily deem important for my future or interesting I tend to procrastinate a lot. I do not excel at public speaking.\n\n"."What opportunities do you see?\n"."I hope to meet some people with either the same or complementary interests to mine, and hopefully being able to work well together.\n\n"."Threats\n"."Nuclear war", "content_description" => "My SWOT analysis from learn.hz"],[
                "title" => "ICT Field of work",
                "content" => "As i've mentioned under /home, i'm interested in Software Development, AI and ML (everything data-science related) as well as cybersecurity. Each of these fall into the 'field of work' of ICT. Some other sub-domains that have crossed my radar include network engineering as well as IOT related jobs.", "content_description" => "Potential career paths in the ICT line of work"
            ],[
                "title" => "Feedback I received",
                "content" => "Teacher feedback\n"."- Personalize the /home page, include a logo, name or image of yourself\n"."- Good use of JS\n"."Nice look and feel\n\n"."Student feedback\n"."- Personalize homepage", "content_description" => "View the feedback i received from the first round of feedback."
            ]
        ];

        foreach ($posts as $post) {
            BlogModel::create($post);
        }
    }
}
