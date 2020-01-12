<?php 
$currentPage = "R&B | Origin Story";
?>

<?php include "inc/timeline-html-top.inc"; ?>

<!-- Got this code from: https://youtu.be/0Sujt4ktkvU -->
 
  <div class="timeline">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('images/little-richard.jpg')" data-year="1940s">
          <div class="swiper-slide-content"><span class="timeline-year">1940s</span>
            <h1 class="timeline-title">Origin Story</h1>
            <p class="timeline-text">Rhythm & Blues, an offshoot of gospel, jazz and blues, begins to take shape as a genre. Commonly known as R&B, is a genre that was established in black communities. The name was created by Jerry Wexler. Rock and Roll was created from R&B. Artists like Little Richard and Ray Charles.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('images/temptations.jpg')" data-year="1950s">
          <div class="swiper-slide-content"><span class="timeline-year">1950s</span>
            <h1 class="timeline-title">Humble Beginnings</h1>
            <p class="timeline-text">During the '50s, R&B was dominated by vocalists like Ray Charles and Ruth Brown, as well as vocal groups like the Drifters and the Coasters. Eventually, R&B metamorphosed into soul, which was funkier and looser than the pile-driving rhythms of R&B. Soul came to describe a number of R&B-based music styles. From the bouncy, catchy acts at Motown to the horn-driven, gritty soul of Stax/Volt, there was an immense amount of diversity within soul. Motown R&B artist such as Sam Cooke and The Temptations were very popular.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('images/dianaross.jpg')" data-year="1960s">
          <div class="swiper-slide-content"><span class="timeline-year">1960s</span>
            <h1 class="timeline-title">Going Global</h1>
            <p class="timeline-text">During the first part of the '60s, soul music remained close to its R&B roots. However, musicians pushed the music in different directions; usually, different regions of America produced different kinds of soul. In urban centers like New York, Philadelphia, and Chicago, the music concentrated on vocal interplay and smooth productions. In Detroit, Motown concentrated on creating a pop-oriented sound that was informed equally by gospel, R&B, and rock & roll. In the South, the music became harder and tougher, relying on syncopated rhythms, raw vocals, and blaring horns. All of these styles formed soul, which ruled the black music charts throughout the '60s and also frequently crossed over into the pop charts. Aretha Franklin and Diana Ross were popular in this decade.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('images/donnaSummer.jpg')" data-year="1970s">
          <div class="swiper-slide-content"><span class="timeline-year">1970s</span>
            <h1 class="timeline-title">Progression</h1>
            <p class="timeline-text">During the '60s and '70s, soul began to splinter apart -- artists like James Brown and Sly Stone developed funk; Kenny Gamble and Leon Huff initiated Philly soul with the O'Jays and Harold Melvin & the Blue Notes; and later in the decade, danceable R&B became a mass phenomenon with the brief disco fad. Whitney Houston and Donna Summer were also well known at this time.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('images/prince.jpg')" data-year="1980s">
          <div class="swiper-slide-content"><span class="timeline-year">1980s</span>
            <h1 class="timeline-title">Maturing</h1>
            <p class="timeline-text">During the '80s and '90s, the polished, less earthy sound of urban and quiet storm ruled the airwaves, but even then, R&B began adding stylistic components of hip-hop until -- by the end of the millennium -- there were hundreds of artists who featured both rapping and singing on their records. Michael Jackson and Prince dominated the 80s.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('images/aaliyah.png')" data-year="1990s">
          <div class="swiper-slide-content"><span class="timeline-year">1990s</span>
            <h1 class="timeline-title">Golden Age</h1>
            <p class="timeline-text">The continuiation of the Hip Hop and R&B mesh continued. Mariah Carey, Babyface, Mint Condition, Xscape, SWV, Brandy, Boys 2 Men, Sade, Jodeci, Janet Jackson, TLC, Aaliyah, Tamia were a few that blessed our ears and sparked my conception.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url('images/ty$ign.jpg')" data-year="2010s">
          <div class="swiper-slide-content"><span class="timeline-year">2010s</span>
            <h1 class="timeline-title">Fizzling Out</h1>
            <p class="timeline-text">Currently, hip hop, rap, and pop have dominated the radio game. Popular R&B artists are now youngins. The introduction to the digital world(soundcloud) played a role in the genre's slow death. The genre was slow to adapt in juxtaposition to rap. Now R&B sounds can't go without having a rapper in the mix. Some of the older heads in the game are Usher, Miguel, John Legend, Ciara, and Trey Songz 😍. A lot of youngsters are populating the genre, reviving it such as Bruno Mars, Frank Ocean, Ella Mai, Daniel Caesar, TyDollaSign H.E.R, SZA, Khalid, Kehlani, Normani, Jhené Aiko, and Summer Walker. </p>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
<script>
    $(function(){
   
var timelineSwiper = new Swiper ('.timeline .swiper-container', {
  direction: 'vertical',
  loop: false,
  speed: 1600,
  pagination: '.swiper-pagination',
  paginationBulletRender: function (swiper, index, className) {
    var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
    return '<span class="' + className + '">' + year + '</span>';
  },
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  breakpoints: {
    768: {
      direction: 'horizontal',
    }
  }
});    
    
             
    });
</script>

<!-- all information recieved from this following websites 
1. https://prezi.com/kqwfj49mlpng/the-evolution-of-rb-music/
2.https://www.allmusic.com/genre/r-b-ma0000002809
 -->

<?php include "inc/footer.inc"; ?>
<?php include "inc/scripts.inc"; ?>

</body>
</html>