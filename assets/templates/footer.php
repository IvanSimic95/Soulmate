  </main>

  <script>    var mysrc = "https://tracking.buygoods.com/track/?a=6274&firstcookie=0"
      +"&tracking_redirect=&referrer="+encodeURIComponent(document.referrer)
      +"&sessid2="+ReadCookie('sessid2')+"&product=<?php echo $bgproduct; ?>&caller_url="+encodeURIComponent(window.location.href);
    if(typeof add_to_cart !== 'undefined')
    {
    mysrc = mysrc+'&add_to_cart='+add_to_cart;
    }

    var newScript = document.createElement('script');
    newScript.type = 'text/javascript';
    newScript.defer = true;
    newScript.src = mysrc;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(newScript, s);

    function ReadCookie(name){name += '='; var parts = document.cookie.split(/;s*/);for (var i = 0; i < parts.length; i++) {var part = parts[i]; if (part.indexOf(name) == 0) return part.substring(name.length)} return '';}
	</script>

  
<?php if ($startpixel == 1) { ?>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');

<?php 
if($_SESSION['PixelDATA'] == 1){
?>
fbq('init', '<?php echo $FBPixel; ?>', {
em: '<?php echo $_SESSION['Pixelemail']; ?>',        
fn: '<?php echo $_SESSION['Pixelfname']; ?>',    
ln: '<?php echo $_SESSION['Pixellname']; ?>',
bd: '<?php echo $_SESSION['Pixeldob']; ?>',
ge: '<?php echo $_SESSION['Pixelgender']; ?>',
external_id: '<?php echo $_SESSION['PixelID']; ?>'
});
fbq('track', 'PageView');
</script>

<?php 
}else{ 
?>
fbq('init', '<?php echo $FBPixel; ?>');
fbq('track', 'PageView');
</script>

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo $FBPixel; ?>&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<?php }} ?>

<?php echo $FBPurchasePixel; ?>

<?php echo $FBViewContent; ?>


    <footer>
	
      <div class="container">

      <div class="paragraph">
      Disclaimer: The information contained herein should not be used as a substitute for the advice of appropriately qualified and licensed person. According to the laws in force, I must state that my services are for entertainments purposes only. I have no liability and/or responsibility for any actions and/or decisions any buyer/client chooses to take or make based on his/her consultation. You  acknowledge that I am not a licensed psychologist, lawyer, or health care professional and my services do not replace the care of lawyers, psychologists, or other healthcare professionals. Tarot and numerology are in no way to be construed or substituted as psychological counseling or any other type of therapy or medical advice. I will at all times exercise my best professional efforts, skills, and care.</div>
   
  
</div>
      <div class="cr">
        <div class="container">
          &copy; <?php echo date("Y"); ?> Melissa. All Rights Reserved.
        </div>
      </div>
      <!-- Footer JS Files -->
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="/assets/js/scripts.js"></script>
	    <script src="/assets/js/lazyload.js"></script>
      <script src="/assets/js/jquery.popVideo.js"></script>
      <script>
  $('#video1').click(function () {
  $('#video1').popVideo({
    pauseOnClose: true,
    title: 'Video Testimonial',
    playOnOpen: true,
  }).open()
});

$('#video1play').click(function () {
  $('#video1').popVideo({
    pauseOnClose: true,
    title: 'Video Testimonial',
    playOnOpen: true,
  }).open()
});

$('#video2').click(function () {
  $('#video2').popVideo({
    pauseOnClose: true,
    title: 'Video Testimonial',
    playOnOpen: true,
  }).open()
});

$('#video2play').click(function () {
  $('#video2').popVideo({
    pauseOnClose: true,
    title: 'Video Testimonial',
    playOnOpen: true,
  }).open()
});

$('#video3').click(function () {
  $('#video3').popVideo({
    pauseOnClose: true,
    title: 'Video Testimonial',
    playOnOpen: true,
  }).open()
});

$('#video3play').click(function () {
  $('#video3').popVideo({
    pauseOnClose: true,
    title: 'Video Testimonial',
    playOnOpen: true,
  }).open()
});

</script>
    </footer>
  </body>
</html>
