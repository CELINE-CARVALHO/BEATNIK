document.addEventListener("DOMContentLoaded", function () {
  
    // Event listener for frameContainer3 (Discover Section)
    var frameContainer3 = document.getElementById("frameContainer3");
    if (frameContainer3) {
      frameContainer3.addEventListener("click", function () {
        // Smooth scroll to the Discover section within the page
        const discoverSection = document.getElementById("discoverSection");
        if (discoverSection) {
          discoverSection.scrollIntoView({ behavior: "smooth" });
        } else {
          // If discover section is not found, navigate to an external Discover page
          window.location.href = "/discover.html";
        }
      });
    }
    
    // Event listener for frameContainer4 (Albums Section)
    var frameContainer4 = document.getElementById("frameContainer4");
    if (frameContainer4) {
      frameContainer4.addEventListener("click", function () {
        // Smooth scroll to the Albums section within the page
        const albumsSection = document.getElementById("albumsSection");
        if (albumsSection) {
          albumsSection.scrollIntoView({ behavior: "smooth" });
        } else {
          // If albums section is not found, navigate to an external Albums page
          window.location.href = "/albums.html";
        }
      });
    }
    
    // Event listener for frameContainer5 (Artists Section)
    var frameContainer5 = document.getElementById("frameContainer5");
    if (frameContainer5) {
      frameContainer5.addEventListener("click", function () {
        // Smooth scroll to the Artists section within the page
        const artistsSection = document.getElementById("artistsSection");
        if (artistsSection) {
          artistsSection.scrollIntoView({ behavior: "smooth" });
        } else {
          // If artists section is not found, navigate to an external Artists page
          window.location.href = "/artists.html";
        }
      });
    }

    const audioPlayer = document.getElementById('audio-player');
const progressBar = document.getElementById('progress');
const songTitle = document.getElementById('song-title');
const songArtist = document.getElementById('song-artist');
const albumCover = document.getElementById('album-cover');
let isPlaying = false;

// Function to set and play selected song
function playSong(audioId, title, artist, cover) {
  const audioElement = document.getElementById(audioId);
  audioPlayer.src = audioElement.src; // Set source to the selected song's audio file
  songTitle.textContent = title;
  songArtist.textContent = artist;
  albumCover.src = cover;
  
  audioPlayer.play();
  isPlaying = true;
  updatePlayButton();
}

// Toggle play/pause
function togglePlay() {
  if (isPlaying) {
    audioPlayer.pause();
  } else {
    audioPlayer.play();
  }
  isPlaying = !isPlaying;
  updatePlayButton();
}

// Update play button icon
function updatePlayButton() {
  const playButton = document.querySelector('.controls button:nth-child(2)');
  playButton.innerHTML = isPlaying ? '&#10074;&#10074;' : '&#9654;';
}

// Update progress bar
function updateProgress() {
  const percentage = (audioPlayer.currentTime / audioPlayer.duration) * 100;
  progressBar.value = percentage || 0;
}

// Seek audio
function seekAudio() {
  const newTime = (progressBar.value / 100) * audioPlayer.duration;
  audioPlayer.currentTime = newTime;
}

function prevSong() {
  alert("Previous song functionality not implemented.");
}

function nextSong() {
  alert("Next song functionality not implemented.");
}

  
  });
  