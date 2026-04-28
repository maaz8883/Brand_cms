

<div class="main pt-5 ">
	<div class="banner position-relative lozad bg-d py-5 mt-5">
		<div class="overlay position-relative h-100">
			<ul class="pe-4 list-unstyled d-flex flex-wrap books justify-content-center  pt-5">

				<?php $dirname = "assets/img/case-studies/";
				$images = glob($dirname . "*.webp");  ?>
				<?php foreach ($images as $image) : ?>
					<?php $title = pathinfo($image); ?>
					<li class="p-2">
						<a class="story" href="#<?= $title['filename'] ?>">
							<img class="lozad" data-src="<?= $image ?>" alt="<?= $title['filename'] ?> by <?= $bname ?>" />
						</a>
					</li>
				<?php endforeach ?>
				<?php $dirname = "assets/img/case-studies/";
				$images = glob($dirname . "*.webp");  ?>
				<?php foreach ($images as $image) : ?>
					<?php $title = pathinfo($image); ?>
					<li class="p-2">
						<a class="story" href="#<?= $title['filename'] ?>">
							<img class="lozad" data-src="<?= $image ?>" alt="<?= $title['filename'] ?> by <?= $bname ?>" />
						</a>
					</li>
				<?php endforeach ?>
			</ul>
			<div class=" ">
				<main class="container-xl stories mt-5 pt-5" id="grid">
					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="The-Past-Captures-Us-Forever">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/The-Past-Captures-Us-Forever.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">The Past Captures Us Forever</h2>
									<p>Mark M. Tillinger is an author who explores the complexities of human emotions and memories. With a passion for storytelling, Mark has crafted novels that resonate with readers on a deep level. His work often delves into how our past shapes who we are today. Mark’s writing is known for its rich characters, emotional depth, and thought-provoking themes. “The Past Captures Us Forever” is a prime example of his talent, capturing the essence of how memory influences our lives. Mark continues to write stories that challenge and inspire his readers.</p>
									<h4 class="f-24 clr-1">Mark Tillinger<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="3100">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/3100.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">3100</h2>
									<p>Najeeb Al Nuaimi is a notable figure in Qatar, known for his extensive career in law and human rights advocacy. He was the Minister of Justice in Qatar from 1995 to 1997 and has been a steadfast defender of human rights. His notable legal work includes assembling a defense team for over 70 prisoners in Guantanamo Bay and serving as a lead lawyer on Saddam Hussein’s defense team. Al Nuaimi’s passion for justice and human rights profoundly influences his writing, bringing depth and authenticity to his stories.</p>
									<h4 class="f-24 clr-1">Najeeb Al-Nauimi<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="Nickels-The-Magical-Elf">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Nickels-The-Magical-Elf.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Nickels The Magical Elf</h2>
									<p>The life story of Rick Wellbrook is like a weaving of courage, hardship, and unwavering hope. Having been raised in the embrace of the heartland, his early years on the family farm were a blend of pastoral peace and emotional disturbance. His parents’ divorce when he was just ten years old had the potential to tear apart the fabric of his spirit, but instead it tightened the bonds that bound him to his father and the country. He responded to the call of the distant drums of war in Vietnam as a youngster, even though he had to wait until he reached legal age to serve, with a patriot’s heart. His bravery and selflessness during the battle left a lasting impression on him and solidified his devotion to serving others.</p>
									<h4 class="f-24 clr-1">Rick Wellbrook<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="Oakley’s-therapy-Dog-adventures">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Oakley’s-therapy-Dog-adventures.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Oakley’s therapy Dog adventures: Learning My New Job!</h2>
									<p>From a young age, Corina found solace in animals and cherished their companionship. Her early experiences with pets, like cuddling and reading to them, fostered a deep love for animals. In 2013, she began training Misty, her Golden Retriever, as a therapy dog, recognizing the profound impact of animal-assisted therapy. Sadly, Misty passed away in 2018. In 2020, Corina welcomed Oakley, a spirited puppy, with the intention of training her as a therapy dog. Oakley's playful personality and love for children inspired Corina to write her first book, 'Oakley's Therapy Dog Adventures - Learning my new job'.</p>
									<h4 class="f-24 clr-1">Corina B Stretch<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="PEOPLE-AND-EVENTS-THAT-MADE-ME,-ME!!">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/PEOPLE-AND-EVENTS-THAT-MADE-ME,-ME!!.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">People And Events That Made Me, Me!!</h2>
									<p>Raised on a farm near Climax, Minnesota, my childhood was filled with love and a touch of chaos. College life at Moorhead State University brought both joy and challenges, including balancing academics with family responsibilities. After graduating, I taught at Strawberry Lake Elementary School before moving to Frazee Elementary School, where I dedicated 31 years to second grade. My wife, Jan, was diagnosed with Multiple Sclerosis in 1991, and my own Parkinson's diagnosis in 2013 necessitated my retirement. I now reside at Bethany Retirement Living, actively contributing to the community. While I miss spending more time with my children and grandchildren, I remain hopeful that our lives will align in the future.</p>
									<h4 class="f-24 clr-1">Tom Thoreson<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="Zing!">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Zing!.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Zing!</h2>
									<p>I'm a writer specializing in science, technology, history, health, and business for both children and adults. My work has been published widely and received numerous awards. My children's books focus on hands-on science, while my book on applied hydrodynamics was published by Springer Verlag. I explore various scientific concepts on my blog, including fluid dynamics, bubble science, and the science of bridges. Writing about science is my passion, and I hope you enjoy exploring these topics with me!</p>
									<h4 class="f-24 clr-1">Gina Hagler<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="Tiala">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Tiala.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Tiala</h2>
									<p>After multiple back operations, Glenn W. Bean turned to writing as a means of self-escape, a means of overcoming the mental and physical anguish he was experiencing. The vivid worlds his imagination conjured up, where romance, adventure, and hope mingled to produce stories that uplifted and delighted, provided him comfort. Glenn’s art vividly depicts these amazing worlds, allowing readers to momentarily escape their daily troubles and immerse themselves in the excitement of exploration.</p>
									<h4 class="f-24 clr-1">Glenn Bean<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="Crossing-The-Line">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Crossing-The-Line.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Crossing The Line</h2>
									<p>Elizabeth H. Van Doren was born in California but spent her early years in Turkey and Germany. Her father, a college professor, taught in Istanbul, and she lived with her grandfather in the Black Forest while her mother studied in France. Growing up in Germany, she heard many stories about living under Hitler’s rule and the devastation of WWII and the Holocaust. These early experiences deeply influenced her perspective on history and storytelling.</p>
									<h4 class="f-24 clr-1">Elizabeth H. Van Doren<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="Headhunter">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Headhunter.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Headhunter – Hunting Safaris Around the globe North America Edition</h2>
									<p>Joshua Godfrey is a renowned author, seasoned adventurer, and committed conservationist, celebrated for his extensive expertise in hunting and fishing. With an unwavering passion for the great outdoors, Joshua has channeled his wealth of global experiences into creating "Headhunter – Hunting Safaris Around the Globe Series," an unparalleled guide to the diverse species inhabiting various continents.</p>
									<h4 class="f-24 clr-1">Joshua Godfrey<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="Sojourns">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Sojourns.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Sojourns</h2>
									<p>
										Bonnie L. Pope is a gifted author with a deep love for storytelling. Her passion for Native American culture, fantasy, and the supernatural has led her to create Sojourns, a novel filled with rich characters and a powerful story. With her unique voice, she has put together Cian Fires’ journey of self-discovery, psychic powers, and spiritual growth in a way that is captivating and heartfelt. She enjoys exploring deep themes through her characters, while blending the mystical with the real world. Bonnie lives in San Antonio, Texas, where she continues to write stories that inspire and entertain.</p>
									<h4 class="f-24 clr-1">Bonnie L. Pope<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>

					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="Toto-The-Band,-Not-The-Dog!">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Toto-The-Band,-Not-The-Dog!.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Toto: The Band, Not The Dog!</h2>
									<p>Preston M. Frazier, a Baltimore native with a lifelong passion for music, is a true music aficionado. Raised on a diet of jazz and classic rock, he developed a deep admiration for the band Toto. A former police officer and lawyer, Preston's love for music finds expression in his writing. His blog, Slang of Ages, and contributions to Something Else Reviews showcase his dedication to music and storytelling. He further shares his passion through the Slang of Ages Podcast, interviewing musicians and exploring various genres. Despite his diverse background, his love for Toto remains central to his life and work.</p>
									<h4 class="f-24 clr-1">Preston Frazier<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="Escaping-Reality">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Escaping-Reality.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Escaping Reality</h2>
									<p>Taylor Jean emerged as a devoted mother, ardent literature enthusiast, and nurturing teacher. Taylor’s life revolves around the delicate balance of family, literature, and the education of young minds.
										<br>
										Taylor’s experience becoming a mother of two has been nothing short of extraordinary. Her days are filled with the laughter and curiosity of her two children, who serve as a constant source of inspiration for her work. Taylor Jean Paige love for writing and storytelling blossomed during the hectic days of parenting.
									</p>
									<h4 class="f-24 clr-1">Taylor Jean-Paige<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="Le-lait-du-chrétien">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Le-lait-du-chrétien.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Le lait du chrétien: Volume I: Numéro 1 (French Edition)</h2>
									<p>Rev. Dr. Wilguymps Charles is a dedicated Bible teacher with a passion for fostering spiritual growth and education among believers in Jesus Christ. His commitment to effective Sunday school education is evident in his work, as he seeks to provide valuable resources for both teachers and students. Through his conscientious efforts, Dr. Charles aims to make a lasting impact on the spiritual and educational development of the Christian community.</p>
									<h4 class="f-24 clr-1">Casey Gutierrez <br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="Reunion">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Reunion.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Reunion</h2>
									<p>Matthew Coley is an experienced IT professional with over 17 years in the field and six years of retail experience. He has worked for four major banks, dedicating over 15 years to one of them. Beyond his professional life, Matthew has a creative side, having designed computer graphics for friends and family and even creating a game controller in 1996. His hobbies include basketball, building PCs, and photography. Inspired by a vivid dream from his childhood, Matthew began writing “Reunion” in 2015 during a period of unemployment. His dedication and imagination have culminated in a novel that captivates readers with its rich storytelling and emotional depth.</p>
									<h4 class="f-24 clr-1">Matthew Coley<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="Chewing-Slowly">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Chewing-Slowly.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Chewing Slowly: A Collection of Poems and Lyrics</h2>
									<p>Chewing Slowly" by Paul Vanden Boogard is a poetic journey through the layers of life, from everyday musings to profound reflections on human experiences. This eclectic collection of poems and lyrics explores themes of love, identity, dreams, and the natural world, offering readers a soulful lens into the mind of an artist, father, and lover of life. Each piece serves as a brushstroke, painting vivid images and emotions that resonate across universal themes, whether it’s a quiet walk in the woods, a heartfelt relationship, or the pursuit of personal truth.</p>
									<h4 class="f-24 clr-1">Paul Vanden Boogard<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="The-Creators-Design-for-Health">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/The-Creators-Design-for-Health.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">The Creator’s Design for Health: God’s Plan for Optimum Health</h2>
									<p>
										The Creator’s Design for Health by Dr. Donald Selvidge explores a faith-based approach to health and wellness, focusing on how God’s original design of the human body reveals insights into maintaining optimal health. Drawing from biblical teachings, holistic practices, and natural remedies, the book advocates for nourishing the body with whole foods, using natural supplements, and prioritizing spiritual well-being. Dr. Selvidge emphasizes the body’s incredible capacity for self-healing when aligned with God’s plan and provides practical guidance on achieving a balanced, healthy lifestyle grounded in faith, natural living, and reverence for the Creator’s wisdom.</p>
									<h4 class="f-24 clr-1">Dr. Donald Selvidge<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="The-Shadow-Side-of-Power">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/The-Shadow-Side-of-Power.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">The Shadow Side of Power: Lessons for Leaders (and Their Supporters)</h2>
									<p>Pat McLagan is a renowned thought leader in leadership development and organizational change. She advises public and private sector organizations globally, helping them enhance their change capabilities. Inducted into both the Human Resource Development and International Adult and Continuing Education Halls of Fame, McLagan has received top industry awards. She has consulted with leading organizations like GE, NASA, and SABMiller, driving successful transformations. Client testimonials highlight her impactful leadership and ability to facilitate complex change.</p>
									<h4 class="f-24 clr-1">Patricia McLagan<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="A-National-Divorce-2021">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/A-National-Divorce-2021.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">A National Divorce 2021: Fulfill The Dream or End The Nightmare</h2>
									<p> As Sivananda observed, life is composed of countless small details. I, an ordinary American with a military background (USMC and USACE), hold a BA in International Business and an MBA. I am a son, brother, father, and citizen. Recognizing my own imperfections, I strive to contribute meaningfully, echoing Alexander Hamilton's sentiment about the limitations of human perfection.</p>
									<h4 class="f-24 clr-1">Eljin Thomas<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center mb-5 storybox text-center text-md-start pt-5" id="Bullets-And-Bandages-a">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Bullets-And-Bandages-a.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Bullets And Bandages </h2>
									<p>Bullets and Bandages" is a poignant memoir that chronicles Verdell Bjerketvedt's journey as a Navy Hospital Corpsman during the Vietnam War. The narrative begins with his enlistment and basic training, offering insights into the challenges and discipline of military life. As Bjerketvedt is deployed to Vietnam, the story delves into the harrowing experiences of wartime service, including the intense battles, medical emergencies, and the emotional toll of witnessing the loss of comrades.</p>
									<h4 class="f-24 clr-1">Dell Allen<br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
					<section class="row justify-content-center  mb-5 storybox text-center text-md-start pt-5" id="Godly-Poems-for-Every-Turn">
						<div class="col-xl-10  lozad content p-5" data-background-image="assets/img/banner-text.webp">
							<div class="top-tape"></div>
							<div class="row justify-content-center align-items-center ">
								<div class="col-md-4 col-6">
									<img class="lozad" data-src="assets/img/case-studies/Godly-Poems-for-Every-Turn.webp">
								</div>
								<div class="col-md-8">
									<h2 class="f-34 clr-1">Godly Poems for Every Turn</h2>
									<p>
										In times of hardship and uncertainty, we often feel alone in our struggles. ""When God Came Down"" is a powerful reminder that we are never truly alone. This inspiring exploration reveals how the divine empathizes with our pain, hears our silent tears, and understands our deepest fears. Through heartfelt reflections and personal stories, this book encourages readers to open up to God in their moments of despair. Discover the profound connection that awaits when you reach out and share your burdens. No matter what you're going through, you’ll find comfort, hope, and understanding in these pages. Embrace the journey of healing and rediscover the power of faith in your life.</p>
									<h4 class="f-24 clr-1">Casey Gutierrez <br><span class="f-18 clr-2">Author Name</span></h4>
								</div>
							</div>
						</div>
					</section>
				</main>
			</div>
		</div>
	</div>
</div>
<?php include 'inc/cta.php'; ?>
<?php include 'inc/review.php'; ?>
<script>
	// Global Variables
	var grd = $('#grid');
	var imgs = grd.children();

	// Page Refresh to run script below
	imgs.sort(function() {
		return (Math.round(Math.random()) - 0.5);
	});
	grd.remove('section');
	for (var i = 0; i < imgs.length; i++) grd.append(imgs[i]);
</script>
