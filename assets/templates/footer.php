
  
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

</body>

</html>

    </footer>
  </body>
</html>
