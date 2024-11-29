<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	
  	<link rel="stylesheet"  href="BEATNIK.css" />
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  	
  	
</head>
<body>
  	
  	<div class="home">
    		<div class="hero-section">
      			<img class="f-645546712-clv1sotwmf2k99veh5-icon" alt="" src="assects/preview.png">
      			<div class="hero-section1">
        				<div class="search-bar-parent">
          					<div class="search-bar">
            						<div class="basilsearch-outline-parent">
              							<img class="basilsearch-outline-icon" alt="search-bar" src="assects/basil_search-outline.png">
              							
              							<div class="search-for-musics-artists-wrapper">
											<input type="text" class="search-for-musics" placeholder="Search For Musics, Artists, ..." />
											<button class="search-button">Search</button>
										  </div>
            						</div>
          					</div>
          					<div class="titles">
            						<div class="about-us-parent">
										<a href="#about us">
              							<div class="about-us">About Us</div></a>
										  <a href="#contact">
              							<div class="about-us">Contact</div></a>
										  <a href="#premium">
              							<div class="about-us">Premuim</div></a>
            						</div>
          					</div>
          					<div class="button-parent">
            						<div class="button">
										
              							<div class="button1">    Login</div>
										<a href="LOGIN_BEATNIK.php" class="button"></a>
            						</div>
            						<div class="button2">
              							<div class="button1">Sign Up</div>
										  <a href="SIGN_BEATNIK.php" class="button"></a>
            						</div>
          					</div>
        				</div>
        				<div class="frame-parent">
          					<div class="all-the-best-songs-in-one-plac-wrapper">
            						<div class="all-the-best-container">
              							<p class="all-the-best-songs">
                								<span class="all-the">All the </span>
                								<span>Best Songs</span>
              							</p>
              							<p class="in-one-place">in One Place</p>
            						</div>
          					</div>
          					<div class="on-our-website-you-can-access-wrapper">
            						<div class="on-our-website">On our website, you can access an amazing collection of popular and new songs. Stream your favorite tracks in high quality and enjoy without interruptions. Whatever your taste in music, we have it all for you!</div>
          					</div>
          					<div class="button-group">
            						<div class="button4">
              							<div class="button5">Discover Now</div>
            						</div>
            						<div class="button6">
              							<div class="button5">Create Playlist</div> <!--should add an anker tag-->
            						</div>
          					</div>
        				</div>
      			</div>
    		</div>
    		<div class="weekly-top-songs">
      			<div class="frame-group">
        				<div class="weekly-top-songs-wrapper">
          					<b class="weekly-top-songs-container">
            						<span>Weekly Top </span>
            						<span class="songs">Songs</span>
          					</b>
        				</div>
        				<div class="frame-container">
          					<div class="frame-div">
							  <div class="frame-wrapper" onclick="playSong('whatever-it-takes')">
								<div class="frame-parent1">
									<div class="rectangle-wrapper">
										<img class="frame-child" alt="" src="assects/imagine dragons.png">
									</div>
									<div class="whatever-it-takes-parent">
										<div class="whatever-it-takes">Whatever It Takes</div>
										<div class="imagne-dragons">Imagine Dragons</div>
									</div>
									<audio id="whatever-it-takes" src="assets/audio/whatever-it-takes.mp3"></audio>
								</div>
							</div>

							<!-- Song 2 -->
							<div class="frame-wrapper" onclick="playSong('skyfall')">
								<div class="frame-parent1">
									<div class="rectangle-wrapper">
										<img class="frame-child" alt="" src="assects/adelepng.png">
									</div>
									<div class="whatever-it-takes-parent">
										<div class="whatever-it-takes">Skyfall</div>
										<div class="imagne-dragons">Adele</div>
									</div>
									<audio id="skyfall" src="assets/audio/skyfall.mp3"></audio>
								</div>
							</div>
            						<div class="frame-wrapper">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child" alt="" src="assects/eminum.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Superman</div>
                  									<div class="imagne-dragons">Eminiem</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child" alt="" src="assects/The_Neighbourhood_-_The_Neighbourhood 1.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Softcore</div>
                  									<div class="imagne-dragons">The Neighberhood</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child" alt="" src="assects/Rectangle 175.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">The Lonliest</div>
                  									<div class="imagne-dragons">Måneskin</div>
                								</div>
              							</div>
            						</div>
          					</div>
          					<div class="frame-parent6">
            						<div class="icbaseline-plus-wrapper">
              							<img class="icbaseline-plus-icon" alt="" src="assects/ic_baseline-plus.png">
              							
            						</div>
            						<div class="view-all">View All</div>
          					</div>
        				</div>
      			</div>
    		</div>
    		<div class="new-release-songs">
      			<div class="frame-group">
        				<div class="weekly-top-songs-wrapper">
          					<b class="weekly-top-songs-container">
            						<span>New Release </span>
            						<span class="songs">Songs</span>
          					</b>
        				</div>
        				<div class="frame-container">
          					<div class="frame-div">
            						<div class="frame-wrapper">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child" alt="" src="assects/new release.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Time</div>
                  									<div class="imagne-dragons">Luciano</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child" alt="" src="assects/Rectangle 177.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">112</div>
                  									<div class="imagne-dragons">jazzek</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child" alt="" src="assects/new release 2.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">We Don”t Care</div>
                  									<div class="imagne-dragons">Kyanu & Dj Gullum</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child" alt="" src="assects/new release 4.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Who I Am</div>
                  									<div class="alan-walker">Alan Walker &  Elias</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child" alt="" src="assects/new release 5.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Baixo</div>
                  									<div class="imagne-dragons">XXAnteria</div>
                								</div>
              							</div>
            						</div>
          					</div>
          					<div class="frame-parent6">
            						<div class="icbaseline-plus-wrapper">
              							<img class="icbaseline-plus-icon" alt="" src="assects/ic_baseline-plus.png">
              							
            						</div>
            						<div class="view-all">View All</div>
          					</div>
        				</div>
      			</div>
    		</div>
    		<div class="tranding-songs">
      			<div class="trending-songs-wrapper">
        				<b class="weekly-top-songs-container">
          					<span>Trending</span>
          					<span class="songs"> Songs</span>
        				</b>
      			</div>
      			<div class="view-all2">
        				<div class="view-all-inner">
          					<div class="icbaseline-plus-parent">
            						<img class="icbaseline-plus-icon" alt="" src="assects/ic_baseline-plus.png">
            						
            						<div class="view-all3">View All</div>
          					</div>
        				</div>
      			</div>
      			<div class="detail">
        				<div class="relase-date">Relase Date</div>
        				<div class="album">album</div>
        				<div class="time1">Time</div>
      			</div>
      			<div class="group">
        				<div class="div1">#1</div>
        				<div class="group-child">
        				</div>
        				<div class="nov-4-2023">Nov 4, 2023</div>
        				<div class="hard-to-imagine-container">
          					<p class="all-the-best-songs">Hard to Imagine the Neighbourhood Ever Changing</p>
        				</div>
        				<img class="the-neighbourhood-the-neighb-icon" alt="" src="assects/Rectangle 173.png">
        				
        				<div class="sorfcore-parent">
          					<div class="sorfcore">Sorfcore</div>
          					<div class="the-neighberhood1">The neighberhood</div>
        				</div>
        				<div class="phheart-light-parent">
          					<img class="phheart-light-icon" alt="" src="assects/ph_heart-light.png">
          					
          					<div class="div2">3:26</div>
        				</div>
      			</div>
      			<div class="div3">
        				<div class="child">
        				</div>
        				<div class="oct-26-2023">Oct 26, 2023</div>
        				<div class="nightmares">nightmares</div>
        				<img class="the-neighbourhood-the-neighb-icon" alt="" src="assects/The_Neighbourhood_-_The_Neighbourhood 2.png">
        				
        				<div class="skyfall-beats-parent">
          					<div class="skyfall-beats">Skyfall Beats</div>
          					<div class="nightmares1">nightmares</div>
        				</div>
        				<div class="div4">#2</div>
        				<div class="phheart-light-parent">
          					<img class="phheart-light-icon" alt="" src="assects/ph_heart-light.png">
          					
          					<div class="div2">2:45</div>
        				</div>
      			</div>
      			<div class="div6">
        				<div class="child">
        				</div>
        				<div class="dec-30-2023">Dec 30, 2023</div>
        				<div class="greedy">Greedy</div>
        				<img class="the-neighbourhood-the-neighb-icon" alt="" src="assects/The_Neighbourhood_-_The_Neighbourhood 3.png">
        				
        				<div class="greedy-parent">
          					<div class="greedy1">Greedy</div>
          					<div class="tate-mcrae">tate mcrae</div>
        				</div>
        				<div class="div4">#3</div>
        				<div class="phheart-light-parent">
          					<img class="phheart-light-icon" alt="" src="assects/ph_heart-light.png">
          					
          					<div class="div2">2:11</div>
        				</div>
      			</div>
      			<div class="div9">
        				<div class="child">
        				</div>
        				<div class="dec-30-2023">Dec 30, 2023</div>
        				<div class="lovin-on-me-container">
          					<p class="all-the-best-songs">Lovin On me</p>
        				</div>
        				<img class="the-neighbourhood-the-neighb-icon" alt="" src="assects/The_Neighbourhood_-_The_Neighbourhood 4.png">
        				
        				<div class="lovin-on-me-parent">
          					<div class="lovin-on-me1">Lovin On me</div>
          					<div class="jack-harlow"> jack harlow</div>
        				</div>
        				<div class="div4">#4</div>
        				<div class="phheart-light-parent">
          					<img class="phheart-light-icon" alt="" src="assects/ph_heart-light.png">
          					
          					<div class="div2">2:18</div>
        				</div>
      			</div>
      			<div class="div12">
        				<div class="child">
        				</div>
        				<div class="dec-29-2023">Dec 29, 2023</div>
        				<div class="paint-the-town">Paint The Town Red</div>
        				<img class="the-neighbourhood-the-neighb-icon" alt="" src="assects/The_Neighbourhood_-_The_Neighbourhood 8.png">
        				
        				<div class="pain-the-town-red-parent">
          					<div class="pain-the-town">pain the town red</div>
          					<div class="doja-cat">Doja Cat</div>
        				</div>
        				<div class="div4">#5</div>
        				<div class="phheart-light-parent">
          					<img class="phheart-light-icon" alt="" src="assects/ph_heart-light.png">
          					
          					<div class="div2">3:51</div>
        				</div>
      			</div>
      			<div class="div15">
        				<div class="child">
        				</div>
        				<div class="dec-29-2023">may 27, 2023</div>
        				<div class="dance-the-nightfrom">Dance The Night(From Barbie Movie)</div>
        				<img class="the-neighbourhood-the-neighb-icon" alt="" src="assects/The_Neighbourhood_-_The_Neighbourhood 6.png">
        				
        				<div class="dancin-on-night-parent">
          					<div class="dancin-on-night">Dancin On Night</div>
          					<div class="dualipa">Dualipa</div>
        				</div>
        				<div class="div4">#6</div>
        				<div class="phheart-light-parent">
          					<img class="phheart-light-icon" alt="" src="assects/ph_heart-light.png">
          					
          					<div class="div2">2:56</div>
        				</div>
      			</div>
      			<div class="div18">
        				<div class="child">
        				</div>
        				<div class="dec-10-2023">Dec 10, 2023</div>
        				<div class="water">Water</div>
        				<img class="the-neighbourhood-the-neighb-icon" alt="" src="assects/The_Neighbourhood_-_The_Neighbourhood 7.png">
        				
        				<div class="water-parent">
          					<div class="water1">Water</div>
          					<div class="tyla">Tyla</div>
        				</div>
        				<div class="div4">#7</div>
        				<div class="phheart-light-parent">
          					<img class="phheart-light-icon" alt="" src="assects/ph_heart-light.png">
          					
          					<div class="div2">3:20</div>
        				</div>
      			</div>
    		</div>
    		<div class="popular-artists">
      			<div class="popular-artists-wrapper">
        				<b class="weekly-top-songs-container">
          					<span>Popular </span>
          					<span class="songs">Artists</span>
        				</b>
      			</div>
      			<div class="frame-parent16">
        				<div class="frame-parent17">
          					<div class="container">
            						<img class="icon" alt="" src="assects/69824 2.png">
            						
            						<div class="the-weekend">Eminiem</div>
          					</div>
          					<div class="container">
            						<img class="icon" alt="" src="assects/69824 3.png">
            						
            						<div class="the-weekend">The Weekend</div>
          					</div>
          					<div class="container">
            						<img class="icon" alt="" src="assects/69824 4.png">
            						
            						<div class="the-weekend">Adele</div>
          					</div>
          					<div class="container">
            						<img class="icon" alt="" src="assects/69824 5.png">
            						
            						<div class="the-weekend">Lana Del Ray</div>
          					</div>
          					<div class="container">
            						<img class="icon" alt="" src="assects/69824 6.png">
            						
            						<div class="the-weekend">Harry Styles</div>
          					</div>
          					<div class="container">
            						<img class="icon" alt="" src="assects/69824 7.png">
            						
            						<div class="the-weekend">Billie Eilish</div>
          					</div>
        				</div>
        				<div class="frame-parent18">
          					<div class="icbaseline-plus-frame">
            						<img class="icbaseline-plus-icon" alt="" src="assects/ic_baseline-plus.png">
            						
          					</div>
          					<div class="whatever-it-takes">View All</div>
        				</div>
      			</div>
    		</div>
    		
    		<div class="top-albums">
      			<div class="frame-group">
        				<div class="weekly-top-songs-wrapper">
          					<b class="weekly-top-songs-container">
            						<span>Top </span>
            						<span class="songs">Albums</span>
          					</b>
        				</div>
        				<div class="frame-container">
          					<div class="frame-div">
            						<div class="frame-wrapper19">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child10" alt="" src="assects/adelepng.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Adele 21</div>
                  									<div class="imagne-dragons">Adele</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper19">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child10" alt="" src="assects/drake.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Scorpion</div>
                  									<div class="imagne-dragons">Drake</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper19">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child10" alt="" src="assects/harry.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Harry’s House</div>
                  									<div class="imagne-dragons">Harry Styles</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper19">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child10" alt="" src="assects/lana.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Born To Die</div>
                  									<div class="imagne-dragons">Lana Del Ray</div>
                								</div>
              							</div>
            						</div>
            						<div class="frame-wrapper19">
              							<div class="frame-parent1">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child10" alt="" src="assects/weekend.png">
                  									
                								</div>
                								<div class="whatever-it-takes-parent">
                  									<div class="whatever-it-takes">Beauty Behind the...</div>
                  									<div class="imagne-dragons">The Weekend</div>
                								</div>
              							</div>
            						</div>
          					</div>
          					<div class="frame-parent6">
            						<div class="icbaseline-plus-wrapper">
              							<img class="icbaseline-plus-icon" alt="" src="assects/ic_baseline-plus.png">
              							
            						</div>
            						<div class="view-all">View All</div>
          					</div>
        				</div>
      			</div>
    		</div>
    		<div class="top-albums2">
      			<div class="frame-group">
        				<div class="weekly-top-songs-wrapper">
          					<b class="weekly-top-songs-container">
            						<span>Mood </span>
            						<span class="songs">Playlist</span>
          					</b>
        				</div>
        				<div class="frame-container">
          					<div class="frame-wrapper10">
            						<div class="frame-wrapper25">
              							<div class="frame-parent38">
                								<div class="rectangle-wrapper">
                  									<img class="frame-child10" alt="" src="assects/sad.png">
                  									
                								</div>
                								<div class="sad-playlist-wrapper">
                  									<div class="view-all">Sad Playlist</div>
                								</div>
              							</div>
            						</div>
          					</div>
          					<div class="frame-wrapper25">
            						<div class="frame-parent38">
              							<div class="rectangle-wrapper">
                								<img class="frame-child10" alt="" src="assects/chill.png">
                								
              							</div>
              							<div class="sad-playlist-wrapper">
                								<div class="view-all">Chill Playlist</div>
              							</div>
            						</div>
          					</div>
          					<div class="frame-wrapper25">
            						<div class="frame-parent38">
              							<div class="rectangle-wrapper">
                								<img class="frame-child10" alt="" src="assects/work.png">
                								
              							</div>
              							<div class="sad-playlist-wrapper">
                								<div class="view-all">Workout Playlist</div>
              							</div>
            						</div>
          					</div>
          					<div class="frame-wrapper25">
            						<div class="frame-parent38">
              							<div class="rectangle-wrapper">
                								<img class="frame-child10" alt="" src="assects/love.png">
                								
              							</div>
              							<div class="sad-playlist-wrapper">
                								<div class="view-all">Love Playlist</div>
              							</div>
            						</div>
          					</div>
          					<div class="frame-wrapper25">
            						<div class="frame-parent38">
              							<div class="rectangle-wrapper">
                								<img class="frame-child10" alt="" src="assects/happy.png">
                								
              							</div>
              							<div class="sad-playlist-wrapper">
                								<div class="view-all">Happy Playlist</div>
              							</div>
            						</div>
          					</div>
          					<div class="frame-parent6">
            						<div class="icbaseline-plus-wrapper">
              							<img class="icbaseline-plus-icon" alt="" src="assects/ic_baseline-plus.png">
              							
            						</div>
            						<div class="view-all">View All</div>
          					</div>
        				</div>
      			</div>
    		</div>
    		
    		<div class="footer">
      			<img class="background-icon" alt="" src="background.svg">
      			
      			<div class="frame-parent48">
        				<div class="rectangle-wrapper">
          					<div class="about">About</div>
        				</div>
        				<div class="melodies-is-a-website-that-has-wrapper">
          					<div class="melodies-is-a-container">
            						<span>Melodies is a website that has been created for over </span>
            						<span class="songs">5 year’s</span>
            						<span> now and it is one of the most famous music player website’s in the world. in this website you can listen and download songs for free. also of you want no limitation you can buy our </span>
            						<span class="login-button">premium pass’s.</span>
          					</div>
        				</div>
      			</div>
      			<div class="footer-child">
      			</div>
      			<div class="frame-parent49">
        				<div class="wrapper">
          					<div class="div22">
            						<div class="frame-parent50">
              							<div class="melodies-wrapper">
                								<b class="melodies">BEATNIK</b>
              							</div>
              							<div class="frame-child22">
              							</div>
            						</div>
            						<div class="frame-parent51">
              							<div class="melodies-wrapper">
                								<div class="melodies">Songs</div>
              							</div>
              							<div class="melodies-wrapper">
                								<div class="melodies">Radio</div>
              							</div>
              							<div class="melodies-wrapper">
                								<div class="melodies">Podcast</div>
              							</div>
            						</div>
          					</div>
        				</div>
        				<div class="div23">
          					<div class="frame-parent50">
            						<div class="melodies-wrapper">
              							<b class="melodies">Access</b>
            						</div>
            						<div class="frame-child22">
            						</div>
          					</div>
          					<div class="frame-parent51">
            						<div class="melodies-wrapper">
              							<div class="melodies">Explor</div>
            						</div>
            						<div class="melodies-wrapper">
              							<div class="melodies">Artists</div>
            						</div>
            						<div class="melodies-wrapper">
              							<div class="melodies">Playlists</div>
            						</div>
            						<div class="melodies-wrapper">
              							<div class="melodies">Albums</div>
            						</div>
            						<div class="melodies-wrapper">
              							<div class="melodies">Trending</div>
            						</div>
          					</div>
        				</div>
        				<div class="frame">
          					<div class="div23">
            						<div class="frame-parent50">
              							<div class="melodies-wrapper">
                								<b class="weekly-top-songs-container">Contact</b>
              							</div>
              							<div class="frame-child22">
              							</div>
            						</div>
            						<div class="frame-parent55">
              							<div class="melodies-wrapper">
                								<div class="melodies">About</div>
              							</div>
              							<div class="melodies-wrapper">
                								<div class="melodies">Policy</div>
              							</div>
              							<div class="melodies-wrapper">
                								<div class="melodies">Social Media</div>
              							</div>
              							<div class="melodies-wrapper">
                								<div class="melodies">Soppurt</div>
              							</div>
            						</div>
          					</div>
        				</div>
      			</div>
      			<div class="frame-parent56">
        				<div class="melodies-wrapper">
          					<div class="melodies1">BEATNIK</div>
        				</div>
        				<div class="streamlinecomputer-logo-faceb-parent">
          					<div class="streamlinecomputer-logo-faceb">
            						<img class="vector-icon" alt="" src="assects/Vector.png">
            						
          					</div>
          					<div class="lucideinstagram">
            						<img class="vector-icon" alt="" src="Group.svg">
            						
          					</div>
          					
        				</div>
      			</div>
    		</div>
    		<div class="sticky-part">
      			<div class="melodies-frame">
        				<b class="melodies2">BEATNIK</b>
      			</div>
      			<div class="menu-wrapper">
        				<div class="search-for-musics">Menu</div>
      			</div>
      			<div class="sticky-part-inner">
        				<div class="frame-wrapper34">
          					<div class="group-parent">
            						<img class="vector-icon" alt="" src="assects/Group1.png">
            						
            						<div class="home1">Home</div>
          					</div>
        				</div>
      			</div>
      			<div class="material-symbols-lightexplore-parent" id="frameContainer3">
					<img class="material-symbols-lightexplore-icon" alt="" src="discovery.png">
					<a href="BEATNIK_DISCOVRY.html" class="discover-link">
						<div class="discover">Discover</div>
					</a>
				</div>
				
				<div class="material-symbols-lightexplore-parent" id="frameContainer4">
					<img class="material-symbols-lightexplore-icon" alt="" src="album.png">
					<a href="BEATNIK_ ALBUM.html" class="album-link">
						<div class="recently-added">Albums</div>
					</a>
				</div>
				
				<div class="material-symbols-lightexplore-parent" id="frameContainer5">
					<img class="material-symbols-lightexplore-icon" alt="" src="artist.png">
					<a href="BEATNIK_ARTIST.html" class="artist-link">
						<div class="recently-added">Artists</div>
					</a>
				</div>
      			<div class="menu-wrapper">
        				<div class="search-for-musics">Library</div>
      			</div>
      			<div class="group-parent">
        				<img class="material-symbols-lightexplore-icon" alt="" src="recently played.png">
        				
        				<div class="recently-added">Recently Added</div>
      			</div>
      			<div class="group-parent">
        				<img class="material-symbols-lightexplore-icon" alt="" src="most played.png">
        				
        				<div class="recently-added">Most played</div>
      			</div>
      			<div class="menu-wrapper">
        				<div class="search-for-musics">Playlist and favorite</div>
      			</div>
      			<div class="group-parent">
        				<img class="material-symbols-lightexplore-icon" alt="" src="/assects/ph_heart-light.png">
        				
        				<div class="recently-added">Your favorites</div>
      			</div>
      			<div class="group-parent">
        				<img class="material-symbols-lightexplore-icon" alt="" src="playlist.png">
        				
        				<div class="recently-added">Your playlist</div>
      			</div>
      			<div class="subwayadd-playlist-parent">
        				<img class="material-symbols-lightexplore-icon" alt="" src="add playlist.png">
        				
        				<div class="recently-added">Add playlist</div>
      			</div>
      			<div class="menu-wrapper">
        				<div class="search-for-musics">general</div>
      			</div>
      			<div class="group-parent">
        				<img class="material-symbols-lightexplore-icon" alt="" src="setting.png">
        				
        				<div class="setting">Setting</div>
      			</div>
      			<div class="line-mdlog-out-parent">
        				<img class="material-symbols-lightexplore-icon" alt="" src="logout.png">
        				
        				<div class="recently-added">Logout</div>
      			</div>
    		</div>
  	</div>

	  <div class="music-player">
    <img id="album-cover" class="album-cover" src="assects/album/begging.png" alt="Album Cover">
    <div class="song-info">
        <div id="song-title">Beggin</div>
        <div id="song-artist">backbencher</div>
    </div>
    <div class="controls">
        <button onclick="shuffleSong()">🔀</button>
        <button onclick="prevSong()">⏮️</button>
        <button onclick="togglePlay()" id="play-pause">▶️</button>
        <button onclick="nextSong()">⏭️</button>
        <button onclick="repeatSong()">🔁</button>
    </div>
    <div class="progress-container">
        <span id="current-time">0:00</span>
        <input type="range" id="progress" value="0" step="0.1" min="0" max="100" onchange="seekAudio()">
        <span id="total-time">3:21</span>
    </div>
    <audio id="audio-player" ontimeupdate="updateProgress()"></audio>
</div>

  	
  	
  	<script>
    		var frameContainer3 = document.getElementById("frameContainer3");
    		if(frameContainer3) {
      			frameContainer3.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    		
    		var frameContainer4 = document.getElementById("frameContainer4");
    		if(frameContainer4) {
      			frameContainer4.addEventListener("click", function (e) {
        				// Add your code here
      			});
    		}
    		
    		var frameContainer5 = document.getElementById("frameContainer5");
    		if(frameContainer5) {
      			frameContainer5.addEventListener("click", function (e) {
        				// Add your code here
      			});
				  const audioPlayer = document.getElementById("audio-player");
const playPauseButton = document.getElementById("play-pause");
const progressBar = document.getElementById("progress");
const currentTimeElement = document.getElementById("current-time");
const totalTimeElement = document.getElementById("total-time");

let isPlaying = false;
let currentSongIndex = 0;

// Sample songs
const songs = [
    {
        title: "Moral of the Story",
        artist: "Ashe",
        cover: "assets/moral_of_the_story_cover.jpg",
        file: "assets/moral_of_the_story.mp3"
    },
    // Add more songs here
];

// Load the song based on index
function loadSong(index) {
    const song = songs[index];
    document.getElementById("song-title").textContent = song.title;
    document.getElementById("song-artist").textContent = song.artist;
    document.getElementById("album-cover").src = song.cover;
    audioPlayer.src = song.file;
}

// Play or pause the audio
function togglePlay() {
    if (isPlaying) {
        audioPlayer.pause();
        playPauseButton.innerHTML = "▶️"; // Play icon
    } else {
        audioPlayer.play();
        playPauseButton.innerHTML = "⏸"; // Pause icon
    }
    isPlaying = !isPlaying;
}

// Previous song
function prevSong() {
    currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
    loadSong(currentSongIndex);
    audioPlayer.play();
    isPlaying = true;
    playPauseButton.innerHTML = "⏸";
}

// Next song
function nextSong() {
    currentSongIndex = (currentSongIndex + 1) % songs.length;
    loadSong(currentSongIndex);
    audioPlayer.play();
    isPlaying = true;
    playPauseButton.innerHTML = "⏸";
}

// Update progress bar based on current time
function updateProgress() {
    progressBar.value = (audioPlayer.currentTime / audioPlayer.duration) * 100;
    currentTimeElement.textContent = formatTime(audioPlayer.currentTime);
    totalTimeElement.textContent = formatTime(audioPlayer.duration);
}

// Seek to the selected time in the song
function seekAudio() {
    audioPlayer.currentTime = (progressBar.value / 100) * audioPlayer.duration;
}

// Format time in minutes and seconds
function formatTime(time) {
    const minutes = Math.floor(time / 60);
    const seconds = Math.floor(time % 60);
    return `${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;
}

// Shuffle and repeat functionality (placeholders for now)
function shuffleSong() {
    console.log("Shuffle not implemented");
}

function repeatSong() {
    console.log("Repeat not implemented");
}
document.getElementById("frameContainer3").onclick = () => {
    window.location.href = "BEATNIK_DISCOVRY.html";
};
document.getElementById("frameContainer4").onclick = () => {
    window.location.href = "albums.html";
};
document.getElementById("frameContainer5").onclick = () => {
    window.location.href = "artists.html";
};

// Initialize with the first song
loadSong(currentSongIndex);

function playSong(songId) {
    // Get the clicked song container data
    const songAudio = document.getElementById(songId);
    const songContainer = songAudio.closest('.frame-wrapper');
    const songTitle = songContainer.querySelector('.whatever-it-takes').textContent;
    const songArtist = songContainer.querySelector('.imagne-dragons').textContent;
    const songCover = songContainer.querySelector('.frame-child').src;

    // Update the main music player with the selected song's information
    document.getElementById("song-title").textContent = songTitle;
    document.getElementById("song-artist").textContent = songArtist;
    document.getElementById("album-cover").src = songCover;
    document.getElementById("audio-player").src = songAudio.src;

    // Play the selected song
    const audioPlayer = document.getElementById("audio-player");
    audioPlayer.play();
    document.getElementById("play-pause").innerHTML = "⏸"; // Update play button to pause icon
    isPlaying = true;
}
</script>
</body>
</html>